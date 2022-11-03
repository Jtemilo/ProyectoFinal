<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Jefe;
class Jefes extends Controller{

    public function buscarJefes(){
        $detalle = new Jefe();
        $datoDetalle['lista_jefes'] = $detalle->findAll();
        return view('jefes', $datoDetalle);
    }

  public function guardarJefes(){
    $detalleJefe = new Jefe();
    $cod = $this->request->getVar('txt_codigo');
    $nombre = $this->request->getVar('txt_nombre');
    $apellido = $this->request->getVar('txt_apellido');
    $contra = $this->request->getVar('txt_contra');
    $user = $this->request->getVar('txt_user');
   

    $datos=['gerente_id'=>$cod, 'nombre'=>$nombre, 'apellido'=>$apellido, 'contra'=>$contra, 'tipo_usuario'=>$user];

    $detalleJefe->insert($datos);
    $datoJefe['lista_jefes'] = $detalleJefe->findAll();
    return view('jefes', $datoJefe);
  }

  public function eliminarJefes($cod = null){
    $jefe = new Jefe();
    $jefe->delete($cod);
    $datoJefe['lista_jefes'] = $jefe->findAll();
    return view('jefes', $datoJefe);
  }

  public function verJefes($cod=null){
    $detalleJefe = new Jefe();
    $datoJefe['lista_jefes']=$detalleJefe->where('gerente_id', $cod)->first();
    return view('actualizar_jefes', $datoJefe);
  }

  public function actualizarJefes(){
    $detalleJefe = new Jefe();
    $cod = $this->request->getVar('txt_codigo');
    $nombre = $this->request->getVar('txt_nombre');
    $apellido = $this->request->getVar('txt_apellido');
    $contra = $this->request->getVar('txt_contra');
    $user = $this->request->getVar('txt_user');
   

    $datos=['gerente_id'=>$cod, 'nombre'=>$nombre, 'apellido'=>$apellido, 'contra'=>$contra, 'tipo_usuario'=>$user];

    $detalleJefe->update($cod, $datos);
    $datoJefe['lista_jefes'] = $detalleJefe->findAll();
    return view('jefes', $datoJefe);

  }
}