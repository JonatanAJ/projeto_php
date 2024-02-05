<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "INSERT INTO usuarios (nome,email,senha) VALUES ('{$nome}','{$email}','{$senha}')";

        $res=$conn->query($sql);

        if ($res == true) {
            echo "<script>alert('cadastro feito com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
        else{
            echo "<script>alert('erro ao cadastrar')</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
      
        break;

        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $sql = "UPDATE usuarios SET nome='{nome}', email= '{email}', senha= '{senha}' WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res == true) {
                echo "<script>alert('editado com sucesso');</script>";
               echo"<script>location.href='?page=listar';</script>";
            }
            else {
                echo "<script>alert('erro ao editar');</script>";
               echo"<script>location.href='?page=listar';</script>";
            }
            break;

            case 'excluir':
                $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

                $res= $conn->query($sql);
                if ($res == true) {
                   echo "<script>alert('excluido com sucesso');</script>";
                   echo "<script>location.href='?page=listar'</script>";
                } else {
                    echo "<script>alert('erro ao excluir');</script>";
                    echo "<script>location.href='?page=listar'</script>";
                }
                break;

}