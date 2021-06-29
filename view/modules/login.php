<script src="view/js/login.js"></script>

<div class="login-box">

    <div class="login-box-body">
        <div class="login-logo">
            <img src="view/img/plantilla/logo-blanco-bloque.png" class="img-responsive" style="padding: 30px 50px 0px 50px">
        </div>
        <p class="login-box-msg">Iniciar Sesión</p>

        <form method="post">
            <div class="form-group has-feedback wrap-input100">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                <input type="text" class="input100" placeholder="Usuario" name="ingUsuario" required>
                <span class="focus-efecto"></span>
            </div>

            <div class="form-group has-feedback wrap-input100">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <input type="password" class="input100" placeholder="Contraseña" name="ingPassword" id="ingPassword" required>
                <span class="focus-efecto"></span>
                <span class="fa fa-eye" id="mostrar"> <span class="pwdtxt" style="cursor:pointer;">Mostrar contraseña</span></span>
            </div>

            <button type="submit" id="login-form-btn" class="btn btn-primary btn-block btn-flat">Conectar</button>

            <div class="aviso-cookies" id="aviso-cookies">
                <img class="galleta" src="view/img/cookie.svg" alt="Galleta">
                <h3 class="titulo">Cookies</h3>
                <p class="parrafo">Utilizamos cookies propias y de terceros para mejorar nuestros servicios.</p>
                <button class="boton" id="btn-aceptar-cookies">De acuerdo</button>
            </div>
            <div class="fondo-aviso-cookies" id="fondo-aviso-cookies"></div>

            <?php
                $login = new ControllerUsuarios();
                $login -> Login();
            ?>

        </form>
    </div>
</div>