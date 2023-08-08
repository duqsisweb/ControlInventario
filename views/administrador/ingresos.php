<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();
error_reporting(0);

include '../../conexionbd.php';
if (isset($_SESSION['usuario'])) {

    require '../../function/funciones.php';
?>

    <!DOCTYPE html>
    <html lang="en">

    <!-- PARTE DEL HEAD -->
    <?php
    require '../../views/head.php';
    ?>


    <body>


        <!-- PARTE DEL NAV -->
        <?php
        require '../../views/nav.php';
        ?>

        <section style="margin-top: 100px;">





            <!-- <div class="container-fluid" style="margin-bottom: 100px;margin-top: 150px;">
                <div class="row" style="text-align: center;">
                    <div class="col-md-2">
                        COMPUTADORES <br>
                        <button type="button" class="btn btn-success">Listar</button>
                    </div>
                    <div class="col-md-2">2</div>
                    <div class="col-md-2">3</div>
                    <div class="col-md-2">4</div>
                    <div class="col-md-2">5</div>
                    <div class="col-md-2">6</div>
                </div>
                <div class="row" style="margin-top: 50px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">7</div>
                    <div class="col-md-2">8</div>
                    <div class="col-md-2">9</div>
                    <div class="col-md-2">10</div>
                    <div class="col-md-2"></div>
                </div>
            </div> -->



            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>






            <!-- inicio de POST enviarComputador -->
            <?php
            if (isset($_POST['enviarComputador'])) {
                $tipomaquina = $_POST['tipo_maquina'];
                $service_tag = $_POST['Service_tag'];
                $serial = $_POST['Serial_equipo'];
                $nombre_equipo = $_POST['Nombre_equipo'];
                $sede = $_POST['Sede'];
                $empresa = $_POST['Empresa'];
                $marca = $_POST['Marca'];
                $modelo = $_POST['Modelo'];
                $tipo_comp = $_POST['Tipo'];
                $tipo_ram = $_POST['Tipo_ram'];
                $cant_memoria_ram = $_POST['Memoria_ram'];
                $tipo_discoduro = $_POST['Tipo_discoduro'];
                $capacidad_discoduro = $_POST['Capacidad_discoduro'];
                $procesador = $_POST['Procesador'];
                $propietario = $_POST['Propietario'];
                $proveedor = $_POST['Proveedor'];
                $sistema_operativo = $_POST['Sistema_Operativo'];
                $serial_cargador = $_POST['Serial_cargador'];
                $dominio = $_POST['Dominio'];
                $tipo_usuario = $_POST['Tipo_usuario'];
                $serial_activo_fijo = $_POST['Serial_activo_fijo'];
                $fecha_ingreso = $_POST['Fecha_ingreso'];
                $targeta_video = $_POST['Targeta_Video'];
                $estado = $_POST['Estado'];
                $gestion = $_POST['Gestion'];
                $Fecha_garantia = $_POST['Fecha_garantia'];

                $usuario = $_SESSION['usuario'];



                echo "INSERT INTO [ControlTIC].[dbo].[maquina_computador] (tipo_maquina,Service_tag,Serial_equipo,Nombre_equipo,Sede,Empresa,Marca,
                Modelo,Tipo,Tipo_ram,Memoria_ram,Tipo_discoduro,Capacidad_discoduro,
                Procesador,Propietario,Proveedor,Sistema_Operativo,Serial_cargador,Dominio,Tipo_usuario,
                Serial_activo_fijo,Fecha_ingreso,Targeta_Video,Estado,Gestion,Fecha_garantia,Fecha_crea,usua_crea) 
                     VALUES ('$tipomaquina','$service_tag','$serial','$nombre_equipo','$sede','$empresa','$marca',
                        '$modelo','$tipo_comp','$tipo_ram','$cant_memoria_ram','$tipo_discoduro','$capacidad_discoduro',
                        '$procesador','$propietario','$proveedor','$sistema_operativo','$serial_cargador','$dominio','$tipo_usuario',
                        '$serial_activo_fijo','$fecha_ingreso','$targeta_video','$estado','$gestion','$Fecha_garantia',Getdate(),'$usuario')";


                $Consulta = odbc_exec($conexion, "INSERT INTO [ControlTIC].[dbo].[maquina_computador]
                                                  (tipo_maquina,Service_tag,Serial_equipo,Nombre_equipo,Sede,Empresa,Marca,
                                                  Modelo,Tipo,Tipo_ram,Memoria_ram,Tipo_discoduro,Capacidad_discoduro,
                                                  Procesador,Propietario,Proveedor,Sistema_Operativo,Serial_cargador,Dominio,Tipo_usuario,
                                                  Serial_activo_fijo,Fecha_ingreso,Targeta_Video,Estado,Gestion,Fecha_garantia,Fecha_crea,usua_crea) 
                                                  VALUES
                                                  ('$tipomaquina','$service_tag','$serial','$nombre_equipo','$sede','$empresa','$marca',
                        '$modelo','$tipo_comp','$tipo_ram','$cant_memoria_ram','$tipo_discoduro','$capacidad_discoduro',
                        '$procesador','$propietario','$proveedor','$sistema_operativo','$serial_cargador','$dominio','$tipo_usuario',
                        '$serial_activo_fijo','$fecha_ingreso','$targeta_video','$estado','$gestion','$Fecha_garantia',Getdate(),'$usuario')");
            }

            ?>


            <!-- inicio de POST enviarCelular -->
            <?php
            if (isset($_POST['enviarCelular'])) {
                $tipomaquina = $_POST['tipo_maquina'];
                $imei = $_POST['Imei'];
                $serial_equipo_celular = $_POST['Serial_equipo_celular'];
                $marca = $_POST['Marca'];
                $modelo = $_POST['Modelo'];
                $fecha_ingreso = $_POST['Fecha_ingreso'];
                $capacidad = $_POST['Capacidad'];
                $ram_celular = $_POST['Ram_celular'];
                $estado = $_POST['Estado'];
                $gestion = $_POST['Gestion'];
                $Fecha_garantia = $_POST['Fecha_garantia'];
                $usuario = $_SESSION['usuario'];



                echo "INSERT INTO [ControlTIC].[dbo].[maquina_celular]
                 (tipo_maquina,Imei,Serial_equipo_celular,Marca,Modelo,Fecha_ingreso,Capacidad,Ram_celular,Estado,Gestion,Fecha_garantia,Fecha_crea,usua_crea) 
                                                VALUES ('$tipomaquina','$imei','$serial_equipo_celular','$marca','$modelo','$fecha_ingreso','$capacidad',
                                                    '$ram_celular','$estado','$gestion','$Fecha_garantia',Getdate(),'$usuario')";


                $Consulta = odbc_exec($conexion, "INSERT INTO [ControlTIC].[dbo].[maquina_celular]
                                                  (tipo_maquina,Imei,Serial_equipo_celular,Marca,Modelo,Fecha_ingreso,Capacidad,Ram_celular,Estado,Gestion,Fecha_garantia,Fecha_crea,usua_crea) 
                                                  VALUES
                                                  ('$tipomaquina','$imei','$serial_equipo_celular','$marca','$modelo','$fecha_ingreso','$capacidad',
                                                    '$ram_celular','$estado','$gestion','$Fecha_garantia',Getdate(),'$usuario')");
            }

            ?>


            <!-- inicio de POST enviarAccesorios -->
            <?php
            if (isset($_POST['enviarAccesorios'])) {
                $tipomaquina = $_POST['tipo_maquina'];
                $marca = $_POST['marca'];
                $modelo = $_POST['modelo'];
                $descripcion = $_POST['descripcion'];
                $tipo = $_POST['tipo'];
                $cantidad = $_POST['cantidad'];
                $fecha_de_ingreso = $_POST['fecha_de_ingreso'];
                $usuario = $_SESSION['usuario'];



                echo "INSERT INTO [ControlTIC].[dbo].[maquina_accesorios]
                 (tipo_maquina,marca,modelo,descripcion,tipo,cantidad,fecha_ingreso,Fecha_crea,usua_crea) 
                                                VALUES ('$tipomaquina','$marca','$modelo','$descripcion','$tipo',
                                                    '$cantidad','$fecha_de_ingreso',Getdate(),'$usuario')";


                $Consulta = odbc_exec($conexion, "INSERT INTO [ControlTIC].[dbo].[maquina_accesorios]
                                                  (tipo_maquina,marca,modelo,descripcion,tipo,cantidad,fecha_de_ingreso,Fecha_crea,usua_crea) 
                                                  VALUES
                                                  ('$tipomaquina','$marca','$modelo','$descripcion','$tipo',
                                                    '$cantidad','$fecha_de_ingreso',Getdate(),'$usuario')");
            }

            ?>



            <!-- inicio de POST enviarEdcomunicacion -->
            <?php
            if (isset($_POST['enviarEdcomunicacion'])) {
                $tipomaquina = $_POST['tipo_maquina'];
                $marca_edcomunicacion = $_POST['marca_edcomunicacion'];
                $modelo_edcomunicacion = $_POST['modelo_edcomunicacion'];
                $descripcion_edcomunicacion = $_POST['descripcion_edcomunicacion'];
                $serial_edcomunicacion = $_POST['serial_edcomunicacion'];
                $fecha_de_ingreso = $_POST['fecha_de_ingreso'];
                $estado = $_POST['estado'];
                $placa_activo = $_POST['placa_activo'];
                $sede = $_POST['sede'];
                $ubicacion = $_POST['ubicacion'];
                $observaciones = $_POST['observaciones'];
                $fecha_garantia = $_POST['fecha_garantia'];
                $usuario = $_SESSION['usuario'];



                echo "INSERT INTO [ControlTIC].[dbo].[maquina_edcomunicacion]
                 (tipo_maquina,marca_edcomunicacion,modelo_edcomunicacion,descripcion_edcomunicacion,serial_edcomunicacion,fecha_de_ingreso,estado,placa_activo,sede,ubicacion,observaciones,fecha_garantia,Fecha_crea,usua_crea) 
                                                VALUES ('$tipomaquina','$marca_edcomunicacion','$modelo_edcomunicacion','$descripcion_edcomunicacion','$serial_edcomunicacion',
                                                    '$fecha_de_ingreso','$estado','$placa_activo','$sede','$ubicacion','$observaciones','$fecha_garantia',Getdate(),'$usuario')";


                $Consulta = odbc_exec($conexion, "INSERT INTO [ControlTIC].[dbo].[maquina_edcomunicacion]
                                                  (tipo_maquina,marca_edcomunicacion,modelo_edcomunicacion,descripcion_edcomunicacion,serial_edcomunicacion,fecha_de_ingreso,estado,placa_activo,sede,ubicacion,observaciones,fecha_garantia,Fecha_crea,usua_crea) 
                                                  VALUES
                                                  ('$tipomaquina','$marca_edcomunicacion','$modelo_edcomunicacion','$descripcion_edcomunicacion','$serial_edcomunicacion',
                                                    '$fecha_de_ingreso','$estado','$placa_activo','$sede','$ubicacion','$observaciones','$fecha_garantia',Getdate(),'$usuario')");
            }

            ?>






            <form method="POST">

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-4"></div>

                        <!-- MODULO PARA SELECCIONAR MAQUINA O DISPOSITIVO -->
                        <div class="col-md-4">
                            <div class="alert alert-primary" role="alert">
                                SELECCIONE el tipo de maquina o dispositivo a ingresar al inventario.
                            </div>

                            <select class="form-select" aria-label="Default select example" id="tipo_maquina" onchange="mostrarFormulario()" name="tipo_maquina">
                                <option selected>SELECCIONE</option>

                                <!-- mediante la sentencia PHP se hace el llamado de la tabla donde se encuentran Los tipos de maquina -->
                                <?php
                                include '../../conexionbd.php';

                                // Realizar la consulta a la base de datos para obtener los tipos de maquinas/dispositivos
                                $consulta = "SELECT id, nombre_maquina FROM [ControlTIC].[dbo].[tipo_maquina]";
                                $resultado = odbc_exec($conexion, $consulta);

                                // Iterar sobre los resultados y generar las opciones del select
                                while ($fila = odbc_fetch_array($resultado)) {
                                    $id = $fila['id'];
                                    $nombre = $fila['nombre_maquina'];
                                    echo "<option value='$id'>$nombre</option>";
                                }

                                // Liberar recursos
                                odbc_free_result($resultado);
                                ?>
                            </select>

                        </div>

                        <div class="col-md-4"></div>

                    </div>
                </div>


                <div class="container-fluid" style="margin-top: 30px;">
                    <div class="row">
                        <div class="col-md-12">

                            <div action="" id="formulario1" style="display: none;">

                                <!-- PRIMER BLOQUE DE FORMULARIO -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Service Tag</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="Service_tag">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Serial</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="Serial_equipo">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Nombre Equipo</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="Nombre_equipo">
                                        </div>
                                    </div>
                                </div>

                                <!-- SEGUNDO BLOQUE DE FORMULARIO -->

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Sede</label>
                                        <select class="form-select" aria-label="Default select example" id="sede" onchange="mostrarFormulario()" name="Sede">
                                            <option selected>SELECCIONE</option>

                                            <!-- mediante la sentencia PHP se hace el llamado de la tabla donde se encuentran Los tipos de sede -->
                                            <?php
                                            include '../../conexionbd.php';

                                            // Realizar la consulta a la base de datos para obtener las sedes
                                            $consulta = "SELECT id, nombre_sede FROM [ControlTIC].[dbo].[sede]";
                                            $resultado = odbc_exec($conexion, $consulta);

                                            // Iterar sobre los resultados y generar las opciones del select
                                            while ($fila = odbc_fetch_array($resultado)) {
                                                $id = $fila['id'];
                                                $nombre = $fila['nombre_sede'];
                                                echo "<option value='$id'>$nombre</option>";
                                            }

                                            // Liberar recursos
                                            odbc_free_result($resultado);
                                            ?>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Empresa</label>
                                            <select class="form-select" aria-label="Default select example" id="sede" onchange="mostrarFormulario()" name="Empresa">
                                                <option selected>SELECCIONE</option>

                                                <!-- mediante la sentencia PHP se hace el llamado de la tabla donde se encuentran Los tipos de sede -->
                                                <?php
                                                include '../../conexionbd.php';

                                                // Realizar la consulta a la base de datos para obtener las sedes
                                                $consulta = "SELECT id, nombre_empresa FROM [ControlTIC].[dbo].[empresa]";
                                                $resultado = odbc_exec($conexion, $consulta);

                                                // Iterar sobre los resultados y generar las opciones del select
                                                while ($fila = odbc_fetch_array($resultado)) {
                                                    $id = $fila['id'];
                                                    $nombre = $fila['nombre_empresa'];
                                                    echo "<option value='$id'>$nombre</option>";
                                                }

                                                // Liberar recursos
                                                odbc_free_result($resultado);
                                                ?>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Marca</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="Marca">
                                        </div>
                                    </div>
                                </div>


                                <!-- TERCER BLOQUE DE FORMULARIO -->

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Modelo</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="Modelo">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Tipo Comp.</label>
                                            <select class="form-select" aria-label="Default select example" id="sede" onchange="mostrarFormulario()" name="Tipo">
                                                <option selected>SELECCIONE</option>

                                                <!-- mediante la sentencia PHP se hace el llamado de la tabla donde se encuentran Los tipos de sede -->
                                                <?php
                                                include '../../conexionbd.php';

                                                // Realizar la consulta a la base de datos para obtener las sedes
                                                $consulta = "SELECT id, nombre_tipo_comp FROM [ControlTIC].[dbo].[tipo_comp]";
                                                $resultado = odbc_exec($conexion, $consulta);

                                                // Iterar sobre los resultados y generar las opciones del select
                                                while ($fila = odbc_fetch_array($resultado)) {
                                                    $id = $fila['id'];
                                                    $nombre = $fila['nombre_tipo_comp'];
                                                    echo "<option value='$id'>$nombre</option>";
                                                }

                                                // Liberar recursos
                                                odbc_free_result($resultado);
                                                ?>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Tipo de Ram</label>
                                            <select class="form-select" aria-label="Default select example" name="Tipo_ram">
                                                <option selected>SELECCIONE</option>
                                                <option value="DDR">DDR</option>
                                                <option value="DDR2">DDR2</option>
                                                <option value="DDR3">DDR3</option>
                                                <option value="DDR4">DDR4</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>


                                <!-- CUARTO BLOQUE DE FORMULARIO -->

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Cant Memoria RAM</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="Memoria_ram">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Tipo Disco duro</label>
                                            <select class="form-select" aria-label="Default select example" id="sede" onchange="mostrarFormulario()" name="Tipo_discoduro">
                                                <option selected>SELECCIONE</option>

                                                <!-- mediante la sentencia PHP se hace el llamado de la tabla donde se encuentran Los tipos de sede -->
                                                <?php
                                                include '../../conexionbd.php';

                                                // Realizar la consulta a la base de datos para obtener las sedes
                                                $consulta = "SELECT id, nombre_tipo_discoduro FROM [ControlTIC].[dbo].[tipo_discoduro]";
                                                $resultado = odbc_exec($conexion, $consulta);

                                                // Iterar sobre los resultados y generar las opciones del select
                                                while ($fila = odbc_fetch_array($resultado)) {
                                                    $id = $fila['id'];
                                                    $nombre = $fila['nombre_tipo_discoduro'];
                                                    echo "<option value='$id'>$nombre</option>";
                                                }

                                                // Liberar recursos
                                                odbc_free_result($resultado);
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Capacidad Disco Duro</label>
                                            <select class="form-select" aria-label="Default select example" id="sede" onchange="mostrarFormulario()" name="Capacidad_discoduro">
                                                <option selected>SELECCIONE</option>

                                                <!-- mediante la sentencia PHP se hace el llamado de la tabla donde se encuentran Los tipos de sede -->
                                                <?php
                                                include '../../conexionbd.php';

                                                // Realizar la consulta a la base de datos para obtener las sedes
                                                $consulta = "SELECT id, capacidad_discoduro FROM [ControlTIC].[dbo].[capacidad_discoduro]";
                                                $resultado = odbc_exec($conexion, $consulta);

                                                // Iterar sobre los resultados y generar las opciones del select
                                                while ($fila = odbc_fetch_array($resultado)) {
                                                    $id = $fila['id'];
                                                    $nombre = $fila['capacidad_discoduro'];
                                                    echo "<option value='$id'>$nombre</option>";
                                                }

                                                // Liberar recursos
                                                odbc_free_result($resultado);
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <!-- QUINTO BLOQUE DE FORMULARIO -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Procesador</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="Procesador">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Propietario</label>
                                            <select class="form-select" aria-label="Default select example" name="Propietario">
                                                <option selected>SELECCIONE</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Proveedor</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="Proveedor">
                                        </div>
                                    </div>
                                </div>

                                <!-- SEXTO BLOQUE DE FORMULARIO -->

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Sistema Operativo</label>
                                            <select class="form-select" aria-label="Default select example" id="sede" onchange="mostrarFormulario()" name="Sistema_Operativo">
                                                <option selected>SELECCIONE</option>

                                                <!-- mediante la sentencia PHP se hace el llamado de la tabla donde se encuentran Los tipos de sede -->
                                                <?php
                                                include '../../conexionbd.php';

                                                // Realizar la consulta a la base de datos para obtener las sedes
                                                $consulta = "SELECT id, nombre_sistema_operativo FROM [ControlTIC].[dbo].[sistema_operativo]";
                                                $resultado = odbc_exec($conexion, $consulta);

                                                // Iterar sobre los resultados y generar las opciones del select
                                                while ($fila = odbc_fetch_array($resultado)) {
                                                    $id = $fila['id'];
                                                    $nombre = $fila['nombre_sistema_operativo'];
                                                    echo "<option value='$id'>$nombre</option>";
                                                }

                                                // Liberar recursos
                                                odbc_free_result($resultado);
                                                ?>
                                                <select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Serial del Cargador</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="Serial_cargador">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Dominio</label>
                                            <select class="form-select" aria-label="Default select example" name="Dominio">
                                                <option selected>SELECCIONE</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <!-- SEPTIMO BLOQUE DE FORMULARIO -->

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Usuario</label>
                                            <select class="form-select" aria-label="Default select example" name="Tipo_usuario">
                                                <option selected>SELECCIONE</option>
                                                <option value="Administrador">Administrador</option>
                                                <option value="Estandar">Estandar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Serial de Activo</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="Serial_activo_fijo">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Fecha de Ingreso</label>
                                            <input type="date" class="form-control" id="" placeholder="" name="Fecha_ingreso">
                                        </div>
                                    </div>
                                </div>


                                <!-- OCTAVO BLOQUE DE FORMULARIO -->

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Modelo T. Video</label>
                                            <input type="text" class="form-control" id="" placeholder="N/A" name="Targeta_Video">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Fecha de Garantia</label>
                                            <input type="date" class="form-control" id="" placeholder="" name="Fecha_garantia">
                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                    </div>
                                </div>

                                <!-- SE CREA ESTE INPUT PARA CAMBIAR EL PARAMETRO DE USUARIO/USUA_CREA Y TOME EL VALOR
                                    SE DEJA OCULTO -->
                                <div>
                                    <input type="hidden" name="usua_crea" value="<?php echo ($a['usuario']) ?>"></input>
                                    <input type="hidden" class="form-control" id="" placeholder="" value="6" name="Estado">
                                </div>





                                <div style="text-align: center;margin-top:15px;">
                                    <button type="submit" class="btn btn-warning" name="enviarComputador" id="enviarComputador">GUARDAR</button>
                                </div>

                            </div>







                            <!-- FORMULARIO CELULAR -->
                            <div action="" id="formulario2" style="display: none;">


                                <!-- PRIMER BLOQUE DE FORMULARIO -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">IMEI</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="Imei">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Serial</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="Serial_equipo_celular">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Marca</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="Marca">
                                        </div>
                                    </div>
                                </div>


                                <!-- SEGUNDO BLOQUE DE FORMULARIO -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Modelo</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="Modelo">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Fecha de Ingreso</label>
                                            <input type="date" class="form-control" id="" placeholder="" name="Fecha_ingreso">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Capacidad</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="Capacidad">
                                        </div>
                                    </div>
                                </div>

                                <!-- TERCER BLOQUE DE FORMULARIO -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Ram</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="Ram_celular">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Fecha Garantia</label>
                                            <input type="Date" class="form-control" id="" placeholder="" name="Fecha_garantia">
                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                    </div>
                                </div>


                                <div style="text-align: center;margin-top:15px;">
                                    <button type="submit" class="btn btn-warning" name="enviarCelular" id="enviarCelular">GUARDAR</button>
                                </div>

                                <!-- CAMPOS OCULTOS -->
                                <input type="hidden" name="usua_crea" value="<?php echo ($a['usuario']) ?>"></input>
                                <input type="hidden" class="form-control" id="" placeholder="" value="6" name="Estado">

                            </div>





                            <!-- FORMULARIO ACCESORIOS -->
                            <div id="formulario3" style="display: none;">

                                <!-- PRIMER BLOQUE DE FORMULARIO -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Marca</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="marca">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Modelo</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="modelo">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Descripción</label>
                                            <select class="form-select" aria-label="Default select example" id="sede" onchange="mostrarFormulario()" name="descripcion">
                                                <option selected>SELECCIONE</option>

                                                <!-- mediante la sentencia PHP se hace el llamado de la tabla donde se encuentran Los tipos de sede -->
                                                <?php
                                                include '../../conexionbd.php';

                                                // Realizar la consulta a la base de datos para obtener las sedes
                                                $consulta = "SELECT id, nombre_descripcion FROM [ControlTIC].[dbo].[descripcion_accesorios]";
                                                $resultado = odbc_exec($conexion, $consulta);

                                                // Iterar sobre los resultados y generar las opciones del select
                                                while ($fila = odbc_fetch_array($resultado)) {
                                                    $id = $fila['id'];
                                                    $nombre = $fila['nombre_descripcion'];
                                                    echo "<option value='$id'>$nombre</option>";
                                                }

                                                // Liberar recursos
                                                odbc_free_result($resultado);
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <!-- SEGUNDO  BLOQUE DE FORMULARIO -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Tipo</label>
                                            <select class="form-select" aria-label="" name="tipo">
                                                <option selected>SELECCIONE</option>
                                                <option value="INALAMBRICA">INALAMBRICA</option>
                                                <option value="ALAMBRICA">ALAMBRICA</option>
                                                <option value="NINGUNA">NINGUNA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Cantidad</label>
                                            <input type="number" class="form-control" id="" placeholder="" name="cantidad">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Fecha Ingreso</label>
                                            <input type="date" class="form-control" id="" placeholder="" name="fecha_de_ingreso">
                                        </div>
                                    </div>
                                </div>

                                <div style="text-align: center;margin-top:15px;">
                                    <button type="submit" class="btn btn-warning" name="enviarAccesorios" id="enviarComputador">GUARDAR</button>
                                </div>

                            </div>





                            <!-- FORMULARIO EDCOMUNICACION -->
                            <div id="formulario4" style="display: none;">

                                <!-- PRIMER BLOQUE DE FORMULARIO -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Marca</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="marca_edcomunicacion">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Modelo</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="modelo_edcomunicacion">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Descripción</label>
                                            <select class="form-select" aria-label="Default select example" id="sede" onchange="mostrarFormulario()" name="descripcion_edcomunicacion">
                                                <option selected>SELECCIONE</option>

                                                <!-- mediante la sentencia PHP se hace el llamado de la tabla donde se encuentran Los tipos de sede -->
                                                <?php
                                                include '../../conexionbd.php';

                                                // Realizar la consulta a la base de datos para obtener las sedes
                                                $consulta = "SELECT id, nombre_descripcion FROM [ControlTIC].[dbo].[descripcion_edcomunicacion]";
                                                $resultado = odbc_exec($conexion, $consulta);

                                                // Iterar sobre los resultados y generar las opciones del select
                                                while ($fila = odbc_fetch_array($resultado)) {
                                                    $id = $fila['id'];
                                                    $nombre = $fila['nombre_descripcion'];
                                                    echo "<option value='$id'>$nombre</option>";
                                                }

                                                // Liberar recursos
                                                odbc_free_result($resultado);
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- SEGUNDO BLOQUE DE FORMULARIO -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Serial</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="serial_edcomunicacion">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Fecha de Ingreso</label>
                                            <input type="date" class="form-control" id="" placeholder="" name="fecha_de_ingreso">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Placa Activo fijo</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="placa_activo">
                                        </div>
                                    </div>
                                </div>

                                <!-- TERCER BLOQUE DE FORMULARIO -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Sede</label>
                                            <div class="mb-3">
                                                <select class="form-select" aria-label="Default select example" id="sede" onchange="mostrarFormulario()" name="sede">
                                                    <option selected>SELECCIONE</option>

                                                    <!-- mediante la sentencia PHP se hace el llamado de la tabla donde se encuentran Los tipos de sede -->
                                                    <?php
                                                    include '../../conexionbd.php';

                                                    // Realizar la consulta a la base de datos para obtener las sedes
                                                    $consulta = "SELECT id, nombre_sede FROM [ControlTIC].[dbo].[sede]";
                                                    $resultado = odbc_exec($conexion, $consulta);

                                                    // Iterar sobre los resultados y generar las opciones del select
                                                    while ($fila = odbc_fetch_array($resultado)) {
                                                        $id = $fila['id'];
                                                        $nombre = $fila['nombre_sede'];
                                                        echo "<option value='$id'>$nombre</option>";
                                                    }

                                                    // Liberar recursos
                                                    odbc_free_result($resultado);
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Ubicación</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="ubicacion">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Observaciones</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="observaciones">
                                        </div>
                                    </div>
                                </div>

                                <!-- CUARTO BLOQUE DE FORMULARIO -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Fecha de Garantia</label>
                                            <input type="date" class="form-control" id="" placeholder="" name="fecha_garantia">
                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4">

                                    </div>
                                </div>

                                <div style="text-align: center;margin-top:15px;">
                                    <button type="submit" class="btn btn-warning" name="enviarEdcomunicacion" id="enviarComputador">GUARDAR</button>
                                </div>

                                <!-- CAMPOS OCULTOS -->
                                <input type="hidden" name="usua_crea" value="<?php echo ($a['usuario']) ?>"></input>
                                <input type="hidden" class="form-control" id="" placeholder="" value="6" name="Estado">


                            </div>


                            <div id="formulario5" style="display: none;">
                                                        
                            </div>






            </form>



        </section>

    </body>




    <!-- CAMPOS DINAMICOS SEGUN SELECCIONE EL DISPOSITIVO O MAQUINA -->
    <script>
        function mostrarFormulario() {
            var select = document.getElementById("tipo_maquina");
            var formulario1 = document.getElementById("formulario1");
            var formulario2 = document.getElementById("formulario2");
            var formulario3 = document.getElementById("formulario3");
            var formulario4 = document.getElementById("formulario4");
            var formulario5 = document.getElementById("formulario5");

            formulario1.style.display = "none";
            formulario2.style.display = "none";
            formulario3.style.display = "none";
            formulario4.style.display = "none";
            formulario5.style.display = "none";

            if (select.value === "1") {
                formulario1.style.display = "block";
            } else if (select.value === "2") {
                formulario2.style.display = "block";
            } else if (select.value === "3") {
                formulario3.style.display = "block";
            } else if (select.value === "4") {
                formulario4.style.display = "block";
            } else if (select.value === "5") {
                formulario5.style.display = "block";
            }


        }
    </script>



    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>

    </html>

<?php } else { ?>
    <script languaje "JavaScript">
        alert("Acceso Incorrecto");
        window.location.href = "../login.php";
    </script><?php
            } ?>