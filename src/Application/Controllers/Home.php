<?php
namespace Application\Controllers;

use Core\App;
use Symfony\Component\HttpFoundation\Response;
use Application\Models\DefaultModel;

class Home extends App{

    public function index(){
        
        $model = new DefaultModel(); 
        $data['siswa'] = $model->getAllSiswa();
        $data['home'] = 'Homepage';

        return $this->render('v_home.html', $data);
    }
}