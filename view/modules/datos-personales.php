<script src="view/js/datperson.js"></script>

<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Mantenimiento de Datos Personales
        </h1>

        <ol class="breadcrumb">
            <li><a href="inicio"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Administrar Datos Personales</li>
        </ol>
    </section>

    <section class="content">
        <div class="box">

            <!-- Container principal -->
            <div id="datos-personales">


                <div class="select-tip-perso" style="margin-bottom: 20px;">
                    <div class="form-inline">
                        <label>Tipo de persona:</label>
                        <select name="TipPerson" id="TipPerson" class="btn btn-primary">

                            <option value="0" class="default" disabled selected>Seleccione una Opción:</option>

                            <?php 
                                $TipPerson = ControllerPersonalData::getTipPerson();
                                
                                foreach ($TipPerson as $key => $value) {
                                    echo '<option class="option" value="'.$value['CvTipPerson'].'">'.$value['DsTipPerson'].'</option>';
                                }
                            ?>  

                        </select>

                        <div id="TipPersonError" class="alert-danger msg-error">¡Selecciona un tipo de persona!</div>
                    </div>
                </div>

                <div id="box-com">
                    <!-- Mantto Datos Personales -->
                    <div class="mantto-dt border-title" style="border: 1px solid #4AC4CF;">
                        <h1><span>Datos Personales:</span></h1>

                        <!-- Input CURP -->
                        <div class="componentes">
                            <label>CURP:</label>

                            <div class="input-group wrap-input101">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                <input name="curp" id="curp" placeholder="Requerido" class="input100" type="text" maxlength="18" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                <span class="focus-efecto"></span>
                            </div>

                            <div id="CurpError" class="alert-danger msg-error">¡Ingrese una CURP!</div>
                            
                        </div>

                        <!-- Input RFC -->
                        <div class="componentes">
                            <label>RFC:</label>

                            <div class="input-group wrap-input101">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                <input name="rfc" id="rfc" placeholder="Opcional" class="input100" type="text" maxlength="13" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                <span class="focus-efecto"></span>
                            </div>
                            
                            <div id="RfcError" class="alert-danger msg-error">¡Ingrese una Rfc!</div>
                        </div>

                        <!-- Input Email -->
                        <div class="componentes" style="margin-bottom: 10px;">
                            <label>Email:</label>

                            <div class="input-group wrap-input101">
                                <span class="fa fa-envelope form-control-feedback"></span>
                                <input name="email" id="email" placeholder="ejemplo@email.com" class="input100" type="email" required>
                                <span class="focus-efecto"></span>
                            </div>

                            <div id="EmailError" class="alert-danger msg-error">¡Ingrese un Email!</div>
                            
                        </div>

                        <br><br><br><br>
                        <div class="clearfix"></div>

                        <!-- Select Name -->
                        <div class="componentes">
                            <label>Nombre:</label>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <!-- selectpicker -->
                                <select name="nombre" id="nombre" class="btn btn-primary">
                                    
                                    <option value="0" class="default" disabled selected>Seleccione una Opción</option>

                                    <?php 
                                        $names = ControllerPersonalData::getNames();

                                        foreach ($names as $key => $value) {
                                            echo '<option class="option" value="'.$value['CvNombre'].'">'.$value['DsNombre'].'</option>';
                                        }
                                    ?> 

                                </select>

                            </div>

                            <div id="NombreError" class="alert-danger msg-error">¡Seleccione un nombre!</div>

                        </div>
                        

                        <!-- Select ApePat -->
                        <div class="componentes">
                            <label>Apellido Paterno:</label>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <select name="ApePat" id="ApePat" class="btn btn-primary">

                                   <option value="0" class="default" disabled selected>Seleccione una Opción</option>

                                    <?php 
                                        $lastnames = ControllerPersonalData::getLastNames();

                                        foreach ($lastnames as $key => $value) {
                                            echo '<option class="option" value="'.$value['CvApellido'].'">'.$value['DsApellido'].'</option>';
                                        }
                                    ?> 

                                </select>
                            </div>
                            
                            <div id="ApePatError" class="alert-danger msg-error">¡Seleccione un apellido paterno!</div>

                        </div>

                        <!-- Select ApeMat -->
                        <div class="componentes">
                            <label>Apellido Materno:</label>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <select name="ApeMat" id="ApeMat" class="btn btn-primary">
    
                                    <option value="0" class="default" disabled selected>Seleccione una Opción</option>

                                    <?php 
                                        $lastnames = ControllerPersonalData::getLastNames();

                                        foreach ($lastnames as $key => $value) {
                                            echo '<option class="option" value="'.$value['CvApellido'].'">'.$value['DsApellido'].'</option>';
                                        }
                                    ?> 

                                </select>
                            </div>
                            
                            <div id="ApeMatError" class="alert-danger msg-error">¡Seleccione un apellido materno!</div>
                            
                        </div>

                        <br><br><br><br>
                        <div class="clearfix"></div>

                        <!-- Input FecNac -->
                        <div class="componentes">
                            <label>Fecha de Nacimiento:</label>

                            <div class="input-group">
                                <input name="fecha" id="fecha" class="btn btn-primary" type="date" onkeydown="return true" required>
                                <span class="focus-efecto"></span>
                            </div>
                            
                            <div id="DateError" class="alert-danger msg-error">¡Ingrese una fecha!</div>

                        </div>

                        <!-- Select Genero -->
                        <div class="componentes">
                            <label>Género:</label>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-venus-mars"></i></span>
                                <select name="genero" id="genero" class="btn btn-primary">
                                    
                                    <option value="0" class="default" disabled selected>Seleccione una Opción</option>

                                    <?php 
                                        $genders = ControllerPersonalData::getGenders();

                                        foreach ($genders as $key => $value) {
                                            echo '<option class="option" value="'.$value['CvGenero'].'">'.$value['DsGenero'].'</option>';
                                        }
                                    ?> 

                                </select>
                            </div>
                            
                            <div id="GeneroError" class="alert-danger msg-error">¡Seleccione un género!</div>
                            
                        </div>

                        <!-- Input Teléfono -->
                        <div class="componentes">
                            <label>Teléfono:</label>

                            <div class="input-group wrap-input101">
                                <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
                                <input name="telefono" id="telefono" placeholder="Opcional" class="input100" type="text" maxlength="10" pattern="\x2b[0-9]+" required>
                                <span class="focus-efecto"></span>
                            </div>
                            
                            <div id="TelefonoError" class="alert-danger msg-error">¡Ingresa un numero telefónico!</div>

                        </div>

                        <br><br><br><br>
                        <div class="clearfix"></div>
                    </div>

                    <br>

                    <!-- Mantto Datos Personales | Dirección -->
                    <div class="mantto-dt border-title" style="border: 1px solid #4AC4CF;">
                        <h1><span>Datos Dirección:</span></h1>

                        <!-- Select Estado -->
                        <div class="componentes">
                            <label>Estado:</label>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                <select name="estado" id="estado" class="btn btn-primary">
                                    
                                    <option value="0" class="default" disabled selected>Seleccione una Opción</option>

                                    <?php 
                                        $states = ControllerPersonalData::getStates();

                                        foreach ($states as $key => $value) {
                                            echo '<option class="option" value="'.$value['CvEstado'].'">'.$value['DsEstado'].'</option>';
                                        }
                                    ?>

                                </select>
                            </div>
                            
                            <div id="EstadoError" class="alert-danger msg-error">¡Seleccione un estado!</div>
                            
                        </div>

                        <!-- Select Municipio -->
                        <div class="componentes">
                            <label>Municipio:</label>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                <select name="municipio" id="municipio" class="btn btn-primary">
                                    
                                    <option value="0" class="default" disabled selected>Seleccione una Opción</option>

                                    <?php 
                                        $municipalities = ControllerPersonalData::getMunicipalities();

                                        foreach ($municipalities as $key => $value) {
                                            echo '<option class="option" value="'.$value['CvMunicipio'].'">'.$value['DsMunicipio'].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>

                            <div id="MunicipioError" class="alert-danger msg-error">¡Seleccione un municipio!</div>
                            
                        </div>

                        <!-- Select Colonia -->
                        <div class="componentes">
                            <label>Colonia:</label>

                            <div class="input-group">
                                <span class="input-group-addon"><img src="view/img/colonia.png" width="10px"></span>
                                <select name="colonia" id="colonia" class="btn btn-primary">

                                    <option value="0" class="default" disabled selected>Seleccione una Opción</option>

                                    <?php 
                                        $colonies = ControllerPersonalData::getColonies();

                                        foreach ($colonies as $key => $value) {
                                            echo '<option class="option" value="'.$value['CvColonia'].'">'.$value['DsColonia'].'</option>';
                                        }
                                    ?>

                                </select>
                            </div>
                            
                            <div id="ColoniaError" class="alert-danger msg-error">¡Seleccione una colonia!</div>
                            
                        </div>

                        <br><br><br><br>
                        <div class="clearfix"></div>

                        <!-- Select Calle -->
                        <div class="componentes">
                            <label>Calle:</label>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-street-view"></i></span>
                                <select name="calle" id="calle" class="btn btn-primary">
    
                                    <option value="0" class="default" disabled selected>Seleccione una Opción</option>

                                    <?php 
                                        $streets = ControllerPersonalData::getStreets();

                                        foreach ($streets as $key => $value) {
                                            echo '<option class="option" value="'.$value['CvCalle'].'">'.$value['DsCalle'].'</option>';
                                        }
                                    ?> 

                                </select>
                            </div>
                            
                            <div id="CalleError" class="alert-danger msg-error">¡Seleccione una calle!</div>
                            
                        </div>

                        <!-- Input Numero -->
                        <div class="componentes">
                            <label>No. de Casa:</label>

                            <div class="input-group wrap-input101">
                                <span class="fa fa-hashtag form-control-feedback"></span>
                                <input name="numero" id="numero" placeholder="Opcional" class="input100" type="text" maxlength="6">
                                <span class="focus-efecto"></span>
                            </div>
                            
                        </div>

                        <!-- Input Codigo Postal -->
                        <div class="componentes">
                            <label>Código Postal:</label>

                            <div class="input-group wrap-input101">
                                <span class="fa fa-hashtag form-control-feedback"></span>
                                <input name="cp" id="cp" placeholder="Requerido" class="input100" type="text" maxlength="5" required>
                                <span class="focus-efecto"></span>
                            </div>

                            <div id="CpError" class="alert-danger msg-error">¡Ingrese un código postal!</div>
                            
                        </div>

                        <br><br><br><br>
                        <div class="clearfix"></div>
                    </div>

                </div>

                <!-- Tareas -->
                <div class="tareas border-title" style="width: 17%;">
                    <h1><span>Tareas</span></h1>

                    <div class="btn-row">
                        <button class="btn btn-tareas btn-primary" id="nuevo" >Nuevo</button>
                    </div>

                    <div class="btn-row">
                        <button class="btn btn-tareas btn-danger" id="eliminar">Eliminar</button>
                    </div>

                    <div class="btn-row">
                        <button class="btn btn-tareas btn-success" id="modificar">Modificar</button>
                    </div>

                    <div class="btn-row">
                        <button class="btn btn-tareas btn-warning" id="cancelar">Cancelar</button>
                    </div>
                </div>

                <div class="clearfix"></div>
                <br>

                <div class="content-table table-dt">
                    <table class="table dt-responsive">
                        <thead class="table-head">
                            <tr>
                                <th class="columna">Curp</th>
                                <th class="columna">Nombre</th>
                                <th class="columna">A. Paterno</th>
                                <th class="columna">A. Materno</th>
                                <th class="columna">Edad</th>
                                <th class="columna">Estado</th>
                                <th class="columna">Municipio</th>
                                <th class="columna">Colonia</th>
                                <th class="columna">Calle</th>
                                <th class="columna">Número</th>
                                <th class="columna">Cod. Postal</th>
                                <th class="columna">T. De Persona</th>
                            </tr>
                        </thead>

                        <tbody id="PeopleTable">
                            <?php 
                                $data = ControllerPersonalData::getDataTable();

                                foreach ($data as $key => $value) {
                                    echo '
                                        <tr class="filasTabla" id="'.$value['CvPerson'].'" onclick="selectRow(this.id);">
                                            <td>'.$value['Curp'].'</td>    
                                            <td>'.$value['Nombre'].'</td>
                                            <td>'.$value['ApePat'].'</td>
                                            <td>'.$value['ApeMat'].'</td>
                                            <td>'.$value['Edad'].'</td>
                                            <td>'.$value['Estado'].'</td>
                                            <td>'.$value['Municipio'].'</td>
                                            <td>'.$value['Colonia'].'</td>
                                            <td>'.$value['Calle'].'</td>
                                            <td>'.$value['Numero'].'</td>
                                            <td>'.$value['Cp'].'</td>
                                            <td>'.$value['DsTipPerson'].'</td>
                                        </tr>
                                    ';    
                                }
                            ?>
                        </tbody>

                        <tfoot></tfoot>
                    </table>
                </div>
            </div>
        </div>
        <script>enableComponents(false)</script>
    </section>
</div>


<script src="view/dist/js/bootstrap-select.js"></script>
