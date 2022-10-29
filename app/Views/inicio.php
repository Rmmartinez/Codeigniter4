<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        html,body{
            margin: 0;
            padding: 0;
        }

        body{
            width: 100%;
            height: 100%;
            font-family: sans-serif;
            letter-spacing: 0.03em;
            line-height: 1.6;
        }

        footer{
            background: linear-gradient(to right, #0D26A4, white);
            justify-content: space-between;
            height: 50px;
            text-align: center;
            position: fixed;
            bottom: 0;
        }

        .contenido-footer{
            padding-left: 30px;
            display: block;
            padding-right: 30px;
            padding-top: 0.7rem;
        }

        .alinear-logo{
            text-align: left;
        }

        .fondo-negro{
            background-color: white;
        }

        .letras-blancas{
            color: white;
        }

        .contenido-centrado{
            text-align: center;
        }
        body h2{
            text-align: center;
        }

        footer{
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            align-self: flex-end;
        }

        .container{
            width: 100%;
            max-width: 1200px;
            height: 430px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: auto;
        }

        .formulario-contacto{
            width: 470px;
            height: auto;
            margin: 40px auto;
            border-radius: 10px;
            padding-top: 20px;
            padding-bottom: 20px;
            background-color: #DAD9D9;
            padding-left: 30px;
            padding-right: 30px;
        }


        input{
            background-color: #fbfbfb;
            width: 410px;
            height: 40px;
            border-radius: 5px;
            border-style: solid;
            border-width: 1px;
            border-color: black;
            margin-top: 10px;
            padding-left: 10px;
            margin-bottom: 20px;
        }

        select{
            background-color: #fbfbfb;
            width: 370px;
            height: 40px;
            border-radius: 5px;
            border-style: solid;
            border-width: 1px;
            border-color: black;
            margin-top: 10px;
            padding-left: 10px;
            margin-bottom: 20px;
        }

        textarea{
            background-color: #fbfbfb;
            width: 370px;
            height: 150px;
            border-radius: 5px;
            border-style: solid;
            border-width: 1px;
            border-color: black;
            margin-top: 10px;
            padding-left: 10px;
            margin-bottom: 20px;
            padding-top: 15px;
        }

        label{
            display: block;
        }

        .botones{
            height: 45px;
            padding-left: 5px;
            padding-right: 5px;
            margin-bottom: 20px;
            margin-top: 10px;
            text-transform: uppercase;
            background-color: #0D26A4;
            border-color: #0D26A4;
            border-style: solid;
            border-radius: 15px;
            width: 410px;
            cursor: pointer;
        }

        button p{
            color: #fff;
        }


        span{
            color: black;
        }

        .aviso{
            font-size: 13px;
            color: #0e0e0e;
        }


        h1{
            font-size: 39px;
            text-align: center;
            padding-bottom: 20px;
            color: #0D26A4;
        }


        h3{
            font-size: 16px;
            padding-bottom: 30px;
            color: #0e0e0e;
        }


        p{
            font-size: 14px;
            color: #0e0e0e;
        }

        .formulario input:focus{
            outline:0;
            border: 1px solid #0D26A4;
        }


        .formulario textarea:focus{
            outline:0;
            border: 1px solid #0D26A4;
        }

        .justificar{
            text-align: justify;
            margin-left: 10rem;
            margin-right: 10rem;
        }
    </style>

    <title>Sociedad Bancaria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="fondo-negro letras-blancas">
<nav class="navbar navbar-expand-lg" style="background-color: #0D26A4;">
  <div class="container-fluid">
    <a class="navbar-brand" style="color:white" href="<?php echo base_url('inicio') ?>">SOCIEDAD BANCARIA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" style="color:white">Usuario: <?php echo session('usuario'); ?></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  style="color:white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Acciones
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url('clientes') ?>">Clientes</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('bancos') ?>">Bancos</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('cuentas') ?>">Cuentas</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" style="color:white" href="<?php echo base_url('salir') ?>">Salir</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br/>
<div style="color: blue">
    <h2>¡Bienvenido, <?php echo session('usuario'); ?>!</h2>
    <br/>
    <div class="container marketing">

<!-- Three columns of text below the carousel -->
<div class="row container" style="text-align: center">
  <div class="col-lg-4">
  <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
  <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
</svg>
    <h2 class="fw-normal">Comedor Bancario</h2>
    <p>Obtené el menú semanal del comedor bancario. Realizá tus solicitudes personales en caso de intolerancia a ciertos alimentos.</p>
    <p><a class="btn btn-secondary" href="#">Ver más &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
  <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" fill="currentColor" class="bi bi-hospital" viewBox="0 0 16 16">
  <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z"/>
  <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z"/>
</svg>
    <h2 class="fw-normal">CeSaB</h2>
    <p>El Centro de Salud Bancario se encuentra ubicado en Belgrano 874. Contactate las 24hs del día al 2664271942 por Whatsapp.</p>
    <p><a class="btn btn-secondary" href="#">Ver más &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
  <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
  <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
  <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
</svg>
    <h2 class="fw-normal">Noticias</h2>
    <p>Enterate de todas las novedades de índole mundial que giran en torno a la Sociedad Bancaria y sus miembros, y mantenete informado siempre.</p>
    <p><a class="btn btn-secondary" href="#">Ver más &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->
    </div>

    <hr class="featurette-divider">
    <div class="formulario-contacto">
        <div class="formulario">
            <h1>Importante</h1>
            <p>
                La información que se manipula es crítica.
                <br/><br/>
                Trabajar los datos con discreción, y sólo de ser necesario. Caso contrario, serán aplicadas duras sanciones.
            </p>
                
        </div>
    </div>
</div>

<br/><br/>


<footer style="color:black">
    <div class="contenido-footer">
        Todos los derechos reservados - Sociedad Bancaria © - UNSL 2022
    </div>
    <div class="contenido-footer">
        Wsp: 266427142 - Correo: martinezrm1998@gmail.com
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>
</html>