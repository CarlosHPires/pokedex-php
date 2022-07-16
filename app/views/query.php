<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="././styles/query.css">
    <link rel="stylesheet" type="text/css" href="././styles/global.css">
</head>
<body>
<div class="center">
  <div class="left">
    <div class="show-pokedex">
      <table>
          <tr>
            <th>Pokémon</th><th>Tipo</th><th>N°</th><th>Ações</th>
          </tr>
        <?php foreach($query as $pokedex): ?>
          <tr>
          <td><?php echo $pokedex['pokemon'] ?></td>
          <td><?php echo $pokedex['pokemonType'] ?></td>
          <td><?php echo $pokedex['pokemonNumber'] ?></td>
          <td><a class="edit" href="?router=Site/edit/&id=<?php echo base64_encode($pokedex['id_pokemon'])  ?>">Editar</a> </td>
          <td><a class="delete" href="?router=Site/confirmDeletion/&id=<?php echo base64_encode($pokedex['id_pokemon']) ?>">Deletar</a> </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
  <div class="right">
    <img src="./assets/backgroundViewPokedex.jpg" alt="Charmander picture">
  </div>
</div>
</body>
</html>