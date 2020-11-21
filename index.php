<?php
    include_once 'bd/conexion.php'; // incluimos a nuestro archivo conexion.php
    $objeto = new Conexion();   // hacemos una instanica de nuestra clase Conexion, ubicada en conexion.php
    $conexion = $objeto->Conectar(); // llamamos a nuestro método Conectar() de la clase Conexion

    $consulta = "SELECT id, nombre, pais, edad FROM personas"; // hacemos una consulta para la vista de datos
    $resultado = $conexion->prepare($consulta); // se prepara la consulta
    $resultado->execute();  // se ejecuta el resultado
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC); // con fetchAll le pasamos todo a la variable data, crea una fila asociativa

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dataTables/datatables.min.css">
    <link rel="stylesheet" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="main.css">
    <title>CRUD 2020</title>
</head>
<body>

    <header class="bg-dark">
        <h3 class="text-center text-light p-2 text-monospace">CRUD con Datatables</h3>
    </header>

    <div class="container">
         <div class="row">
             <div class="col-12">
                 <button id="btnNuevo" type="button" class="btn btn-success">Nuevo</button>
             </div>
         </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width: 100">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>País</th>
                                <th>Edad</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data as $dat) { ?>
                            <td>  <?php echo $dat['id'] ?> </td>
                            <td>  <?php echo $dat['nombre'] ?>  </td>
                            <td>  <?php echo $dat['pais'] ?>  </td>
                            <td>  <?php echo $dat['edad']   ?></td>
                            <td></td>
                        <?php } ?>
                               
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

        <!-- Modal -->
    <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
             <form id="formPersona">
                <div class="modal-body">    
                    <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                    <label for="pais">País</label>
                    <input type="text" class="form-control" id="pais">
                    </div>
                    <div class="form-group">
                        <label for="pais">Edad</label>
                        <input type="text" class="form-control" id="edad">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" id="btnGuardar">Cancelar</button>
                    <button type="submit" class="btn btn-dark" id="btnGuardar">Guardar</button>
                </div>
             </form>
        </div>
        </div>
    </div>
    
    
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="datatables/datatables.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="main.js"></script>
</body>
</html>