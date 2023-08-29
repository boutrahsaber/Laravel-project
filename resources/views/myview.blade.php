<h1>
    HELLO FROM PAGE MYVIEW
</h1>
@extends('index')

@section('content')
<h1>
le contenu pour my view
</h1>
<?php
// URL de l'API que vous souhaitez appeler
$api_url = "https://jsonplaceholder.typicode.com/users";

// Appel à l'API en utilisant file_get_contents
$response = file_get_contents($api_url);

// Gestion des erreurs
if ($response === false) {
    echo "Erreur lors de l'appel à l'API.";
} else {
    // Traitement de la réponse (la réponse est généralement en format JSON)
    $decoded_response = json_decode($response, true); // Si la réponse est au format JSON
    echo'<pre>';
    var_dump($decoded_response); // Affiche la réponse décryptée
    echo'</pre>';
}
?>

@endsection('contnet')