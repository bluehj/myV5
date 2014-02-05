<?php
	//后台登录权限验证
    class AuthControl extends Control{
    	public function __init(){
    	    if(!session('aid')){
    	        $this->error('还没有登录, 请先登录','Login/login');
    	    }
    	}
    }