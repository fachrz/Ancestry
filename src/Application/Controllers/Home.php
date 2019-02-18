<?php
namespace Application\Controllers;

use Core\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Application\Models\DefaultModel;

class Home extends BaseController{
   

    public function index(){
        
        $model = new DefaultModel(); 
        $data['siswa'] = $model->getAllSiswa();
        return $this->render('v_home.html', $data);
        
    }public function jsondata(){
        $model = new DefaultModel(); 
        $getData = $model->getAllSiswa();
        $jsondata = json_encode($getData);

        return new Response($jsondata);
        
    }public function edit($email){
        $data['email'] = $email;
        return $this->render('v_edit.html', $data);
    }
}