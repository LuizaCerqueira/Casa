<?php

function inserir (Pessoa $p){
    $msg= "Dados cadastrados com sucesso!";
    $conn = new Conecta();
    if ($conn->conectadb());
        $sql = "instr into pessoa values (null,'".$p->getName()."','".$p->getDtNasc()."','".$p->getLogin()."','".$p->getSenha()."','"
        .$p->getPerfil()."','".$p->getEmail()."','".$p->getCpf()."')";
    if (mysqli_query($conn->conectadb(),$sql) != 1){
        $msg = "Erro na sintaxe <br>";
} else
        $msg = "Erro na conexão com Banco de Dados!";
 mysqli_close($conn->conectdb());
 return $msg;
}
?>