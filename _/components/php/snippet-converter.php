<div class="panel panel-converter">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-dollar"></i> Currency Converter</h3>
            </div><!-- /.panel-heading -->

            <div class="panel-body">
              <div class="converter-block">
                <div class="converter-block-content">
                  <form role"form">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="form-group col-xs-5" id="base-currency">
                         <label class="control-label" for="currencySelect"><small>Currency I Have</small></label>
                         <select id="currencySelect" class="form-control input-sm">
                            <option>Thai Baht</option>
                         </select>
                        </div><!-- /.form-group -->

                        <div class="form-group col-xs-2" id="swap-currency">
                          <button type="button" class="btn btn btn-primary"><i class="fa fa-refresh fa-spin"></i></button>
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
                        </div><!-- /.form-group -->
                      </div><!-- /.col-xs-12 -->
                    </div><!-- end row -->

                    <div class="row">
                      <div class="form-group col-xs-12">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Thai Baht">
                          <span class="input-group-btn">
                            <button class="btn btn-success">Convert</button>
                          </span>
                        </div><!-- /.input-group -->
                      </div><!-- /.col-xs-12 -->
                    </div><!-- end row -->

                    <div class="row" id="rate-currency">
                      <p><strong>Currency Rate:</strong> 31.43</p>
                      <h4><strong>Total:</strong> 35,000 <strong>Baht</strong></h4>
                    </div><!-- end row -->

                  </form><!-- end form -->
                </div><!-- /.converter-block-content -->
              </div><!-- /.converter-block -->
            </div><!-- /.panel-body -->
</div><!-- /.panel-converter -->