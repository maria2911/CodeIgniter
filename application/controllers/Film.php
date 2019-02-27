<?php
class Film extends CI_Controller {
    public function index(){
        echo "Hello Maria";
        $client = new GuzzleHttp\Client();
        $url ='http://localhost:8080/webservice/sakila/film_svc.php';
        $res = $client->request('GET',$url);
        $rows = json_decode($res->getBody()->getContents());
        foreach ($rows as $film) {
            echo $film->title. '<br>';
        }

       // $res = $client->request('GET', $url, $data);
    }
}