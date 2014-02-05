<?php
    //后台管理员登录与退出模块
    class LoginControl extends Control{

        private $_db;

        public function __init(){

            $this->_db = M('admin');

        }

    	//会员登录
    	public function login(){

            if(session('aid')){
                go('Index/index');
            }

            if(IS_POST){
                $username = Q('post.username');
                //对用户名验证
                if(!$user = $this->_db->where("username='$username'")->find()){
                    $this->error('用户名错误, 请重新输入');
                }

                //对密码验证
                if($user['password'] != md5($_POST['password'])){
                    $this->error('密码错误, 请重新输入');
                }

                //当用户名密码输入正确将登录信息保存到session
                $_SESSION['aid'] = $user['aid'];
                $_SESSION['username'] = $user['username'];

                go('Index/index');

            } else{
                $this->display();    
            }
    		
    	}
        
        //登录时的验证码显示
    	public function code(){
    	    $code = new Code();
    	    $code->show();
    	}

    	//验证验证码正确性
    	public function checkCode(){
            $stat = strtoupper($_POST['code']) == $_SESSION['code'] ? 1 : 0;
            $this->ajax($stat); 
    	}

        //会员退出
        public function out(){
            //删除session中的信息
            //$_SESSION=array();
            //session_unset();
            //session_destroy();
            session(NULL);

            $this->success("退出成功",'login');
        }
    }