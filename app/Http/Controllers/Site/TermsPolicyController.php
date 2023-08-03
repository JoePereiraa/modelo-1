<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\SiteController;
use App\Http\Controllers\Funcoes\PluginController;

class PolicyTermsController extends SiteController
{
    #App Raddar
    private $plugin;
    public function setPlugin(PluginController $plugin) {
        $this->plugin = $plugin;
    }

    public function policy() {
        $this->setPlugin(new PluginController());

        $page = $this->getPageFields(SiteController::POLICY);
        $pageTitle = "Política de Privacidade";

        if(empty($page['text'])){
            return redirect()->route('home');
        }

        $this->gerarSeo(SiteController::POLICY);
        $this->addBreadcrumb(['home', route('home')]);
        $this->addBreadcrumb(['política de privacidade']);

        return view('layout.extras.terms-policy', [
            'page' => $page,
            'pageTitle' => $pageTitle
        ]);
    }

    public function terms() {
        $this->setPlugin(new PluginController());

        $page = $this->getPageFields(SiteController::TERMS);
        $pageTitle = "Termos de Uso";

        if(empty($page['text'])){
            return redirect()->route('home');
        }

        $this->gerarSeo(SiteController::TERMS);
        $this->addBreadcrumb(['home', route('home')]);
        $this->addBreadcrumb(['termos de uso', route('termos-de-uso')]);

        return view('layout.extras.terms-policy', [
            'page' => $page,
            'pageTitle' => $pageTitle
        ]);
    }

    #Page Fields
    private function getPageFields($id) {
        $this->plugin->setId($id);
        return $this->plugin->obterCampos();
    }
    #Breadcrumb
    private function addBreadcrumb($breadcrumb) {
        $this->plugin->addBreadCrumb($breadcrumb);
    }
}

