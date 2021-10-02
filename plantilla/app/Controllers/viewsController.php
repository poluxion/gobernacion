<?php 

namespace App\Controllers;
use App\Models\Usuarios;

class viewsController extends BaseController
{

    public function __construct()
    { 
        $this->usuario = new Usuarios;
    }

    public function index()
    {
        $mensaje = session('mensaje');
        echo view('plantilla/head');
        echo view('gobernacion/index');
        echo view('plantilla/footer');
    }
    public function SalvarUsuario()
    {
        $Usuario = new Usuarios();
        $password = $_POST['password'];
        $hash = $Usuario->hash($_POST['password']);
        $data = 
        [
            "usuario" => $_POST['usuario'],
            "password"=> $hash,
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "cedula" => $_POST['cedula'],
            "telefono" => $_POST['telefono'],
            "correo" => $_POST['correo'],
            "tipo"=> $_POST['tipo']
        ];
        $ingreso = $this->usuario->insert($data);
       return redirect()->to(base_url()."/userLogin");

    }
    
    public function ingresar()
    {
        return view('gobernacion/ingresar');
    }


    public function mostrar()
    {
        $crud = new Usuarios();
        $datos = $crud->mostrarData();

        $data = 
        [
            "datos" => $datos
        ];
        return view('gobernacion/mostrar',$data);
    }

    public function administrarUsuario()
    {
        return view('gobernacion/administrarUsuario');
    }

    public function actualizar()
    {   
        $datos = 
        [
            "usuario" => $_POST['usuario'],
            "password" => $_POST['password'],
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "cedula" => $_POST['cedula'],
            "telefono" => $_POST['telefono'],
            "correo" => $_POST['correo'],
        ];
        $ID = $_POST['ID'];
        $crud = new Usuarios();
        $respuesta = $crud->actualizar($datos, $ID);

        if ($respuesta) 
        {
            return redirect()->to(base_url().'/index');
        }else{
            return redirect()->to(base_url().'/index');
        }
    }

    public function crudUsuario()
    {
        return view('gobernacion/crudUsuario');
    }

    public function eliminar($ID)
    {
        return view('gobernacion/eliminar');
    }

    public function logout()
    {
        var_dump($_SESSION);
    }
    

    public function obtenerNombre($ID)
    {
        $data = ["ID" => $ID];
        $crud = new Usuarios();
        $respuesta = $crud->obtenerNombre($data); 
        $datos = ["datos" => $respuesta];

        return view('gobernacion/actualizar',$datos);
    }

    public function userLogin()
    {
        return view('gobernacion/login');
    }

    public function login() 
    {
		$usuario = $this->request->getPost('usuario');
		$password = $this->request->getPost('password');
		$Usuario = new Usuarios();

		$datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);

		if (count($datosUsuario) > 0 && password_verify($password, $datosUsuario[0]['password']))
         {

			$data = [
						"usuario" => $datosUsuario[0]['usuario'],
                        "tipo" => $datosUsuario[0]['tipo']	
					];

			$session = session();
			$session->set($data);
                    var_dump($_SESSION);
                    if (!session('tipo') == 'admin') 
                    {
                        return redirect()->to(base_url('/mostrar'));
                    }else
                    {
                        return redirect()->to(base_url('/index'));
                    }
			

            } else {
			return redirect()->to(base_url('/ingresar'));  
		}
	}

    public function salir() 
    {
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/index'));
	}
}
