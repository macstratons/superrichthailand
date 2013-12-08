<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
          Add News Update
      </header>
      <div class="panel-body">
        <form class="cmxform form-horizontal tasi-form" id="newsForm" method="get" action="">
          <div class="form-group">
            <label for="date" class="control-label col-lg-2">Date</label>
            <div class="col-lg-4">
              <p class="form-control-static">1/12/2013 - 10:14</p>
            </div>
          </div>
          <!-- Date End-->
          <div class="form-group">
            <label for="date" class="control-label col-lg-2">Author</label>
            <div class="col-lg-4">
              <p class="form-control-static">Pam Poonsapmenee</p>
            </div>
          </div>
          <!-- Author End -->
          <div class="form-group">
            <label for="title" class="control-label col-lg-2">News Title</label>
            <div class="col-lg-10">
              <input class="form-control" id="title" name="title" type="text" placeholder="Give a compact summary of what the news is about.">
              <span class="help-block"><i>Maximum 50 characters</i></span>
            </div>
          </div>
          <!-- Title End-->
          <div class="form-group">
            <label for="subtitle" class="control-label col-lg-2">Sub Title</label>
            <div class="col-lg-10">
              <textarea class="form-control" id="subtitle" name="subtitle" rows="5" placeholder="This short line of text is meant to appear beneath a post's (or page's) news title."></textarea>
              <span class="help-block"><i>Maximum 140 characters</i></span>
            </div>
          </div>
          <!-- Sub Title End-->
          <div class="form-group">
            <label class="control-label col-lg-3">News Thumbnail</label>
            <div class="col-lg-4">
              <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                </div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                  <div>
                    <span class="btn btn-white btn-file">
                      <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                      <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                      <input type="file" class="default" />
                    </span>
                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                  </div>
                </div>
            </div>
            <!-- /.col-lg-4 -->
            <span class="label label-danger">NOTE!</span>
            <span> <i>Attached maximum image thumbnail size is 200x150 pixels.</i></span>
          </div>
          <!-- Thumbnail Image End -->
          <div class="form-group">
            <label class="control-label col-lg-3">News Image</label>
            <div class="col-lg-4">
              <input type="file" class="default" />
            </div>
            <span class="label label-danger">NOTE!</span>
            <span> <i>Attached maximum image size is 750x250 pixels.</i></span>
          </div>
          <!-- News Image End -->        
          <div class="form-group">
            <label for="content" class="control-label col-lg-2">News Content</label>
            <div class="col-lg-10">
              <textarea class="wysihtml5 form-control" id="content" name="content" rows="10"></textarea>
            </div>
          </div>
          <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                  <button class="btn btn-danger" type="submit">Create</button>
                  <a class="btn btn-default" href="news.php">Cancel</a>
              </div>
          </div>
          <!-- Submit Button -->
          <!-- Content End -->
        </form>
        <!-- Form End -->
      </div>
      <!-- Form End -->
    </section>
    <!-- Panel End -->
  </div>
</div>
<!-- /.row -->