<?php

namespace App\Controllers;
use App\Models\BlogModel;

class Blog extends BaseController
{
    public function __construct(){
        $this->BlogModel = new BlogModel();
    }

    public function index()
    {
        $data = [
            'blog'  => $this->BlogModel->getBlog()
        ];
        return view('blog/blog',$data);
    }

    public function detail($slug){
        $blog  = $this->BlogModel->getBlog($slug);
        $data = [
            'blog'  => $blog
        ];
        return view('blog/blog_detail',$data);
    }
}
