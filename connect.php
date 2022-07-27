<?php
    $gmail = $_POST['gmail'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];   

    //conexão DataBase
    //https://www.youtube.com/watch?v=2HVKizgcfjo&ab_channel=TechnicalBabaji

    $conn = new mysqli('localhost','','','basedados-site');
    if($conn->connect_error){
        die ('Connection Failed :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(gmail, usuario, senha)
        values (?,?,?)");
        $stmt->bind_param("sss", $gmail, $usuario, $senha);
        $stmt->execute();
        echo "Registo concluído";
        $stmt->close();
        $conn->close();
    }

?>