<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_blog';
    protected $primaryKey       = 'id_blog';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_blog','judul','slug','pre-content','penjelasan','content','created_at','updated_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getBlog($slug = false){
        if($slug == false){
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
