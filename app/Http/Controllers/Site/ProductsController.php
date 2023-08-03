<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Funcoes\PluginController;
use App\Http\Controllers\SiteController;
use Illuminate\Http\Request;

class ProductsController extends SiteController
{
    public function index(Request $request, $uri = '')
    {
        //?App raddar
        $plugin = new PluginController();

        //Products
        $plugin->setId(SiteController::PRODUCTS);
        $page = $plugin->obterCampos();

        //Breadcrumb
        $plugin->addBreadCrumb(['home', route('home')]);
        $plugin->addBreadCrumb(['produtos', route('produtos')]);

        //*Filtrer
        $filtro = [];

        //SEO
        $this->gerarSeo(SiteController::PRODUCTS);

        if (!empty($uri)) {
            $category = $plugin->obterInterna($uri, SiteController::PRODUCTS_CATEGORIES);
            if (!$category) return redirect()->route('produtos');
            $filtro['category'] = $category['id'];
            $currentCategory = $category['id'];
            $titleCurrentCategory = $category['titulo'];

            // breadcrumb
            $plugin->addBreadCrumb([$category['titulo'], route('produtos', ['categoria' => $category['uri']])]);
            $this->setTitle($category['titulo'], 'prepend');
        }
        //Category
        $plugin->setId(SiteController::PRODUCTS_CATEGORIES);
        $productCategories = $plugin->obterInternas([], true, 0, false, 10, 0, ['titulo', 'ASC']);

        //*Search
        if (!empty($request->busca)) {
            $busca = $request->busca;
            $filtro['busca'] = str_replace(' ', '%', $busca);
            // $titulo = 'Busca por: ' . $busca;
        }
        //Current Page
        $currentPage = !empty($request->page) ? (int)$request->page : 1;

        //Inner
        $plugin->setId(SiteController::PRODUCTS);
        $products = $plugin->obterInternas($filtro, true, 0, true, 8, $currentPage, ['titulo', 'ASC']);

        //*Extra content
        #Home
        $plugin->setId(SiteController::HOME);
        $home = $plugin->obterCampos();

        return view('layout.pages.products.content.index', [
            'page' => $page,
            'products' => $products,
            'category' => !empty($category) ? $category : [],
            'productCategories' => $productCategories,
            'home' => $home,
            'currentCategory' => $currentCategory ?? '',
            'busca' => $busca ?? '',
            'searchProducts' => !empty($request->busca) ? $request->busca : '',
            'titleCurrentCategory' => $titleCurrentCategory ?? 'Todas os Produtos',
        ]);
    }

    public function interna($uri = '')
    {
        //?App raddar
        $plugin = new PluginController();

        //Breadcrumb
        $plugin->addBreadCrumb(['home', route('home')]);
        $plugin->addBreadCrumb(['produtos', route('produtos')]);

        if (empty($uri)) {
            return redirect()->route('produtos');
        }

        $produto = $plugin->obterInterna($uri, SiteController::PRODUCTS);
        if (empty($produto)) return redirect()->route('produtos');

        //*Filter
        $filtro = [];

        if (!empty($produto['category'])) {
            $category = $plugin->obterInterna($produto['category'], SiteController::PRODUCTS_CATEGORIES, 'id');
            if (!empty($category)) {
                $plugin->addBreadCrumb([$category['titulo'], route('produtos', ['categoria' => $category['uri']])]);
                $filtro['category'] = $category['id'];
            }
            $currentCategory = $category['id'];
        }

        if (empty($produto['gallery'])) $produto['gallery'] = [];
        if (!empty($produto['image'])) {
            array_unshift($produto['gallery'], $produto['image']);
        }

        //Products
        $plugin->setId(SiteController::PRODUCTS);
        $page = $plugin->obterCampos();

        //Relations
        $plugin->setId(SiteController::PRODUCTS);
        $productsRelations = $plugin->obterInternas([], true, 10, false, 10, 0, ['titulo', 'ASC'], true, $produto['id']);

        //Inner
        $plugin->setId(SiteController::PRODUCTS);
        $produtos = $plugin->obterInternas($filtro, true, 0, true, 30, ['titulo', 'ASC']);

        //SEO
        $this->gerarSeo($produto['id']);

        //Breadcrumb
        $plugin->addBreadCrumb([$produto['titulo'], route('produto-interna', ['uri' => $produto['uri']])]);

        //*Extra content
        $plugin->setId(SiteController::HOME);
        $home = $plugin->obterCampos();

        return view('layout.pages.products.content.inner', [
            'produto' => $produto,
            'productsRelations' => $productsRelations,
            'page' => $page,
            'home' => $home,
            'categoria' => $categoria ?? [],
            'currentCategory' => $currentCategory ?? '',
            'produtos' => $produtos,
            'subcategoria' => $subcategoria ?? [],
        ]);
    }
}
