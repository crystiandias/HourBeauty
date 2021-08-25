<?php

require_once("conexao.php");


    $sql = "SELECT a.data, u.nome, p.tempo, h.idhora, h.hora FROM usuario u,agendar a,procedimento p, hora h WHERE a.idusuario = u.idusuario 
    AND a.idproced = p.idproced AND a.idhora = h.idhora";

    $comando = $con->prepare($sql);
    $comando->execute();
    $tempo = $comando->fetch()["tempo"];
    $idhora = $comando->fetch()["idhora"];

    $idhora = $idhora+$tempo;

    echo '$idhora';

?>