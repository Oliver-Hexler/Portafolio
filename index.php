<!DOCTYPE html>
<html lang="en" style="background-color: black;">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Portafolio</title>
   <link rel="stylesheet" href="./VISTA/FRAMEWORKS/bootstrap/twitter-bootstrap.min.css">
   <link rel="stylesheet" href="./VISTA/FRAMEWORKS/bootstrap/bootsrap.min.css">
   <link rel="stylesheet" href="./VISTA/FRAMEWORKS/ionicons/css/ionicons.min.css">
   <link rel="stylesheet" href="./VISTA/FRAMEWORKS/fontawesome-free-6.7.2-web/css/all.min.css">
   <link rel="stylesheet" href="./VISTA/CSS/FOOTER_PRUEBA.css">

   <link rel="stylesheet" href="./VISTA/CSS/SCROLL.css">
   <link rel="stylesheet" href="./VISTA/CSS/INDEX.css">
   <link rel="stylesheet" href="./VISTA/CSS/CAJAS_INFO.css">

   <link rel="stylesheet" href="./VISTA/FRAMEWORKS/bootstrap/bootsrap.min.css">
   <link rel="stylesheet" href="./VISTA/CSS/NAVBAR_PRUEBA.css">

</head>

<body>
   <header>

      <nav id="eNav" class="navbar navbar-expand-lg bg-body-tertiary">

         <label class="titulo_port">
            <h2>Mi portafolio</h2>
         </label>

      </nav>

   </header>

   <div class="wrapper_fav">

      <main>

         <div id="muro" class="muro">
            <!--Es para obscurecer el fondo cuando se abré un recuadro de un proyecto-->
         </div>

         <div class="popup_box" id="caja_proyecto">

            <h1><b id="nombre" style="font-family: monospace;">Sitio Web - El diccionario de 'El habla de
                  Monterrey'</b>
            </h1>

            <br>

            <div class="info_proyecto_box">

               <div class="parrafo_div">
                  <p id="texto_proyecto">
                     Este proyecto sigue en desarrollo actualmente. Se trata de una aplicación web donde se podrá
                     consultar
                     palabras, cuyo significado se puede interpretar de otra manera en el norte del país. El proyecto
                     original en formato de libro (El habla de Monterrey) proviene de la Doctora Lidia Rodríguez Alfano.
                     Este proyecto está siendo hecho en colaboración entre la Universidad Autónoma de Nuevo León y el
                     Tecnológico de Monterrey. Los administradores podrán gestionar las palabras y subir audios de
                     ejemplos
                     para publicarse al público general.
                  </p>
               </div>

               <div>
                  <div class="datos_proyecto">
                     <label><b>Tipo de proyecto:</b> Profesional</label>
                     <label><b>Ubicación:</b> Monterrey, Nuevo León</label>
                     <label><b>Rol:</b> Full Stack</label>
                     <label><b>Miembros del equipo:</b> Hugo Martín De J. Ibarra Elizondo, Pablo García González</label>
                     <label><b>Fecha:</b> Febrero 2025 - Actualidad</label>
                  </div>

                  <div class="text_div">

                     <div class="iconos_div">

                        <i class="fa-brands fa-html5" title="HTML5"></i>

                        <i class="fa-brands fa-css" title="CSS"></i>

                        <i class="fa-brands fa-js" title="JavaScript"></i>

                        <i class="fa-brands fa-php" title="php"></i>

                        <i class="fa-brands icons8-jquery" title="JQuery"></i>

                        <i class="fa-brands icons8-mysql" title="MySQL"></i>

                     </div>

                  </div>
               </div>

            </div>

            <hr class="hr_liner">



            <a class="link" href="https://diccionarioelhablademonterrey.com/INDEX.php" target="_blank">Sitio web<i
                  class="fa-solid fa-arrow-up-right-from-square" style="margin-inline: 5px;"></i></a>

            <div class="contenedor" style="justify-content: center;">
               <div class="carrusel-container">
                  <button class="nav_carrusel prev" onclick="moverCarrusel(-1, 'dhm')">&#10094;</button>
                  <div id="dhm" class="carrusel">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Capturas_dhm/Diapositiva1.png"
                        alt="Imagen 1">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Capturas_dhm/Diapositiva2.png"
                        alt="Imagen 2">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Capturas_dhm/Diapositiva3.png"
                        alt="Imagen 3">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Capturas_dhm/Diapositiva4.png"
                        alt="Imagen 4">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Capturas_dhm/Diapositiva5.png"
                        alt="Imagen 5">
                  </div>
                  <button class="nav_carrusel next" onclick="moverCarrusel(1, 'dhm')">&#10095;</button>
               </div>
            </div>

            <div class="btns">
               <a href="#" class="btn2">Cerrar</a>
            </div>
         </div>

         <div class="popup_box" id="caja_proyecto_pw">

            <h1><b id="nombre" style="font-family: monospace;">Sitio Web - Social Box</b>
            </h1>

            <br>

            <div class="info_proyecto_box">

               <!--El proyecto fue 
                     hecho desde Apache NetBeans IDE 16 con HTML, CSS, JavaScript para el lado del Front, aparte de usar el framework de Bootstrap 
                     y la biblioteca de JavaScript, jQuery. Para el Back End, en el lado del servidor local, se uso Apache Tomcat y uso del lenguaje
                      de Java, con el cuál se establecieron las clases necesarias, como para la conexión a la base de datos (que es MySQL) y el uso del 
                      patrón DAO (Data Access Object).-->

               <div class="parrafo_div">
                  <p id="texto_proyecto">
                     Fue un proyecto escolar para la materia Programación Web, el cuál fue mi primer proyecto para un
                     entorno web en cooperación
                     con mi compañero Carlos Cedillo Charles. Yo fungí la tarea de Back End y Carlos se centró en el
                     Front End. Se trata de un Sitio
                     web tipo red social, donde el usuario puede registrarse en la página y poder hacer publicaciones,
                     las cuales pueden clasificarse
                     en categorías, además de poder agregar una foto de portada y una descripción sobre la publicación.
                     El proyecto se quedó de forma local, no hay planes de subirlo de momento. Si se llegaría a tomar
                     la decisión de subirla, se crearía el proyecto desde cero y se cambiarían muchas cosas, como son
                     las tecnologías por otras más
                     actuales, además de agregar más funcionalidades.
                  </p>
               </div>

               <div>
                  <div class="datos_proyecto">
                     <label><b>Tipo de proyecto:</b> Escolar</label>
                     <label><b>Ubicación:</b> Monterrey, Nuevo León</label>
                     <label><b>Rol:</b> Back End</label>
                     <label><b>Miembros del equipo:</b> Carlos Cedillo Charles</label>
                     <label><b>Fecha:</b> Febrero 2023 - Junio 2023</label>
                  </div>

                  <div class="text_div">

                     <div class="iconos_div">

                        <i class="fa-brands fa-html5" title="HTML5"></i>

                        <i class="fa-brands fa-css" title="CSS"></i>

                        <i class="fa-brands fa-js" title="JavaScript"></i>

                        <i class="fa-brands fa-java" title="java"></i>

                        <i class="fa-brands icons8-jquery" title="JQuery"></i>

                        <i class="fa-brands icons8-mysql" title="MySQL"></i>

                     </div>

                  </div>
               </div>

            </div>

            <hr class="hr_liner">



            <div class="contenedor" style="justify-content: center;">

               <div class="video_div">

                  <iframe class="video_mp" height="430" width="200"
                     src="https://www.youtube.com/embed/OshoqLMSrNA?si=gplqHxKj1jnvBzfJ" title="YouTube video player"
                     frameborder="0"
                     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                     referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

               </div>


               <div class="carrusel-container">
                  <button class="nav_carrusel prev" onclick="moverCarrusel(-1, 'pw')">&#10094;</button>
                  <div id="pw" class="carrusel">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pw1/Diapositiva1.png"
                        alt="Imagen 1">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pw1/Diapositiva2.png"
                        alt="Imagen 2">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pw1/Diapositiva3.png"
                        alt="Imagen 3">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pw1/Diapositiva4.png"
                        alt="Imagen 4">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pw1/Diapositiva5.png"
                        alt="Imagen 5">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pw1/Diapositiva6.png"
                        alt="Imagen 6">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pw1/Diapositiva7.png"
                        alt="Imagen 7">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pw1/Diapositiva8.png"
                        alt="Imagen 8">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pw1/Diapositiva9.png"
                        alt="Imagen 9">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pw1/Diapositiva10.png"
                        alt="Imagen 10">
                  </div>
                  <button class="nav_carrusel next" onclick="moverCarrusel(1, 'pw')">&#10095;</button>
               </div>
            </div>

            <div class="btns">
               <a href="#" class="btn2">Cerrar</a>
            </div>
         </div>

         <div class="popup_box" id="caja_proyecto_pwci">

            <h1><b id="nombre" style="font-family: monospace;">Sitio Web - ChalVer Store</b>
            </h1>

            <br>

            <div class="info_proyecto_box">

               <div class="parrafo_div">
                  <p id="texto_proyecto">
                     Fue un proyecto escolar para la materia Programación Web de Capa Intermedia. Volvimos a hacer
                     equipo
                     Carlos Cedillo Charles y yo en los mismos roles. Se trata de un Sitio
                     web tipo e-commerce sobre venta de ropa de moda para mujer. El usuario puede registrarse en la
                     página y
                     puede comprar ropa que esté disponible, el usuario tendrá la opción de pagar con tarjetas o por
                     PayPal. Las compras
                     que haga el usuario podrá verlas desde la página y puede filtrarlas dependiendo lo que busque.
                     El proyecto se quedó de forma local, no hay planes de subirlo en el futuro.
                  </p>
               </div>

               <div>
                  <div class="datos_proyecto">
                     <label><b>Tipo de proyecto:</b> Escolar</label>
                     <label><b>Ubicación:</b> Monterrey, Nuevo León</label>
                     <label><b>Rol:</b> Back End</label>
                     <label><b>Miembros del equipo:</b> Carlos Cedillo Charles</label>
                     <label><b>Fecha:</b> Agosto 2023 - Noviembre 2023</label>
                  </div>

                  <div class="text_div">

                     <div class="iconos_div">

                        <i class="fa-brands fa-html5" title="HTML5"></i>

                        <i class="fa-brands fa-css" title="CSS"></i>

                        <i class="fa-brands fa-js" title="JavaScript"></i>

                        <i class="fa-brands fa-php" title="php"></i>

                        <i class="fa-brands icons8-jquery" title="JQuery"></i>

                        <i class="fa-brands icons8-mysql" title="MySQL"></i>

                     </div>

                  </div>
               </div>

            </div>

            <hr class="hr_liner">



            <div class="contenedor" style="justify-content: center;">

               <div class="video_div">

                  <iframe class="video_mp" height="430" width="200"
                     src="https://www.youtube.com/embed/OFA2gECLW8A?si=zOdboGaawKi5549B" title="YouTube video player"
                     frameborder="0"
                     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                     referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

               </div>

               <div class="carrusel-container">
                  <button class="nav_carrusel prev" onclick="moverCarrusel(-1, 'pwci')">&#10094;</button>
                  <div id="pwci" class="carrusel">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pwci/Diapositiva1.png"
                        alt="Imagen 1">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pwci/Diapositiva2.png"
                        alt="Imagen 2">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pwci/Diapositiva3.png"
                        alt="Imagen 3">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pwci/Diapositiva4.png"
                        alt="Imagen 4">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pwci/Diapositiva5.png"
                        alt="Imagen 5">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pwci/Diapositiva6.png"
                        alt="Imagen 6">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pwci/Diapositiva7.png"
                        alt="Imagen 7">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pwci/Diapositiva8.png"
                        alt="Imagen 8">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pwci/Diapositiva9.png"
                        alt="Imagen 9">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pwci/Diapositiva10.png"
                        alt="Imagen 10">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pwci/Diapositiva18.png"
                        alt="Imagen 11">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pwci/Diapositiva12.png"
                        alt="Imagen 12">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pwci/Diapositiva13.png"
                        alt="Imagen 13">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pwci/Diapositiva14.png"
                        alt="Imagen 14">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pwci/Diapositiva15.png"
                        alt="Imagen 15">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pwci/Diapositiva16.png"
                        alt="Imagen 16">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_pwci/Diapositiva17.png"
                        alt="Imagen 17">
                  </div>
                  <button class="nav_carrusel next" onclick="moverCarrusel(1, 'pwci')">&#10095;</button>
               </div>
            </div>

            <div class="btns">
               <a href="#" class="btn2">Cerrar</a>
            </div>
         </div>

         <div class="popup_box" id="caja_proyecto_pdi">

            <h1><b id="nombre" style="font-family: monospace;">Aplicación de escritorio - Null Shop</b>
            </h1>

            <br>

            <div class="info_proyecto_box">

               <div class="parrafo_div">
                  <p id="texto_proyecto">
                     Fue un proyecto escolar individual para la materia
                     Procesamiento de imágenes. El usuario puede aplicar filtros
                     personalizados a imágenes y vídeos. También tiene la opción de
                     activar la cámara de su monitor y detectar los rostros de las
                     personas que se encuentren dentro de la captura.
                  </p>
               </div>

               <div>
                  <div class="datos_proyecto">
                     <label><b>Tipo de proyecto:</b> Escolar</label>
                     <label><b>Ubicación:</b> Monterrey, Nuevo León</label>
                     <label><b>Rol:</b> Desarrollador</label>
                     <label><b>Fecha:</b> Febrero 2024 - Mayo 2024</label>
                  </div>

                  <div class="text_div">

                     <div class="iconos_div">

                        <i class="fa-brands icons8-csharp" title="C#"></i>

                     </div>

                  </div>
               </div>

            </div>

            <hr class="hr_liner">

            <a class="link" style="color: white;" href="./VISTA/DESCARGAS/Setup_pdi.msi"
               download="Setup_pdi.msi">Descargar demo<i class="fa-solid fa-download"
                  style="margin-inline: 5px;"></i></a>

            <div class="contenedor" style="justify-content: center;">

               <div class="video_div">

                  <iframe class="video_mp" height="430" width="200"
                     src="https://www.youtube.com/embed/GhLqoNCsmbE?si=ZOjAX9Ecxhh9lQQ-" title="YouTube video player"
                     frameborder="0"
                     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                     referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

               </div>

               <div class="carrusel-container">
                  <button class="nav_carrusel prev" onclick="moverCarrusel(-1, 'pdi')">&#10094;</button>
                  <div id="pdi" class="carrusel">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Procesamiento_imgs_fotos/Diapositiva1.png"
                        alt="Imagen 1">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Procesamiento_imgs_fotos/Diapositiva2.png"
                        alt="Imagen 2">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Procesamiento_imgs_fotos/Diapositiva3.png"
                        alt="Imagen 3">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Procesamiento_imgs_fotos/Diapositiva4.png"
                        alt="Imagen 4">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Procesamiento_imgs_fotos/Diapositiva5.png"
                        alt="Imagen 5">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Procesamiento_imgs_fotos/Diapositiva6.png"
                        alt="Imagen 6">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Procesamiento_imgs_fotos/Diapositiva7.png"
                        alt="Imagen 7">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Procesamiento_imgs_fotos/Diapositiva8.png"
                        alt="Imagen 8">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Procesamiento_imgs_fotos/Diapositiva9.png"
                        alt="Imagen 9">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Procesamiento_imgs_fotos/Diapositiva10.png"
                        alt="Imagen 10">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Procesamiento_imgs_fotos/Diapositiva11.png"
                        alt="Imagen 11">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Procesamiento_imgs_fotos/Diapositiva12.png"
                        alt="Imagen 12">
                  </div>
                  <button class="nav_carrusel next" onclick="moverCarrusel(1, 'pdi')">&#10095;</button>
               </div>
            </div>

            <div class="btns">
               <a href="#" class="btn2">Cerrar</a>
            </div>
         </div>

         <div class="popup_box" id="caja_proyecto_punto">

            <h1><b id="nombre" style="font-family: monospace;">Aplicación de escritorio - Punto venta</b>
            </h1>

            <br>

            <div class="info_proyecto_box">

               <div class="parrafo_div">
                  <p id="texto_proyecto">
                     Fue un proyecto de encargo para un cliente que necesitaba un
                     sistema para su pequeño restaurante de alitas y
                     hamburguesas. El usuario puede aplicar gestionar el inventario,
                     los platillos a vender, los usuarios cajeros y las ventas. Tiene
                     ventanas donde se puede visualizar reportes y tablas de las ventas
                     y ventas de usuarios, aplicando filtros. El sistema
                     permite generar tickets de venta.
                  </p>
               </div>

               <div>
                  <div class="datos_proyecto">
                     <label><b>Tipo de proyecto:</b> Comercial</label>
                     <label><b>Ubicación:</b> Guadalupe, Nuevo León</label>
                     <label><b>Rol:</b> Desarrollador Full Stack</label>
                     <label><b>Fecha:</b> Julio 2023 - Febrero 2024</label>
                  </div>

                  <div class="text_div">

                     <div class="iconos_div">

                        <i class="fa-brands icons8-csharp" title="C#"></i>
                        <i class="fa-brands icons8-sql_server" title="SQL Server"></i>

                     </div>

                  </div>
               </div>

            </div>

            <hr class="hr_liner">

            <a class="link" style="color: white;" href="./VISTA/DESCARGAS/DEMO_PUNTO.rar"
               download="DEMO_PUNTO.rar">Descargar demo (Nota: Los
               colores de la aplicación e iconos de la versión demo son diferentes a las imágenes mostradas)<i
                  class="fa-solid fa-download" style="margin-inline: 5px;"></i></a>

            <div class="contenedor" style="justify-content: center;">

               <div class="video_div">

                  <iframe class="video_mp" height="430" width="200"
                     src="https://www.youtube.com/embed/u2ZHAZWlowk?si=HaCaADSMT_5icqxw" title="YouTube video player"
                     frameborder="0"
                     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                     referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

               </div>

               <div class="carrusel-container">
                  <button class="nav_carrusel prev" onclick="moverCarrusel(-1, 'punto')">&#10094;</button>
                  <div id="punto" class="carrusel">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_sistema_ventas/Diapositiva1.png"
                        alt="Imagen 1">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_sistema_ventas/Diapositiva2.png"
                        alt="Imagen 2">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_sistema_ventas/Diapositiva3.png"
                        alt="Imagen 3">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_sistema_ventas/Diapositiva4.png"
                        alt="Imagen 4">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_sistema_ventas/Diapositiva5.png"
                        alt="Imagen 5">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_sistema_ventas/Diapositiva6.png"
                        alt="Imagen 6">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_sistema_ventas/Diapositiva7.png"
                        alt="Imagen 7">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_sistema_ventas/Diapositiva8.png"
                        alt="Imagen 8">
                     <img class="slide imgs_general" src="./VISTA/IMAGENES/Presentación_sistema_ventas/Diapositiva9.png"
                        alt="Imagen 9">
                     <img class="slide imgs_general"
                        src="./VISTA/IMAGENES/Presentación_sistema_ventas/Diapositiva10.png" alt="Imagen 10">
                     <img class="slide imgs_general"
                        src="./VISTA/IMAGENES/Presentación_sistema_ventas/Diapositiva11.png" alt="Imagen 11">
                     <img class="slide imgs_general"
                        src="./VISTA/IMAGENES/Presentación_sistema_ventas/Diapositiva12.png" alt="Imagen 12">
                     <img class="slide imgs_general"
                        src="./VISTA/IMAGENES/Presentación_sistema_ventas/Diapositiva13.png" alt="Imagen 13">
                  </div>
                  <button class="nav_carrusel next" onclick="moverCarrusel(1, 'punto')">&#10095;</button>
               </div>
            </div>

            <div class="btns">
               <a href="#" class="btn2">Cerrar</a>
            </div>
         </div>

         <div class="contenedor">

            <div class="subcontenedor">

               <aside class="Perfil Perfil_gradiente_admin">

                  <div class="cont-perfil">

                     <img src="./VISTA/IMAGENES/oliver_uanl_new.jpg" alt="Foto usuario"
                        class="img_foto_perfil imgs_general" title="Usuario administrador">

                     <div class="perfil_side">

                        <span>Oliver Candelario Treviño Ramírez</span>
                        <hr>
                        <span>Licenciado en Multimedia y Animación Digital</span>
                        <hr>
                        <span>Desarrollador Jr</span>
                        <hr>

                        <div class="habilidades">
                           <span>Habilidades</span>
                           <ul>
                              <li>
                                 Responsabilidad
                              </li>
                              <li>
                                 Aprendizaje activo
                              </li>
                              <li>
                                 Liderazgo
                              </li>
                              <li>
                                 Trabajo en equipo
                              </li>
                           </ul>
                        </div>

                     </div>

                  </div>

               </aside>

               <section class="nueva_main_contenedor">

                  <!-- Información de la palabra -->
                  <article class="nueva_caja_info">

                     <div class="">

                        <section class="" style="background-color: transparent;">

                           <div class="info_palabra">

                              <div>

                                 <section class="secciones_de_info">

                                    <div class="cuadro_div_proyecto">

                                       <div class="div_imgs">
                                          <img class="imgs_proyecto"
                                             src="./VISTA/IMAGENES/Capturas_dhm/Diapositiva1.png">
                                       </div>

                                       <div class="categorias">

                                          <h3 style="font-size: larger !important">
                                             <a id="proyecto_dhm" class="ver_mas" onclick="">
                                                Sitio Web - El diccionario de 'El habla de
                                                Monterrey'
                                             </a>
                                          </h3>

                                          <hr class="hr_liner">

                                       </div>

                                       <div class="text_div">

                                          <div class="iconos_div">

                                             <i class="fa-brands fa-html5" title="HTML5"></i>

                                             <i class="fa-brands fa-css" title="CSS"></i>

                                             <i class="fa-brands fa-js" title="JavaScript"></i>

                                             <i class="fa-brands fa-php" title="php"></i>

                                             <i class="fa-brands icons8-jquery" title="JQuery"></i>

                                             <i class="fa-brands icons8-mysql" title="MySQL"></i>

                                          </div>

                                       </div>


                                 </section>

                                 <section class="secciones_de_info">

                                    <div class="cuadro_div_proyecto">

                                       <div class="div_imgs">
                                          <img class="imgs_proyecto"
                                             src="./VISTA/IMAGENES/Presentación_pwci/Diapositiva1.png">
                                       </div>

                                       <div class="categorias">

                                          <h3 style="font-size: larger !important">
                                             <a id="proyecto_pwci" class="ver_mas" onclick="">
                                                Sitio Web - ChalVer Store
                                             </a>
                                          </h3>

                                          <hr class="hr_liner">

                                       </div>

                                       <div class="text_div">

                                          <div class="iconos_div">

                                             <i class="fa-brands fa-html5" title="HTML5"></i>

                                             <i class="fa-brands fa-css" title="CSS"></i>

                                             <i class="fa-brands fa-js" title="JavaScript"></i>

                                             <i class="fa-brands fa-php" title="php"></i>

                                             <i class="fa-brands icons8-jquery" title="JQuery"></i>

                                             <i class="fa-brands icons8-mysql" title="MySQL"></i>

                                          </div>

                                       </div>

                                 </section>

                                 <section class="secciones_de_info">

                                    <div class="cuadro_div_proyecto">

                                       <div class="div_imgs">
                                          <img class="imgs_proyecto"
                                             src="./VISTA/IMAGENES/Presentación_pw1/Diapositiva1.png">
                                       </div>

                                       <div class="categorias">

                                          <h3 style="font-size: larger !important">
                                             <a id="proyecto_pw" class="ver_mas" onclick="">
                                                Sitio Web - Social Box
                                             </a>
                                          </h3>

                                          <hr class="hr_liner">

                                       </div>

                                       <div class="text_div">

                                          <div class="iconos_div">

                                             <i class="fa-brands fa-html5" title="HTML5"></i>

                                             <i class="fa-brands fa-css" title="CSS"></i>

                                             <i class="fa-brands fa-js" title="JavaScript"></i>

                                             <i class="fa-brands fa-java" title="Java"></i>

                                             <i class="fa-brands icons8-jquery" title="JQuery"></i>

                                             <i class="fa-brands icons8-mysql" title="MySQL"></i>

                                          </div>

                                       </div>


                                 </section>



                                 <section class="secciones_de_info">

                                    <div class="cuadro_div_proyecto">

                                       <div class="div_imgs">
                                          <img class="imgs_proyecto"
                                             src="./VISTA/IMAGENES/Presentación_sistema_ventas/Diapositiva1.png">
                                       </div>

                                       <div class="categorias">

                                          <h3 style="font-size: larger !important">
                                             <a id="proyecto_punto" class="ver_mas" onclick="">
                                                Aplicación de escritorio - Punto venta
                                             </a>
                                          </h3>

                                          <hr class="hr_liner">

                                       </div>

                                       <div class="text_div">

                                          <div class="iconos_div">

                                             <i class="fa-brands icons8-csharp" title="C#"></i>
                                             <i class="fa-brands icons8-sql_server" title="SQL Server"></i>

                                          </div>

                                       </div>

                                 </section>

                                 <section class="secciones_de_info">

                                    <div class="cuadro_div_proyecto">

                                       <div class="div_imgs">
                                          <img class="imgs_proyecto"
                                             src="./VISTA/IMAGENES/Procesamiento_imgs_fotos/Diapositiva1.png">
                                       </div>

                                       <div class="categorias">

                                          <h3 style="font-size: larger !important">
                                             <a id="proyecto_pdi" class="ver_mas" onclick="">
                                                Aplicación de escritorio - Null Shop
                                             </a>
                                          </h3>

                                          <hr class="hr_liner">

                                       </div>

                                       <div class="text_div">

                                          <div class="iconos_div">

                                             <i class="fa-brands icons8-csharp" title="C#"></i>

                                          </div>

                                       </div>

                                 </section>







                              </div>

                        </section>

                     </div>


                  </article>

               </section>


            </div>

         </div>

      </main>

   </div>


   <script src="./VISTA/FRAMEWORKS/ajax/jquery.js"></script>
   <script src="./VISTA/FRAMEWORKS/ajax/bootstrap.js"></script>
   <script src="./VISTA/JS/NAVBAR.js"></script>
   <script src="./VISTA/FRAMEWORKS/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="./VISTA/JS/PORTAFOLIO.js"></script>
   <script src="./VISTA/JS/CARRUSEL.js"></script>
</body>

<footer class="footer">



   <div class="redessociales">

      <h4 style="margin: 15px; font-family: monospace !important;">Contactos</h4>

      <a href="https://www.linkedin.com/in/oliver-candelario-trevino-ramirez-722604208" target="_blank"><i
            class="fa-brands fa-linkedin"></i></i></a>
      <a href="mailto:oliver.trev.rmz@gmail.com">
         <i class="fa-solid fa-envelope"></i></a>
      <a href="https://www.youtube.com/@OliverCandelarioTreviñoRamírez" target="_blank">
         <i class="fa-brands fa-youtube"></i></a>

   </div>

   <ul>

      <li>
         <div>
            <a target="_blank" href="https://icons8.com/icon/40253/jquery">JQuery</a> icon by <a target="_blank"
               href="https://icons8.com">Icons8</a>
         </div>
      </li>


      <li>
         <div>
            <a target="_blank" href="https://icons8.com/icon/39858/mysql-logo">mysql</a> icon by <a target="_blank"
               href="https://icons8.com">Icons8</a>
         </div>
      </li>

      <li>
         <div>
            <a target="_blank" href="https://icons8.com/icon/55205/c-sharp-logo">C Sharp Logo</a> icon by <a
               target="_blank" href="https://icons8.com">Icons8</a>
         </div>
      </li>

      <li>
         <div>
            <a target="_blank" href="https://icons8.com/icon/laYYF3dV0Iew/microsoft-sql-server">sql server</a> icon by
            <a target="_blank" href="https://icons8.com">Icons8</a>
         </div>
      </li>

   </ul>

   <div class="footer_texto_font_awesome">
      <p>Resto de iconos fueron seleccionados de la versión gratis de: <a href="https://fontawesome.com" target="_blank"
            class="otros_links">Font Awesome</a> </p>
   </div>

</footer>

</html>