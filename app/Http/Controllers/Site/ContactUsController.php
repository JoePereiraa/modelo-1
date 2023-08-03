<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Funcoes\PluginController;
use App\Http\Controllers\SiteController;

class ContactUsController extends SiteController
{
    private $plugin;
    public function setPlugin(PluginController $plugin) {
        $this->plugin = $plugin;
    }
    public function index() {
        $this->setPlugin(new PluginController);

        $page = $this->getPageContact();
        $contact = $this->getPageContact();

        #SEO | BreadCrumb
        $this->gerarSeo(SiteController::CONTACT);
        $this->plugin->addBreadCrumb(['home', route('home')]);
        $this->plugin->addBreadCrumb(['fale conosco', route('fale-conosco')]);

        return view('layout.pages.contact-us.index', [
            'page' => $page,
            'contact' => $contact
        ]);
    }

    #Contact Page
    public function getPageContact() {
        $this->plugin->setId(SiteController::CONTACT);
        return $this->plugin->obterCampos();
    }
}
