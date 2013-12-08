<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
          Add New Date
      </header>
      <div class="panel-body">
        <form class="cmxform form-horizontal tasi-form" id="dateForm" method="get" action="">
          <div class="form-group">
              <label for="date" class="control-label col-md-3">Date</label>
              <div class="col-md-3 col-xs-11">
              <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014"  class="input-append date dpYears">
                <input type="text" readonly="" value="01-01-2014" size="16" class="form-control" id="date" name="date">
                <span class="input-group-btn add-on">
                  <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                </span>
              </div>
              <!-- dpYears End -->
              <span class="help-block">Select date</span>
            </div>
          </div>
          <!-- Date Picker End -->
          <div class="form-group">
            <label for="datename" class="control-label col-md-3">Date Name</label>
            <div class="col-md-4">
              <input type="text" class="form-control" id="datename" name="datename">
            </div>
          </div>
          <!-- Date Name End-->
          <div class="form-group">
            <label for="status" class="control-label col-md-3">Status</label>
            <div class="col-md-4">
              <select class="form-control m-bot15" id="status" name="status">
                <option>OPEN</option>
                <option>CLOSED</option>
              </select>
            </div>
          </div>
          <!-- Status End-->
          <div class="form-group">
            <div class="col-lg-offset-3 col-lg-9">
              <button class="btn btn-danger" type="submit" >Create</button>
              <a class="btn btn-default" href="calendar.php">Cancel</a>
            </div>
          </div>
          <!-- Button End -->
        </form>
      </div>
      <!-- Form End -->
    </section>
    <!-- Panel End -->
  </div>
</div>
<!-- /.row -->