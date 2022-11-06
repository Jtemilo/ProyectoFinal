<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Tamaño;
class Tamaños extends Controller{

    public function buscarTamaños(){
        $tamaños = new Tamaño();
        $listaTamaños['lista_tamaños'] = $tamaños->findAll();
        return view('tamaños', $listaTamaños);
    }

  public function guardarTamaños(){
    $tamaños = new Tamaño();
    $cod = $this->request->getVar('txt_codigo');
    $nombre = $this->request->getVar('txt_tamaño');
    

    $datos=['id_tamaño'=>$cod, 'tamaño'=>$nombre,];

    $tamaños->insert($datos);
    $datos['lista_tamaños'] = $tamaños->findAll();
    return view('tamaños', $datos);
  }

  public function eliminarTamaño($cod = null){
    $tamaños = new Tamaño();
    $tamaños->delete($cod);
    $datos['lista_tamaños'] = $tamaños->findAll();
    return view('tamaños', $datos);
  }

  public function verTamaños($cod=null){
    $tamaños = new Tamaño();
    $datos['lista_tamaños']=$tamaños->where('id_tamaño', $cod)->first();
    return view('actualizar_tamaño', $datos);
  }

  public function actualizarTamaño(){
    $tamaños = new Tamaño();
    $cod = $this->request->getVar('txt_codigo');
    $nombre = $this->request->getVar('txt_nombre');

    $datos=['id_tamaño'=>$cod, 'tamaño'=>$nombre];

    $tamaños->update($cod, $datos);
    $datos['lista_tamaños']=$tamaños->findAll();
    return view('tamaños', $datos);

  }
}