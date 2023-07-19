<?php

$data = json_decode(file_get_contents('php://input'), true);

function getSong($key = false)
{
    if ($key) {
        try {
            require '../traitement/connection.php';
            $prepareMusic = $baseSpotify->prepare("SELECT * FROM song");
            $prepareMusic->execute();
            $fetchedMusic = $prepareMusic->fetchAll();
        } catch (PDOException $exception) {
            echo $exception->getMusic();
            exit();
        }
    } else {
        exit();
    }
    return $fetchedMusic;
}

$key = true;

 
$fetchedSong = getSong($key);
echo json_encode($fetchedMusic);
 
