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
    <a class="navbar-brand" style="color:white" href="<?php echo base_url('inicioUser') ?>">SOCIEDAD BANCARIA</a>
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
            <li><a class="dropdown-item" href="<?php echo base_url('listarBancos') ?>">Bancos</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('misCuentas/'.session('dni')) ?>">Mis Cuentas</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" style="color:white" href="<?php echo base_url('salir') ?>">Salir</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="background-color:black; color:white">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Sociedad Bancaria</h1>
            <p style="color:white">¡Te damos la bienvenida al sistema de Sociedad Bancaria!
                <br/><br/>
                Desde Sociedad Bancaria nunca y por ningún medio vamos a solicitarte tus claves, 
                ni pedirte acciones urgentes, ni suspender tus servicios sin motivo. Si alguien 
                te contacta pidiéndote esas acciones, no somos nosotros.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Leer más</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="carousel-caption">
            <h1>¡Pegá el salto con tu negocio!</h1>
            <p style="color:white">Abrí tu cuenta y obtené hasta $1.600.000 Cuenta Bonificada 12 meses.</p>
            <p><a class="btn btn-lg btn-primary" href="https://www.supervielle.com.ar/negocios/pymes/linea-express">Leer más</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Ponete en modo hincha</h1>
            <p style="color:white">20% de ahorro en indumentaria deportiva y electro hasta el 30/11.</p>
            <p><a class="btn btn-lg btn-primary" href="https://www.supervielle.com.ar/personas/beneficios/detalle/5a0187befecfb70ca0">Leer más</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<div style="color: white">
    <h2></h2>
        






    <div class="formulario-contacto">
        <div class="formulario">
            <h1>¿Quiénes somos?</h1>
            <p>
                ¡Hola, <?php echo session('usuario'); ?>!
                <br/>
                La Sociedad Bancaria es un entidad bancaria comercial de origen argentino, 
                con sede en Buenos Aires, que surge de la fusión de diversos bancos del
                país con motivo de unificarlos. En 2004 se compraron acciones 
                de los bancos de Argentina, y se fusionan a la marca Sociedad Bancaria, utilizada actualmente. 
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