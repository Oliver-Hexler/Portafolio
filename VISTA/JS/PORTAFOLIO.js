$(document).ready(function () {

    let video_pwci = document.getElementById("pwci_vid");
    let video_pw_1 = document.getElementById("pw_vid");
    let video_pdi1 = document.getElementById("pdi_vid");
    let video_punto_1 = document.getElementById("ventas_vid_1");
    let video_punto_2 = document.getElementById("ventas_vid_2");
    let caja_proyecto_dhm = document.getElementById("caja_proyecto");
    let caja_proyecto_pw = document.getElementById("caja_proyecto_pw");
    let caja_proyecto_pwci = document.getElementById("caja_proyecto_pwci");
    let caja_proyecto_pdi = document.getElementById("caja_proyecto_pdi");
    let caja_proyecto_punto = document.getElementById("caja_proyecto_punto");

    $('#proyecto_dhm').click(function () {
        caja_proyecto_dhm.scrollTo(0, 0);

        $('#muro').css({
            "opacity": "1", "pointer-events": "none",
            "filter": "blur(1px)",
            "width": "100%",
            "height": "100%",
            "top": "0",
            "right": "0",
            "bottom": "0",
            "left": "0",
            "position": "fixed",
            "background-color": "trasparent",
            "z-index": "100"
        })

        $('#caja_proyecto').css({
            "opacity": "1", "pointer-events": "auto", "z-index": "10000"
        });
    });

    $('#proyecto_pw').click(function () {
        caja_proyecto_pw.scrollTo(0, 0);

        $('#muro').css({
            "opacity": "1", "pointer-events": "none",
            "filter": "blur(1px)",
            "width": "100%",
            "height": "100%",
            "top": "0",
            "right": "0",
            "bottom": "0",
            "left": "0",
            "position": "fixed",
            "background-color": "trasparent",
            "z-index": "100"
        })

        $('#caja_proyecto_pw').css({
            "opacity": "1", "pointer-events": "auto", "z-index": "10000"
        });
    });

    $('#proyecto_pwci').click(function () {
        caja_proyecto_pwci.scrollTo(0, 0);

        $('#muro').css({
            "opacity": "1", "pointer-events": "none",
            "filter": "blur(1px)",
            "width": "100%",
            "height": "100%",
            "top": "0",
            "right": "0",
            "bottom": "0",
            "left": "0",
            "position": "fixed",
            "background-color": "trasparent",
            "z-index": "100"
        })

        $('#caja_proyecto_pwci').css({
            "opacity": "1", "pointer-events": "auto", "z-index": "10000"
        });



    });

    $('#proyecto_pdi').click(function () {
        caja_proyecto_pdi.scrollTo(0, 0);

        $('#muro').css({
            "opacity": "1", "pointer-events": "none",
            "filter": "blur(1px)",
            "width": "100%",
            "height": "100%",
            "top": "0",
            "right": "0",
            "bottom": "0",
            "left": "0",
            "position": "fixed",
            "background-color": "trasparent",
            "z-index": "100"
        })

        $('#caja_proyecto_pdi').css({
            "opacity": "1", "pointer-events": "auto", "z-index": "10000"
        });


    });

    $('#proyecto_punto').click(function () {
        caja_proyecto_punto.scrollTo(0, 0);

        $('#muro').css({
            "opacity": "1", "pointer-events": "none",
            "filter": "blur(1px)",
            "width": "100%",
            "height": "100%",
            "top": "0",
            "right": "0",
            "bottom": "0",
            "left": "0",
            "position": "fixed",
            "background-color": "trasparent",
            "z-index": "100"
        })

        $('#caja_proyecto_punto').css({
            "opacity": "1", "pointer-events": "auto", "z-index": "10000"
        });


    });

    $('.btn2').click(function () {
        $('.popup_box').css({
            "opacity": "0", "pointer-events": "none"
        });

        $('#muro').css({
            "opacity": "0", "pointer-events": "none",
            "filter": "blur(0px)"
        })

        video_pw_1.pause();
        video_pwci.pause();
        video_pdi1.pause();
        video_punto_1.pause();
        video_punto_2.pause();
    });

});

