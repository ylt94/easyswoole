<?php

namespace App\HttpController;


use EasySwoole\Http\AbstractInterface\Controller;

class Index extends Controller{

    public function index(){
        echo 'index/index request succ';
        $this->response()->write(json_encode(['status' => 1,'msg' => 'success']));
        $this->response()->write(json_encode(['status' => 1,'msg' => 'success']));
        return true;
    }

    public function test(){
        usleep(100);
        //for($i = 1,$i <8;$i++;){
            echo 'success'.PHP_EOL;
        //}
        
        $this->response()->write(json_encode(['status' => 1,'msg' => 'success']));
        return true;
    }
}