<?php 

session_start();


if (empty($_SESSION)) {
    echo "<script>alert('erro')'</script>";
    echo "<script>location.href='index.php'</script>";
};


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Sistema de login</title>

</head>

<body>
<nav class="navbar navbat-light bg-light">
    <div class="container-fluid">

    <a class="navbar-brand">sistema X</a>
    <?php 
    echo "ola" . $_SESSION["nome"];
    echo "<a href= 'logout.php' class='bnt bnt-danger'>sair</a>"
    ?>
    </div>
</nav>    
</body>
</html>