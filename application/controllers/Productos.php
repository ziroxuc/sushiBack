<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once( APPPATH.'/libraries/REST_controller.php');
use Restserver\libraries\REST_controller;

class Productos extends REST_Controller {


public function __construct(){
    header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
    header("Access-Control-Allow-Origin: *");

    parent::__construct();
    $this->load->database();
}


public function getProductos_get(){

    $query = $this->db->query("SELECT * FROM tipos_sushi");

$respuesta = array(
    'error' => FALSE,
    'productos'=> $query->result_array()
);


    $this->response($respuesta, REST_Controller::HTTP_OK);

    //echo json_encode($arreglo);
}



}