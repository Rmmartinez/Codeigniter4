<?php 

    $numero = $datos[0]['numero'];
    $tipo = $datos[0]['tipo'];
    $moneda = $datos[0]['moneda'];
    $monto_actual = $datos[0]['monto_actual']; 
    $nombre_titular = $datos[0]['nombre_titular'];
    $dni_titular = $datos[0]['dni_titular']; 
    $banco = $datos[0]['banco'];
    $fcreacion = $datos[0]['fcreacion']; 
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
            width: 1100px;
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
            <h1>Modificar Cuenta</h1>
                    <form method="POST" action="<?php echo base_url().'/actualizarcuenta' ?>">
                        <label for="numero">Numero</label>
                        <input type="number" name="numero" id="numero" class="form-control" value="<?php echo $numero ?>" readonly required>
                        <label for="tipo">Tipo</label>
                        <select id="tipo" name ="tipo" required>
                            <option selected> <?php echo $tipo ?> </option>
                            <option value="Caja de Ahorros">Caja de Ahorros</option>
                            <option value="Cuenta Sueldo/Cuenta de Seguridad Social">Cuenta Sueldo/Cuenta de Seguridad Social</option>
                            <option value="Cuenta Corriente">Cuenta Corriente</option>
                            <option value="Cuenta Universal Gratuita">Cuenta Universal Gratuita</option>
                        </select>
                        <label for="moneda">Moneda</label>
                        <select id="moneda" name ="moneda" required>
                            <option selected><?php echo $moneda ?></option>
                        </select>
                        <label for="monto_actual">Monto actual</label>
                        <input type="number" name="monto_actual" id="monto_actual" class="form-control" readonly value="<?php echo $monto_actual ?>" required>
                        <label for="nombre_titular">Titular</label>
                        <input type="text" name="nombre_titular" id="nombre_titular" class="form-control" value="<?php echo $nombre_titular ?>" required>
                        <label for="dni_titular">Cuit/Cuil</label>
                        <input type="number" name="dni_titular" id="dni_titular" class="form-control"  readonly value="<?php echo $dni_titular ?>"required>
                        <label for="banco">Banco</label>
                        <input type="text" name="banco" id="banco" readonly class="form-control" value="<?php echo $banco ?>" required>
                        <label for="fcreacion">Fecha de Creación</label>
                        <input type="date" name="fcreacion" id="fcreacion" readonly class="form-control" value="<?php echo $fcreacion ?>" required>
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