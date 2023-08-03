<?php

                            use Illuminate\Support\Facades\Route;
                            use App\Http\Controllers\SiteController;

/*Home*/                    use App\Http\Controllers\Site\HomeController;
/*About Us */               use App\Http\Controllers\Site\AboutController;
/*Products */               use App\Http\Controllers\Site\ProductsController;
/*Blog*/                    use App\Http\Controllers\Site\BlogController;
/*Doubts */                 use App\Http\Controllers\Site\DoubtController;
/*Contact Us */             use App\Http\Controllers\Site\ContactUsController;
/*Work Us */                use App\Http\Controllers\Site\WorkUsController;
/*Terms,Privacy */          use App\Http\Controllers\Site\TermsPolicyController;
/*Cart*/                    use App\Http\Controllers\Site\CartController;

/*Upload */                use App\Http\Controllers\Funcoes\PluginController;
/*Form */                  use App\Http\Controllers\Site\FormSubmitController;
/*API */                   use App\Http\Controllers\Funcoes\ApiController;
/*Upload */                use App\Http\Controllers\Funcoes\UploadController;
/*Error Page */            use App\Http\Controllers\Site\ErrorController;

Route::namespace('Site')->group(function () {
    #PAGES
    /*Home - Not change*/       Route::get('/', [HomeController::class, 'index'])->name('home');
    /*About Us */               Route::get(PluginController::obterUrl(SiteController::ABOUT), [AboutController::class, 'index'])->name("quem-somos");
    #
    /*Products */               Route::get(PluginController::obterUrl(SiteController::PRODUCTS) . '/{categoria?}', [ProductsController::class, 'index'])->name("produtos");
    /*Products - Inner */       Route::get('produto/{uri}', [ProductsController::class, 'interna'])->name("produto-interna");
    #
    /*Doubts --*/                  Route::get(PluginController::obterUrl(SiteController::DOUBT) . '/{uri?}', [DoubtController::class, 'index'])->name("duvidas");
    #
    /*Blog */                   Route::get(PluginController::obterUrl(SiteController::BLOG) . '/{categoria?}', [BlogController::class, 'index'])->name("blog");
    /*Blog - Inner */           Route::get('post/{uri}', [BlogController::class, 'interna'])->name("blog-interna");
    /*Blog - Categories */      Route::get(PluginController::obterUrl(SiteController::BLOG_CATEGORIES) . '/{uri}', [BlogController::class, 'index'])->name('blog-categoria');
    #
    /*Contact Us */             Route::get(PluginController::obterUrl(SiteController::CONTACT), [ContactUsController::class, 'index'])->name("fale-conosco");
    /*Work Us */                Route::get(PluginController::obterUrl(SiteController::WORK), [WorkUsController::class, 'index'])->name("trabalhe-conosco");

    #PATTERNS
    /*Cart*/                    Route::get('carrinho', [CartController::class, 'index'])->name("carrinho");
    /*Cart Data*/               Route::get('carrinho/dados', [CartController::class, 'dados'])->name("carrinho-dados");
    /*Cart Submited*/           Route::get('carrinho/enviado', [CartController::class, 'enviado'])->name("carrinho-enviado");
    /*Cart Functions*/          Route::post('carrinho/funcoes/{funcao}', [CartController::class, 'funcoes'])->name("carrinho-funcoes");

    /*Policy of Privacy*/       Route::get(PluginController::obterUrl(SiteController::POLICY), [TermsPolicyController::class, 'policy'])->name('politica-de-privacidade');
    /*Termos of Use*/           Route::get(PluginController::obterUrl(SiteController::TERMS), [TermsPolicyController::class, 'terms'])->name('termos-de-uso');

    /*Form Submit*/             Route::get('formulario-enviado', [FormSubmitController::class, 'index'])->name('formulario-enviado');
    /*App v5.0.0*/              Route::get('app/{any?}', function () { return redirect('app-raddar'); });
    /*404*/                     Route::get('404', [ErrorController::class, 'index'])->name('404');
});

Route::namespace('Funcoes')->group(function () {
    /*Upload Image*/            Route::match(['post', 'put', 'get'], 'file-upload/{type?}', [UploadController::class, 'upload'])->name('file.upload.post');
    /*Send Mail*/               Route::match(['post', 'get'], 'enviar-email', [ApiController::class, 'enviarEmail']);
});
