<?php

namespace App\HttpController;


use EasySwoole\Http\AbstractInterface\Controller;

class Index extends Controller{

    public function index(){
        echo 'index/index request succ';
        $this->response()->white(json_encode(['status' => 1,'msg' => 'success']));
        return true;
    }
}