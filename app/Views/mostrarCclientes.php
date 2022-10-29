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
            background: linear-gradient(to right, darkred, black);
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
            background-color: black;
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
            width: auto;
            height: auto;
            margin: 20px auto;
            border-radius: 10px;
            padding-top: 20px;
            padding-bottom: 20px;
            background-color: #fbfbfb;
            padding-left: 30px;
            padding-right: 30px;
        }


        input{
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
            background-color: darkred;
            border-color: darkred;
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
            color: darkred;
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
            border: 1px solid darkred;
        }


        .formulario textarea:focus{
            outline:0;
            border: 1px solid darkred;
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
<br>
<div class="container-lg">
    <h1>Sociedad Bancaria</h1>
                <p class="letras-blancas">
                    Lista de clientes del banco: 
                </p>
    <div style="color: white" class="formulario-contacto">
        <h2></h2>
        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Nombre y Apellido</th>
                            <th scope="col">DNI</th>
                            <th scope="col">Fecha de Nacimiento</th>
                            <th scope="col">Domicilio</th>
                            <th scope="col">¿Enfermedades coronarias?</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            <?php foreach ($datosV as $key):?>
                            <tr>
                                <td><?php echo $key->nombre?> <?php echo $key->apellido?></td>
                                <td><?php echo $key->dni?></td>
                                <td><?php echo $key->fnac?></td>
                                <td><?php echo $key->domicilio?></td>
                                <td><?php echo $key->enfermedades?></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                        </table>
    </div>
    </div>
    <br/>
    <a href='/clubrugby' class="container"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" color="red" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg></a>

<br/><br/>


<footer>
    <div class="contenido-footer">
        Todos los derechos reservados - Club de Rugby © - UNSL 2022
    </div>
    <div class="contenido-footer">
        Wsp: 266427142 - Correo: martinezrm1998@gmail.com
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>