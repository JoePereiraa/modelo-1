<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Funcoes\PluginController;
use App\Http\Controllers\SiteController;
use Illuminate\Http\Request;

class ProductsController extends SiteController
{
    private $productsManager;
    public function setProductsManager(ProductsManager $productsManager){
        $this->productsManager = $productsManager;
    }
    public function index(Request $request, $uri = '') {
        $this->setProductsManager(new ProductsManager);

        $page = $this->productsManager->getPageProduct();
        $this->productsManager->generateSeoAndBreadcrumb();

        list($productFilter, $currentCategory, $currentTitle) = $this->productsManager->getFilter($uri, $request);

        $currentPage = !empty($request->page) ? (int)$request->page : 1;
        $productCategories = $this->productsManager->getProductCategories();
        $products = $this->productsManager->getInternalProducts($productFilter, $currentPage);

        return view('layout.pages.products.content.index', [
            'page' => $page,
            'products' => $products,
            'category' => $category ?? [],
            'productCategories' => $productCategories,
            'currentCategory' => $currentCategory ?? '',
            'currentTitle' => $currentTitle ?? 'Todos os Produtos',
        ]);
    }

    public function inner($uri = '') {
        $this->setProductsManager(new ProductsManager);

        list($product, $category) = $this->productsManager->getProductInternal($uri);
        $page = $this->productsManager->getPageProduct();
        $productCategories = $this->productsManager->getProductCategories();
        $products = $this->productsManager->getInternalProducts([], false);

        $this->productsManager->generateSeoAndBreadcrumbInner($product);
        $this->productsManager->getFilterInner($product);

        #Extra content
        $productsRelations = $this->productsManager->relatetProducts($product);

        return view('layout.pages.products.content.inner', [
            'product' => $product,
            'page' => $page,
            'products' => $products,
            'productCategories' => $productCategories,
            'category' => $category ?? [],
            'currentCategory' => $currentCategory ?? '',
            'subcategoria' => $subcategoria ?? [],
            'productsRelations' => $productsRelations,
        ]);
    }
}
class ProductsManager extends SiteController
{
    private $plugin;
    public function __construct() {
        $this->plugin = new PluginController();
    }

    #Product page
    public function getPageProduct() {
        $this->plugin->setId(SiteController::PRODUCTS);
        return $this->plugin->obterCampos();
    }

    #Products
    public function getInternalProducts($productFilter, $currentPage) {
        $this->plugin->setId(SiteController::PRODUCTS);
        return $this->plugin->obterInternas($productFilter, true, 0, true, 8, $currentPage, ['titulo', 'ASC']);
    }

    #Product
    public function getProductInternal($uri) {
        if (empty($uri)) return redirect()->route('produtos');

        $product = $this->plugin->obterInterna($uri, SiteController::PRODUCTS);
        if (empty($product)) return redirect()->route('produtos');

        if (!empty($product['category'])) {
            $category = $this->plugin->obterInterna($product['category'],SiteController::PRODUCTS_CATEGORIES, 'id');
        }

        return [$product, $category];
    }

    #Categories
    public function getProductCategories() {
        $this->plugin->setId(SiteController::PRODUCTS_CATEGORIES);
        return $this->plugin->obterInternas([], true, 0, false, 10, 0, ['titulo', 'ASC']);
    }

    #Filter
    public function getFilter($uri, $request) {
        $productFilter = [];
        $currentCategory = null;
        $currentTitle = null;

        if (!empty($uri)) {
            $category = $this->plugin->obterInterna($uri, SiteController::PRODUCTS_CATEGORIES);
            if (!$category) return redirect()->route('produtos');
            $productFilter['category'] = $category['id'];
            $currentCategory = $category['id'];
            $currentTitle = $category['titulo'];

            #Breadcrumb
            $this->plugin->addBreadCrumb([$category['titulo'], route('produtos', ['categoria' => $category['uri']])]);
            $this->setTitle($category['titulo'], 'prepend');
        }
        #Search
        if (!empty($request->busca)) {
            $search = $request->busca;
            $productFilter['busca'] = str_replace(' ', '%', $search);
            $currentTitle = 'Busca por: ' . $search;
        }

        return [$productFilter, $currentCategory, $currentTitle];
    }
    public function getFilterInner($product) {
        $productFilter = [];
        $currentCategory = null;

        if (!empty($product['category'])) {
            $category = $this->plugin->obterInterna($product['category'], SiteController::PRODUCTS_CATEGORIES, 'id');
            if (!empty($category)) {
                $this->plugin->addBreadCrumb([$category['titulo'], route('produtos', ['categoria' => $category['uri']])]);
                $productFilter['category'] = $category['id'];
                $currentCategory = $category['id'];
            }
        }
        $this->plugin->addBreadCrumb([$product['titulo'], 'UTF-8', route('produto-interna', ['uri' => $product['uri']])]);

        return [$productFilter, $currentCategory];
    }

    #SEO and Breadcrumb
    public function generateSeoAndBreadcrumb() {
        $this->gerarSeo(SiteController::PRODUCTS);
        $this->plugin->addBreadCrumb(['home', route('home')]);
        $this->plugin->addBreadCrumb(['produtos', route('produtos')]);
    }
    public function generateSeoAndBreadcrumbInner($product) {
        $this->gerarSeo($product['id']);
        $this->plugin->addBreadCrumb(['home', route('home')]);
        $this->plugin->addBreadCrumb(['produtos', route('produtos')]);
    }

    #Related
    public function relatetProducts($product) {
        $this->plugin->setId(SiteController::PRODUCTS);
        return $this->plugin->obterInternas([], true, 10, false, 10, 0, ['titulo', 'ASC'], true, $product['id']);
    }
}
