<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Editorial;

class Editoriales extends Controller
{
    public function listarEditoriales()
    {
        $editorial=new Editorial();
        $datos['lista_editorial'] = $editorial->findAll();
        return view('editoriales',$datos);
    }
    public function agregarEditoriales()
    {
        $cod = $this->request->getVar("txt_editorial");
        $nombre = $this->request->getVar("txt_nombre");
        $desp = $this->request->getVar("txt_descripcion");
        $tel = $this->request->getVar("txt_telefono");
        $mail = $this->request->getVar("txt_email");
        $url = $this->request->getVar("txt_url");
        //echo $cod . $nombre . $cod_editorial;
        $datos = ['cod_editorial' => $cod, 'nombre' => $nombre, 'direccion' => $desp, 
        'telefono' => $tel,  'email' => $mail,  'url' => $url];
        $editorial = new Editorial();
        $editorial->insert($datos);
        $datos['lista_editorial'] = $editorial->findAll();
        return view('editoriales',$datos);
    }

    public function eliminarEditorial($codigo=null){
        $editorial = new Editorial();

        $editorial->delete($codigo);
        //cargar nuevamente la tabla
        $datos['lista_editorial'] = $editorial->findAll();
        return view('editoriales',$datos);
    }

    public function verDatosEditorial($codigo=null){
        $editorial = new Editorial();
        $datos['editorial']=$editorial->where('cod_editorial',$codigo)->first();
        

        //cargar los datos en la vista
        return view('actualizar_editorial', $datos);
    }

    public function actualizarEditorial(){
        $editorial = new Editorial();
        $cod = $this->request->getVar("txt_editorial");
        $nombre = $this->request->getVar("txt_nombre");
        $desp = $this->request->getVar("txt_direccion");
        $tel = $this->request->getVar("txt_telefono");
        $mail = $this->request->getVar("txt_email");
        $url = $this->request->getVar("txt_url");
        $datos = ['cod_region' => $cod, 'nombre' => $nombre, 'direccion' => $desp, 'telefono' => $tel, 
        'email' => $mail, 'url'=> $url];
        $editorial->update($cod,$datos);
        $datos['lista_editorial'] = $editorial->findAll();
        return view('editoriales',$datos);

    }

}
