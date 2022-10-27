<?php

require_once '../../config/config.php';
require_once '../../app/models/Album.php';

$album_model = new AlbumModel();

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $album = $album_model->getAlbumByAlbumId($id);
  if($album != null){
    http_response_code(200);
    echo json_encode($album);
  }
  else{
    http_response_code(500);
    echo "Something went wrong.";
  }
}
else{
  http_response_code(400);
  echo "Bad request.";
}