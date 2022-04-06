<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BlogModel;
class Admin extends BaseController
{
    public function __construct(){
        $this->BlogModel = new BlogModel();
    }

    public function index()
    {
        if(session('access') != 'admin'){
            return redirect()->to('/');
        }
        
        return view('admin/tambah_materi');
    }

    public function listMateri(){
        if(session('access') != 'admin'){
            return redirect()->to('/');
        }

        $data = [
            'list'  => $this->BlogModel->findAll()
        ];
        return view('admin/list_materi',$data);
    }

    public function insert(){
        if(session('access') != 'admin'){
            return redirect()->to('/');
        }

        $data = [
            'judul'             =>$this->request->getPost('judul'),
            'email'             =>$this->request->getPost('email'),
            'pre-content'       =>$this->request->getPost('pre-content'),
            'slug'              =>$this->request->getPost('slug'),
        ];
        $this->BlogModel->insert($data);
        return redirect()->to();
    }
}
