<?php
include "../traitement/connection.php";

function getMusics($baseSpotify) {

$query = "SELECT * FROM song";
$statement = $baseSpotify->prepare($query);
$statement->execute();
$musics = $statement->fetchAll(PDO::FETCH_ASSOC);

$songs = [];
foreach ($musics as $music) {
    $song = [
        'id' => $music['id'],
        'name' => $music['name'],
        'author' => $music['author'],
        'file' => $music['file'],
    ];
    array_push($songs, $song);



}
return $songs;
}


$songs = getMusics($baseSpotify);
header('Content-Type: application/json');
echo json_encode(array('songs' => $songs));

?>

