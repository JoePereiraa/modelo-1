<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Http;

class FormSubmitController extends SiteController
{
    public function index() {
        //SEO
        $this->gerarSeo();
        //GET IP - (OBTER IP)
        $localIp = $this->obterLocalizacao();
        $localizacao = [
            'horario' => date('d/m/Y - H:i'),
            'ip' => self::obterEnderecoIP(),
            'localizacao' =>  !empty($localIp['city']) ? "{$localIp['city']}, {$localIp['region']} - {$localIp['country']}" : 'Não Encontrado',
            'link_google' => !empty($localIp['loc']) ? "https://www.google.com/maps/search/".$localIp['loc'] : 'Não encontrado',
            'coordenadas' => !empty($localIp['loc']) ? $localIp['loc'] : 'Não encontrado',
            'hostname' => !empty($localIp['hostname']) ? $localIp['hostname'] : 'Não encontrado',
        ];

        //?VIEW
        return view('layout.extras.submit-form',['localizacao'=>$localizacao]);
    }

    /*
     * Obtém o endereço de IP do usuário através dos headers.
     */
    public static function obterEnderecoIP() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        } else {
            if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                if (isset($_SERVER['HTTP_X_FORWARDED'])) {
                    $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
                } else {
                    if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
                        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
                    } else {
                        if (isset($_SERVER['HTTP_FORWARDED'])) {
                            $ipaddress = $_SERVER['HTTP_FORWARDED'];
                        } else {
                            if (isset($_SERVER['REMOTE_ADDR'])) {
                                $ipaddress = $_SERVER['REMOTE_ADDR'];
                            } else {
                                $ipaddress = 'Indisponível';
                            }
                        }
                    }
                }
            }
        }
        return $ipaddress;
    }
    /*
     * Obtém a localização de um IP.
     */
    public static function obterLocalizacao() {
        try {
            $ip = self::obterEnderecoIP();
            if (empty($ip) || $ip == 'Indisponível') {
                return '(Localização Desconhecida)';
            } else {
                $url = Http::get("http://ipinfo.io/$ip/geo");
                $json = json_decode($url, true);
                if (!empty($json) && !empty($json['city']) && !empty($json['region']) && !empty($json['country'])) {
                    return $json;
                } else {
                    return '(Localização Desconhecida)';
                }
            }
        } catch (\Throwable $th) {
            return '(Localização Desconhecida)';
        }
    }

}
