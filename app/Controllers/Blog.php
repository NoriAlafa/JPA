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
            'blog'  => $this->BlogModel->findAll()
        ];
        return view('blog/blog',$data);
    }
}
