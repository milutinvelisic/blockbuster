<?php

function getAllMovies()
{
    return executeQuery("SELECT *, idMainCatInfo as movie_id, mc.idMainCat FROM main_category_info mc inner join main_category m on mc.idMainCat = m.idMainCat where mc.idMainCat = 1");
}

// function getSomeMovies()
// {
//     return executeQuery("SELECT *, idMainCatInfo as movie_id, mc.idMainCat FROM main_category_info mc inner join main_category m on mc.idMainCat = m.idMainCat where mc.idMainCat = 1 limit 0,2");
// }

function getMovieActors($movie_id)
{
    global $conn;

    $tmp = $conn->prepare("SELECT * FROM actors a inner join actor_main_category_info am on a.idActor = am.idActor WHERE am.idMainCatInfo = ?");
    $tmp->execute([$movie_id]);

    return $tmp->fetchAll();
}

function getMovieDirector($movie_id)
{
    global $conn;

    $tmp = $conn->prepare("SELECT * FROM directors d inner join director_main_category_info dm on d.idDirector = dm.idDirector WHERE dm.idMainCatInfo = ?");
    $tmp->execute([$movie_id]);

    return $tmp->fetchAll();
}

function getMovieProducer($movie_id)
{
    global $conn;

    $tmp = $conn->prepare("SELECT * FROM producers p inner join producer_main_category_info pm on p.idProducer = pm.idProducer WHERE pm.idMainCatInfo = ?");
    $tmp->execute([$movie_id]);

    return $tmp->fetchAll();
}

function getMovieGenre($movie_id)
{
    global $conn;

    $tmp = $conn->prepare("SELECT * FROM genres g inner join genre_main_category_info gm on g.idGenre = gm.idGenre WHERE gm.idMainCatInfo = ?");
    $tmp->execute([$movie_id]);

    return $tmp->fetchAll();
}

function getMovieAgeRes($movie_id)
{
    global $conn;

    $tmp = $conn->prepare("SELECT * FROM agerestriction a inner join main_category_info m on a.idAgeRes = m.idAgeRes WHERE m.idMainCatInfo = ?");
    $tmp->execute([$movie_id]);

    return $tmp->fetchAll();
}

function getMovieCat($movie_id)
{
    global $conn;

    $tmp = $conn->prepare("SELECT * FROM categories c inner join categories_main_category_info cm on c.idCat = cm.idCat WHERE m.idMainCatInfo = ?");
    $tmp->execute([$movie_id]);

    return $tmp->fetchAll();
}

function joinActorsInMovies()
{

    $movies = getAllMovies();

    foreach ($movies as $movie) {
        $actors = getMovieActors($movie->movie_id);
        $movie->actors = $actors;
    }

    return $movies;
}

function getOneMovie($movie_id)
{
    global $conn;

    try {

        $tmp = $conn->prepare("SELECT *, idMainCatInfo as movie_id, mc.idMainCat FROM main_category_info mc inner join main_category m on mc.idMainCat = m.idMainCat where mc.idMainCat = 1 and idMainCatInfo = ?");
        $tmp->execute([$movie_id]);

        $movie = $tmp->fetch();
        if ($movie) {
            $movie->actors = getMovieActors($movie_id);
            $movie->director = getMovieDirector($movie_id);
            $movie->producer = getMovieProducer($movie_id);
            $movie->genre = getMovieGenre($movie_id);
            $movie->ageRes = getMovieAgeRes($movie_id);
        }
        return $movie;
    } catch (PDOException $ex) {
        return null;
    }
}

function getAllMovieCategories()
{
    return executeQuery("SELECT * FROM categories");
}

function getAllMovieGenres()
{
    return executeQuery("SELECT * FROM genres");
}

function getSomeMovies()
{
    return executeQuery("SELECT * FROM `main_category_info` WHERE idMainCat = 1 limit 0,4");
}

function PPNumberMovies()
{

    global $offset;

    $offset = 4;

    $numberOfMovie = executeQuery("SELECT count(*) as PPNumber from main_category_info WHERE idMainCat = 1");
    $numberOfMovies = $numberOfMovie[0]->PPNumber;

    $PPNumber = ceil($numberOfMovies / $offset);

    return $PPNumber;
}
