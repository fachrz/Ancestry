<?php
namespace Application\Controllers;

use Core\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Application\Models\DefaultModel;
use Application\Models\APIModel;
use Symfony\Component\Routing\Annotation\Route;

class Api_controller extends BaseController{
   public function getApi(){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: access");
        header("Access-Control-Allow-Methods: GET");
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

        $model = new DefaultModel(); 
        $getData = $model->getAllSiswa();

        $cjson = json_encode($getData);

        return $this->response($cjson);

    }public function setApi(){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: access");
        header("Access-Control-Allow-Methods: POST");
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


        
        $data = json_decode(file_get_contents("php://input"));

        $indata = array(
            'username' => $data->username,
            'first_name' => $data->first_name,
            'last_name' => $data->last_name,
            'gender' => $data->gender,
            'password' => $data->password,
            'status' => $data->status
        );
       
            $model = new APIModel();
            $setData = $model->setAPIData($indata);
            
            if(!$setData){
                return $this->response('sukses');
             }else{
                return $this->response('gagal');
             }
        
    }
}