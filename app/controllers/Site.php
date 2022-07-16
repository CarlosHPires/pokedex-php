<?php

namespace app\controllers;

use app\models\Crud;

class Site extends Crud
{
    public function home()
    {
        require_once __DIR__ . './../views/home.php';
    }

    public function about()
    {
        require_once __DIR__ . './../views/about.php';
    }

    public function pokedex()
    {
        if(isset($_POST['pokemon'])) {
            $pokedex = $this->create();
        }
        require_once __DIR__ . './../views/pokedex.php';
    }

    public function query()
    {
        $query = $this->read();
        require_once __DIR__ . './../views/query.php';
    }

    public function edit()
    {
        $editForm = $this->editForm();
        require_once __DIR__ . './../views/edit.php';
    }

    public function change()
    {
        $change = $this->update();
        header("Location:?router=Site/query/");
    }

    public function confirmDeletion()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        require_once __DIR__ . './../views/confirmDelete.php';
    }

    public function deletar()
    {
        $deletar = $this->delete();
        header("Location:?router=Site/query/");
    }
}