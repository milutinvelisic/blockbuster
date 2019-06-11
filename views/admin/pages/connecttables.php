<?php
  include 'models/movies/functions.php';
  include 'models/celebrities/functions.php';
  include 'models/genres/functions.php';
  include 'models/directors/functions.php';
?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list mr-1"></i>Connect tables</h1>
    </div>
  </div>
  <div class="row d-flex justify-content-center">
    <div class="col-lg-6 text-center">
      <div class="card bg-primary text-white mb-3">
        <div class="card-body">
          <h2>Choose what you want to connect</h2>
        </div>
        <select class="form-control" id="connecttype" name="connecttype" tabindex="-1" aria-hidden="true">
          <option value="0">Select...</option>
          <option value="1">Actors and Movie/Series</option>
          <option value="2">Genre and Movie/Series</option>
          <option value="3">Categories and Movie/Series</option>
          <option value="4">Director and Movie/Series</option>
          <option value="5">Producer and Movie/Series</option>
        </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-5 text-center" id="connectActorMS">
      <div class="card border-primary text-green mb-3">
        <div class="card-body">
          <h5>Choose Actor to connect</h5>
        </div>
        <select class="form-control" id="connectactorms" name="connectactorms" tabindex="-1" aria-hidden="true">
          <option value="0">Select...</option>
          <?php
            $actors = getAllActorsWithoutLimit();
            foreach($actors as $a):
          ?>
            <option value="<?= $a->idActor ?>"><?= $a->actorFirstName ?> <?= $a->actorLastName ?></option>
          <?php
            endforeach;
          ?>
        </select>
      </div>
    </div>

    <div class="col-lg-5 text-center" id="connectMSActor">
      <div class="card border-primary text-green mb-3">
        <div class="card-body">
          <h5>Choose Movie/Series to connect</h5>
        </div>
        <select class="form-control" id="connectmsactor" name="connectmsactor" tabindex="-1" aria-hidden="true">
          <option value="0">Select...</option>
          <?php
            $actors = getAllMovies();
            foreach($actors as $a):
          ?>
            <option value="<?= $a->idMainCatInfo ?>"><?= $a->mainCatInfoName ?></option>
          <?php
            endforeach;
          ?>
        </select>
      </div>
    </div>

    <div class="col-lg-2" id="btnConnectActorMS">
      <div class="form-group mt-5 d-flex justify-content-center">
        <button class="btn btn-primary" name="btnInsertMovie" id="btnInsertMovie" type="button" disabled><i class="fa fa-fw fa-lg fa-check-circle"></i>Connect</button>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-lg-5 text-center" id="connectGenreMS">
      <div class="card border-primary text-green mb-3">
        <div class="card-body">
          <h5>Choose Genre to connect</h5>
        </div>
        <select class="form-control" id="connectgenrems" name="connectgenrems" tabindex="-1" aria-hidden="true">
          <option value="0">Select...</option>
          <?php
            $genres = getAllGenres();
            foreach($genres as $a):
          ?>
            <option value="<?= $a->idGenre ?>"><?= $a->genreName ?></option>
          <?php
            endforeach;
          ?>
        </select>
      </div>
    </div>

    <div class="col-lg-5 text-center" id="connectMSGenre">
      <div class="card border-primary text-green mb-3">
        <div class="card-body">
          <h5>Choose Movie/Series to connect</h5>
        </div>
        <select class="form-control" id="connectmsgenre" name="connectmsgenre" tabindex="-1" aria-hidden="true">
          <option value="0">Select...</option>
          <?php
            $actors = getAllMovies();
            foreach($actors as $a):
          ?>
            <option value="<?= $a->idMainCatInfo ?>"><?= $a->mainCatInfoName ?></option>
          <?php
            endforeach;
          ?>
        </select>
      </div>
    </div>

    <div class="col-lg-2" id="btnConnectMSGenre">
      <div class="form-group mt-5 d-flex justify-content-center">
        <button class="btn btn-primary" name="btnInsertMovie" id="btnInsertMovie" type="button" disabled><i class="fa fa-fw fa-lg fa-check-circle"></i>Connect</button>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-lg-5 text-center" id="connectCatMS">
      <div class="card border-primary text-green mb-3">
        <div class="card-body">
          <h5>Choose Category to connect</h5>
        </div>
        <select class="form-control" id="connectcatms" name="connectcatms" tabindex="-1" aria-hidden="true">
          <option value="0">Select...</option>
          <?php
            $cat = getAllMovieCategories();
            foreach($cat as $a):
          ?>
            <option value="<?= $a->idCat ?>"><?= $a->categoryName ?></option>
          <?php
            endforeach;
          ?>
        </select>
      </div>
    </div>

    <div class="col-lg-5 text-center" id="connectMSCat">
      <div class="card border-primary text-green mb-3">
        <div class="card-body">
          <h5>Choose Movie/Series to connect</h5>
        </div>
        <select class="form-control" id="connectmscat" name="connectmscat" tabindex="-1" aria-hidden="true">
          <option value="0">Select...</option>
          <?php
            $actors = getAllMovies();
            foreach($actors as $a):
          ?>
            <option value="<?= $a->idMainCatInfo ?>"><?= $a->mainCatInfoName ?></option>
          <?php
            endforeach;
          ?>
        </select>
      </div>
    </div>

    <div class="col-lg-2" id="btnConnectMSCat">
      <div class="form-group mt-5 d-flex justify-content-center">
        <button class="btn btn-primary" name="btnInsertMovie" id="btnInsertMovie" type="button" disabled><i class="fa fa-fw fa-lg fa-check-circle"></i>Connect</button>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-5 text-center" id="connectDirectorMS">
      <div class="card border-primary text-green mb-3">
        <div class="card-body">
          <h5>Choose Director to connect</h5>
        </div>
        <select class="form-control" id="connectdirectorms" name="connectdirectorms" tabindex="-1" aria-hidden="true">
          <option value="0">Select...</option>
          <?php
            $dir = getAllDirectors();
            foreach($dir as $a):
          ?>
            <option value="<?= $a->idDirector ?>"><?= $a->directorFirstName ?> <?= $a->directorLastName ?></option>
          <?php
            endforeach;
          ?>
        </select>
      </div>
    </div>

    <div class="col-lg-5 text-center" id="connectMSDirector">
      <div class="card border-primary text-green mb-3">
        <div class="card-body">
          <h5>Choose Movie/Series to connect</h5>
        </div>
        <select class="form-control" id="connectmsdirector" name="connectmsdirector" tabindex="-1" aria-hidden="true">
          <option value="0">Select...</option>
          <?php
            $actors = getAllMovies();
            foreach($actors as $a):
          ?>
            <option value="<?= $a->idMainCatInfo ?>"><?= $a->mainCatInfoName ?></option>
          <?php
            endforeach;
          ?>
        </select>
      </div>
    </div>

    <div class="col-lg-2" id="btnConnectMSDirector">
      <div class="form-group mt-5 d-flex justify-content-center">
        <button class="btn btn-primary" name="btnInsertMovie" id="btnInsertMovie" type="button" disabled><i class="fa fa-fw fa-lg fa-check-circle"></i>Connect</button>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-5 text-center" id="connectProducerMS">
      <div class="card border-primary text-green mb-3">
        <div class="card-body">
          <h5>Choose Director to connect</h5>
        </div>
        <select class="form-control" id="connectproducerms" name="connectproducerms" tabindex="-1" aria-hidden="true">
          <option value="0">Select...</option>
          <?php
            $dir = getAllDirectors();
            foreach($dir as $a):
          ?>
            <option value="<?= $a->idDirector ?>"><?= $a->directorFirstName ?> <?= $a->directorLastName ?></option>
          <?php
            endforeach;
          ?>
        </select>
      </div>
    </div>

    <div class="col-lg-5 text-center" id="connectMSProducer">
      <div class="card border-primary text-green mb-3">
        <div class="card-body">
          <h5>Choose Movie/Series to connect</h5>
        </div>
        <select class="form-control" id="connectmsproducer" name="connectmsproducer" tabindex="-1" aria-hidden="true">
          <option value="0">Select...</option>
          <?php
            $actors = getAllMovies();
            foreach($actors as $a):
          ?>
            <option value="<?= $a->idMainCatInfo ?>"><?= $a->mainCatInfoName ?></option>
          <?php
            endforeach;
          ?>
        </select>
      </div>
    </div>

    <div class="col-lg-2" id="btnConnectMSProducer">
      <div class="form-group mt-5 d-flex justify-content-center">
        <button class="btn btn-primary" name="btnInsertMovie" id="btnInsertMovie" type="button" disabled><i class="fa fa-fw fa-lg fa-check-circle"></i>Connect</button>
      </div>
    </div>
  </div>

</main>