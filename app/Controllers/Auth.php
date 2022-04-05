<?php

namespace App\Controllers;
use App\Models\AuthModel;
class Auth extends BaseController
{
    public function __construct(){
        $this->AuthModel = new AuthModel();
    }

    public function index()
    {
        $data['judul']  = 'LOGIN';
        return view('auth/login',$data);
    }

    public function viewReg()
    {
        $data['judul']  = 'DAFTAR';
        return view('auth/register',$data);
    }

    public function cek_login() {
        //ambil data dari form
        $username = $this->request->getPost('email');
        $password = $this->request->getPost('password');
    
        //cari data dari tabel admin sesuai username
        $dataUser=$this->AuthModel->where('email',$username)->first();
    
        // jika ada
        if($dataUser) {
            //jika password sesuai
            if(password_verify($password,$dataUser['password'])) {
                //masukan session untuk username dan status login
                session()->set([
                    'id'        =>$dataUser['id_user'],
                    'email'     => $username,
                    'nama'      => $dataUser['username'],
                    'access'   => $dataUser['access'],
                    'logged_in' =>true
                ]);
                return redirect()->to('/');
            }
            
            else { 
                //jika salah
                //kembali ke login dan berikan pesan error
                session()->setFlashdata('error', 'Password Salah');
                return redirect()->back()->withInput();
            }
        }else{
            session()->setFlashdata('error', 'Cek email dan password anda');
            return redirect()->back()->withInput();
        } 
        
    }

    public function register() {
        //untuk validasi
        $validasi = $this->validate([
            'username'=>[
                //jika username sudah ada di table dan harus diisi
                'rules' => 'required|min_length[4]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'min_length' => 'Nama kurang lebih memiliki panjang 4 karakter'
                ]
            ],
            'email' =>[
                'rules' =>'required|is_unique[tb_user.email]|valid_email',
                'errors'=>[
                    'required'  =>'Email Harus Diisi',
                    'is_unique' =>'Email sudah dipakai user lain',
                    'valid_email'=>'Email tidak valid'
                ]
            ],
            'password' => [
                //password harus diisi dan minimal 4 karakter
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Password harus diisi',
                    'min_length' => 'Password minimal 8 karakter'
                ]
            ],
            'password_new' => [
                //password keduanya harus sama
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sama'
                ]
            ],
        ]);

        //jika data tidak sesuai kembali dan munculkan pesan error di form register.
        if(!$validasi){
            return redirect()->back()->withInput();
        }
        
        //Jika data sesuai lakukan penyimpanan data
        $data=[
            'username'      => $this->request->getPost('username'),
            'email'     => $this->request->getPost('email'),
            //enkripsi password dengan bycript
            'password'  => password_hash($this->request->getPost('password'),PASSWORD_BCRYPT),
            'access'   =>'user',
                     
        ];

        //memasukan data dalam database
        $this->AuthModel->insert($data);
        //jika berhasil arahkan ke tampilan login
        return redirect()->to('/login');
    }
}
