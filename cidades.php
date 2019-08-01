<?php
    require 'config_bd.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidades AM3</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="active">
                            <a href="cidades.php">Cidades</a>
                            <div class="submenu">
                                <a href="cidades.php"><div class="submenu_item">Lista de cidades</div></a>
                                <a href="cadastro_cidade.php"><div class="submenu_item">Nova cidade</div></a>
                            </div>
                        </li>
                        <li>
                            <a href="aeroportos.php">Aeroportos</a>
                            <div class="submenu">
                                <a href="aeroportos.php"><div class="submenu_item">Lista de aeroportos</div></a>
                                <a href="cadastro_cidade.php"><div class="submenu_item">Novo aeroporto</div></a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <section class="conteudo">
        <div class=container>
            <table>
                <tr>
                    <th>Cidade</th>
                    <th>País</th>
                    <th>Demanda (%)</th> 
                    <th>Econômica (%)</th>
                    <th>Executiva (%)</th>
                    <th>Primeira Classe (%)</th>
                    <th>Ações</th>
                </tr>
                <?php
                    $sql = "SELECT c.id, c.nome_cidade, p.nome_pais, c.demanda_cidade, c.demanda_economica, c.demanda_executiva, c.demanda_primeira_classe
                    FROM cidades AS c
                    INNER JOIN paises AS p
                    ON c.id_pais = p.id";

                    $sql = $pdo->query($sql);

                    if ($sql->rowCount() > 0){
                        foreach ($sql->fetchAll() as $cidades) {
                            echo '<tr>';
                            echo '<td>'.$cidades['nome_cidade'].'</td>';
                            echo '<td>'.$cidades['nome_pais'].'</td>';
                            echo '<td>'.$cidades['demanda_cidade'].'</td>';
                            echo '<td>'.$cidades['demanda_economica'].'</td>';
                            echo '<td>'.$cidades['demanda_executiva'].'</td>';
                            echo '<td>'.$cidades['demanda_primeira_classe'].'</td>';
                            echo '<td><a href="alterar_cidade.php?id='.$cidades['id'].'">Editar</a></td>';
                            echo '</tr>';
                        }
                    }
                ?>
            </table>
        </div>
    </section>
    <footer>

    </footer>
    
</body>
</html>