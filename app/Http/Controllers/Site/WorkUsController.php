<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Funcoes\PluginController;
use App\Http\Controllers\SiteController;

class WorkUsController extends SiteController
{
    #App Raddar
    private $plugin;
    public function setPlugin(PluginController $plugin) {
        $this->plugin = $plugin;
    }

    public function index() {
        $this->setPlugin(new PluginController);

        $page = $this->getPageWork();
        $work = $this->getPageWork();
        $vacancys = $this->getInternalWork();

        #SEO | Breadcrumb
        $this->gerarSeo(SiteController::WORK);
        $this->plugin->addBreadCrumb(['home', route('home')]);
        $this->plugin->addBreadCrumb(['trabalhe conosco', route('trabalhe-conosco')]);

        return view('layout.pages.work-us.index', [
            'page' => $page,
            'work' => $work,
            'vacancys' => $vacancys,
        ]);
    }

    #Work Page
    public function getPageWork() {
        $this->plugin->setId(SiteController::WORK);
        return $this->plugin->obterCampos();
    }
    #Vacancys
    public function getInternalWork() {
        $this->plugin->setId(SiteController::WORK);
        return $this->plugin->obterInternas([], true);
    }
}
