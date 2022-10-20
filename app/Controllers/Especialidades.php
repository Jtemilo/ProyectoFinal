<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Especialidad;
class Especialidades extends Controller{

    public function buscarEspecialidad(){
        $especialidad = new Especialidad();
        $datoEspecialidad['lista_especialidad']= $especialidad->findAll();
        return view('especialidad', $datoEspecialidad);
    }

    public function guardarEspecialidad(){
        $especialidad = new Especialidad();
        $id = $this->request->getVar("txt_id");
        $espe = $this-> request->getVar("txt_especialidad");

        $datos=['especialidad_id'=>$id, 'especialidad'=>$espe];

        $especialidad->insert($datos);

        $datoEspecialidad['lista_especialidad']= $especialidad->findAll();
        return view('especialidad', $datoEspecialidad);

    }

    public function eliminarEspecialidad($id=null){
        $especialidad = new Especialidad();

        $especialidad->delete($id);

        $datoEspecialidad['lista_especialidad']= $especialidad->findAll();
        return view('especialidad', $datoEspecialidad);


    }
    public function verEspecialidad($id=null){
        $especialidad = new Especialidad();

        $datoEspecialidad['lista_especialidad']=$especialidad->where('especialidad_id', $id)->first();
        
        return view ('actualizar_especialidad', $datoEspecialidad);


    }

    public function actualizarEspecialidad(){ 
        $especialidad = new Especialidad();

        $id = $this->request->getVar("txt_id");
        $espe = $this-> request->getVar("txt_especialidad");

        $datos=['especialidad_id'=>$id, 'especialidad'=>$espe];

        $especialidad->update($id,$datos);
        //carga otra vez la base de datos para visualizar las nuevas actualizaciones
        $datoEspecialidad['lista_especialidad']= $especialidad->findAll();
        return view('especialidad', $datoEspecialidad);
    
    }
}