<script src="view/js/catalogs.js"></script>
<script type="text/javascript" src="https://rawcdn.githack.com/franz1628/validacionKeyCampo/bce0e442ee71a4cf8e5954c27b44bc88ff0a8eeb/validCampoFranz.js"></script>

<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Mantenimiento de Catálogos
        </h1>

        <ol class="breadcrumb">
            <li><a href="inicio"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Administrar Catálogos</li>
        </ol>
    </section>

    <section class="content">
        <div class="box">

            <div id="catalog">

                <div id="select">
                    <label>Nombre del Catálogo:</label>

                    <select class="btn btn-primary" name="nombreCatalogo" id="nombreCatalogo">
                        <option value="0" class="default" disabled selected>Seleccione un catálogo:</option>

                        <?php 
                            $catalogs = ControllerCatalogs::getCatalogs();

                            foreach ($catalogs as $key => $value) {
                                echo '<option value="'.$value['NmFisCat'].'">'.$value['DsCatal'].'</option>';
                            }
                        ?> 
                    </select>

                </div>
                <div class="clearfix"></div>

                <!-- Mantto  -->
                <div class="mantto border-title" style="border: 1px solid #4AC4CF;">
                    <h1><span>Mantenimiento:</span></h1>

                    <div class="mantto-header">
                        <div class="form-group row">
                            <label for="descripcion" class="col-sm-2 col-form-label">Descripción:</label>
                            <div class="col-sm-8">
                                <input type="text" class="input100" id="descripcion" placeholder="Nuevo Valor" disabled>
                                <span class="focus-efecto"></span>
                            </div>
                        </div>
                    </div>

                    <div class="data border-title">
                        <h1><span>Datos:</span></h1>

                        <div class="content-table">
                            <table class="table dt-responsive" id="boney">
                                <thead class="table-head">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Descripción</th>
                                    </tr>
                                </thead>

                                <tbody id="datosCatalog"></tbody>

                                <tfoot></tfoot>
                            </table>
                        </div>

                    </div>
                </div>

                <!-- Tareas -->
                <div class="tareas border-title">
                    <h1><span>Tareas:</span></h1>

                    <div class="btn-row">
                        <button class="btn btn-tareas btn-primary" id="nuevo" disabled>Nuevo</button>
                    </div>

                    <div class="btn-row">
                        <button class="btn btn-tareas btn-danger" id="eliminar" disabled>Eliminar</button>
                    </div>

                    <div class="btn-row">
                        <button class="btn btn-tareas btn-success" id="modificar" disabled>Modificar</button>
                    </div>

                    <div class="btn-row">
                        <button class="btn btn-tareas btn-warning" id="cancelar" disabled>Cancelar</button>
                    </div>

                </div>

                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
</div>

<script src="view/dist/js/bootstrap-select.js"></script>