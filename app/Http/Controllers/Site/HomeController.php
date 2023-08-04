<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Funcoes\PluginController;
use App\Http\Controllers\SiteController;

class HomeController extends SiteController
{
    private $homeManager;
    public function setHomeManager(HomeManager $homeManager) {
        $this->homeManager = $homeManager;
    }

    public function index() {
        $this->setHomeManager(new HomeManager);

        $home = $this->homeManager->getHome();
        $this->homeManager->gerarSeo();

        #Extra Content
        $products = $this->homeManager->getInternalProducts();
        $doubts = $this->homeManager->getInternalDoubts();
        $testimonies = $this->homeManager->getInternalTestimonies();
        $blog = $this->homeManager->getInternalPosts();

        return view('layout.home.content.home', [
            'home' => $home,
            'products' => $products,
            'testimonies' => $testimonies,
            'doubts' =>$doubts,
            'blog' => $blog
        ]);
    }
}

class HomeManager extends SiteController
{
    private $plugin;
    public function __construct() {
        $this->plugin = new PluginController();
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
