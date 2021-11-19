<?php

namespace App\Models;

use CodeIgniter\Model;

class Blog extends Model
{
    protected $table      = 'blog';
    protected $primaryKey = 'ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['tituloPost', 'post', 'created_at', 'updated_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function blogData()
    {
        $nombres = $this->db->query("SELECT * FROM blog");
        return $nombres->getResult();
    }

    public function obtenerPost($data)
    {
        $nombres = $this->db->table('blog');
        $nombres->where($data);
        return $nombres->get()->getResultArray();
    }

    public function actualizarBlog($data, $ID)
    {
        $nombres = $this->db->table('blog');
        $nombres->set($data);
        $nombres->where('ID', $ID);
        return $nombres->update();
    }
}
