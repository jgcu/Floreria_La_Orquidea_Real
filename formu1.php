<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <link href="imgs/logo.png" rel="icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="estiloform.css" rel="stylesheet" type="text/css">
	<title>PROCESO DE COMPRA</title>
</head>
<body><br>
	<h1>Antes de continuar, proporcionanos algunos datos: </h1><br>
	<h2>Datos del comprador</h2>
	<div>
		<form action="/floreria/formu2.html" method="post">
			Nombre(s): <br><input type=text name=nom size=20 required><br><br> 
			Apellido Paterno: <br><input type=text name=apep size=20 required><br><br>
			Apellido Materno: <br><input type=text name=apem size=20 required><br><br>
			<!--Siguiente línea-->
			Calle: <br><input type=text name=calle size=20 required><br><br>
			N. Ext: <br><input type=text name=next size=20 required><br><br>
			N. Int: <br><input type=text name=nint size=20 ><br><br>
            Código Postal: <br><input type=text name=nint size=20 required><br><br>
			<!--Siguiente línea-->
            Colonia: <br><input type=text name=col size=20 required><br><br>
            Ciudad: <br><input type=text name=ciu size=20 required><br><br>
			Estado: <br><input type=text name=est size=20 required><br><br>
			<!--Siguiente línea-->
			¿Entre que calles se encuentra tu domicilio?: <br><input type=text name=est size=20 required><br><br>
			<label for="">¿Es tu trabajo o tu casa?</label>
			<br><br>
			<input type=radio name=“opc” class="noestirar" required> Trabajo
			<input type=radio name=“opc” class="noestirar" required> Casa <br><br>
			Número de contacto: <br><input type=text name=num size=20 required><br><br>
            Correo electrónico de contacto: <br><input type=text name=num size=20 required><br><br>
			<br>Instrucciones adicionales para la entrega en esta dirección<br><textarea cols=70 rows=5 name=“dir” required> 
				</textarea><br><br>
			<input type="submit" class="noestirar" id="envio" value="Seguir con la compra" > <input type=reset class="noestirar" id="reset">
		</form>

	</div>
</body>
</html>
