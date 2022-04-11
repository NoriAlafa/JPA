<?php

namespace App\Controllers;
use App\Models\BlogModel;
use App\Models\GuruModel;
use App\Models\UserModel;
class Home extends BaseController
{
    public function __construct(){
        $this->GuruModel = new GuruModel();
        $this->UserModel = new UserModel();
        $this->BlogModel = new BlogModel();
    }
    public function index()
    {
        $JumMateri  = $this->BlogModel->get()->resultID->num_rows;
        $JumUser    = $this->UserModel->where('access','admin')->countAllResults();
        $JumGuru    = $this->GuruModel->get()->resultID->num_rows;
        $data = [
            'JumMat'    => $JumMateri,
            'JumGuru'   =>$JumGuru,
            'JumUser'   =>$JumUser,
        ];
        return view('index' , $data);
    }
}
