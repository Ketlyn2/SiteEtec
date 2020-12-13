<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tabela.css">
    <title>Ver Eventos Ativos</title>
</head>
<body>
    <?php
        // require "verifica.php";
    ?>
    <div>
		<ul>
			<li><a href="eventos.php">Criar evento</a></li>
			<li><a href="#">Ver eventos ativos</a></li>
			<li><a href="editEvento.php">Editar Eventos</a></li>
		</ul>
    </div>
    
    <table id="tabela1">
        <tr>
            <td>Nome do Evento</td>
            <td>Data do Evento</td>
            <td>Criador</td>
        </tr>
        <tr>
            <td><?php ?></td>
            <td><?php ?></td>
            <td><?php ?></td>
        </tr>
    </table>
</body>
</html>