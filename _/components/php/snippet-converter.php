<div class="panel panel-converter">
  <!-- PANEL HEADING START -->
  <div class="panel-heading">
    <h4 class="panel-title">Currency Converter</h4>
  </div>
  <!-- PANEL HEADING END -->

  <!-- PANEL BODY START -->
  <div class="panel-body">
    <div class="converter-block">
      <div class="converter-block-content">
        <!-- Nav tabs -->
        <ul class="nav nav-pills">
          <li class="active"><a href="#buying" data-toggle="tab">Buying Rate</a></li>
          <li><a href="#selling" data-toggle="tab">Selling Rate</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane fade in active" id="buying">
            <form role"form">
              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group col-xs-5" id="base-currency">
                   <label class="control-label" for="currencySelect"><small>Currency I Have</small></label>
                   <select id="currencySelect" class="form-control input-sm">
                      <option>Thai Baht</option>
                   </select>
                  </div>
                  <!-- /.form-group -->

                  <div class="form-group col-xs-2" id="swap-currency">
                    <button type="button" class="btn btn btn-primary"><i class="fa fa-exchange"></i></button>
                  </div>

                  <div class="form-group col-xs-5" id="exchange-currency">
                    <label class="control-label" for="exchangeSelect"><small>Currency I Want</small></label>
                    <select id="exchangeSelect" class="form-control input-sm">
                          <option>US Dollar (USD 100)</option>
                          <option>US Dollar (USD 50)</option>
                          <option>US Dollar (USD 20-10)</option>
                          <option>US Dollar (USD 5)</option>
                          <option>US Dollar (USD 1)</option>
                          <option>British Pound (GBP)</option>
                          <option>British Pound (GBP 20-5)</option>
                          <option>Euro (EUR 500-100)</option>
                          <option>Euro (EUR 50)</option>
                          <option>Swiss Frac (CHF 1000-100)</option>
                          <option>Swiss Frac (CHF 50)</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col-xs-12 -->
              </div>
              <!-- end row -->

              <div class="row">
                <div class="form-group col-xs-4">
                  <input type="text" class="form-control input-sm" placeholder="31.43">
                </div>
                <!-- /.form-group -->

                <div class="form-group col-xs-4" id="rate-currency">
                  <p>31.43</p>
                </div>

                <div class="form-group col-xs-4">
                  <input type="text" class="form-control input-sm" placeholder="1">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- end row -->
            </form>
            <!-- end form -->
          </div>
          <!-- end buying tab -->
          <div class="tab-pane fade" id="selling">
            <form role"form">
              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group col-xs-5" id="base-currency">
                   <label class="control-label" for="currencySelect"><small>Currency I Have</small></label>
                   <select id="currencySelect" class="form-control input-sm">
                      <option>Thai Baht</option>
                   </select>
                  </div>
                  <!-- /.form-group -->

                  <div class="form-group col-xs-2" id="swap-currency">
                    <button type="button" class="btn btn btn-primary"><i class="fa fa-exchange"></i></button>
                  </div>

                  <div class="form-group col-xs-5" id="exchange-currency">
                    <label class="control-label" for="exchangeSelect"><small>Currency I Want</small></label>
                    <select id="exchangeSelect" class="form-control input-sm">
                          <option>US Dollar (USD 100)</option>
                          <option>US Dollar (USD 50)</option>
                          <option>US Dollar (USD 20-10)</option>
                          <option>US Dollar (USD 5)</option>
                          <option>US Dollar (USD 1)</option>
                          <option>British Pound (GBP)</option>
                          <option>British Pound (GBP 20-5)</option>
                          <option>Euro (EUR 500-100)</option>
                          <option>Euro (EUR 50)</option>
                          <option>Swiss Frac (CHF 1000-100)</option>
                          <option>Swiss Frac (CHF 50)</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col-xs-12 -->
              </div>
              <!-- end row -->

              <div class="row">
                <div class="form-group col-xs-4">
                  <input type="text" class="form-control input-sm" placeholder="31.43">
                </div>
                <!-- /.form-group -->

                <div class="form-group col-xs-4" id="rate-currency">
                  <p>31.63</p>
                </div>

                <div class="form-group col-xs-4">
                  <input type="text" class="form-control input-sm" placeholder="1">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- end row -->
            </form>
            <!-- end form -->
          </div>
          <!-- end selling tab -->
        </div>
      </div>
      <!-- /.converter-block-content -->
    </div>
    <!-- /.converter-block -->
  </div>
  <!-- PANEL BODY END -->
</div>