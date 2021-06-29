<script src="view/js/mtto-users.js"></script>
<div class="content-wrapper">

    <section class="content-header">

        <h1>
            Mantenimiento de Usuarios
        </h1>

        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Administrar Usuarios</li>
        </ol>

    </section>

    <section class="content">
        <div class="box">

            <div id="mtto-users">

                <div id="box-com-users">

                    <!-- Mantto Users -->
                    <div class="mantto-dt border-title" style="margin-bottom: 20px; border: 1px solid #4AC4CF;">
                        <h1><span>Datos Usuario:</span></h1>

                        <div class="select-tip-perso v-er" style="margin-bottom: 15px;">
                            <div class="form-inline">
                                <label style="margin-right: 34px;">Nombre del Usuario:</label>
                                <select name="nameUser" id="nameUser" class="btn btn-primary field-mtto-user">

                                    <option value="0" class="default" disabled selected><?php $i=1; while($i<15){echo'&nbsp;';$i++;}?>--- Seleccione una Opción ---</option>

                                    <?php
                                        $people = ControllerUsuarios::getPeople();

                                        foreach ($people as $key => $value) {
                                            echo '<option class="" value="'.$value['CvPerson'].'">'.$value['DsNombre'].' '.$value['DsApePat'].' '.$value['DsApeMat'].', '.$value['DsTipPerson'].'</option>';
                                        }
                                    ?>

                                </select>
                            </div>

                            <div id="NombreUsuarioError" class="alert-danger msg-error">¡Selecciona una de persona!</div>
                        </div>

                        <div class="select-tip-perso v-er" style="margin-bottom: 15px;">
                            <div class="form-inline">
                                <label style="margin-right: 53px;">Login del Usuario:</label>

                                <div class="form-group has-feedback wrap-input101" style="width: 50% !important;">
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                    <input type="text" id="Login" placeholder="Login" class="field-mtto-user input100" style="width: 100% !important;">
                                    <span class="focus-efecto"></span>
                                </div>

                            </div>

                            <div id="LoginUsuarioError" class="alert-danger msg-error">¡Introduzca un Login!</div>
                        </div>

                        <div class="select-tip-perso v-er" style="margin-bottom: 20px;">
                            <div class="form-inline">
                                <label>Password del Usuario:</label>
                                
                                <div class="form-group has-feedback wrap-input101" style="width: 50% !important;">
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                    <input type="password" id="Password" placeholder="Password" class="field-mtto-user input100" style="width: 100% !important;">
                                    <span class="focus-efecto"></span>
                                </div>
                                
                                <button id="eye" class="btn btn-primary btn-sm" style="height: 32px; width: 32px; border-radius: 50%; text-align: left; margin-left: 10px;">
                                    <i class="fa fa-eye"></i>
                                </button>

                            </div>

                            <div id="PasswordUsuarioError" class="alert-danger msg-error">¡Introduce una password!</div>
                        </div>

                        <div class="select-tip-perso v-er" style="margin-bottom: 15px;">
                            <div class="form-inline">
                                <label style="margin-right: 40px;">Fecha de Inicio:</label>
                                <input id="FecIni" type="date" class="btn btn-primary" onkeydown="return true">

                            </div>

                            <div id="FecIniError" class="alert-danger msg-error">¡Fecha incorrecta!</div>
                        </div>

                        <div class="select-tip-perso v-er" style="margin-bottom: 20px;">
                            <div class="form-inline">
                                <label>Fecha de Termino:</label>
                                <input type="date" id="FecFin" class="btn btn-primary" onkeydown="return true">

                            </div>
                            
                            <div id="FecFinError" class="alert-danger msg-error">¡Fecha incorrecta!</div>
                        </div>

                        <div class="select-tip-perso">
                        <div class="form-inline">
                            <label>Estado de la Cuenta:</label>
                            <input type="checkbox" id="EdoCta">
                        </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>

                </div>

                <!-- Tareas -->
                <div class="tareas border-title" style="width: 17%; margin-top: 1%">
                    <h1><span>Tareas</span></h1>

                    <div class="btn-row">
                        <button class="btn btn-tareas btn-primary" id="nuevo">Nuevo</button>
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

                <div class="content-table table-dt" style="width: 85%;">
                    <table class="table dt-responsive">
                        <thead class="table-head">
                            <tr>
                                <th class="columna">#</th>
                                <th class="columna">Nombre</th>
                                <th class="columna">Login</th>
                                <th class="columna">FecIni</th>
                                <th class="columna">FecFin</th>
                                <th class="columna">EdoCta</th>
                            </tr>
                        </thead>

                        <tbody id="UsersTable">
                            <?php 

                                $users = ControllerUsuarios::getUsers();

                                foreach ($users as $key => $value) {
                                    echo '
                                        <tr class="filasTabla" id="'.$value['CvUser'].'" onclick="selectRow(this.id);">
                                            <td>'.$value['CvUser'].'</td>
                                            <td id="NombreUser">'.$value['CvPerson'].'</td>
                                            <td>'.$value['Login'].'</td>
                                            <td>'.$value['FecIni'].'</td>
                                            <td>'.$value['FecFin'].'</td>';

                                            if ($value['EdoCta'] == 1) {
                                                echo '<td><span class="btn btn-success btn-xs" style="height: 15px; width: 15px; border-radius: 50%; text-align: left;"></span></td>';
                                            } else {
                                                echo '<td><span class="btn btn-danger btn-xs" style="height: 15px; width: 15px; border-radius: 50%; text-align: left;"></span></td>';
                                            }
                                    echo'</tr>';
                                }

                            ?>           
                        </tbody>

                        <tfoot></tfoot>
                    </table>    
                </div>
            </div>
            <script>enableComponents(false)</script>
    </section>
</div>

