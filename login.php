<?php 

if (empty($_POST) or (empty($_POST["email"]) or (empty($_POST["senha"])))) {
    print "<script>alert('erro');</script>";
    print "<script>location.href='index.php';</script>";
  }

include('config.php');

$email = $_POST["email"];
$senha = $_POST["senha"];


$sql = "SELECT * FROM usuarios WHERE email='{$email}' AND senha='{$senha}'";

$res = $conn->query($sql) or die($conn->error);

$row = $res->fetch_object();

$qtd =$res->num_rows;

if ($qtd > 0) {
    $_SESSION["email"] = $email;
    $_SESSION["senha"] = $senha;
    $_SESSION["nome"] = $row->nome;
    $_SESSION["tipo"] = $row-> tipo;
    header("Location: dashboard.php");

} else {
    
    echo "<script>alert('email ou senha incorreto(s)');</script>";
    echo "<script>location.href='index.php';</script>";
}

