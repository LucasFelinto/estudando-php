<?php
  
  include './config/init.php';

  foreach($_POST as $index => $dados) {
    $$index = $dados;
  }

  if($senha != $confSenha || $senha === '' || $senha === null || $confSenha === ''  || $confSenha === null ) {
    header('location: cad_log.php?menssagem=Senhas não conferem');
  } else if (verificarEmail($email)) {
    header('location: cad_log.php?menssagem=E-mail já cadastrado');
  } 

  salvarUsuario([$email, md5($senha), $nome, $telefone, $cidade, $destrito]);
  header('location: cad_log.php?menssagem=Usuario cadastrado com sucesso');
    

?>


<pre>

</pre>