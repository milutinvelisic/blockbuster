    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Insert</h1>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <div class="card bg-primary text-white mb-3">
            <div class="card-body">
              <h2>Choose what you want to insert</h2>
            </div>
            <select class="form-control" id="datatype" name="datatype" tabindex="-1" aria-hidden="true">
              <option value="0">Select...</option>
              <option value="1">Actor</option>
              <option value="2">Genre</option>
              <option value="3">Blog</option>
              <option value="4">Movie</option>
              <option value="5">Serie</option>
              <option value="6">Director</option>
              <option value="7">Producer</option>
              <option value="8">Categories</option>
            </select>
          </div>
        </div>
      </div>
      <!-- Author forma -->
      <div class="row" id="formActor">
        <div class="col-lg-12">
          <div class="tile">
            <h3 class="tile-title">Insert Actor</h3>
            <div class="tile-body">
              <form>
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label class="control-label">First name</label>
                    <input class="form-control" type="text" name="actorfirstname" id="actorfirstname" placeholder="Enter first name">
                  </div>
                  <div class="form-group col-lg-6">
                    <label class="control-label">Last name</label>
                    <input class="form-control" type="email" name="actorlastname" id="actorlastname" placeholder="Enter last name">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label class="control-label">Overview</label>
                    <textarea class="form-control" rows="4" placeholder="Enter overview"></textarea>
                  </div>
                  <div class="form-group col-lg-6">
                    <label class="control-label">Biography</label>
                    <textarea class="form-control" rows="4" placeholder="Enter biography"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label class="control-label">Actor picture</label>
                    <input class="form-control" type="file" name="actorpicture" id="actorpicture">
                  </div>
                  <div class="form-group col-lg-6 mt-4 d-flex align-items-center">
                    <button class="btn btn-primary" name="btnInsertActor" id="btnInsertActor" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Insert Actor</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" id="clearActorFormData" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Clear form data</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" id="cancelActor" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row" id="formGenre">
        <div class="col-lg-12">
          <div class="tile">
            <h3 class="tile-title">Insert Genre</h3>
            <div class="tile-body">
              <form>
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label class="control-label">Genre name</label>
                    <input class="form-control" type="text" name="genrename" id="genrename" placeholder="Enter genre name">
                  </div>
                  <div class="form-group col-lg-6 mt-4 d-flex justify-content-center">
                    <button class="btn btn-primary" name="btnInsertGenre" id="btnInsertGenre" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Insert Genre</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" id="clearGenreFormData" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Clear form data</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" id="cancelGenre" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row" id="formBlog">
        <div class="col-lg-12">
          <div class="tile">
            <h3 class="tile-title">Insert Blog</h3>
            <div class="tile-body">
              <form>
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label class="control-label">Blog title</label>
                    <input class="form-control" type="text" name="blogtitle" id="blogtitle" placeholder="Enter title name">
                  </div>
                  <div class="form-group col-lg-6">
                    <label class="control-label">Blog picture</label>
                    <input class="form-control" type="file" name="blogpicture" id="blogpicture">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label class="control-label">Text short</label>
                    <textarea class="form-control" rows="4" name="blogshort" id="blogshort" placeholder="Enter short text"></textarea>
                  </div>
                  <div class="form-group col-lg-6">
                    <label class="control-label">Text long</label>
                    <textarea class="form-control" rows="4" name="bloglong" name="bloglong" placeholder="Enter long text"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-12 mt-4 d-flex align-items-center">
                    <button class="btn btn-primary" name="btnInsertBlog" id="btnInsertBlog" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Insert Blog</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" id="clearBlogFormData" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Clear form data</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" id="cancelBlog" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row" id="formMovie">
        <div class="col-lg-12">
          <div class="tile">
            <h3 class="tile-title">Insert Movie</h3>
            <div class="tile-body">
              <form>
                <input type="hidden" name="idMainCat" value="1">
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label class="control-label">Movie name</label>
                    <input class="form-control" type="text" name="moviename" id="moviename" placeholder="Enter movie name">
                  </div>
                  <div class="form-group col-lg-6">
                    <label class="control-label">Movie picture</label>
                    <input class="form-control" type="file" name="moviepicture" id="moviepicture">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label class="control-label">Movie overview</label>
                    <textarea class="form-control" rows="4" placeholder="Enter overview"></textarea>
                  </div>
                  <div class="form-group col-lg-6">
                    <label class="control-label">Release date</label>
                    <input type="text" class="form-control" name="moviereleasedate" id="moviereleasedate" placeholder="Enter biography">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label class="control-label">Age restriction</label>
                    <select class="form-control" name="movieageres" id="movieageres">
                      <option value="0">PG</option>
                      <option value="0">PG</option>
                      <option value="0">PG</option>
                    </select>
                  </div>
                  <div class="form-group col-lg-6 mt-4 d-flex align-items-center">
                    <button class="btn btn-primary" name="btnInsertMovie" id="btnInsertMovie" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Insert Movie</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" id="clearMovieFormData" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Clear form data</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" id="cancelMovie" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row" id="formSeries">
        <div class="col-lg-12">
          <div class="tile">
            <h3 class="tile-title">Insert Series</h3>
            <div class="tile-body">
              <form>
                <input type="hidden" name="idMainCat" value="2">
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label class="control-label">Series name</label>
                    <input class="form-control" type="text" name="blogtitle" id="blogtitle" placeholder="Enter title name">
                  </div>
                  <div class="form-group col-lg-6">
                    <label class="control-label">Series picture</label>
                    <input class="form-control" type="file" name="blogpicture" id="blogpicture">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label class="control-label">Series overview</label>
                    <textarea class="form-control" rows="4" name="seriesoverview" placeholder="Enter overview"></textarea>
                  </div>
                  <div class="form-group col-lg-6">
                    <label class="control-label">Release date</label>
                    <input type="text" class="form-control" name="seriesreleasedate" id="seriesreleasedate" placeholder="Enter release date">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label class="control-label">Age restriction</label>
                    <select class="form-control" name="seriesageres" id="seriesageres">
                      <option value="0">PG</option>
                      <option value="0">PG</option>
                      <option value="0">PG</option>
                    </select>
                  </div>
                  <div class="form-group col-lg-6 mt-4 d-flex align-items-center">
                    <button class="btn btn-primary" name="btnInsertSeries" id="btnInsertSeries" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Insert Series</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" id="clearSeriesFormData" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Clear form data</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" id="cancelSeries" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row" id="formDirector">
        <div class="col-lg-12">
          <div class="tile">
            <h3 class="tile-title">Insert Director</h3>
            <div class="tile-body">
              <form>
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label class="control-label">Director first name</label>
                    <input class="form-control" type="text" name="directorfirstname" id="directorfirstname" placeholder="Enter director first name">
                  </div>
                  <div class="form-group col-lg-6">
                    <label class="control-label">Director last name</label>
                    <input class="form-control" type="text" name="directorlastname" id="directorlastname" placeholder="Enter director last name">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-12 mt-4 d-flex justify-content-center">
                    <button class="btn btn-primary" name="btnInsertDirector" id="btnInsertDirector" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Insert Director</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" id="clearDirectorFormData" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Clear form data</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" id="cancelDirector" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row" id="formProducer">
        <div class="col-lg-12">
          <div class="tile">
            <h3 class="tile-title">Insert Producer</h3>
            <div class="tile-body">
              <form>
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label class="control-label">Producer first name</label>
                    <input class="form-control" type="text" name="producerfirstname" id="producerfirstname" placeholder="Enter producer first name">
                  </div>
                  <div class="form-group col-lg-6">
                    <label class="control-label">Producer last name</label>
                    <input class="form-control" type="text" name="producerlastname" id="producerlastname" placeholder="Enter producer last name">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-12 mt-4 d-flex justify-content-center">
                    <button class="btn btn-primary" name="btnInsertProducer" id="btnInsertProducer" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Insert Producer</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" id="clearProducerFormData" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Clear form data</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" id="cancelProducer" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row" id="formCat">
        <div class="col-lg-12">
          <div class="tile">
            <h3 class="tile-title">Insert Category</h3>
            <div class="tile-body">
              <form>
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label class="control-label">Genre name</label>
                    <input class="form-control" type="text" name="categoryname" id="categoryname" placeholder="Enter category name">
                  </div>
                  <div class="form-group col-lg-6 mt-4 d-flex justify-content-center">
                    <button class="btn btn-primary" name="btnInsertCat" id="btnInsertCat" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Insert Category</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" id="clearCatFormData" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Clear form data</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" id="cancelCat" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </main>