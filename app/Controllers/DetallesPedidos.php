<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DetallePedido;
class DetallesPedidos extends Controller{

    public function buscarDetallesPedidos(){
        $detalle = new DetallePedido();
        $datoDetalle['lista_detallesPedidos'] = $detalle->findAll();
        return view('detallePedido', $datoDetalle);
    }

  public function guardarDetallesPedidos(){
    $detallePedido = new DetallePedido();
    $cod = $this->request->getVar('txt_codigo');
    $pedido = $this->request->getVar('txt_pedido');
    $platillo = $this->request->getVar('txt_platillo');
    $bebida = $this->request->getVar('txt_bebida');
    $cocinero = $this->request->getVar('txt_cocinero');
    $estado = $this->request->getVar('txt_estado');

    $datos=['id_detalle'=>$cod, 'id_pedido'=>$pedido, 'id_platillo'=>$platillo, 'id_bebida'=>$bebida, 'cocinero_id'=>$cocinero, 'estado_id'=>$estado];

    $detallePedido->insert($datos);
    $datoPedido['lista_detallesPedidos'] = $detallePedido->findAll();
    return view('detallePedido', $datoPedido);
  }

  public function eliminarDetallesPedidos($cod = null){
    $pedido = new DetallePedido();
    $pedido->delete($cod);
    $datoPedido['lista_detallesPedidos'] = $pedido->findAll();
    return view('detallePedido', $datoPedido);
  }

  public function verDetallesPedidos($cod=null){
    $detallePedido = new DetallePedido;
    $datoPedido['lista_detallesPedidos']=$detallePedido->where('id_detalle', $cod)->first();
    return view('actualizar_detallesPedidos', $datoPedido);
  }

  public function actualizarDetallesPedidos(){
    $detallePedido = new DetallePedido();
    $cod = $this->request->getVar('txt_codigo');
    $pedido = $this->request->getVar('txt_pedido');
    $platillo = $this->request->getVar('txt_platillo');
    $bebida = $this->request->getVar('txt_bebida');
    $cocinero = $this->request->getVar('txt_cocinero');
    $estado = $this->request->getVar('txt_estado');

    $datos=['id_detalle'=>$cod, 'id_pedido'=>$pedido, 'id_platillo'=>$platillo, 'id_bebida'=>$bebida, 'cocinero_id'=>$cocinero, 'estado_id'=>$estado];

    $detallePedido->update($cod, $datos);
    $datoPedido['lista_detallesPedidos'] = $detallePedido->findAll();
    return view('detallePedido', $datoPedido);

  }
}