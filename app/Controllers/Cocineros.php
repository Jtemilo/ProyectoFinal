<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Cocinero;
class Cocineros extends Controller{

    public function buscarCocineros(){
        $cocinero = new Cocinero();
        $datoCocinero['lista_cocinero'] = $cocinero->findAll();
        return view('cocineros', $datoCocinero);
    }

    public function guardarCocineros(){
        $cocinero = new Cocinero();
        $id = $this->request->getVar('txt_codigo');
        $nombre = $this->request->getVar('txt_nombre');
        $apellido = $this->request->getVar('txt_apellido');
        $tel = $this->request->getVar('txt_tel');
        $especialidad = $this->request->getVar('txt_especialidad');

        $datos=['cocinero_id' => $id , 'nombre'=>$nombre, 'apellido'=>$apellido, 'telefono'=>$tel, 'id_especialidad'=>$especialidad];

        $cocinero->insert($datos);
        $datoCocinero['lista_cocinero']= $cocinero->findAll();
        return view('cocineros', $datoCocinero);
    }

    public function eliminarCocinero($id=null){
        $cocinero =new Cocinero();
        $cocinero->delete($id);
        $datoCocinero['lista_cocinero']= $cocinero->findAll();
        return view('cocineros', $datoCocinero);

    }

    public function verCocinero($id=null){
        $cocinero=new Cocinero();
        $datoCocinero['lista_cocinero']=$cocinero->where('cocinero_id', $id)->first();
        return view('actualizar_cocinero', $datoCocinero);

    }

    public function actualizarCocinero(){
        $cocinero = new Cocinero();
        $id = $this->request->getVar('txt_codigo');
        $nombre = $this->request->getVar('txt_nombre');
        $apellido = $this->request->getVar('txt_apellido');
        $tel = $this->request->getVar('txt_tel');
        $especialidad = $this->request->getVar('txt_especialidad');

        $datos=['cocinero_id'=> $id , 'nombre'=>$nombre, 'apellido'=>$apellido, 'telefono'=>$tel, 'id_especialidad'=>$especialidad];

        $cocinero->update($id, $datos);
        
        //cargar nuevamente la vista de cocineros
        $datoCocinero['lista_cocinero']= $cocinero->findAll();
        return view('cocineros', $datoCocinero);

    }

}