<?php 

session_start();

function salvarUsuario($arrayUsuarios) {
  file_put_contents("usuarios.csv",join(',', $arrayUsuarios) . "\n", FILE_APPEND);
}

function verificarEmail($novoEmail){
  $usuarios = file("usuarios.csv");
  foreach($usuarios as $usuario) {
    list($email) = explode(',', $usuario);
    if($novoEmail === $email) {
      return true;
    }
  }
  
  return false;
}

function logar($email, $senha){
  $usuarios = file("usuarios.csv");
  $emailSenha = array_map(function($item) {
    $dados = explode(",", $item);
    return implode(",", [$dados[0], $dados[1]]);
  }, $usuarios);
  
  if(in_array(implode(',', [$email, md5($senha)]), $emailSenha)) {
    return false;
  }

  $_SESSION['logado'] = true;
  $_SESSION['email'] = $email;
  return true;
}



function logado() {
  return $_SESSION['logado'] ?? flase;
}







?>