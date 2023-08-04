<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Funcoes\PluginController;
use App\Http\Controllers\SiteController;
use Illuminate\Http\Request;

class BlogController extends SiteController
{

    private $blogManager;
    public function setBlogManager(BlogManager $blogManager) {
        $this->blogManager = $blogManager;
    }

    public function index(Request $request, $uri = '') {
        $this->setBlogManager(new BlogManager);

        $page = $this->blogManager->getPageBlog();
        $this->blogManager->generateSeoAndBreadcrumb();
        list($filtro, $currentCategory, $currentTitle) = $this->blogManager->getFilter($uri, $request);
        $blogCategories = $this->blogManager->getBlogCategories();

        $currentPage = !empty($request->page) ? (int)$request->page : 1;
        $posts = $this->blogManager->getPostsInternal($filtro, $currentPage);

        return view('layout.pages.blog.content.index', [
            'page' => $page,
            'posts' => $posts,
            'category' => $category ?? [],
            'blogCategories' => $blogCategories,
            'currentCategory' => $currentCategory ?? '',
            'currentTitle' => $currentTitle ?? 'Todas as notícias',
            'searchBlog' => !empty($request->busca) ? $request->busca : '',
        ]);
    }

    public function inner($uri = '') {
        $this->setBlogManager(new BlogManager);

        list($post, $category) = $this->blogManager->getPostInternal($uri);
        $page = $this->blogManager->getPageBlog();
        $blogCategories = $this->blogManager->getBlogCategories();

        $this->blogManager->generateSeoAndBreadcrumbInner($post);
        $this->blogManager->getFilterInner($post);

        #Extra content
        $postsRecent = $this->blogManager->getPostsRecent($post);
        $blogRelation = $this->blogManager->getPostsRelated($post);

        return view('layout.pages.blog.content.inner', [
            'post' => $post,
            'page' => $page,
            'blogCategories' => $blogCategories,
            'postsRecent' => $postsRecent,
            'blogRelation' => $blogRelation,
            'category' => $category ?? [],
            'currentCategory' => $currentCategory ?? ''
        ]);
    }
}

class BlogManager extends SiteController
{

    #App Raddar
    private $plugin;
    public function __construct() {
        $this->plugin = new PluginController();
    }

    #Blog
    public function getPageBlog() {
        $this->plugin->setId(SiteController::BLOG);
        return $this->plugin->obterCampos();
    }
    #Posts
    public function getPostsInternal($filtro, $currentPage) {
        $this->plugin->setId(SiteController::BLOG);
        return $this->plugin->obterInternas($filtro, true, 0, true, 4, $currentPage);
    }
    #Post
    public function getPostInternal($uri) {
        if (empty($uri)) {
            return redirect()->route('blog');
        }

        $post = $this->plugin->obterInterna($uri, SiteController::BLOG);
        if (empty($post)) {
            return redirect()->route('blog');
        }
        if (!empty($post['category'])) {
            $category = $this->plugin->obterInterna($post['category'],SiteController::BLOG_CATEGORIES, 'id');
        }

        return [$post, $category];
    }
    #Categories
    public function getBlogCategories() {
        $this->plugin->setId(SiteController::BLOG_CATEGORIES);
        return $this->plugin->obterInternas([], true, 0, false, 10, 0, ['titulo', 'ASC']);
    }

    #Filter
    public function getFilter($uri, $request) {
        $filtro = [];
        $currentCategory = null;
        $currentTitle = null;

        if(!empty($uri)) {
            $category = $this->plugin->obterInterna($uri, SiteController::BLOG_CATEGORIES);
            $filtro['category'] = $category['conteudo_id'];
            $currentCategory = $category['id'];
            $currentTitle = $category['titulo'];

            #Breadcrumb
            $this->plugin->addBreadCrumb([$category['titulo'], route('blog-categoria', ['uri' =>$category['uri']])]);
            $this->setTitle($category['titulo'], 'prepend');
        }

        #Search
        if (!empty($request->busca)) {
            $search = $request->busca;
            $filtro['busca'] = str_replace(' ', '%', $search);
            $currentTitle = 'Busca por: ' . $search;
        }

        return [$filtro, $currentCategory, $currentTitle];
    }
    public function getFilterInner($post) {
        $filtro = [];
        $currentCategory = null;

        if (!empty($post['category'])) {
            $category = $this->plugin->obterInterna($post['category'], SiteController::BLOG_CATEGORIES, 'id');

            if (!empty($category)) {
                $currentCategory = $category['id'];
                $this->plugin->addBreadCrumb([$category['titulo'], route('blog', ['category' => $category['id']])]);
                $filtro['category'] = $category['id'];
            }
        }
        $this->plugin->addBreadCrumb([$post['titulo'], 'UTF-8', route('blog-interna', ['uri' => $post['uri']])]);

        return [$filtro, $currentCategory];
    }

    #SEO and Breadcrumb
    public function generateSeoAndBreadcrumb() {
        $this->gerarSeo(SiteController::BLOG);
        $this->plugin->addBreadCrumb(['home', route('home')]);
        $this->plugin->addBreadCrumb(['blog', route('blog')]);
    }
    public function generateSeoAndBreadcrumbInner($post) {
        $this->gerarSeo($post['id']);
        $this->plugin->addBreadCrumb(['home', route('home')]);
        $this->plugin->addBreadCrumb(['blog', route('blog')]);
    }

    #Recent Posts
    public function getPostsRecent($post) {
        $this->plugin->setId(SiteController::BLOG);
        $this->plugin->obterInternas([], true, 3, false, 3, 0, ['titulo', 'ASC'], true, $post['id']);
    }
    #Related Posts
    public function getPostsRelated($post) {
        $this->plugin->setId(SiteController::BLOG);
        return $this->plugin->obterInternas([], true, 3, false, 9, 0, ['titulo', 'ASC'], true, $post['id']);
    }
}
