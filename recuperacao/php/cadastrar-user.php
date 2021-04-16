<?php

    require('./crud.php');

    if($_POST['txtNome'] == NULL || $_POST['txtEmail'] == NULL || $_POST['txtTel'] == NULL){
        header('location: error.php?f=access-deny');
        die;
    }

    if(fnAdduser($_POST['txtNome'], $_POST['txtEmail'], $_POST['txtTel'])) {
        $status = 'add-success';
    } else {
        $status = 'add-fail';
    }
    
    header("location: listagem.php?f={$status}");
    die;