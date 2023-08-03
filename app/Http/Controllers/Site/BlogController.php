<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Funcoes\PluginController;
use App\Http\Controllers\SiteController;
use Illuminate\Http\Request;

class BlogController extends SiteController
{
    public function index(Request $request, $uri = '')
    {
        //?App Raddar
        $plugin = new PluginController();

        //Blog Page
        $plugin->setId(SiteController::BLOG);
        $page = $plugin->obterCampos();

        //*Filter
        $filtro = [];

        if(!empty($uri)) {
            $category = $plugin->obterInterna($uri, SiteController::BLOG_CATEGORIES);
            $filtro['category'] = $category['conteudo_id'];
            $currentCategory = $category['id'];
            $titleCurrentCategory = $category['titulo'];
        }

        //Blog Categories
        $plugin->setId(SiteController::BLOG_CATEGORIES);
        $blogCategories = $plugin->obterInternas([], true, 0, false, 10, 0, ['titulo', 'ASC']);

        //*Search
        if (!empty($request->busca)) {
            $search = $request->busca;
            $filtro['busca'] = str_replace(' ', '%', $search);
            $titleCurrentCategory = 'Busca por: ' . $search;
        }

        //Current Page
        $currentPage = !empty($request->page) ? (int)$request->page : 1;

        //Blog Inner
        $plugin->setId(SiteController::BLOG);
        $posts = $plugin->obterInternas($filtro, true, 0, true, 4, $currentPage);

        //SEO
        $this->gerarSeo(SiteController::BLOG);

        //BreadCrumb
        $plugin->addBreadCrumb(['home', route('home')]);
        $plugin->addBreadCrumb(['blog', route('blog')]);

            if (!empty($category['titulo'])) {
                $plugin->addBreadCrumb(
                    [
                        $category['titulo'],
                        route('blog-categoria', ['uri' =>$category['uri']])
                    ]
                );
                $this->setTitle($category['titulo'], 'prepend');
            }

        return view('layout.pages.blog.content.index', [
            'page' => $page,
            'posts' => $posts,
            'category' => !empty($category) ? $category : [],
            'blogCategories' => $blogCategories,
            'currentCategory' => $currentCategory ?? '',
            'titleCurrentCategory' => $titleCurrentCategory ?? 'Todas as notícias',
            'searchBlog' => !empty($request->busca) ? $request->busca : '',
        ]);
    }

    public function interna($uri = '')
    {
        //?App Raddar
        $plugin = new PluginController();

        #Redirect
        if (empty($uri)) {
            return redirect()->route('blog');
        }

        #Post
        $post = $plugin->obterInterna($uri, SiteController::BLOG);
        if (empty($post)) {
            return redirect()->route('blog');
        }
        if (!empty($post['category'])) {
            $category = $plugin->obterInterna(
                $post['category'],
                SiteController::BLOG_CATEGORIES,
                'id'
            );
        }

        //*Filter
        $filtro = [];
            if (!empty($post['category'])) {
                $category = $plugin->obterInterna($post['category'], SiteController::BLOG_CATEGORIES, 'id');

                if (!empty($category)) {
                    $currentCategory = $category['id'];
                    $plugin->addBreadCrumb([
                        $category['titulo'],
                        route('blog', ['category' => $category['id']])
                    ]);
                    $filtro['category'] = $category['id'];
                }
            }
        #Blog Page
        $plugin->setId(SiteController::BLOG);
        $page = $plugin->obterCampos();

        #Blog Categories
        $plugin->setId(SiteController::BLOG_CATEGORIES);
        $blogCategories = $plugin->obterInternas([], true, 0, false, 10, 0, ['titulo', 'ASC']);

        #SEO
        $this->gerarSeo($post['id']);

        #BreadrCrumb
        $plugin->addBreadCrumb(['home', route('home')]);
        $plugin->addBreadCrumb(['blog', route('blog')]);
        $plugin->addBreadCrumb([
            mb_strtolower($post['titulo'], 'UTF-8'),
            route('blog-interna', ['uri' => $post['uri']])
        ]);

        //*Extra Content
        #Posts Recent
        $plugin->setId(SiteController::BLOG);
        $blogRecent = $plugin->obterInternas([], true, 3, false, 3, 0, ['titulo', 'ASC'], true, $post['id']);
        #Posts Relations
        $plugin->setId(SiteController::BLOG);
        $blogRelation = $plugin->obterInternas([], true, 3, false, 9, 0, ['titulo', 'ASC'], true, $post['id']);

        return view('layout.pages.blog.content.inner', [
            'post' => $post,
            'page' => $page,
            'blogCategories' => $blogCategories,
            'blogRecent' => $blogRecent,
            'blogRelation' => $blogRelation,
            'category' => $category ?? [],
            'currentCategory' => $currentCategory ?? ''
        ]);
    }
}
