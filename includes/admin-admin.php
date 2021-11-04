<div class="container mt-5 ">

    <div class="row">

        <div class="col-4 col-md">
            <div>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input id="nombre" type="text" id="form6Example1" class="form-control" />
                            <label  class="form-label" for="form6Example1">Nombre</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input id="apellido" type="text" id="form6Example2" class="form-control" />
                            <label  class="form-label" for="form6Example2">Apellido</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input id="direccion" type="text" id="form6Example1" class="form-control" />
                            <label  class="form-label" for="form6Example1">Direccion</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input id="telefono" type="text" id="form6Example2" class="form-control" />
                            <label  class="form-label" for="form6Example2">Telefono</label>
                        </div>
                    </div>
                </div>

                <!-- Text input -->
                <div class=" mb-4">
                    <select id="select" class="form-select select" aria-label="Default select example">
                        <option selected>seleccione el codigo del ticket</option>                     
                        <?php
                        try {
                            include_once './database.php';
                            $stmt = "SELECT codigo_gestion, nombre_gestion, aplica_visita_tecnica, codigo_usuario, fecha_creacion FROM gestion";
                            $resultado = $db->query($stmt);
                        } catch (Exception $e) {
                            $error = $e->getMessage();
                            echo $error;
                        }
                        while ($admin = $resultado->fetch_assoc()) { ?>
                        <option class="ticket" value="<?php echo $admin['codigo_gestion']; ?>"><?php echo $admin['codigo_gestion']; ?></option>      
                        <?php }  ?>
                    </select>
                </div>


                <!-- Message input -->
                <div class="form-outline mb-4">
                    <textarea id="problema" class="form-control" id="form6Example7" rows="4"></textarea>
                    <label class="form-label" for="form6Example7">Problema expuesto por el cliente</label>
                </div>

                <div class="form-outline mb-4">
                    <textarea id="solucion" class="form-control" id="form6Example7" rows="4"></textarea>
                    <label class="form-label" for="form6Example7">Solucion brindada</label>
                </div>



                <!-- Submit button -->
                <button id="guardarTicket" class="btn btn-primary btn-block mb-4">Guardar gestion</button>
            </div>
        </div>

        <div class="col-4 col-md-4">
            <button id="atenderCliente" class="btn btn-primary btn-block mb-4">Atender cliente</button>
            <button id="actualizarListaTickets" class="btn btn-primary btn-block mb-4">Actualizar lista de tickets</button>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">N ticket</th>
                        <th scope="col">Gestion solicitada</th>
                    </tr>
                </thead>
                </tbody>
                <?php
                try {
                    include_once './database.php';
                    $stmt = "SELECT codigo_gestion, nombre_gestion, aplica_visita_tecnica, codigo_usuario, fecha_creacion FROM gestion";
                    $resultado = $db->query($stmt);
                } catch (Exception $e) {
                    $error = $e->getMessage();
                    echo $error;
                }
                while ($admin = $resultado->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $admin['codigo_gestion']; ?></td>
                        <td><?php echo $admin['nombre_gestion']; ?></td>
                    </tr>
                <?php }  ?>
                </tbody>
            </table>
        </div>

    </div>
</div>