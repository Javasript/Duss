<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {

    public function login()
    {
      $this->display();
    }
    public function register()
    {
      $this->display();
    }
    public function profile($name)
    {
      $user=M("user");
      $re=$user->where(array('name'=>$name))->find();
      $data=$re['name'];;
      dump($data);
    }

    public function doreg()
    {
        $uname=$_POST['username'];
        $upass=$_POST['password'];
        $user=M("user");
        if(!empty($uname)&&!empty($upass)){
          if($user->where(array("name"=>"$uname"))->find() != NULL){
            $this->error("用户名已被使用");
          }else{
            $data = $user->create();
            $data[name]=$uname;
            $data[password]=$upass;
            $data[time]=time();
            if($user->add($data)){
                $this->success("{$uname},成功注册",U('user/login'),5);
            }
          }
        }else{
          $this->error("请输入用户名或密码");
        }
    }
    public function dolog()
    {
        $uname=$_POST['username'];
        $upass=$_POST['password'];
        $user=D("user");
        if(!empty($uname)){
          $where=array('name'=>$uname);
          $rows=$user->where($where)->find();
          if($rows['password']==$upass){
            SESSION('islog','1');
            SESSION('name',$rows['name']);
            $this->success("登录成功",U('index/index'));

          }else{
            $this->error("用户名或密码错误");
          }
        }else{
          $this->error("用户名不能为空");
        }
}
    public function logout()
    {
      session('islog',null);
      session('name',null);
      $this->success("退出成功",U('index/index'));
    }
}
