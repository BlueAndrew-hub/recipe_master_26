<?php 

namespace App\Models\AuthorModel;

use \PDO;

function findOneByRand(PDO $conn) {
    $sql = "SELECT *
            FROM users
            ORDER BY RAND()
            LIMIT 1;";

    $rs = $conn->query($sql);
    return $rs->fetch(PDO::FETCH_ASSOC);   
}

function findAllByAuthorId(PDO $conn) {
    $sql = "SELECT *
            FROM recipes
            ORDER BY created_at DESC
            LIMIT 2;";

    $rs = $conn->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}