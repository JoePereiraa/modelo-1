<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\SiteController;

class ErrorController extends SiteController
{
    public function index() {
        #SEO
        $this->gerarSeo();

        return view('errors.404', []);
    }
}
