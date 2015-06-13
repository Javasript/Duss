<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
      $this->assign('username',session('name'));
        $this->display();
    }
    public function login(){
      $this->display();
    }
    public function regis(){
      $this->display();
    }

}
