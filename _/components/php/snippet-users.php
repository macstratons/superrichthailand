<!-- Main Content Start -->
<section id="main-content">
  <section class="wrapper">
    <!-- Page Start -->
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Users
            <a class="btn btn-success btn-xs pull-right" href="new-users.php"><i class="fa fa-plus-square"></i> New User</a>
          </header>
          <table class="table table-striped table-advance table-hover">
            <thead>
              <tr>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th><i class="fa fa-edit"></i> Edit</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <a href="preview-users.php">pamsuperrichth</a>
                  <!-- Modal -->
                  <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Compose</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label  class="col-lg-2 control-label">To</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputEmail1" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-lg-2 control-label">Cc / Bcc</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="cc" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Subject</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputPassword1" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Message</label>
                                        <div class="col-lg-10">
                                            <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <span class="btn green fileinput-button">
                                              <i class="fa fa-plus fa fa-white"></i>
                                              <span>Attachment</span>
                                              <input type="file" multiple=""  name="files[]">
                                            </span>
                                            <button type="submit" class="btn btn-send">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
                </td>
                <td>Pam</td>
                <td>Poonsapmanee</td>
                <td>
                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                </td>
              </tr>
              <tr>
                <td><a href="preview-users.php">janesuperrichth</a></td>
                <td>Jane</td>
                <td>Susamakulvong</td>
                <td>
                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                </td>
              </tr>
              <tr>
                <td><a href="preview-users.php">akom</a></td>
                <td>Akom</td>
                <td>Yung</td>
                <td>
                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
          <!-- Table End -->
        </section>
        <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
  </section>
</section>
<!-- Main Content End -->