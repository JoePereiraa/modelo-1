<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Funcoes\PluginController;
use App\Http\Controllers\SiteController;
use Illuminate\Http\Request;

class DoubtController extends SiteController
{
    #App Raddar
    private $plugin;
    public function setPlugin(PluginController $plugin) {
        $this->plugin = $plugin;
    }

    public function index(Request $request, $category = '') {

        $this->setplugin(new PluginController);

        $page = $this->getPageDoubt();
        $this->generateSeoAndBreadcrumb();

        list($filtro, $currentCategory, $currentTitle) = $this->getFilter($category, $request);
        $doubtCategory = $this->getDoubtCategories();
        $doubts = $this->getDoubtsInternal($filtro);

        #Extra content
        $home = $this->getHome();

        return view('layout.pages.doubt.content.index', [
            'page' => $page,
            'doubts' => $doubts,
            'category' => $category ?? [],
            'doubtCategory' => $doubtCategory,
            'currentCategory' => $currentCategory,
            'currentTitle' => $currentTitle ?? 'Duvidas Gerais',
            'home' => $home
        ]);
    }

    #Doubt Page
    public function getPageDoubt() {
        $this->plugin->setId(SiteController::DOUBT);
        return $this->plugin->obterCampos();
    }

    #Doubts
    public function getDoubtsInternal ($filtro) {
        $this->plugin->setId(SiteController::DOUBT);
        return $this->plugin->obterInternas($filtro, true, 0, false, 10, 0, ['ordem', 'ASC']);
    }

    #Doubt Categories
    public function getDoubtCategories() {
        $this->plugin->setId(SiteController::DOUBT_CATEGORIES);
        return $this->plugin->obterInternas([], true, 0, false, 10, 0, ['titulo', 'ASC']);
    }

    #Filter
    public function getFilter($category, $request) {
        $filtro = [];
        $currentCategory = null;
        $currentTitle = null;

        if (!empty($category)) {
            $category = $this->plugin->obterInterna($category, SiteController::DOUBT_CATEGORIES);
            if (!$category) return redirect()->route('duvidas');
            $filtro['category'] = $category['conteudo_id'];
            $currentCategory = $category['id'];
            $currentTitle = $category['titulo'];

            #Breadcrumb
            $this->plugin->addBreadCrumb([$category['titulo'], route('duvidas', ['uri' => $category['uri']])]);
            $this->setTitle($category['titulo'], 'prepend');
        }

        if (!empty($request->busca)) {
            $search = $request->busca;
            $filtro['busca'] = str_replace(' ', '%', $search);
            $currentTitle = 'Busca por: ' . $search;
        }

        return [$filtro, $currentCategory, $currentTitle];
    }

    #SEO and Breadcrumb
    public function generateSeoAndBreadcrumb(){
        #SEO | Breadcrumb
        $this->gerarSeo(SiteController::DOUBT);
        $this->plugin->addBreadCrumb(['home', route('home')]);
        $this->plugin->addBreadCrumb(['dúvidas', route('duvidas')]);
    }

    #Home
    public function getHome() {
        $this->plugin->setId(SiteController::HOME);
        return $this->plugin->obterCampos();
    }
}
