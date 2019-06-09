<?php

function getAllSeries()
{
    return executeQuery("SELECT *, idMainCatInfo as series_id, mc.idMainCat FROM main_category_info mc inner join main_category m on mc.idMainCat = m.idMainCat where mc.idMainCat = 2");
}

function getSeriesActors($series_id)
{
    global $conn;

    $tmp = $conn->prepare("SELECT * FROM actors a inner join actor_main_category_info am on a.idActor = am.idActor WHERE am.idMainCatInfo = ?");
    $tmp->execute([$series_id]);

    return $tmp->fetchAll();
}

function getSeriesDirector($series_id)
{
    global $conn;

    $tmp = $conn->prepare("SELECT * FROM directors d inner join director_main_category_info dm on d.idDirector = dm.idDirector WHERE dm.idMainCatInfo = ?");
    $tmp->execute([$series_id]);

    return $tmp->fetchAll();
}

function getSeriesProducer($series_id)
{
    global $conn;

    $tmp = $conn->prepare("SELECT * FROM producers p inner join producer_main_category_info pm on p.idProducer = pm.idProducer WHERE pm.idMainCatInfo = ?");
    $tmp->execute([$series_id]);

    return $tmp->fetchAll();
}

function getSeriesGenre($series_id)
{
    global $conn;

    $tmp = $conn->prepare("SELECT * FROM genres g inner join genre_main_category_info gm on g.idGenre = gm.idGenre WHERE gm.idMainCatInfo = ?");
    $tmp->execute([$series_id]);

    return $tmp->fetchAll();
}

function getSeriesAgeRes($series_id)
{
    global $conn;

    $tmp = $conn->prepare("SELECT * FROM agerestriction a inner join main_category_info m on a.idAgeRes = m.idAgeRes WHERE m.idMainCatInfo = ?");
    $tmp->execute([$series_id]);

    return $tmp->fetchAll();
}

function joinActorsMovies()
{

    $series = getAllMovies();

    foreach ($seriess as $series) {
        $actors = getSeriesActors($series->series_id);
        $series->actors = $actors;
    }

    return $series;
}

function getOneSeries($series_id)
{
    global $conn;

    try {

        $tmp = $conn->prepare("SELECT *, idMainCatInfo as series_id, mc.idMainCat FROM main_category_info mc inner join main_category m on mc.idMainCat = m.idMainCat where mc.idMainCat = 2 and idMainCatInfo = ?");
        $tmp->execute([$series_id]);

        $series = $tmp->fetch();
        if ($series) {
            $series->actors = getSeriesActors($series_id);
            $series->director = getSeriesDirector($series_id);
            $series->producer = getSeriesProducer($series_id);
            $series->genre = getSeriesGenre($series_id);
            $series->ageRes = getSeriesAgeRes($series_id);
        }
        return $series;
    } catch (PDOException $ex) {
        return null;
    }
}

function getAllSeriesCategories()
{
    return executeQuery("SELECT * FROM categories");
}

function getSomeSeries()
{
    return executeQuery("SELECT * FROM `main_category_info` WHERE idMainCat = 2 limit 0,4");
}

function getAllSeriesGenres()
{
    return executeQuery("SELECT * FROM genres");
}

function PPNumberSeries()
{

    global $offset;

    $offset = 4;

    $numberOfSerie = executeQuery("SELECT count(*) as PPNumber from main_category_info WHERE idMainCat = 2");
    $numberOfSeries = $numberOfSerie[0]->PPNumber;

    $PPNumber = ceil($numberOfSeries / $offset);

    return $PPNumber;
}
