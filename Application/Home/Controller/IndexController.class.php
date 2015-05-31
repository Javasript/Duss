<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    if(cookie('username')!=null){
        $this->assign('username',cookie('username'));
        $this->display();
    }else{
        $this->show("<h1>ohhhh");
    }

    }
    function login(){
        $this->display();
    }
    public function user(){



    }
    public function reg(){
        $uname=$_POST['username'];
        $upass=$_POST['password'];
        $user=D("user");
        $data = $user->create();
        $data[name]=$uname;
        $data[password]=$upass;
        $data[time]=time();
        if($user->add($data)){
            $this->show( "成功注册".$uname);
        }
    }
        public function log(){
            $uname=$_POST['username'];
            $upass=$_POST['password'];
            $user=D("user");
           $where=array('name'=>$uname);
            $rows=$user->where($where)->find();
            if($rows['password']==$upass){
                Cookie("username",$rows['name'],time()+3600*24);
                Cookie('lastlogintime',time(),time()+3600*24);
                $this->success("登录成功",'index/index');

            }else{
                $this->show("<h1>:(</h1>");
            }


        }


}