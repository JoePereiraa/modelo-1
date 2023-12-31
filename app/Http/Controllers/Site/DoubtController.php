<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Funcoes\PluginController;
use App\Http\Controllers\SiteController;
use Illuminate\Http\Request;

class DoubtController extends SiteController
{
    private $doubtManager;
    public function setdoubtManager(DoubtManager $doubtManager) {
        $this->doubtManager = $doubtManager;
    }

    public function index(Request $request, $category = '') {
        $this->setdoubtManager(new DoubtManager);

        $page = $this->doubtManager->getPageDoubt();
        $this->doubtManager->generateSeoAndBreadcrumb();

        list($filtro, $currentCategory, $currentTitle) = $this->doubtManager->getFilter($category, $request);
        $doubtCategories = $this->doubtManager->getDoubtCategories();
        $doubts = $this->doubtManager->getDoubtsInternal($filtro);

        #Extra content
        $home = $this->doubtManager->getHome();

        return view('layout.pages.doubt.content.index', [
            'page' => $page,
            'doubts' => $doubts,
            'category' => $category ?? [],
            'doubtCategories' => $doubtCategories,
            'currentCategory' => $currentCategory,
            'currentTitle' => $currentTitle ?? 'Duvidas Gerais',
            'home' => $home
        ]);
    }

}
class DoubtManager extends SiteController
{
    private $plugin;
    public function __construct() {
        $this->plugin = new PluginController();
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

    #Categories
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
