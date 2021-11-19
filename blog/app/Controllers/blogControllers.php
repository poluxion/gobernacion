<?php

namespace App\Controllers;
use App\Models\Usuarios;
use App\Models\Blog;



class blogControllers extends BaseController
{

    public function __construct()
    {
        $this->usuario = new Usuarios;
        $this->blog = new Blog;
        
    }


    public function index()
    {
        var_dump($_SESSION);
        $usuario = new Usuarios();
        $daticos = $usuario->mostrarData();
        $dot = $usuario->get_users();
        $blog = new Blog();
        $data = $blog->blogData();
        $datos['scripts'] = $scripts = array(
            base_url() . "/public/js/adminuser.js?nue=" . rand()
        );
        $datos['daticos'] = $daticos;
        $datos['datos'] = $data;
        $datos['dot'] = $dot;
        
        echo view('plantilla/head', $datos);
        echo view('plantilla/nav', $datos);
        echo view('index', $datos);
        echo view('plantilla/footer', $datos);
        //$this->load->helper('convert');
      //  helper('convert');
        
    }


    public function postRegister()
    {
        return view('postRegister');
    }

    public function registerPost()
    {
        $blog = new Blog();
        $data =
            [
                "tituloPost" => $_POST['tituloPost'],
                "post" => $_POST['post'],
            ];
        $ingreso = $this->blog->insert($data);
        return redirect()->to(base_url() . "/");
    }

    public function mostrarBlog()
    {
        $blog = new Blog();
        $datos = $blog->blogData();

        $data =
            [
                "datos" => $datos
            ];
        return view('index', $data);
    }

    public function obtenerPost($ID)
    {
        $data = ["ID" => $ID];
        $crud = new Blog();
        $respuesta = $crud->obtenerPost($data);
        $datos = ["datos" => $respuesta];


        echo view('plantilla/head', $datos);
        echo view('plantilla/nav', $datos);
        echo view('editPost', $datos);
        echo view('plantilla/footer', $datos);
    }

    public function editPost()
    {
        $datos =
            [
                "tituloPost" => $_POST['tituloPost'],
                "post" => $_POST['post']
            ];
        $ID = $_POST['ID'];
        $crud = new Blog();
        $respuesta = $crud->actualizarBlog($datos, $ID);

        if ($respuesta) {
            return redirect()->to(base_url() . '/');
        } else {
            return redirect()->to(base_url() . '/');
        }
    }

    public function pdfPreview($ID)
    {
        $data = ["ID" => $ID];
        $crud = new Blog();
        $respuesta = $crud->obtenerPost($data);
        $datos = ["datos" => $respuesta];

        return view('pdfPreview', $datos);
    }

    function htmltoPDF($ID)
    {
        $data = ["ID" => $ID];
        $crud = new Blog();
        $respuesta = $crud->obtenerPost($data);
        $datos = ["datos" => $respuesta];
        $dompdf = new \Dompdf\Dompdf();
        $dompdf->loadHtml(view('pdfPreview', $datos));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }


    ///////

    public function registerUser()
    {
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
                "nombreCompleto" => $_POST['nombreCompleto'],
                "correo" => $_POST['correo'],
                "tipo" => $_POST['tipo']
            ];
        $ingreso = $this->usuario->insert($data);
        return redirect()->to(base_url() . "/");
    }

    public function obtenerUser()
    {
        $data = ["ID" => $_SESSION['IDusuario']];
        $usuario = new Usuarios();
        $respuesta = $usuario->obtenerNombre($data);
        $daticos = ["datos" => $respuesta];

        return view('editUser', $daticos);
    }

    public function obtenerName($ID){
        //helper('convert');
        $data = $ID;
        $usuario = new Usuarios();
        $respuesta = $usuario->obtenerNombre($data);
        $datos = ["datos" => $respuesta];
         
        echo view('user_table', $datos);       
    }

    public function user_table(){
        $model = new Usuarios();
        $data['datos'] = $model->get_users();
        
        echo view('user_table',$data);
    }


    public function editUser()
    {
        $daticos =
            [
                "usuario" => $_POST['usuario'],
                "password" => $_POST['password'],
                "nombreCompleto" => $_POST['nombreCompleto'],
                "correo" => $_POST['correo']

            ];
        $ID = $_POST['ID'];
        $usuario = new Usuarios();
        $respuesta = $usuario->actualizar($daticos, $ID);

        if ($respuesta) {
            return redirect()->to(base_url() . '/');
        } else {
            return redirect()->to(base_url() . '/editUser');
        }
    }

    public function userLogin()
    {
        return view('login');
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
                return redirect()->to(base_url('/'));
            }
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function salir()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

    public function convert()
    {
        $numero = $this->request->getPost('numero');
     //   helper('convert');
        //convertir($numero);
        convert();  
        $num = convertir($numero);
        //define("Max");
         print_r($num);
         echo $num;
    }
}
