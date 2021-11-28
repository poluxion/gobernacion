<?php

namespace App\Models;
use CodeIgniter\Model;

class Frecuencia extends Model
{
    protected $table      = 'frecuencia';
    protected $primaryKey = 'idFrecuencia';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [ 'nombreFrecuencia', 'dias', ];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function mostrarFrecuencias()
    {
        $nombres = $this->db->query("SELECT * FROM frecuencia");
        return $nombres->getResult();
    }

    public function obtenerFrecuencias($data)
    {
        $nombres = $this->db->table('frecuencia');
        $nombres->where($data);
        return $nombres->get()->getResultArray();
    }

    public function actualizarFrecuencias($data, $ID)
    {
        $nombres = $this->db->table('frecuencia');
        $nombres->set($data);
        $nombres->where('idFrecuencia', $ID);
        return $nombres->update();
    }

    public function get_frecuences($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['idFrecuencia' => $id]);
        }
    }

    public function eliminarFrecuencias($id)
    {
        $nombres = $this->db->table('frecuencia');
        $nombres -> where('idFrecuencia', $id);
        $nombres -> delete('frecuencia');
    }
}
