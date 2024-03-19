<?php 
    $uploaddir = 'assets/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
      echo "Arquivo enviado com sucesso";
    } else {
       echo "Erro!";
    }
?>



