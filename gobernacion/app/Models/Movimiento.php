<?php

namespace App\Models;
use CodeIgniter\Model;

class Movimiento extends Model
{
    protected $table      = 'movimiento';
    protected $primaryKey = 'idMovimiento';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [ 'reporte', 'fecha', ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function mostrarMovimiento()
    {
        $nombres = $this->db->query("SELECT * FROM movimiento");
        return $nombres->getResult();
    }

    public function obtenerMovimiento($data)
    {
        $nombres = $this->db->table('movimiento');
        $nombres->where($data);
        return $nombres->get()->getResultArray();
    }

    public function actualizarMovimiento($data, $ID)
    {
        $nombres = $this->db->table('movimiento');
        $nombres->set($data);
        $nombres->where('ID', $ID);
        return $nombres->update();
    }

    public function get_movement($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['idMovimiento' => $id]);
        }
    }

    public function eliminarMovimiento($id)
    {
        $nombres = $this->db->table('movimiento');
        $nombres -> where('idMovimiento', $id);
        $nombres -> delete('movimiento');
    }
}
