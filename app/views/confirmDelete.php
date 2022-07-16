<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="././styles/confirmDelete.css">
    <link rel="stylesheet" type="text/css" href="././styles/global.css">
</head>
<body>
<div class="center">
    <div class="left">
        <div class="delete-pokemon-form">
            <h1>Tem certeza que deseja excluir?</h1>
            <p class="buttons">
               <a class="delete-button" href="?router=Site/deletar/&id=<?php echo $id ?>">SIM</a>
               <a class="back-button" href="?router=Site/query/">NÃO</a>
            </p>
        </div>
    </div>
    <div class="right">
        <img src="./assets/backgroundViewPokedex.jpg" alt="Charmander picture">
    </div>
</div>
</body>
</html>