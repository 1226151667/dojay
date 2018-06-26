<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller{
    public function index(){
        return $this->fetch('index',[
        	'is_more' => true
        ]);
    }
    public function service(){
        $cate = request()->param('cate');
        return $this->fetch($cate);
    }
    public function news(){
    	if($id = request()->param('id')){
    		return $this->fetch('new_detail');
    	}else{
    		return $this->fetch('new',[
	        	'is_more' => false
	        ]);
    	}
    }
    public function contact(){
    	return $this->fetch('contact');
    }
    public function about(){
    	return $this->fetch('about',[
        	'is_more' => false
        ]);
    }
}