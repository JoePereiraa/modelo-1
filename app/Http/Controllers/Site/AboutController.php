<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Funcoes\PluginController;
use App\Http\Controllers\SiteController;

class AboutController extends SiteController
{
    private $plugin;
    public function setPlugin(PluginController $plugin) {
        $this->plugin = $plugin;
    }

    public function index() {
        $this->setPlugin(new PluginController);

        $page = $this->getPageAbout();
        $about = $this->getPageAbout();

        #SEO | Breadcrumb
        $this->gerarSeo(SiteController::ABOUT);
        $this->plugin->addBreadCrumb(['home', route('home')]);
        $this->plugin->addBreadCrumb(['sobre nos', route('sobre-nos')]);

        return view('layout.pages.about.content.index', [
            'page' => $page,
            'about' => $about
        ]);
    }

    #About Page
    public function getPageAbout() {
        $this->plugin->setId(SiteController::ABOUT);
        return $this->plugin->obterCampos();
    }
}
