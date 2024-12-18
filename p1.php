<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="shortcut icon" href="https://cdn.iconscout.com/icon/free/png-256/free-livro-de-leitura-2130818-1794963.png" type="image/x-icon">
    <title>GuiLivros</title>
</head>
<body>
    <?php require_once 'includes/bankbook.php' ?>
    <table>
        <?php 
        $il = $_GET['i'] ?? 1;
        $busca = $bb->query("select * from livros as l join autores as a on l.autor = a.idautor where idlivro = '$il'");
        if (!$busca){
            echo 'erro';
        } else {
            if ($busca->num_rows == 0){
                echo 'erro';
            } else {
                while ($reg=$busca->fetch_object()){
                    echo "<tr><td><img src='$reg->imagemlivro' width='130'></td><td>$reg->nome</td><td>$reg->descrição</td><td>editora: $reg->editora</td><td>gênero: $reg->gênero</td><td>autor: <a href='p2.php?o=$reg->idautor' style='text-decoration: none;'>$reg->nomeautor</a></td></tr>";
                }
            }
        }
        ?>
    </table>
</body>
</html>