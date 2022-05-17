<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = MD5($_POST['senha']);

$connect = mysql_connect('Mysql@localhost:3306','root','puc2022');
$db = mysql_select_db('bd_cs');
$query_select = "SELECT email FROM usuarios WHERE email = '$email'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['email'];

  if($email == "" || $email == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    registrar.html';</script>";

    }else{
      if($logarray == $email){

        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        registrar.html';</script>";
        die();

      }else{
        $query = "INSERT INTO usuarios (nome,email,senha) VALUES ('$nome',$email','$senha')";
        $insert = mysql_query($query,$connect);

        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='entrar.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='registrar.html'</script>";
        }
      }
    }
?>