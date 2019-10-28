<?php

namespace App\HttpController;


use EasySwoole\Http\AbstractInterface\Controller;

class Index extends Controller{

    public function index(){
        echo 'index/index request succ';
        $this->response()->write(json_encode(['status' => 1,'msg' => 'success']));
        return true;
    }

    public function test(){
        $this->response()->write(json_encode(['status' => 1,'msg' => 'success']));
        return true;
    }
}