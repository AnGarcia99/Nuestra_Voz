$(document).ready(function() {
    $('#mostrar').click(function() {
        showPassword();
    });

    cookies();
});

function showPassword(){
    if($('#mostrar').hasClass('fa-eye') && ($("#ingPassword").val() != "")) {
        $('#ingPassword').removeAttr('type');
        $('#mostrar').addClass('fa-eye-slash').removeClass('fa-eye');
        $('.pwdtxt').html("Ocultar contraseña");
    } else {
        $('#ingPassword').attr('type','password');
        $('#mostrar').addClass('fa-eye').removeClass('fa-eye-slash');
        $('.pwdtxt').html("Mostrar contraseña");
    }
};

function cookies(){
    const botonAceptarCookies = document.getElementById('btn-aceptar-cookies');
    const avisoCookies = document.getElementById('aviso-cookies');
    const fondoAvisoCookies = document.getElementById('fondo-aviso-cookies');

    dataLayer = [];

    if(!localStorage.getItem('cookies-aceptadas')){
        avisoCookies.classList.add('activo');
        fondoAvisoCookies.classList.add('activo');
    } else {
        dataLayer.push({'event': 'cookies-aceptadas'});
    }

    botonAceptarCookies.addEventListener('click', () => {
        avisoCookies.classList.remove('activo');
        fondoAvisoCookies.classList.remove('activo');

        localStorage.setItem('cookies-aceptadas', true);

        dataLayer.push({'event': 'cookies-aceptadas'});
    });
};
