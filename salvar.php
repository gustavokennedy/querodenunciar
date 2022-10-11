<?php 
    include('config.php');

    $data = date("Y/m/d");

    $estado = $_POST["estado"];
    $municipio = $_POST["municipio"];
    $pessoas = $_POST["pessoas"];
    $testemunhas = $_POST["testemunhas"];
    $endereco = $_POST["endereco"];
    $descricao = $_POST["descricao"];
 
    $sql = "INSERT INTO representacao (id, estado, municipio, pessoas, testemunhas, endereco, descricao, data_criacao) VALUES (id, '{$estado}', '{$municipio}', '{$pessoas}', '{$testemunhas}', '{$endereco}', '{$descricao}', '{$data}')";
    $res = $conn->query($sql);

    if ($res ==true){
            print "<script>alert('Denuncia criada!');</script>";
            print "<script>location.href='http://localhost';</script>";
    } else {
        print "<script>alert('Falha ao criar denúncia, verifique!');</script>";
        print "<script>location.href='http://localhost';</script>";
    }
?>