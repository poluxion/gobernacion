<?php

namespace App\Models;
use CodeIgniter\Model;

class NoHabil extends Model
{
    protected $table      = 'diasnohabiles';
    protected $primaryKey = 'idDiaNoHabil';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [ 'fechaNoHabil' ];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function mostrarDiaNoHabil()
    {
        $nombres = $this->db->query("SELECT * FROM diasnohabiles");
        return $nombres->getResult();
    }

    public function obtenerDiaNoHabil($data)
    {
        $nombres = $this->db->table('diasnohabiles');
        $nombres->where($data);
        return $nombres->get()->getResultArray();
    }

    public function actualizarDiaNoHabil($data, $ID)
    {
        $nombres = $this->db->table('diasnohabiles');
        $nombres->set($data);
        $nombres->where('idDiaNoHabil', $ID);
        return $nombres->update();
    }

    public function get_holyday($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['idDiaNoHabil' => $id]);
        }
    }

    public function eliminarDiaNoHabil($id)
    {
        $nombres = $this->db->table('diasnohabiles');
        $nombres -> where('diasnohabiles', $id);
        $nombres -> delete('diasnohabiles');
    }
}
