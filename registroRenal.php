<?php
if (isset($_REQUEST['idRegistro'])) {
	$idRegistro = trim($_REQUEST['idRegistro']);
} else {
	$idRegistro = 0;
}
if (isset($_REQUEST['nuevo'])) {
	$nuevo = trim($_REQUEST['nuevo']);
} else {
	$nuevo = '';
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Registro</title>
    <style>
    .row {
        display: flex;
    }

    .contenedor {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .field_txt {
        width: 250px;
        height: 30px;
        color: #333333;
        border: solid 1px #B2B2B2;
        border-radius: 4px;
        padding-left: 3px;
    }

    .pop {
        overflow-x: hidden;
        /* Por defecto, ocultamos el desbordamiento horizontal */
    }

    .golden-color {
        color: goldenrod
    }

    /* Media query para activar el desbordamiento horizontal cuando el ancho sea de 700px */
    @media (max-width: 700px) {
        .pop {
            overflow-x: auto;
            /* Activamos el desbordamiento horizontal */
        }
    }
    </style>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <!-- Metas para la versión  mobil !-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <link type="text/css" href="css/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" />
    <link type="text/css" href="css/jquery.ui.selectmenu.css" rel="stylesheet" />

    <link href="css/custom.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">

    <script type="text/javascript" src="librerias/js/jquery-1.8.2.js"></script>
    <script type="text/javascript" src="librerias/js/jquery-ui-1.9.1.custom.min.js"></script>
    <script type="text/javascript" src="librerias/js/jquery.maskedinput-1.2.2min.js"></script>
    <script type="text/javascript" src="librerias/js/jquery.ui.selectmenu.js"></script>
    <script type="text/javascript" src="librerias/js/jquery.ui.cbocomplete.js"></script>

    <script type="text/javascript" src="librerias/js/scripts2018.js"></script>
    <script type="text/javascript" src="librerias/js/scripts.js"></script>

    <script src="inicio.js"></script>
</head>

<body>
    <div id="wrapper">
        <div class="barra_inicio"></div>
    </div>

    <div class="contenedor pop" id="forms" style="overflow: hidden;">

        <div id="divContenidoForm">
            <h1 class="golden-color">Registro</h1>
            <input type="hidden" id="txtAccionRegistro" value="11" />
            <!-- DIV DATOS GENERALES -->
            <div id="divSeccion1" class="divFormSeccion">
                <div class="row">
                    <div>
                        <div>*Nombre</div>
                        <input type="text" id="txtNombre" class="field_txt" value="<?php echo $nuevo; ?>" require />
                    </div>
                    <div>
                        <div>* Apellido paterno:</div>
                        <input type="text" id="txtPaterno" class="field_txt" require />
                    </div>

                </div>


                <hr>
                <!-- 				
				<table>
					<tr>
						<td>
							<font size=3>* Nombre:</font>
						</td>
						<td>
							<font size=3>* Apellido paterno:</font>
						</td>

					</tr>
					<tr>
						<td><input type="text" id="txtNombre" class="control_texto" style="width: 300px;"
								value="<?php echo $nuevo; ?>" require /></td>
						<td><input type="text" id="txtPaterno" class="control_texto" style="width: 300px;" require />
						</td>

					</tr>
					<tr>
						<td>
							<font size=3>Apellido materno:</font>
						</td>
						<td>
							<font size=3>* Email:</font>
						</td>

					</tr>
					<tr>
						<td><input type="text" id="txtMaterno" class="control_texto" style="width: 300px;" require />
						</td>
						<td><input type="text" id="txtEmail" class="control_texto" style="width: 300px;" require /></td>

					</tr>
					<tr>
						<td>
							<font size=3>* Edad:</font>
						</td>
					</tr>
					<tr>
						<td><input type="number" id="txtEdad" class="control_texto" style="width: 300px;" require />
						</td>
					</tr>
					<tr>
						<td>
							<font size=3>* Categoría:</font>
						</td>
					</tr>

					<tr>

						<td>
							<select id="cboCatego">
								<option value="Médico General" selected>Médico General</option>
								<option value="Estudiante">Estudiante</option>
								<option value="Especialidad">Especialidad</option>
								<option value="Nutriologo">Nutriólogo</option>
							</select>
						</td>
						<td id="tipoEspecialista" style="display: none;">
							<input type="text" id="inputTipoEspecialista" placeholder="Tipo de Especialidad">
						</td>

					</tr>

					<tr>
						<td>
							<font size=3>* Lugar donde labora:</font>
						</td>
						<td>
							<font size=3>* Ciudad donde labora:</font>
						</td>
					</tr>
					<tr>

						<td><input type="text" id="txtLugarNacimiento" class="control_texto" style="width: 300px;"
								require /></td>
						<td><input type="text" id="txtCityNacimiento" class="control_texto" style="width: 300px;"
								require /></td>
					</tr>
				</table>
				<table style="margin: auto; width: 80%;" align="left">
					<tr>
						<td colspan="2" align="center">
							<hr />
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<button type="button" class="btnGuardar">Guardar información</button>

						</td>
					</tr>
				</table> -->

                <div id="dialog_message">
                    <div id="content_message"></div>
                </div>
                <script>
                document.getElementById('cboCatego').addEventListener('change', function() {
                    var tipoEspecialista = document.getElementById('tipoEspecialista');
                    var inputTipoEspecialista = document.getElementById('inputTipoEspecialista');
                    if (this.value === 'Especialidad') {
                        tipoEspecialista.style.display = 'table-cell';
                        inputTipoEspecialista.required = true;
                    } else {
                        tipoEspecialista.style.display = 'none';
                        inputTipoEspecialista.required = false;
                    }
                });
                </script>


</body>

</html>