<?php
$tipoEjemplo = 1;

switch($tipoEjemplo)
{
	case 1:
		//ABRO EL ARCHIVO
		$ar = fopen("archivos/miArchivo.txt", "r");

		//LEO EL ARCHIVO
		echo fread($ar, filesize("archivos/miArchivo.txt"));

		//CIERRO EL ARCHIVO
		fclose($ar);
		break;
	case 2:
		//ABRO EL ARCHIVO
		$ar = fopen("archivos/miArchivo.txt", "r");

		//LEO 5 BYTES DEL ARCHIVO (5 LETRAS)
		echo fread($ar, 5);

		//CIERRO EL ARCHIVO
		fclose($ar);
		break;
	case 3:
	
		$ar = fopen("archivos/miArchivo.txt", "r");

		//LEO 1 LINEA DEL ARCHIVO
		echo fgets($ar);

		//CIERRO EL ARCHIVO
		fclose($ar);
		break;
	case 4:
	
		$ar = fopen("archivos/miArchivo.txt", "r");

		//LEO LINEA X LINEA DEL ARCHIVO 
		while(!feof($ar))
		{
			echo fgets($ar), "<br/>";
		}

		//CIERRO EL ARCHIVO
		fclose($ar);
		break;
	case 5:
		//ABRO EL ARCHIVO
		$ar = fopen("archivos/miArchivo2.txt", "w+");//L/E
		
		//ESCRIBO EN EL ARCHIVO
		$cant = fwrite($ar, "Escribo en el archivo\r\nWWWWWWWW");
		
		if($cant > 0)
		{
			echo "escritura EXITOSA<br/>";			
		}
		//CIERRO EL ARCHIVO
		fclose($ar);
		break;
	case 6:
		
		$path_origen = "archivos/miArchivo.txt";
		$path_destino = "archivos/miArchivo2.txt";
		
		//COPIO EN EL ARCHIVO
		$copio = copy($path_origen, $path_destino);
		
		if($copio)
		{
			echo "copia EXITOSA<br/>";			
		}
		else
		{
			echo "no se pudo COPIAR";
		}

		break;
	case 7:
		
		$path = "archivos/miArchivo2.txt";
		
		//ELIMINO EL ARCHIVO
		$elimino = unlink($path);
		
		if($elimino)
		{
			echo "elimino EXITOSAMENTE<br/>";			
		}
		else
		{
			echo "no se pudo ELIMINAR";
		}

		break;
		
	default:
		echo "Sin ejemplo";
}

?>