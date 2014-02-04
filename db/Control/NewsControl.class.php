<?php

    class NewsControl extends Control{

        //显示文章列表
        function show(){
        	$db = M("news");
        	//分页
        	//文章总条数
        	$count = $db->count();
        	$page = new Page($count, 5);
        	$this->assign('page', $page->show());
        	$data = $db->where($page->limit())->all();
        	$this->assign('news', $data);
            $this->display();
        }

        //向文章表news表添加内容
   	    function add(){
   	    	if(IS_POST){
   	    		$db = M("news");
   	    		if($db->add()){
   	    	        $this->success("发表成功","show");
   	    		} else{
   	    		    $this->error("发表失败","show");
   	    		}
   	    	} else{
   	    	    $this->display();	
   	    	}
   	    }
    }