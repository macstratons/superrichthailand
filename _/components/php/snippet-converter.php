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

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane fade in active" id="buying">
            <form role"form">
              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group col-xs-5" id="base-currency">
                   <select id="currencySelect" class="form-control input-sm" disabled>
                      <option>Thai Baht</option>
                   </select>
                  </div>
                  <!-- /.form-group -->

                  <div class="form-group col-xs-2" id="swap-currency">
                    <!-- <button type="button" class="btn btn-primary"><i class="fa fa-exchange"></i></button> -->
                    <a href="#selling" class="btn btn-primary btn-sm" data-toggle="tab"><i class="fa fa-exchange"></i></a>
                  </div>

                  <div class="form-group col-xs-5" id="exchange-currency">
                    <select id="exchangeSelect" class="form-control input-sm">
                          <option>USD 100</option>
                          <option>USD 50</option>
                          <option>USD 20-10</option>
                          <option>USD 5</option>
                          <option>USD 1</option>
                          <option>GBP</option>
                          <option>GBP 20-5</option>
                          <option>EUR 500-100</option>
                          <option>EUR 50</option>
                          <option>CHF 1000-100</option>
                          <option>CHF 50</option>
                          <option>AUD</option>
                          <option>JPY</option>
                          <option>MYR 100-50</option>
                          <option>MYR 10-5</option>
                          <option>MYR 2-1</option>
                          <option>SGD</option>
                          <option>HKD</option>
                          <option>CAD</option>
                          <option>DKK</option>
                          <option>NOK</option>
                          <option>SEK</option>
                          <option>TWD</option>
                          <option>KRW 50000-5000</option>
                          <option>KRW 1000</option>
                          <option>CNY</option>
                          <option>PHP</option>
                          <option>NZD</option>
                          <option>SAR</option>
                          <option>AED</option>
                          <option>QAR</option>
                          <option>OMR</option>
                          <option>BHD</option>
                          <option>KWD</option>
                          <option>ZAR</option>
                          <option>IDR</option>
                          <option>INR</option>
                          <option>SCOT</option>
                          <option>VND</option>
                          <option>RUB</option>
                          <option>BND</option>
                          <option>MOP</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col-xs-12 -->
              </div>
              <!-- end row -->

              <div class="row">
                <div class="form-group col-xs-4" id="left-currency">
                  <input type="text" class="form-control" placeholder="31.43">
                </div>
                <!-- /.form-group -->

                <div class="form-group col-xs-4" id="rate-currency">
                  <p class="text-muted"><small>Buying<br>31.43</small></p>
                </div>

                <div class="form-group col-xs-4" id="right-currency">
                  <input type="text" class="form-control" placeholder="1">
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
                   <select id="currencySelect" class="form-control input-sm" disabled>
                      <option>Thai Baht</option>
                   </select>
                  </div>
                  <!-- /.form-group -->

                  <div class="form-group col-xs-2" id="swap-currency">
                    <!-- <button type="button" class="btn btn btn-primary"><i class="fa fa-exchange"></i></button> -->
                    <a href="#buying" class="btn btn-primary btn-sm" data-toggle="tab"><i class="fa fa-exchange"></i></a>
                  </div>

                  <div class="form-group col-xs-5" id="exchange-currency">
                    <select id="exchangeSelect" class="form-control input-sm">
                          <option>USD 100</option>
                          <option>USD 50</option>
                          <option>USD 20-10</option>
                          <option>USD 5</option>
                          <option>USD 1</option>
                          <option>GBP</option>
                          <option>GBP 20-5</option>
                          <option>EUR 500-100</option>
                          <option>EUR 50</option>
                          <option>CHF 1000-100</option>
                          <option>CHF 50</option>
                          <option>AUD</option>
                          <option>JPY</option>
                          <option>MYR 100-50</option>
                          <option>MYR 10-5</option>
                          <option>MYR 2-1</option>
                          <option>SGD</option>
                          <option>HKD</option>
                          <option>CAD</option>
                          <option>DKK</option>
                          <option>NOK</option>
                          <option>SEK</option>
                          <option>TWD</option>
                          <option>KRW 50000-5000</option>
                          <option>KRW 1000</option>
                          <option>CNY</option>
                          <option>PHP</option>
                          <option>NZD</option>
                          <option>SAR</option>
                          <option>AED</option>
                          <option>QAR</option>
                          <option>OMR</option>
                          <option>BHD</option>
                          <option>KWD</option>
                          <option>ZAR</option>
                          <option>IDR</option>
                          <option>INR</option>
                          <option>SCOT</option>
                          <option>VND</option>
                          <option>RUB</option>
                          <option>BND</option>
                          <option>MOP</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col-xs-12 -->
              </div>
              <!-- end row -->

              <div class="row">
                <div class="form-group col-xs-4" id="left-currency">
                  <input type="text" class="form-control" placeholder="31.63">
                </div>
                <!-- /.form-group -->

                <div class="form-group col-xs-4" id="rate-currency">
                  <p class="text-muted"><small>Selling<br>31.63</small></p>
                </div>

                <div class="form-group col-xs-4" id="right-currency">
                  <input type="text" class="form-control" placeholder="1">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- end row -->
            </form>
            <!-- end form -->
          </div>
          <!-- end selling tab -->
        </div>
        <!-- end tabs -->
      </div>
      <!-- /.converter-block-content -->
    </div>
    <!-- /.converter-block -->
  </div>
  <!-- PANEL BODY END -->
</div>