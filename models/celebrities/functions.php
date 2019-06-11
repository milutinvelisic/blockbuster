<?php

function getAllActors()
{
    global $conn;

    $select = $conn->query("SELECT * FROM actors LIMIT 0,6")->fetchAll();

    return $select;
}

function getAllActorsWithoutLimit()
{
    return executeQuery("SELECT * FROM actors");
}

function getActorMovies($actorId)
{
    global $conn;

    $tmp = $conn->prepare("SELECT * from main_category_info mci inner join actor_main_category_info amci on mci.idMainCatInfo = amci.idMainCatInfo where amci.idActor = ?");
    $tmp->execute([$actorId]);

    return $tmp->fetchAll();
}

function getOneActor($actorId)
{
    global $conn;

    try {

        $tmp = $conn->prepare("SELECT * FROM actors where idActor = ?");
        $tmp->execute([$actorId]);

        $actor = $tmp->fetch();
        if ($actor) {
            $actor->movies = getActorMovies($actorId);
        }

        return $actor;
    } catch (PDOException $ex) {
        return null;
    }
}

function getSomeCelebs()
{
    return executeQuery("SELECT * FROM actors limit 0,4");
}

function checkPagination($value)
{

    $offset = 6;

    $PPNumber = executeQuery("SELECT count(*) as PPNumber from actors");
    $brojDugmica = ceil($PPNumber / $offset);

    if (isset($_GET['pp'])) {
        $pagePagination = ($_GET['pp'] - 1) * $offset;
    }
}

function PPNumberCelebs()
{

    global $offset;

    $offset = 6;

    $numberOfActor = executeQuery("SELECT count(*) as PPNumber from actors");
    $numberOfActors = $numberOfActor[0]->PPNumber;

    $PPNumber = ceil($numberOfActors / $offset);

    return $PPNumber;
}
