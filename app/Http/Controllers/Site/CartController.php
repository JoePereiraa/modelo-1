<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Funcoes\PluginController;
use App\Http\Controllers\SiteController;
use Illuminate\Http\Request;

class CartController extends SiteController
{
    public function index(Request $request)
    {
        $plugin = new PluginController();

        //HOME
        $plugin->setId(SiteController::HOME);
        $home = $plugin->obterCampos();

        //CART - (CARRINHO)
        $plugin = new PluginController(SiteController::CART);
        $page = $plugin->obterCampos();

        #SEO | Breadcrumb
        $this->gerarSeo(SiteController::CART);
        $plugin->addBreadCrumb(['Home', route('home')]);
        $plugin->addBreadCrumb(['carrinho de orçamento']);

        return view('components.cart.content.carrinho', [
            'page' => $page,
            'home' => $home,
            'returnUrl' => $request->returnUrl ?? route('produtos')
        ]);
    }

    public function dados()
    {
        //CART
        $plugin = new PluginController(SiteController::CART);
        $page = $plugin->obterCampos();

        //HOME
        $plugin->setId(SiteController::HOME);
        $home = $plugin->obterCampos();

        //REDIRECT
        $carrinho = session()->get('carrinho', []);
        if (empty($carrinho)) return redirect()->route('carrinho');

        #SEO | BreadCrumb
        $this->gerarSeo(SiteController::CART);
        $plugin->addBreadCrumb(['Home', route('home')]);
        $plugin->addBreadCrumb(['carrinho de orçamento']);

        return view('components.cart.content.carrinho-dados', [
            'page' => $page,
            'home' => $home,
        ]);
    }

    public function enviado()
    {
        //CART
        $plugin = new PluginController(SiteController::CART);
        $page = $plugin->obterCampos();

        //HOME
        $plugin->setId(SiteController::HOME);
        $home = $plugin->obterCampos();

        //REDIRECT
        $carrinho = session()->get('carrinho', []);
        if (empty($carrinho)) return redirect()->route('carrinho');

        session()->put('carrinho', []);
        session()->save();

        #SEO | Breadcrumb
        $this->gerarSeo(SiteController::CART);
        $plugin->addBreadCrumb(['Home', route('home')]);
        $plugin->addBreadCrumb(['carrinho de orçamento']);

        return view('components.cart.content.carrinho-enviado', [
            'page' => $page,
            'home' => $home,
        ]);
    }

    public function funcoes(Request $request, $funcao = '')
    {

        // Obtem função da rota
        if (empty($funcao)) return redirect()->route('home');

        // Dados requisição post
        $data = json_decode($request->getContent(), true);
        if (!$data) return redirect()->route('home');

        // Obtem carrinho da sessão
        $carrinho = session()->get('carrinho', []);

        switch ($funcao) {

                // Adicionar ao carrinho
            case 'adicionar':

                $produto = $this->obterProduto($data);

                if (!empty($produto)) {
                    $produtoExistente = $this->checarCarrinho($data, $carrinho);

                    if ($produtoExistente !== false) {
                        $data['key'] = $produtoExistente;
                        $carrinho = $this->alterarCarrinho($data, $carrinho, 'aumentar');
                    } else {
                        $carrinho[] = $produto;
                    }
                }

                break;

                // Aumentar qtd
            case 'aumentar':

                $carrinho = $this->alterarCarrinho($data, $carrinho, 'aumentar');

                break;

                // Diminuir qtd
            case 'diminuir':

                $carrinho = $this->alterarCarrinho($data, $carrinho, 'diminuir');

                break;

                // Alterar qtd
            case 'quantidade':

                $carrinho = $this->alterarCarrinho($data, $carrinho, 'quantidade');

                break;

                // Remover do carrinho
            case 'remover':

                $carrinho = $this->alterarCarrinho($data, $carrinho, 'remover');

                break;

                // Limpar carrinho
            case 'limpar':

                $carrinho = [];

                break;
        }

        session()->put('carrinho', $carrinho);
        session()->save();
        echo json_encode($carrinho);
    }

    public function obterProduto($data)
    {
        if (empty($data['id'])) return null;

        $produtosModel = new PluginController(SiteController::PRODUCTS);
        $produto = $produtosModel->obterInterna($data['id'], SiteController::PRODUCTS, 'id');
        $result = [];

        if (!empty($produto)) {

            if (!empty($produto['preco-promocional'])) {
                $valor = str_replace(['.', ','], ['', '.'], $produto['preco-promocional']);
            } else if (!empty($produto['preco'])) {
                $valor = str_replace(['.', ','], ['', '.'], $produto['preco']);
            }

            $result = [
                'id' => $produto['id'],
                'uri' => $produto['uri'],
                'titulo' => $produto['titulo'],
                'valor' => $valor ?? 0,
                'opcoes' => $data['opcoes'] ?? [],
                'quantidade' => 1,
                'total' => $valor ?? 0,
                'imagem' => $produto['gallery'][0] ?? []
            ];
        }

        return $result;
    }

    public function checarCarrinho($data, $carrinho)
    {
        $resultado = false;

        if (!empty($data['id'])) {
            foreach ($carrinho as $key => $produto) {
                if ($produto['id'] == $data['id']) {
                    if ($produto['opcoes'] == ($data['opcoes'] ?? [])) {
                        $resultado = $key;
                        break;
                    }
                }
            }
        }

        return $resultado;
    }

    public function alterarCarrinho($data, $carrinho, $metodo)
    {
        if (!is_null($data['key'])) {
            $key = $data['key'];
            switch ($metodo) {
                case 'aumentar':
                    $carrinho[$key]['quantidade']++;
                    $carrinho[$key]['total'] += $carrinho[$key]['valor'];
                    break;

                case 'diminuir':
                    $carrinho[$key]['quantidade']--;
                    $carrinho[$key]['total'] -= $carrinho[$key]['valor'];
                    break;

                case 'quantidade':
                    if (!empty($data['qtd'])) {
                        $carrinho[$key]['quantidade'] = $data['qtd'];
                        $carrinho[$key]['total'] = ($carrinho[$key]['valor'] * $data['qtd']);
                    }
                    break;

                case 'remover':
                    unset($carrinho[$key]);
                    break;
            }
        }

        return $carrinho;
    }
}
