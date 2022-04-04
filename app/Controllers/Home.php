<?php

namespace App\Controllers;
use App\Models\BlogModel;
class Home extends BaseController
{
    public function __construct(){
        $this->BlogModel = new BlogModel();
    }
    public function index()
    {
        $JumMateri = $this->BlogModel->get()->resultID->num_rows;
        $data = [
            'JumMat'    => $JumMateri
        ];
        return view('index' , $data);
    }
}
