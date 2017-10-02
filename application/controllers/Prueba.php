<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once( APPPATH.'/libraries/REST_controller.php');
use Restserver\libraries\REST_controller;

class Prueba extends REST_Controller {


public function __construct(){
    header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
    header("Access-Control-Allow-Origin: *");

    parent::__construct();
    $this->load->database();
}




public function index(){

    echo "Hola mundo";
}
public function getArreglo_get(){

    $arreglo = array("manzana","pera","lol");

$this->response(json_encode($arreglo));

    //echo json_encode($arreglo);
}


public function getItems(){

    $this->load->database();

    $query = $this->db->query('SELECT * FROM clientes');



echo json_encode($query->result());
}


}