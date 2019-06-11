<?php
    include "models/celebrities/functions.php";
    include "models/movies/functions.php";
    include "models/series/functions.php";
    include "models/directors/functions.php";
    include "models/producers/functions.php";
    include "models/blog/functions.php";
?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Show Data</h1>
    </div>
  </div>
  <div class="row d-flex justify-content-center">
    <div class="col-lg-6 text-center">
      <div class="card bg-primary text-white mb-3">
        <div class="card-body">
          <h2>Choose what you want to show</h2>
        </div>
        <select class="form-control" id="showtype" name="showtype" tabindex="-1" aria-hidden="true">
          <option value="0">Select...</option>
          <option value="1">Actors</option>
          <option value="2">Directors - Producers</option>
          <option value="3">Blogs</option>
          <option value="4">Movies</option>
          <option value="5">Series</option>
          <option value="8">Categories - Genres</option>
        </select>
      </div>
    </div>
  </div>
  <div class="row" id="dataActor">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Actors Table</h3>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Actor ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Picture Cover</th>
                <th>Picture Big</th>
                <th>Picture Small</th>
                <th>Overview</th>
                <th>Biography</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody id="printDataActors">
              <?php
                $actors = getAllActorsWithoutLimit();
                // var_dump($actors);
                foreach($actors as $a):
              ?>
              <tr>
                <td><?= $a->idActor ?></td>
                <td><?= $a->actorFirstName ?></td>
                <td><?= $a->actorLastName ?></td>
                <td><?= $a->actorSrcCover ?></td>
                <td><?= $a->actorSrcBig ?></td>
                <td><?= $a->actorSrcSmall ?></td>
                <td><textarea name="" id="" cols="18" rows="4"><?= $a->overview ?></textarea></td>
                <td><textarea name="" id="" cols="18" rows="4"><?= $a->biography ?></textarea></td>
                <td><a href="models/admin/deleteactor.php?id=<?= $a->idActor ?>" class="btn btn-danger mt-4">Delete</a></td>
              </tr>
              <?php
                endforeach;
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="row"> 
    <div class="col-md-6" id="dataDirector">
      <div class="tile">
        <h3 class="tile-title">Directors Table</h3>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Director ID</th>
                <th>Director First Name</th>
                <th>Director Last Name</th>
                <th>Delete Director</th>
              </tr>
            </thead>
            <tbody id="printDataDirectors">
              <?php
                $directors = getAllDirectors();
                // var_dump($actors);
                foreach($directors as $d):
              ?>
              <tr>
                <td><?= $d->idDirector ?></td>
                <td><?= $d->directorFirstName ?></td>
                <td><?= $d->directorLastName ?></td>
                
                <td><a href="models/admin/deletedirecor.php?id=<?= $d->idDirector ?>" class="btn btn-danger">Delete</a></td>
              </tr>
              <?php
                endforeach;
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  
    <div class="col-md-6" id="dataProducer">
      <div class="tile">
        <h3 class="tile-title">Producers Table</h3>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Producer ID</th>
                <th>Producer First Name</th>
                <th>Producer Last Name</th>
                <th>Delete Producer</th>
              </tr>
            </thead>
            <tbody id="printDataProducers">
              <?php
                $producers = getAllProducers();
                // var_dump($actors);
                foreach($producers as $p):
              ?>
              <tr>
                <td><?= $p->idProducer ?></td>
                <td><?= $p->producerFirstName ?></td>
                <td><?= $p->producerLastName ?></td>
                
                <td><a href="models/admin/deleteproducer.php?id=<?= $p->idProducer ?>" class="btn btn-danger">Delete</a></td>
              </tr>
              <?php
                endforeach;
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6" id="dataGenre">
      <div class="tile">
        <h3 class="tile-title">Genres Table</h3>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Genre ID</th>
                <th>Genre Name</th>
                <th>Delete Genre</th>
              </tr>
            </thead>
            <tbody id="printDataGenres">
              <?php
                $genre = getAllMovieGenres();
                // var_dump($actors);
                foreach($genre as $g):
              ?>
              <tr>
                <td><?= $g->idGenre ?></td>
                <td><?= $g->genreName ?></td>
                
                <td><a href="models/admin/deletegenre.php?id=<?= $g->idGenre ?>" class="btn btn-danger">Delete</a></td>
              </tr>
              <?php
                endforeach;
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="col-md-6" id="dataCat">
      <div class="tile">
        <h3 class="tile-title">Categories Table</h3>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Category ID</th>
                <th>Category Name</th>
                <th>Delete Category</th>
              </tr>
            </thead>
            <tbody id="printDataCategories">
              <?php
                $genre = getAllMovieCategories();
                // var_dump($actors);
                foreach($genre as $g):
              ?>
              <tr>
                <td><?= $g->idCat ?></td>
                <td><?= $g->categoryName ?></td>
                
                <td><a href="models/admin/deletecat.php?id=<?= $g->idCat ?>" class="btn btn-danger">Delete</a></td>
              </tr>
              <?php
                endforeach;
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="row" id="dataBlog">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Blogs Table</h3>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Blog ID</th>
                <th>Blog Title</th>
                <th>Blog Text Short</th>
                <th>Blog Text Long</th>
                <th>Blog Cover Photo</th>
                <th>Blog date</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody id="printDataActors">
              <?php
                $blogs = getAllBlogs();
                // var_dump($actors);
                foreach($blogs as $a):
              ?>
              <tr>
                <td><?= $a->idBlog ?></td>
                <td><?= $a->title ?></td>
                <td><textarea name="" id="" cols="18" rows="4"><?= $a->textShort ?></textarea></td>
                <td><textarea name="" id="" cols="18" rows="4"><?= $a->textLong ?></textarea></td>
                <td><?= $a->blogCoverPhoto ?></td>
                <td><?= $a->date ?></td>
                <td><a href="models/admin/deleteblog.php?id=<?= $a->idBlog ?>" class="btn btn-danger mt-4">Delete</a></td>
              </tr>
              <?php
                endforeach;
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="row" id="dataMovie">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Movies Table</h3>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Movie ID</th>
                <th>Movie Name</th>
                <th>Movie Cover Photo</th>
                <th>Movie Big Photo</th>
                <th>Movie Mini Photo</th>
                <th>Movie Release Date</th>
                <th>Movie Overview</th>
                <th>Movie Runtime</th>
                <th>Movie Trailer</th>
                <th>Delete Movie</th>
              </tr>
            </thead>
            <tbody id="printDataMovies">
              <?php
                $movies = getAllMovies();
                // var_dump($actors);
                foreach($movies as $a):
              ?>
              <tr>
                <td><?= $a->idMainCatInfo ?></td>
                <td><?= $a->mainCatInfoName ?></td>
                <td><?= $a->mainCatInfoCoverPhoto ?></td>
                <td><?= $a->mainCatInfoBigPhoto ?></td>
                <td><?= $a->mainCatInfoMiniPhoto ?></td>
                <td><?= $a->mainCatInfoReleaseDate ?></td>
                <td><textarea name="" id="" cols="18" rows="4"><?= $a->mainCatInfoOverview ?></textarea></td>
                <td><?= $a->mainCatInfoRuntime ?></td>
                <td><?= $a->mainCatInfoTrailer ?></td>
                <td><a href="models/admin/deletemovie.php?id=<?= $a->idMainCatInfo ?>" class="btn btn-danger mt-4">Delete</a></td>
              </tr>
              <?php
                endforeach;
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="row" id="dataSeries">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Series Table</h3>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Movie ID</th>
                <th>Movie Name</th>
                <th>Movie Cover Photo</th>
                <th>Movie Big Photo</th>
                <th>Movie Mini Photo</th>
                <th>Movie Release Date</th>
                <th>Movie Overview</th>
                <th>Movie Runtime</th>
                <th>Movie Trailer</th>
                <th>Delete Movie</th>
              </tr>
            </thead>
            <tbody id="printDataSeries">
              <?php
                $series = getAllSeries();
                // var_dump($actors);
                foreach($series as $a):
              ?>
              <tr>
                <td><?= $a->idMainCatInfo ?></td>
                <td><?= $a->mainCatInfoName ?></td>
                <td><?= $a->mainCatInfoCoverPhoto ?></td>
                <td><?= $a->mainCatInfoBigPhoto ?></td>
                <td><?= $a->mainCatInfoMiniPhoto ?></td>
                <td><?= $a->mainCatInfoReleaseDate ?></td>
                <td><textarea name="" id="" cols="18" rows="4"><?= $a->mainCatInfoOverview ?></textarea></td>
                <td><?= $a->mainCatInfoRuntime ?></td>
                <td><?= $a->mainCatInfoTrailer ?></td>
                <td><a href="models/admin/deleteseries.php?id=<?= $a->idMainCatInfo ?>" class="btn btn-danger mt-4">Delete</a></td>
              </tr>
              <?php
                endforeach;
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>
