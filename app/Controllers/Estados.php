<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Estado;
class Estados extends Controller{

    public function buscarEstado(){
        $estado = new Estado();
        $datoEstado['lista_estado']= $estado->findAll();
        return view('estados', $datoEstado);
    }

    public function guardarEstado(){
        $estado= new Estado();
        $id = $this->request->getVar("txt_id");
        $estado1 = $this->request->getVar("txt_estado");

        $datos=['estado_id'=>$id, 'estado'=>$estado1];

        $estado->insert($datos);
        $datoEstado['lista_estado']= $estado->findAll();
        return view('estados', $datoEstado);

    }

    public function eliminarEstado($id=null){
        $estado = new Estado();
        $estado->delete($id);
        $datoEstado['lista_estado']= $estado->findAll();
        return view('estados', $datoEstado);

    }

    public function verEstado($id=null){
        $estado = new Estado();
        $datoEstado['lista_estado']= $estado->where('estado_id', $id)->first();

        return view('actualizar_estado', $datoEstado);
        }

        public function actualizarEstado(){
            $estado = new Estado();

            $id = $this->request->getVar("txt_id");
            $estado1 = $this->request->getVar("txt_estado");
    
            $datos=['estado_id'=>$id, 'estado'=>$estado1];

            $estado->update($id, $datos);
            
            $datoEstado['lista_estado']= $estado->findAll();
            return view('estados', $datoEstado);

        }

}