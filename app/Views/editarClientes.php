<?php 

    $nombre = $datos[0]['nombre'];
    $apellido = $datos[0]['apellido'];
    $domicilio = $datos[0]['domicilio'];
    $cuit_cuil = $datos[0]['cuit_cuil'];
    $fnac = $datos[0]['fnac'];
    $dni = $datos[0]['dni']; 
    $tel = $datos[0]['tel'];
 ?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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

        .letras-negras{
            color: black;
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

        .formulario-contacto2{
            width: 1200px;
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

</head>
<body class="fondo-negro letras-negras">
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
    <div class="row">
        <div class="formulario-contacto">
            <h1>Modificar Cliente</h1>
                <form method="POST" action="<?php echo base_url().'/actualizarcliente' ?>">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $nombre ?>" required>
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $apellido ?>" required>
                    <label for="domicilio">Domicilio</label>
                    <input type="text" name="domicilio" id="domicilio" class="form-control" value="<?php echo $domicilio ?>" required>
                    <label for="fnac">Fecha de Nacimiento</label>
                    <input type="date" name="fnac" id="fnac" class="form-control"  value="<?php echo $fnac ?>" readonly required>
                    <label for="cuit_cuil">CUIT/CUIL</label>
                    <select id="cuit_cuil" name ="cuit_cuil" readonly required>
                        <option selected> <?php echo $cuit_cuil ?> </option>
                    </select>
                    <label for="dni">DNI</label>
                    <input type="number" name="dni" id="dni" class="form-control" value="<?php echo $dni ?>" readonly required>
                    <label for="tel">Teléfono</label>
                    <input type="tel" name="tel" id="tel" class="form-control"value="<?php echo $tel ?>"  required>
                    <br>
                    <button class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
        <hr>
        
        <br/><br/>

    <footer>
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