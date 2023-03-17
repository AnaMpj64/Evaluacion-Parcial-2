<!DOCTYPE html>
<html>
<head>
    <title>Cocina</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
</head>
<body>
    <div class="container mt-5">
    <h1><img src="../../public/img/cocina.png" width="100"height="100">Cocinas</h1>
        <hr>
        <div class="row">
            <div class="col-12 mb-2">
                <button id="nuevo" class="btn btn-success" data-toggle="modal" data-target="#modalCocina">Nuevo</button>
            </div>
            <div class="col-12">
                <table id="tablaCocina" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tipo</th>
                            <th>Fuente de Consumo</th>
                            <th>Tamaño</th>
                            <th>Sistema de Ventilación</th>
                            <th>Marca</th>
                            <th>Quemadores</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id=listacocinas>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalCocina" tabindex="-1" role="dialog" aria-labelledby="modalCocinaLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="formCocina" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCocinaLabel">Nueva Cocina</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="idCocinas" id="idCocinas">
                        <div class="form-group">
                            <label for="Tipo">Tipo</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" required>
                        </div>
                        <div class="form-group">
                            <label for="FuenteConsumo">Fuente de Consumo</label>
                            <input type="text" class="form-control" id="FuenteConsumo" name="FuenteConsumo" required>
                        </div>
                        <div class="form-group">
                            <label for="Tamano">Tamaño</label>
                            <input type="text" class="form-control" id="Tamano" name="Tamano" required>
                        </div>
                        <div class="form-group">
                            <label for="SistemaVentilacion">Sistema de Ventilación</label>
                            <input type="text" class="form-control" id="SistemaVentilacion" name="SistemaVentilacion" required>
                        </div>
                        <div class="form-group">
                            <label for="Marca">Marca</label>
                            <input type="text" class="form-control" id="Marca" name="Marca" required>
                        </div>
                        <div class="form-group">
                            <label for="Marca">Numero de quemadores</label>
                            <input type="text" class="form-control" id="NumeroQuemadores" name="NumeroQuemadores" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <!--<script src="../../public/js/cocina.js"></script>-->
    <script src="../../public/js/cocina.script.js"></script>
</body>
</html>