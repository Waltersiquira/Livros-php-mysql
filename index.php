<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiLivros</title>
</head>
<body>
    <?php require_once 'includes/bankbook.php' ?>
    <h1>GuiLivros</h1>
    <hr>
    <table>
    <?php 
    $busca = $bb->query('select * from livros as l join autores as a on l.autor = a.idautor');
    if (!$busca){
        echo 'erro';
    } else {
        if ($busca->num_rows == 0){
            echo 'erro';
        } else {
            while ($reg=$busca->fetch_object()){
                echo "<tr><td><a href='p1.php?i=$reg->idlivro'><img src='$reg->imagemlivro' width='130'></a></td><td>$reg->nome</td></tr>";
            }
        }
    }
    ?>
    </table>
</body>
</html>