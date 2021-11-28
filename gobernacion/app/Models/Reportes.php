<?php

namespace App\Models;
use CodeIgniter\Model;

class Reportes extends Model
{
    protected $table      = 'reportes';
    protected $primaryKey = 'idReportes';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [ 'nombreReportes', 'frecuencia', ];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function crearReporte()
    {
        
    }
    public function mostrarReportes()
    {
        $nombres = $this->db->query("SELECT * FROM reportes");
        return $nombres->getResult();
    }

    public function obtenerReportes($data)
    {
        $nombres = $this->db->table('reportes');
        $nombres->where($data);
        return $nombres->get()->getResultArray();
    }

    public function actualizarReportes($data, $idReportes)
    {
        $nombres = $this->db->table('reportes');
        $nombres->set($data);
        $nombres->where('idReportes', $idReportes);
        return $nombres->update();
    }

    public function get_reports($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['idReportes' => $id]);
        }
    }

    public function eliminarReportes($id)
    {
        $nombres = $this->db->table('reportes');
        $nombres -> where('idReportes', $id);
        $nombres -> delete('reportes');
    }
}
