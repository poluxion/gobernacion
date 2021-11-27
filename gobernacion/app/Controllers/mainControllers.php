<?php

namespace App\Controllers;

use App\Models\Usuarios;
use App\Models\Reportes;
use App\Models\Frecuencia;
use App\Models\Movimiento;
use CodeIgniter\Exceptions\PageNotFoundException;

class mainControllers extends BaseController
{
    public function __construct()
    {
        $this->usuario = new Usuarios;
        $this->reporte = new Reportes;
        $this->frecuencia = new Frecuencia;
        $this->movimiento = new Movimiento;
    }

    public function index()
    {
        $model = new Usuarios();
        $dat = $model->mostrarData();
        $data['data'] = $dat;
        echo view('templates/header', $data);
        echo view('templates/footer', $data);
        echo view('index', $data);
    }

    public function registerUser()
    {
        echo view('templates/header');
        echo view('templates/footer');
        return view('registerUser');
    }

    public function registUser()
    {
        $Usuario = new Usuarios();
        $password = $_POST['password'];
        $hash = $Usuario->hash($_POST['password']);
        $data =
            [
                "usuario" => $_POST['usuario'],
                "password" => $hash,
                "nombre" => $_POST['nombre'],
                "apellido" => $_POST['apellido'],
                "cedula" => $_POST['cedula'],
                "telefono" => $_POST['telefono'],
                "correo" => $_POST['correo'],
                "tipo" => $_POST['tipo']
            ];
        $ingreso = $this->usuario->insert($data);
        return redirect()->to(base_url() . "/");
    }

    public function userLogin()
    {
        echo view('templates/header');
        echo view('templates/footer');
        echo view('login');
    }

    public function login()
    {
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');
        $Usuario = new Usuarios();

        $datosUsuario = $Usuario->obtenerNombre(['usuario' => $usuario]);

        if (count($datosUsuario) > 0 && password_verify($password, $datosUsuario[0]['password'])) {

            $data = [
                "usuario" => $datosUsuario[0]['usuario'],
                "tipo" => $datosUsuario[0]['tipo'],
                "IDusuario" => $datosUsuario[0]['ID'],
                "logueado" => "logueado",
            ];

            $session = session();
            $session->set($data);
            var_dump($_SESSION); {
                if ($_SESSION['tipo'] === "Admin") {
                    return redirect()->to(base_url('tableUser'));
                } else {
                    return redirect()->to(base_url('/'));
                }
            }
        } else {
            return redirect()->to(base_url('userLogin'))->with('message', 'Sin cuenta registrada.');
        }
    }

    public function obtenerLista($ID)
    {
        $data = ["ID" => $ID];
        $usuario = new Usuarios();
        $dat = $usuario->mostrarData();
        $dot = $usuario->get_users();
        $datos['datos'] = $dot;
        $datos['datos'] = $dat;
        $respuesta = $usuario->obtenerNombre($data);
        $datos["datos"] = $respuesta;

        echo view('templates/header', $datos);
        echo view('templates/footer', $datos);
        echo view('tableUser', $datos);
    }

    public function tableUser()
    {
        $model = new Usuarios();
        $dat = $model->mostrarData();
        $dot = $model->get_users();
        $data['dot'] = $dot;
        $data['datos'] = $dat;


        echo view('templates/header', $data);
        echo view('templates/footer', $data);
        echo view('tableUser', $data);
    }

    public function obtenerUser($ID)
    {
        $data = ["ID" => $ID];
        $usuario = new Usuarios();
        $respuesta = $usuario->obtenerNombre($data);
        $daticos["datos"] =  $respuesta;


        echo view('templates/header', $daticos);
        echo view('templates/footer', $daticos);
        echo view('editUser', $daticos);
    }
    public function obtenerUsuario()
    {
        $data = ["ID" => $_SESSION['IDusuario']];
        $usuario = new Usuarios();
        $respuesta = $usuario->obtenerNombre($data);
        $daticos = ["datos" => $respuesta];

        echo view('templates/header', $daticos);
        echo view('templates/footer', $daticos);
        echo view('editUser', $daticos);
    }

    public function editUser()
    {
        $daticos =
            [
                "usuario" => $_POST['usuario'],
                "password" => $_POST['password'],
                "nombre" => $_POST['nombre'],
                "apellido" => $_POST['apellido'],
                "telefono" => $_POST['telefono'],
                "cedula" => $_POST['cedula'],
                "correo" => $_POST['correo']

            ];
        $ID = $_POST['ID'];
        $usuario = new Usuarios();
        $respuesta = $usuario->actualizar($daticos, $ID);

        if ($respuesta) {
            return redirect()->to(base_url() . '/tableUser');
        } else {
            return redirect()->to(base_url() . '/editUser');
        }
    }

    public function eliminar($ID = NULL)
    {
        $usuario = new Usuarios();

        if ($usuario->find($ID) == NULL) {
            throw PageNotFoundException::forPageNotFound();
        }
        $usuario->where('ID', $ID);
        $usuario->delete($ID);
        return redirect()->to('/tableUser')->with('message', 'Usuario eliminado con éxito.');
    }

    public function salir()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

    ///////////////////////

    public function crearReporte()
    {
        $frecuence = new Frecuencia();
        $dat = $frecuence->mostrarFrecuencias();
        $data['datos'] = $dat;
        echo view('templates/header', $data);
        echo view('templates/footer', $data);
        return view('crearReporte', $data);
    }

    public function crearReport()
    {
       $db = db_connect('default');
       $builder = $db->table('reportes');
       $builder2 = $db->table('movimiento');
       $fechaActual = date ('Y-m-d h:i:s', time());
        
       
       $data =
            [
                "nombreReportes" => $_POST['nombreReportes'],
                "frecuencia" => $_POST['frecuencia'],
            ];
            $builder->insert($data);
            $id = $db->insertID();
            $datos = [
                    "reporte" =>$id,
                    "fecha" => $fechaActual
                    ];
            $builder2->insert($datos);
            return redirect()->to(base_url() . "/");
    }

    public function reportList()
    {

    }

    /////////////////////////////////////

    public function crearFrecuencias()
    {
        echo view('templates/header');
        echo view('templates/footer');
        return view('crearFrecuencias');
    }

    public function crearFrecuence()
    {
        $Frecuencia = new Frecuencia();
        $data =
            [
                "nombreFrecuencia" => $_POST['nombreFrecuencia'],
                "dias" => $_POST['dias'],
            ];
        $ingreso = $this->frecuencia->insert($data);
        return redirect()->to(base_url() . "/");
    }
}
