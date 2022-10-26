<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Pedido;
class Pedidos extends Controller{

    public function buscarPedidos(){
        $mesero = new Pedido();
        $datoMesero['lista_pedidos'] = $mesero->findAll();
        return view('pedido', $datoMesero);
    }

  public function guardarPedidos(){
    $pedido = new Pedido();
    $cod = $this->request->getVar('txt_codigo');
    $mesero = $this->request->getVar('txt_mesero');
    $fecha = $this->request->getVar('txt_fecha');
    $gerente = $this->request->getVar('txt_gerente');
    $hora = $this->request->getVar('txt_hora');

    $datos=['id_pedido'=>$cod, 'cod_mesero'=>$mesero, 'fecha_pedido'=>$fecha, 'gerente_id'=>$gerente, 'fecha_hora'=>$hora];

    $pedido->insert($datos);
    $datoPedido['lista_pedidos'] = $pedido->findAll();
    return view('pedido', $datoPedido);
  }

  public function eliminarPedidos($cod = null){
    $pedido = new Pedido();
    $pedido->delete($cod);
    $datoPedido['lista_pedidos'] = $pedido->findAll();
    return view('pedido', $datoPedido);
  }

  public function verPedidos($cod=null){
    $mesero = new Pedido;
    $datoMesero['lista_pedidos']=$mesero->where('id_pedido', $cod)->first();
    return view('actualizar_pedidos', $datoMesero);
  }

  public function actualizarPedidos(){
    $pedido = new Pedido();
    $cod = $this->request->getVar('txt_codigo');
    $mesero = $this->request->getVar('txt_mesero');
    $fecha = $this->request->getVar('txt_fecha');
    $gerente = $this->request->getVar('txt_gerente');
    $hora = $this->request->getVar('txt_hora');

    $datos=['id_pedido'=>$cod, 'cod_mesero'=>$mesero, 'fecha_pedido'=>$fecha, 'gerente_id'=>$gerente, 'fecha_hora'=>$hora];

    $pedido->update($cod, $datos);
    $datoMesero['lista_pedidos']=$pedido->findAll();
    return view('pedido', $datoMesero);

  }
}