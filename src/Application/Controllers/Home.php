<?php
namespace Application\Controllers;

use Core\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Application\Models\DefaultModel;
use Symfony\Component\Routing\Annotation\Route;

class Home extends BaseController{
    
    public function index(){
        
        $model = new DefaultModel(); 
        $data['siswa'] = $model->getAllSiswa();
        return $this->render('v_home.html', $data);
        
    }public function jsondata(){

        $model = new DefaultModel(); 
        $getData = $model->getAllSiswa();
        $jsondata = json_encode($getData);

        return $this->response($jsondata);
        
    }public function edit($email){

        $data['email'] = $email;
        return $this->render('v_edit.html', $data);

    }public function delete($user_id){

        $model = new DefaultModel();
        $delData = $model->deleteData($user_id);

        if (!$delData){

            return $this->redirect($this->generateUrl('home_page'));

        }else{

            return $this->response('gagal');

        }

    }
}