<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.css">
    <title>GuiLivros</title>
</head>
<body>
    <?php require_once 'includes/bankbook.php' ?>
    <table>
        <?php 
        $ia = $_GET['o'] ?? 1;
        $busca = $bb->query("select * from autores where idautor = '$ia'");
        if (!$busca){
            echo 'erro';
        } else {
            if ($busca->num_rows == 0){
                echo 'erro';
            } else {
                while ($reg=$busca->fetch_object()){
                    echo "<tr><td><img src='$reg->imagemautor' width='130'></td><td>$reg->nomeautor</td><td>$reg->descriçãoautor</td></tr>";
                }
            }
        }
        ?>
    </table>
</body>
</html>