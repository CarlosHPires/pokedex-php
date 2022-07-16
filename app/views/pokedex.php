<?php
session_start();
require_once('./app/controllers/Site.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="././styles/pokedex.css">
    <link rel="stylesheet" type="text/css" href="././styles/global.css">
</head>
<body>
    <div class="center">
        <div class="left">
            <div class="register-pokemon-form">
                <h1>Registre seu Pokémon</h1>
                <form action="?router=Site/pokedex" method="post">
                   <input type="text" placeholder="Nome do Pokémon" name="pokemon" id="pokemon" required>
                   <label for="pokemon">Digite o nome do Pokémon</label>
    
                   <input type="text" placeholder="Tipo do Pokémon" name="pokemonType" id="pokemon-type" required>
                   <label for="pokemonType">Digite o tipo do Pokémon</label>
    
                   <input type="text" placeholder="Número do Pokémon" name="pokemonNumber" id="pokemon-number" required>
                   <label for="pokemonNumber">Digite o número do Pokémon</label>
                   
                   <div class="image">
                      <img id="pokeball" src="././assets/pokeball.png" alt="Selecione uma imagem">
                      <input type="file" name="pokemonImage" id="pokemon-image" accept="image/*">
                      <label id="pokeballLabel" for="pokemonImage">Insira a imagem do Pokémon</label>
                   </div>

                   <input class="form-buton" type="submit" value="adicionar">
                   <input class="form-buton"type="reset" value="limpar">
                   
                </form>
          </div>
        </div>
        <div class="right">
           <img src="./assets/backgroundViewPokedex.jpg" alt="Charmander picture">
        </div>
        
    </div>
    <script src="./js/pokeballFile.js"></script>
</body>



</html>