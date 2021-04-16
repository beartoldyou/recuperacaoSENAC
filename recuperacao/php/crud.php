<?php
require_once('./conexao.php');

function fnAdduser($nome, $email, $telefone)
{
    $link = getConnection();

    $query = "insert into tbusers values(null, '{$nome}', '{$email}', '{$telefone}')";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Error ao gravar", 1);
        return false;
    }
    return true;
}

function fnListAssin() {
    $link = getConnection();

    $query = "select * from tbusers";

    $rs = mysqli_query($link, $query);

    $user = array();
    while($row = mysqli_fetch_assoc($rs)) {
      array_push($user, $row);
    }
    return $user;
  }

  function fnFinduserById($id){
    $link = getConnection();

    $query = "select * from tbusers where id = {$id}";

    $rs = mysqli_query($link, $query);

    return mysqli_fetch_assoc($rs);
  }

  function fnUpdateuser($id, $nome, $email, $telefone) {
    $link = getConnection();

    $query = "update tbusers set nome = '{$nome}', email = '{$email}', telefone = '{$telefone}' where id = {$id}";

    mysqli_query($link, $query);

    if(!mysqli_query($link, $query)) {
      throw new \Exception("Error ao atualizar", 1);
      return false;
    }
    return true;
  }

  function fnDeleteuser($id){
    $link = getConnection();

    $query = "delete from tbusers where id = {$id}";

    mysqli_query($link, $query);

    if(!mysqli_query($link, $query)) {
      throw new \Exception("Error ao excluir", 1);
      return false;
    }
    return true;
  }