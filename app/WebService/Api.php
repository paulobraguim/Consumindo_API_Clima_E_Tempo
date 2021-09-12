<?php

namespace App\WebService;

class Api{
    /**
     * URL BASE 
     */
    const URL = 'https://api.openweathermap.org';

    /**
     * Key da API
     */
    private $key;

    public function __construct($key)
    {
        $this->key = $key;
    }

    /**
     * Método responsável por obter o clima atual
     */
    public function consultarClima($cidade, $uf){
        return $this->get('/data/2.5/weather',[
            'q'=> $cidade . ',BR-' . $uf .',BRA'
        ]);
    }

    /**
     * Método responsável por executar a consultar get da API
     */
    private function get($resource, $params = []){
        //Parâmetros adicionais
        $params['units'] = 'metric';
        $params['lang'] = 'pt_br';
        $params['appid'] = $this->key;

        //Link de consulta
        $link = self::URL.$resource.'?'.http_build_query($params);

        //Inicia o CURL
        $ch = curl_init($link);

        //Configura a requisição como resposta de volta
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        //Executa 
        $resp = curl_exec($ch);

        curl_close($ch);

        return $data = json_decode($resp, true);
        
    }
}