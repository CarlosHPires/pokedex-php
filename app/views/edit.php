<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="././styles/edit.css">
    <link rel="stylesheet" type="text/css" href="././styles/global.css">
</head>
<body>
    <div class="center">
       <div class="left">
            <div class="edit-pokemon-form">
               <a class="back-button" href="?router=Site/query/">X</a>
               <h1>Edite seu Pokémon</h1>
               <form action="?router=Site/change/" method="POST">

                    <?php foreach($editForm as $pokedex): ?>
                        <input type="hidden" name="id" value="<?php echo $pokedex['id_pokemon'] ?>">
                        <input type="text" placeholder="Nome do Pokémon" name="pokemon" id="pokemon" value="<?php echo $pokedex['pokemon'] ?>" required>
                        <label for="pokemon">Digite o nome do Pokémon</label>
                
                        <input type="text" placeholder="Tipo do Pokémon" name="pokemonType" id="pokemon-type" value="<?php echo $pokedex['pokemonType'] ?>" required>
                        <label for="pokemonType">Digite o tipo do Pokémon</label>
                
                        <input type="text" placeholder="Número do Pokémon" name="pokemonNumber" id="pokemon-number" value="<?php echo $pokedex['pokemonNumber'] ?>" required>
                        <label for="pokemonNumber">Digite o número do Pokémon</label>
            
                        <input class="form-button" type="submit" value="SALVAR">
                        <input class="form-button" type="reset" value="LIMPAR">
                    <?php endforeach; ?>
               </form>
            </div>
       </div>
       <div class="right">
           <img src="./assets/backgroundViewPokedex.jpg" alt="Charmander picture">
        </div>
    </div>
</body>
</html>