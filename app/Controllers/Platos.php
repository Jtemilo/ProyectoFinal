<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Plato;
class Platos extends Controller{

    public function buscarPlatos(){
        $plato = new Plato();
        $datoplato['lista_platos'] = $plato->findAll();
        return view('Platos', $datoplato);
    }

    public function guardarPlatos(){
        $plato = new Plato();
        $id = $this->request->getVar('txt_codigo');
        $nombre = $this->request->getVar('txt_nombre');
        $id_tamaño = $this->request->getVar('txt_tamaño');

        $datos=['id_platillo'=>$id , 'nombre'=>$nombre,'id_tamaño'=>$id_tamaño];

        $plato->insert($datos);
        $datoplato['lista_platos']= $plato->findAll();
        return view('Platos', $datoplato);
    }

    public function eliminarPlatos($id=null){
        $plato =new Plato();
        $plato->delete($id);
        $datoplato['lista_platos']= $plato->findAll();
        return view('Platos', $datoplato);

    }

    public function verplatos($id=null){
        $plato =new Plato();
        $datoPlato['lista_platos']=$plato->where('id_platillo', $id)->first();
        return view('actualizar_plato', $datoPlato);

    }

    public function actualizarplatos(){


        $plato = new Plato();
        $id = $this->request->getVar('txt_codigo');
        $nombre = $this->request->getVar('txt_nombre');
        $id_tamaño = $this->request->getVar('txt_tamaño');

        $datos=['id_platillo'=>$id , 'nombre'=>$nombre,'id_tamaño'=>$id_tamaño];

        $plato->update($id, $datos);
        $datoplato['lista_platos']= $plato->findAll();
        return view('platos', $datoplato);

    }

}