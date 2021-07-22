
function verificar_season(){
	var  total = 4;
	var  puntos = 0;

	var myForm = document.forms["Exercise"];
	var respuestas = ["a" , "b","c" ,"d" ];

	for(var i = 1; i <= total; i++){
		if(myForm["p" + i ].value === null || myForm["p" + i].value === "" ){ //Verificar si fue respondida
			alert("Aun no respondes la pregunta " + i);
			return false;

		}else{

			if(myForm["p" + i].value === respuestas[i - 1]){
				puntos ++;
			}
		}
	}

	

	var resultado = document.getElementById("resultado");
	resultado.innerHTML = '<h3> Obtuviste <span> ' + puntos +' </span> de <span>'+ total +' puntos </span></h3><input class="boton_enviar" type="submit" name="Siguiente"><a href="menu.php"></a> <input class="boton_enviar" type="submit" name="reintentar"><a href="season.php#modal"></a> ' ;
	//	$puntos = $_REQUEST['pun'];
	return false;
}

function verificar_color(){
	var  total = 4;
	var  puntos = 0;

	var myForm = document.forms["Exercise"];
	var respuestas = ["d" , "c","d" ,"b" ];

	for(var i = 1; i <= total; i++){
		if(myForm["p" + i ].value === null || myForm["p" + i].value === "" ){ //Verificar si fue respondida
			alert("Aun no respondes la pregunta " + i);
			return false;

		}else{

			if(myForm["p" + i].value === respuestas[i - 1]){
				puntos ++;
			}
		}
	}

	

	var resultado = document.getElementById("resultado");
	resultado.innerHTML = '<h3> Obtuviste <span> ' + puntos +' </span> de <span>'+ total +' puntos </span></h3><input class="boton_enviar" type="submit" name="Siguiente"><a href="menu.php"></a> <input class="boton_enviar" type="submit" name="reintentar"><a href="season.php#modal"></a> ' ;
	//	$puntos = $_REQUEST['pun'];
	return false;
}

function verificar_abcd(){
	var  total = 4;
	var  puntos = 0;

	var myForm = document.forms["Exercise"];
	var respuestas = ["a" , "c","d" ,"c" ];

	for(var i = 1; i <= total; i++){
		if(myForm["p" + i ].value === null || myForm["p" + i].value === "" ){ //Verificar si fue respondida
			alert("Aun no respondes la pregunta " + i);
			return false;

		}else{

			if(myForm["p" + i].value === respuestas[i - 1]){
				puntos ++;
			}
		}
	}

	

	var resultado = document.getElementById("resultado");
	resultado.innerHTML = '<h3> Obtuviste <span> ' + puntos +' </span> de <span>'+ total +' puntos </span></h3><input class="boton_enviar" type="submit" name="Siguiente"><a href="menu.php"></a> <input class="boton_enviar" type="submit" name="reintentar"><a href="season.php#modal"></a> ' ;
	//	$puntos = $_REQUEST['pun'];
	return false;
}












