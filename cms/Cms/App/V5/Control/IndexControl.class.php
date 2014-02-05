<?php
//测试控制器类
class IndexControl extends AuthControl{
    function index(){
    	$this->display();
    }

    function welcome(){
    	echo '欢迎使用v5 CMS';
    }
}
?>