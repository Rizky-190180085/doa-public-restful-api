<?php 
use GuzzleHttp\Client;

class Doa_model extends CI_model {

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'https://doa-doa-api-ahmadramadhan.fly.dev/'
        ]);
    }


    public function getAllDoa()
    {

        $response = $this->_client->request('GET', 'api');

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;

    }


    public function getDoaById($id)
    {
        $response = $this->_client->request('GET', 'api', [
            'query' => [
                'id' => $id
            ]
        ]);
        
        $result = json_decode($response->getBody()->getContents(), true);
        return $result[0];

    }


}