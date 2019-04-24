<?php

include 'init.php';

foreach($_POST as $index => $dados) {
  $$index = $dados;
}

logar($email, $senha);
if(logado()) {
  echo $_SESSION['logado'];
  echo $_SESSION['email']; 
}

echo 'oi';

?>