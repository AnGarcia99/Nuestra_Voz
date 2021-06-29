<script src="view/js/password.js"></script>
<link rel="stylesheet" href="view/css/toggle-switch.css">

<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Cambiar contraseña
        </h1>

        <ol class="breadcrumb">
            <li><a href="inicio"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Cambiar contraseña</li>
        </ol>
    </section>

    <section class="content">
        <div class="box">

            <br>

            <div class="mtto-users" style="width: 42% !important; margin-left: 30%;">

                <div class="mantto-dt border-title" style="margin-bottom: 20px; border: 1px solid #4AC4CF;">
                    <h1><span>Usuario Actual:</span></h1>

                    <form method="POST" style="margin-left: 10%; margin-top: 3%;">
                    
                        <div style="margin-left: 10%;">    
                            <label for="current_password">Contraseña Actual:</label>
                            <div class="form-inline components wrap-inputpass">
                                <input type="password" name="current_password" id="current_password" class="inputpass" required>
                                <span class="focus-efecto"></span>

                                <label class="switch btn btn-primary btn-sm" style="width: 32px; height: 32px; border-radius: 50px; text-align: left;">
                                    <span class="fa fa-eye"></span>
                                    <input type="checkbox" id="check_current" inputCheck="current_password">
                                </label>
                            </div>

                            <label for="new_password">Nueva Contraseña:</label>
                            <div class="form-inline components wrap-inputpass">
                                <input type="password" name="new_password" id="new_password" class="inputpass" required>
                                <span class="focus-efecto"></span>

                            <label class="switch btn btn-primary btn-sm" style="width: 32px; height: 32px; border-radius: 50px; text-align: left;">
                                <span class="fa fa-eye"></span>
                                <input type="checkbox" id="check_new" inputCheck="new_password">
                            </label>
                            </div>

                            <label for="confirm_password">Confirmar Contraseña:</label>
                            <div class="form-inline components wrap-inputpass"> 
                                <input type="password" name="confirm_password" id="confirm_password" class="inputpass" required aria-describedby="button-addon2">
                                <span class="focus-efecto"></span>

                                <label class="switch btn btn-primary btn-sm" style="width: 32px; height: 32px; border-radius: 50px; text-align: left;">
                                    <span class="fa fa-eye"></span>
                                    <input type="checkbox" id="check_confirm" inputCheck="confirm_password">
                                </label>
                            </div>
                        </div>

                        <br>

                        <div class="form-group">
                            <button type="submit" id="Cambiar" class="btn btn-success btn-small btn-lg" style="width: 40%;">Cambiar</button>
                            <a class="btn btn-danger btn-small btn-lg" href="change-password" style="width: 40%; margin-left: 30px;">Cancelar</a>
                        </div>

                        <?php
                        $Passw = new ControllerPassword();
                        $Passw->changePassword();
                        ?>

                    </form>
                </div>

            </div>

            <div class="clearfix"></div>

        </div>
    </section>

</div>