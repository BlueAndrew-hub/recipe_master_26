<?php

namespace App\Controllers\PagesController;

use \PDO;
use \App\Models\RecipesModel;
use \App\Models\AuthorModel;

function homeAction(PDO $conn) {
    include_once '../app/models/recipesModel.php';
    include_once '../app/models/authorModel.php';

    $randomRecipe = recipesModel\findOneByRand($conn); 

    $popularsRecipes = recipesModel\findAllPopulars($conn);

    $randomAuthor = authorModel\findOneByRand($conn);

    $authorLatestRecipes = authorModel\findAllByAuthorId($conn);

    GLOBAL $title, $content;
    $title = "Home";
    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();
}