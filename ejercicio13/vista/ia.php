<?php 
require_once '../controlador/recetasController.php';

$receta = $_POST['nombre']; //Recibe el nombre de la receta deseada

//Puerto y url
$puerto = '1234';
$url = "http://localhost:$puerto/v1/chat/completions";

//Recogemos los datos de la receta
$datos = array( //Devuelve la elaboración para la receta indicada
    "model"=> "llama-3.2-1b-instruct",
    "messages"=> 
    array(
        array("role"=> "system", "content"=> "Responde siempre en español"),
        array("role"=> "user", "content"=> "Dime la elaboración para la receta $receta sin decir los ingredientes")
    ),
    "temperature"=> 0.7,
    "max_tokens"=> -1,
    "stream"=> false
);

$jsonDatos = json_encode($datos);

$ch = curl_init($url); //Iniciamos el curl

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDatos);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonDatos)
));

$respuesta = curl_exec($ch);

if (curl_errno($ch)) { //Mensaje que se muestra en caso de error
    echo 'Error en cURL: ' . curl_error($ch);
} else {
    $data = json_decode($respuesta, true);

    $elaboracion = $data['choices'][0]['message']['content'];

}

curl_close($ch); //Cierra el curl

$datos = array( //Devuelve los ingredientes para la receta indicada
    "model"=> "llama-3.2-1b-instruct",
    "messages"=> 
    array(
        array("role"=> "system", "content"=> "Responde siempre en español"),
        array("role"=> "user", "content"=> "Dame los ingredientes para $receta")
    ),
    "temperature"=> 0.7,
    "max_tokens"=> -1,
    "stream"=> false
);

$jsonDatos = json_encode($datos);

$ch = curl_init($url); //Iniciamos el curl

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDatos);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonDatos)
));

$respuesta = curl_exec($ch);

if (curl_errno($ch)) { //Mensaje que se muestra en caso de error
    echo 'Error en cURL: ' . curl_error($ch);
} else {
    $data = json_decode($respuesta, true);

    $ingredientes = $data['choices'][0]['message']['content'];

}

curl_close($ch); //Cierra el curl

$controller = new RecetasController(); //Guarda la receta en la base de datos y vuelve a la lista
$controller->agregarReceta($receta, $elaboracion, $ingredientes);
    header("Location: lista_recetas.php");
    exit();
?>