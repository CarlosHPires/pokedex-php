<?php

namespace app\models;

class Crud extends Connection 
{
    public function create()
    {
        $pokemon = filter_input(INPUT_POST, 'pokemon', FILTER_SANITIZE_SPECIAL_CHARS);
        $pokemonType = filter_input(INPUT_POST, 'pokemonType', FILTER_SANITIZE_SPECIAL_CHARS);
        $pokemonNumber = filter_input(INPUT_POST, 'pokemonNumber', FILTER_SANITIZE_SPECIAL_CHARS);
        $pokemonImage = filter_input(INPUT_POST, 'pokemonImage');

        $conn = $this->connect();
        $sql = "insert into tb_pokemon values(default,:pokemon,:pokemonType,:pokemonNumber,:pokemonImage)";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':pokemon', $pokemon);
        $stmt->bindParam(':pokemonType', $pokemonType);
        $stmt->bindParam(':pokemonNumber', $pokemonNumber);
        $stmt->bindParam('pokemonImage', $pokemonImage);

        $stmt->execute();
        
        return $stmt;
    }

    public function read()
    {
        $conn = $this->connect();
        $sql = "select * from tb_pokemon order by id_pokemon";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }

    public function update()
    {
        $pokemon = filter_input(INPUT_POST, 'pokemon', FILTER_SANITIZE_SPECIAL_CHARS);
        $pokemonType = filter_input(INPUT_POST, 'pokemonType', FILTER_SANITIZE_SPECIAL_CHARS);
        $pokemonNumber = filter_input(INPUT_POST, 'pokemonNumber', FILTER_SANITIZE_SPECIAL_CHARS);
        $id_pokemon = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

        $conn = $this->connect();
        $sql = "update tb_pokemon set pokemon = :pokemon, pokemonType = :pokemonType, pokemonNumber = :pokemonNumber where id_pokemon = :id_pokemon";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':pokemon', $pokemon);
        $stmt->bindParam(':pokemonType', $pokemonType);
        $stmt->bindParam(':pokemonNumber', $pokemonNumber);
        $stmt->bindParam(':id_pokemon', $id_pokemon);

        $stmt->execute();

        return $stmt;
    }

    public function delete()
    {
        $id = base64_decode(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));

        $conn = $this->connect();
        $sql = "delete from tb_pokemon where id_pokemon = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return $stmt;
    }

    public function editForm()
    {
        $id = base64_decode(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS)) ;

        $conn = $this->connect();
        $sql = "select * from tb_pokemon where id_pokemon = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }
}