<?php



if (isset($_POST['insertar']) && $_POST['registrar'] == 'GestionCliente') {
     $nombre_gestion = $_POST['insertar'];
     get_personas($nombre_gestion);
} else {
     // die("Solicitud no válida.");
}

if (isset($_POST['codigoGestion']) && $_POST['setData'] == 'setData') {
     $codigo_gestion = $_POST['codigoGestion'];
     set_gestion($codigo_gestion);
} else {
     // die("Solicitud no válida.");
}


function get_personas($nombre_gestion)
{
     session_start();
     $codigo_usuario = $_SESSION['id'];
     $aplica_visita_tecnica = 'no';
     $atendido = 'no';
     try {

          include_once './database.php';
          $stmt = $db->prepare('INSERT INTO gestion (nombre_gestion, aplica_visita_tecnica, codigo_usuario, fecha_creacion ) VALUES (?, ?, ?, NOW())');
          $stmt->bind_param("ssi", $nombre_gestion, $aplica_visita_tecnica, $codigo_usuario);
          $stmt->execute();
          $id_insertado = $stmt->insert_id;

          $stmt2 = $db->prepare('INSERT INTO gestion_cliente (codigo_gestion, atendido, fecha_creacion ) VALUES (?, ?, NOW())');
          $stmt2->bind_param("is", $id_insertado, $atendido);
          $stmt2->execute();
          $id_insertado2 = $stmt2->insert_id;


          if ($stmt->affected_rows) {
               $respuesta = array(
                    'respuesta' => 'exito',
                    'id_insertado' => $id_insertado
               );
          } else {
               $respuesta = array(
                    'respuesta' => 'error'
               );
          }
          $stmt2->close();
          $stmt->close();
          $db->close();
     } catch (Exception $e) {
          $respuesta = array(
               'respuesta' => $e->getMessage()
          );
     }
     //  die(json_encode($respuesta));


     echo json_encode($respuesta);
}


function set_gestion($codigo_gestion)
{
     session_start();
     $codigo_usuario = $_SESSION['id'];
     $aplica_visita_tecnica = 'no';

     try {

          include_once './database.php';


          $getGestionCliente = "SELECT `codigo_gestion_cliente`, `codigo_gestion`, `atendido`, `fecha_creacion` FROM `gestion_cliente` where `codigo_gestion_cliente` = $codigo_gestion";
          $resultado = $db->query($getGestionCliente);
         
          $row = $resultado->fetch_row();
          echo json_encode($row[0]);
          
          

          // $codigo_gestion_cliente = $codigo['codigo_gestion_cliente'];
          // $stmt = $db->prepare('INSERT INTO ticket (codigo_gestion_cliente, nombre_cliente, apellido_cliente, direccion_cliente, telefono_cliente, codigo_gestion, problema_expuesto, solucion_brindada) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
          // $stmt->bind_param("issssiss", $codigo_gestion_cliente, $aplica_visita_tecnica, $codigo_usuario);
          // $stmt->execute();
          // $id_insertado = $stmt->insert_id;
          // if ($stmt->affected_rows) {
          //      $respuesta = array(
          //           'respuesta' => 'exito',
          //           'id_insertado' => $id_insertado
          //      );
          // } else {
          //      $respuesta = array(
          //           'respuesta' => 'error'
          //      );
          // }
          // $stmt->close();
          // $db->close();
     } catch (Exception $e) {
          $respuesta = array(
               'respuesta' => $e->getMessage()
          );
     }
     // die(json_encode($respuesta));

     // $respuesta = array(
     //      'respuesta' => 'data'
     // );
     // echo json_encode($respuesta);
}

function obtenerContactos()
{
     include 'database.php';
     try {
          return $conn->query("SELECT id, nombre, empresa, telefono FROM contactos");
     } catch (Exception $e) {
          echo "Error!!" . $e->getMessage() . "<br>";
          return false;
     }
}

// Obtiene un contacto toma un id.

function obtenerContacto($id)
{
     include 'database.php';
     try {
          return $conn->query("SELECT id, nombre, empresa, telefono FROM contactos WHERE id = $id");
     } catch (Exception $e) {
          echo "Error!!" . $e->getMessage() . "<br>";
          return false;
     }
}
