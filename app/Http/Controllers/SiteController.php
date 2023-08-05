<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Funcoes\HelpersController;
use App\Http\Controllers\Funcoes\PluginController;
use Illuminate\Routing\Controller as BaseSiteController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use App\Models\Admin\App_config;
use App\Models\Admin\App_conteudo_idioma;
use App\Models\Admin\App_idiomas;

class SiteController extends BaseSiteController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    #CONST PAGES
    public const HOME = 60;                 #Homepage
    public const ABOUT = 109;               #About
    public const PRODUCTS = 127;            #Products
    public const DOUBT = 119;               #Doubts
    public const CART = 678;                #Cart
    public const BLOG = 30;                 #Blog
    public const TESTIMONIES = 62;          #Testimonies
    public const CONTACT = 74;              #Contact Us
    public const POLICY = 51;               #Polity
    public const TERMS = 52;                #Terms
    public const CHANGES = 667;             #Changes
    public const WORK = 680;                #Work
    public const PRODUCTS_CATEGORIES = 669; #Products - Categories
    public const BLOG_CATEGORIES = 26;      #Blog - Categories
    public const DOUBT_CATEGORIES = 704;    #Doubt - Categories

    public static $config;
    public static $linguagem = 1;
    public static $seo;
    public static $menu;
    public static $links;

    public function __construct()
    {
        self::$config = $this->getConfig();
        self::$config['menu'] = $this->gerarMenu();
        self::$config['links'] = $this->generateLinks();
        self::$config['rota-atual'] = URL::current();
        HelpersController::$config = self::$config;

        // Cart
        $this->middleware(function ($request, $next) {
            $carrinho = session()->get('carrinho', []);
            View::share('carrinho', $carrinho);
            return $next($request);
        });

        if (!empty(self::$config['unidades'])) {
            View::share('unidade', current(self::$config['unidades']));
        }

        View::share('config', self::$config);
        View::share('helpers', new HelpersController());
    }

    public function gerarMenu()
    {
        $menuTitles = [
            'Início',
            'Produtos',
            'Dúvidas',
            'Blog',
            'Sobre Nos',
            'Contato',
            'Trabalhe Conosco'
        ];
        $menuRoutes = [
            route('home'),
            route('produtos'),
            route('duvidas'),
            route('blog'),
            route('sobre-nos'),
            route('fale-conosco'),
            route('trabalhe-conosco')
        ];
        $menu = array_map(function($title, $url){
            return [
                'title' => $title,
                'url' =>  $url,
            ];
        }, $menuTitles, $menuRoutes);

        return $menu;
    }
    public function generateLinks()
    {
        $linksTitles = [
            'Termos de Uso',
            'Politica de Privacidade',
        ];
        $linksRoutes = [
            route('termos-de-uso'),
            route('politica-de-privacidade')
        ];
        $links = array_map(function($title, $url){
            return [
                'title' => $title,
                'url' =>  $url,
            ];
        }, $linksTitles, $linksRoutes);

        return $links;
    }

    public function filtrarArray($array = [], $coluna = '', $valor = '', $resetKeys = false)
    {
        $result = array_filter($array, function ($value) use ($coluna, $valor) {
            if (!isset($value[$coluna])) return false;
            return $value[$coluna] == $valor;
        });

        if ($resetKeys) return array_values($result);
        return $result;
    }

    public function getConfig()
    {
        $confAll = App_config::get()->toArray();

        $confArray = [];

        foreach ($confAll as $key => $item) {

            $confArray[$item['campo']] = $this->valorPadrao($item);

            /*  Telefone e Whatsapp */
            if ($item['campo'] == 'telefones') {
                $confArray['telefone'] = !empty(current($confArray[$item['campo']]['telefones'])) ? current($confArray[$item['campo']]['telefones']) : [];
                $confArray['whatsapp'] = !empty(current($confArray[$item['campo']]['whatsapps'])) ? current($confArray[$item['campo']]['whatsapps']) : [];
            }
        }

        //        echo '<pre>';
        //        print_r($confArray);
        //        exit;

        return $confArray;
    }

    public function gerarSeo(int $page_id = null)
    {
        /*  Page id */
        if (!empty($page_id)) {
            $seoRow = App_conteudo_idioma::where('conteudo_id', $page_id)->get()->first();
        }

        $title = $seoRow->titulo ?? self::$config['titulo_site'];


        self::$seo = [
            'author' => self::$config['titulo_site'],
            'title' => Route::currentRouteName() == 'home' ? self::$config['titulo_home'] : $title . ' | ' . self::$config['titulo_site'],
            'site_name' => self::$config['titulo_site'],
            'url' => url(''),
            'image' => !empty($seoRow->seo_image) ? url('uploads/' . $seoRow->seo_image) : (!empty(self::$config['image_logo']['url']) ? url(self::$config['image_logo']['url']) : ''),
            'description' => !empty($seoRow->seo_description) ? $seoRow->seo_description : (!empty(self::$config['description']) ? self::$config['description'] : ''),
            'keywords' => !empty($seoRow->seo_keywords) ? $seoRow->seo_keywords : (!empty(self::$config['description']) ? self::$config['description'] : ''),
            'lang' => self::$linguagem == 1 ? 'pt_BR' : ($this->obterLinguagem(self::$linguagem)->sigla ?? 'no have'),
            'favicon' => !empty(self::$config['favicon']['url']) ? url('uploads/' . self::$config['favicon']['url']) : ''
        ];

        View::share('seo', self::$seo);
    }

    public function obterLinguagem(int $id = null)
    {

        if (!empty($id)) {
            $idiomaRow = App_idiomas::where('id', $id)->get()->first();
            return $idiomaRow;
        }
    }

    public function setTitle(string $title = '', $type = 'new')
    {


        if (!empty($title)) {

            // self::$seo['title'] = $title;

            switch ($type) {

                case 'new':

                    self::$seo['title'] = $title;
                    break;
                case 'prepend':
                    self::$seo['title'] = $title . ' | ' . (!empty(self::$seo['title']) ? self::$seo['title'] : '');
                    break;
            }
        }
        View::share('seo', self::$seo);
    }

    public function valorPadrao($obj)
    {


        switch ($obj['campo']) {


            case 'redes':
                $valor = json_decode($obj['valor'], true);

                $return = [];
                if (!empty($valor)) {
                    foreach ($valor as $key => $item) {

                        $return[strtolower($item['titulo'])] = !empty($item['valor']) ? $item['valor'] : '';
                    }
                }

                break;

            case 'unidades':
                $valor = json_decode($obj['valor'], true);

                $array = [];
                if (!empty($valor)) {
                    foreach ($valor as $item) {
                        $telefones = [];
                        if (!empty($item['valor']['telefones']['value'])) {
                            foreach ($item['valor']['telefones']['value']['valor'] as $phone) {
                                $telefones[] = PluginController::campoPhone($phone);
                            }
                        }
                        $array[] = [
                            'unidade' => $item['unidade'] ?? '',
                            'telefones' => $telefones,
                            'cep' => $item['cep'] ?? '',
                            'cidade' => $item['cidade'] ?? '',
                            'estado' => $item['estado'] ?? '',
                            'endereco' => $item['endereco'] ?? '',
                            'iframe' => $item['iframe'] ?? '',
                            'link' => $item['link'] ?? ''
                        ];
                    }
                }

                $return = $array;
                break;

            case 'telefones':

                $valor = json_decode($obj['valor'], true);


                $return = [
                    'telefones' => [],
                    'whatsapps' => []
                ];
                foreach ($valor as $key => $item) {


                    switch ($item['destino']) {

                        case 'telefone':
                            $return['telefones'][] = PluginController::campoPhone($item);

                            break;

                        case 'whatsapp':

                            $return['whatsapps'][] = PluginController::campoPhone($item);

                            break;
                    }
                }

                break;

            case 'image_logo':
            case 'image_rodape':

                $valor = json_decode($obj['valor'], true);
                $valor['url'] = 'uploads/' . $valor['url'];

                $return = $valor;

                break;

            default:

                $return = json_decode($obj['valor'], true);

                break;
        }

        return $return;
    }
}
