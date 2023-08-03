<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Funcoes\PluginController;
use App\Http\Controllers\SiteController;

class HomeController extends SiteController
{
    private $plugin;
    public function setPlugin(PluginController $plugin) {
        $this->plugin = $plugin;
    }

    public function index() {

        $this->setPlugin(new PluginController);

        $home = $this->getHome();
        $this->gerarSeo();

        #Extra Content
        $products = $this->getInternalProducts();
        $doubts = $this->getInternalDoubts();
        $testimonies = $this->getInternalTestimonies();
        $blog = $this->getInternalPosts();

        return view('layout.home.content.home', [
            'home' => $home,
            'products' => $products,
            'testimonies' => $testimonies,
            'doubts' =>$doubts,
            'blog' => $blog
        ]);
    }

    #Home
    public function getHome() {
        $this->plugin->setId(SiteController::HOME);
        return $this->plugin->obterCampos();
    }

    #Products
    public function getInternalProducts() {
        $this->plugin->setId(SiteController::PRODUCTS);
        return $this->plugin->obterInternas([], true, 0, false, 30, ['titulo', 'ASC']);
    }

    #Doubts
    public function getInternalDoubts(){
        $this->plugin->setId(SiteController::DOUBT);
        return $this->plugin->obterInternas([], true, 4, false, 4, 0, ['ordem', 'ASC']);
    }

    #Testimonies
    public function getInternalTestimonies(){
        $this->plugin->setId(SiteController::TESTIMONIES);
        return  $this->plugin->obterInternas([], true);
    }

    #Blog
    public function getInternalPosts(){
        $this->plugin->setId(SiteController::BLOG);
        return $this->plugin->obterInternas([], true, 9);
    }
}
