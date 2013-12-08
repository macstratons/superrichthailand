
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
          Add New Location
      </header>
      <div class="panel-body">
        <div class="form">
          <form class="cmxform form-horizontal tasi-form" id="locationForm" method="get" action="">
            <div class="form-group">
              <label for="locationname" class="control-label col-lg-2">Name</label>
              <div class="col-lg-10">
                <input class="form-control" placeholder="Name of Branch / Kiosk" id="locationname" name="name" type="text">
              </div>
            </div>
            <!-- Name End -->
            <div class="form-group">
              <label class="control-label col-lg-2">Type</label>
              <div class="col-lg-4">
                <select class="form-control m-bot15">
                  <option>Branch</option>
                  <option>Kiosk</option>
                </select>
              </div>
            </div>
            <!-- Type End -->
            <div class="form-group last">
              <label class="control-label col-lg-2">Store Image</label>
              <div class="col-lg-4">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                  <div class="fileupload-new thumbnail" style="width: 320px; height: 150px;">
                      <img src="http://www.placehold.it/320x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                  </div>
                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 320px; max-height: 150px; line-height: 20px;"></div>
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
              <!-- /.col-md-4 -->
              <span class="label label-danger">NOTE!</span>
              <span><i>Attached maximum image size is 320x150 pixels.</i></span>
            </div>
            <!-- Store End -->
            <div class="form-group">
              <label for="address" class="control-label col-lg-2">Address</label>
              <div class="col-lg-10">
                <textarea class="form-control" row="7" id="address" name="address" placeholder="Enter adddress"></textarea>
              </div>
            </div>
            <!-- Address End -->
            <div class="form-group">
              <label for="phone1" class="control-label col-lg-2">Phone 1</label>
              <div class="col-lg-10">
                <input class="form-control" placeholder="Enter telephone number" id="phone1" name="phone1" type="text" required />
              </div>
            </div>
            <!-- Phone 1 End -->
            <div class="form-group">
              <label for="phone2" class="control-label col-lg-2">Phone 2</label>
              <div class="col-lg-10">
                <input class="form-control" placeholder="Enter telephone number" id="phone2" name="phone2" type="text" />
              </div>
            </div>
            <!-- Phone 2 End -->
            <div class="form-group">
              <label for="fax" class="control-label col-lg-2">Fax</label>
              <div class="col-lg-10">
                <input class="form-control" placeholder="Enter fax number" id="fax" name="fax" type="text" />
              </div>
            </div>
            <!-- Fax End -->
            <div class="form-group">
              <label for="weekday" class="control-label col-lg-2">Weekday Business Hours</label>
              <div class="col-lg-5">
                <input class="form-control" placeholder="Enter Open Hours" id="weekdayopen" name="weekdayopen" type="text" required/>
              </div>
              <div class="col-lg-5">
                <input class="form-control" placeholder="Enter Closed Hours" id="weekdayclose" name="weekdayclose" type="text" required/>
              </div>
            </div>
            <!-- Weekday Hours End -->
            <div class="form-group">
              <label for="weekend" class="control-label col-lg-2">Weekend Business Hours</label>
              <div class="col-lg-5">
                <input class="form-control" placeholder="Enter Open Hours" id="weekendopen" name="weekendopen" type="text" required/>
              </div>
              <div class="col-lg-5">
                <input class="form-control" placeholder="Enter Closed Hours" id="weekendclose" name="weekendclose" type="text" required/>
              </div>
            </div>
            <!-- Weekend Hours End -->
            <div class="form-group">
              <label for="location" class="control-label col-lg-2">Location</label>
              <div class="col-lg-5">
                <input class="form-control" placeholder="Enter latitute" id="latitute" name="latitute" type="text" required/>
              </div>
              <div class="col-lg-5">
                <input class="form-control" placeholder="Enter longtitute" id="longtitute" name="longtitute" type="text" required/>
              </div>
            </div>
            <!-- Location End -->
            <div class="form-group">
              <label class="control-label col-md-3">Map Image</label>
              <div class="col-md-4">
                  <input type="file" class="default" />
              </div>
              <span class="label label-danger">NOTE!</span>
              <span><i>Attached maximum image size is 750x750 pixels.</i></span>
            </div>
            <!-- Map End -->
            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                <button type="submit" class="btn btn-danger">Create</button>
                <a class="btn btn-default" href="location.php">Cancel</a>
              </div>
            </div>
          <!-- Button End -->
          </form>
        </div>
        <!-- /.form -->
      </div>
      <!-- Form End -->
    </section>
    <!-- Panel End -->
  </div>
</div>
<!-- /.row -->