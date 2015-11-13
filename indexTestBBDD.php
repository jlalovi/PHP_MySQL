<?php
	require_once 'libreria/MySQLDataBase.php';

	$BBDD= new MySQLDataBase("northwind");

	//Testeo de inserción
	//$BBDD->InsertInto("products", "ProductID, ProductName", "80, 'Pepinos'");
	
	//Testeo de modificar
	//$BBDD->Update("products", "ProductName", "'manzanas'", "ProductID='80'");
	
	//Testeo de borrar
	//$BBDD->DeleteFrom("products", "ProductID=80");
	
	//Testeo de consulta:
	var_dump($BBDD->ConsultarQ("SELECT * FROM products", true));
?>