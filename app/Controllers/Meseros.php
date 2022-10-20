<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Mesero;
class Meseros extends Controller{

    public function buscarMeseros(){
        $mesero = new Mesero();
        $datoMesero['lista_mesero'] = $mesero->findAll();
        return view('mesero', $datoMesero);
    }

  public function guardarMeseros(){
    $mesero = new Mesero();
    $cod = $this->request->getVar('txt_codigo');
    $nombre = $this->request->getVar('txt_nombre');
    $apellido = $this->request->getVar('txt_apellido');
    $tel = $this->request->getVar('txt_tel');
    $contra = $this->request->getVar('txt_contra');

    $datos=['cod_mesero'=>$cod, 'nombre'=>$nombre, 'apellido'=>$apellido, 'telefono'=>$tel, 'contra'=>$contra];

    $mesero->insert($datos);
    $datoMesero['lista_mesero'] = $mesero->findAll();
    return view('mesero', $datoMesero);
  }

  public function eliminarMesero($cod = null){
    $mesero = new Mesero();
    $mesero->delete($cod);
    $datoMesero['lista_mesero'] = $mesero->findAll();
    return view('mesero', $datoMesero);
  }

  public function verMesero($cod=null){
    $mesero = new Mesero;
    $datoMesero['lista_mesero']=$mesero->where('cod_mesero', $cod)->first();
    return view('actualizar_mesero', $datoMesero);
  }

  public function actualizarMesero(){
    $mesero = new Mesero();
    $cod = $this->request->getVar('txt_codigo');
    $nombre = $this->request->getVar('txt_nombre');
    $apellido = $this->request->getVar('txt_apellido');
    $tel = $this->request->getVar('txt_tel');
    $contra = $this->request->getVar('txt_contra');

    $datos=['cod_mesero'=>$cod, 'nombre'=>$nombre, 'apellido'=>$apellido, 'telefono'=>$tel, 'contra'=>$contra];

    $mesero->update($cod, $datos);
    $datoMesero['lista_mesero']=$mesero->findAll();
    return view('mesero', $datoMesero);

  }
}