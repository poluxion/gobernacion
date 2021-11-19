<?php

namespace App\Models;
use CodeIgniter\Model;

class Usuarios extends Model
{
    protected $table      = 'usuario';
    protected $primaryKey = 'ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['usuario', 'nombre', 'apellido', 'cedula', 'password','telefono', 'correo', 'tipo'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function mostrarData()
    {
        $nombres = $this->db->query("SELECT * FROM usuario");
        return $nombres->getResult();
    }

    public function obtenerNombre($data)
    {
        $nombres = $this->db->table('usuario');
        $nombres->where($data);
        return $nombres->get()->getResultArray();
    }

    public function actualizar($data, $ID)
    {
        $nombres = $this->db->table('usuario');
        $nombres->set($data);
        $nombres->where('ID', $ID);
        return $nombres->update();
    }

    public function hash($password)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        return $hash;
    }

    public function verifyHash($password, $vpassword)
    {
        if (password_verify($password, $vpassword)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function get_users($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['ID' => $id]);
        }
    }

    public function eliminar($id)
    {
        $nombres = $this->db->table('usuario');
        $nombres -> where('ID', $id);
        $nombres -> delete('usuario');
    }
}
