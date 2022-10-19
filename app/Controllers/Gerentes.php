<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Gerente;
use Kint\Zval\Representation\SourceRepresentation;

class Gerentes extends Controller{
    public function verInicio(){
        return view('frm_sesion_gerentes');
    }
    public function iniciarSesion(){
        $usuario = $this->request->getVar('txt_usuario');
        $contra = $this->request->getVar('txt_contra');
        // realizar la consulta con sql, con la base y sus campos
        $sql = "select * from gerentes where nombre='{$usuario}' and contra='{$contra}'";
        //echo $sql;
        
        //conexión de la bd
        $conexion = db_connect();
        //ejecutar sql
        $ejecutar = $conexion->query($sql);
        
        //Obtener catnidad de registros
        $cantidad = $ejecutar->getNumRows();
        //echo $cantidad;

        if($cantidad>0){
            $usuario = $ejecutar->getRow(0);
           
            //realizar el IF con el campo directo
            if($usuario->tipo_usuario==1){
                //ingresa al paquete (carpeta) admin y luego a la vista menu_admin
                return view('gerentes');
            }elseif($usuario->tipo_usuario==2){
                //ingresa al paquete (carpeta) operador y luego a la vista menu_operador
                return view('meseros');
            }else{
                return view('frm_sesion_gerentes');
            }
        
        }else{
            //regresar y enviar un mensaje
            return redirect()->back()->with('mensaje','Datos incorrectos');
        }

    }
}