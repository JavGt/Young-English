
	var  total = 4;
	var  puntos = 0;
	var Leccion = 4;

	$.post('recibe.php',{V1:total},function(data){
		if (data!=null) {
			alert('Los datos se enviaron correctamente');
		}else{
			alert('Los datos no se enviaron correctamente');

		}
	});

	var myForm = document.forms["Exercise"];
	var respuestas = ["b" , "b", "a" , "a" , "a"];

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
	resultado.innerHTML = '<h3> Obtuviste <span> ' + puntos +' </span> de <span>'+ total +' puntos </span></h3> ' ;	//	$puntos = $_REQUEST['pun'];


}

function verificar_body(){
	var  total = 4;
	var  puntos = 0;

	var myForm = document.forms["Exercise"];
	var respuestas = ["a" , "b","a" ,"a" ];

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
	resultado.innerHTML = '<h3> Obtuviste <span> ' + puntos +' </span> de <span>'+ total +' puntos </span></h3> ' ;	//	$puntos = $_REQUEST['pun'];
	return false;
}

<<<<<<< HEAD

function verificar_abcd(){
=======
function verificar_domestics(){
>>>>>>> 178c4f4643ba3ff340c293c71f01ac2ae7340155
	var  total = 4;
	var  puntos = 0;

	var myForm = document.forms["Exercise"];
	var respuestas = ["a" , "b","b" ,"c" ,"a"];

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
	resultado.innerHTML = '<h3> Obtuviste <span> ' + puntos +' </span> de <span>'+ total +' puntos </span></h3> ' ;	//	$puntos = $_REQUEST['pun'];
	//	$puntos = $_REQUEST['pun'];
	return false;
}

function verificar_past(){
	var  total = 4;
	var  puntos = 0;

	var myForm = document.forms["Exercise"];
	var respuestas = ["chatted" , "danced","forgot" ,"copied" ,"stood"];

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

function verificar_conjugation(){
	var  total = 4;
	var  puntos = 0;

	var myForm = document.forms["Exercise"];
	var respuestas = ["b" , "a","b" ,"b" ,"b"];

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

function verificar_quantitatives(){
	var  total = 4;
	var  puntos = 0;

	var myForm = document.forms["Exercise"];
	var respuestas = ["b" , "a","c" ,"d" ,"d"];

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

function verificar_gerund(){
	var  total = 4;
	var  puntos = 0;

	var myForm = document.forms["Exercise"];
	var respuestas = ["c" , "a","a" ,"b" ,"b"];

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













		