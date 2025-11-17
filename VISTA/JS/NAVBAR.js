
window.addEventListener('resize', () => {
    const main = document.querySelector('main');
    const zoomLevel = window.innerWidth / 1000;
    main.style.backgroundSize = `${100 + zoomLevel * 50}%`;

    const titulo = document.querySelector("#titulo");

    if (window.innerWidth < 600) {
        //$("#nombre_sitio span").text("DHM");   
        //titulo.style.setProperty("font-size", "15px");      
    }
    else if (window.innerWidth < 700) {
        //$("#nombre_sitio span").text("Diccionario de El habla de Monterrey (DHM)");
        //titulo.style.setProperty("font-size", "18px");          
    }
    else {
        //$("#nombre_sitio span").text("Diccionario de El habla de Monterrey (DHM)");
        //titulo.style.setProperty("font-size", "22px");      
    }

    if (window.innerWidth < 990) {
        $("#bar_izq").hide();
    }
    else {
        $("#bar_izq").show();
    }

});

$(function () {
    $("#menuu").on("click", function () {
        const element = document.querySelector("#menuu");

        if (element.getAttribute("aria-expanded") == "true") {
            $(".menu").removeClass("active");

            $(this).html("<i class='fa-solid fa-xmark'></i>");
        }
        else {
            $(".menu").addClass("active");

            $(this).html("<i class='fa-solid fa-bars'></i>")
        }
    })
});

$("#a_reg").on("click", function () {
    location.href = 'REGISTRO_USUARIO.html';
});

$("#a_ini").on("click", function () {
    location.href = 'INICIO_SESION.html';
});

$(document).ready(function () {
    $('.ser_premium').click(function () {
        $('.popup_box').css({
            "opacity": "1", "pointer-events": "auto"
        });
    });
    $('.btn1').click(function () {
        $('.popup_box').css({
            "opacity": "0", "pointer-events": "none"
        });

        location.href = 'PAGINA_INICIAL_PREMIUM.HTML';
    });
    $('.btn2').click(function () {
        $('.popup_box').css({
            "opacity": "0", "pointer-events": "none"
        });
    });

    $('#cerrar_sesion').click(function () {
        location.href = '../../CONTROLADOR/C_CERRAR_SESION.php';
    });

});

