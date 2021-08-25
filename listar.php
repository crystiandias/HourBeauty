<?php

require_once("conexao.php");


    $sql = "SELECT a.data, u.nomeusuario, p.tempo, h.idhora, h.hora,p.nomeprocedimento FROM usuario u,agendar a,procedimento p, hora h WHERE 
    a.idusuario = u.idusuario AND a.idproced = p.idproced AND a.idhora = h.idhora";

    $comando = $con->prepare($sql);
    $comando->execute();

    $eventos = [];

    while ($row_events = $comando->fetch(PDO::FETCH_ASSOC)) {
    $horainicial = $row_events["hora"];
    $tempo = $row_events["tempo"];
    $idhora = $row_events["idhora"];
    $usuario = $row_events["nome"];
    $procedimento = $row_events["nome"];
    }

    $idhora = $idhora+$tempo;

    
    $sql = "SELECT hora FROM hora WHERE idhora = ? ";

    $comando = $con->prepare($sql);
    $comando->bindParam(1, $idhora);
    $comando->execute();
    $horafinal = $comando->fetch()["hora"];

    echo "$usuario $procedimento";

?>