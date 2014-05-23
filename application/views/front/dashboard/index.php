<link href='http://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>

<div id='wrap'>
  <div id="page-heading" style="padding:20px 0 0 20px;">
    <div style="padding-bottom:60px !important;">
      <div class="col-md-3 left_all">
        <h2> Bitcoin Trade Center </h2>
      </div>
      <div class="col-md-9" style="margin-top:10px;"> 
        <!-----> 
        <script type="text/javascript">
                  function showWin(){
                    if($('.toggle-on').hasClass('active')){
                      $.pnotify({ title: 'Real Money', text: 'Now you are trading with real money', type: 'info' });
                    } else {
                      $.pnotify({ title: 'Play Money', text: 'Now you are trading without real money', type: 'info' });
                    }
                  }
                </script>
        <div onclick="showWin();" class="col-md-2 control-label left_all real_play_float">
          <div class="toggle" style="height: 30px; width: 150px;">
            <div class="toggle-slide active">
              <div class="toggle-inner" style="width: 150px; margin-left: -30px;">
                <div class="toggle-on" style="height: 30px; width: 150px; text-align: center; text-indent: -10px; line-height: 20px;">Real Money</div>
                <div class="toggle-blob" style="height: 30px; width: 150px; margin-left: -10px;"></div>
                <div class="toggle-off active" style="height: 30px; width: 150px; margin-left: -10px; text-align: center; text-indent: 10px; line-height: 20px;">Play Money</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-----> 
      
    </div>
    <div>
      <div class="widget-block for_mentcenter">
        <div class="pull-left for_sell"> <small>Buy</small>
          <h5>$71,182 <i class="fa fa-sort-desc"></i></h5>
        </div>
        <div class="pull-left for_buy"> <small>Sell</small>
          <h5>$71,182 <i class="fa fa-sort-asc"></i></h5>
        </div>
      </div>
    </div>
  </div>
  
  <!--<div class="row">
        <div class="col-xs-4">
          <button onclick="$.pnotify({
      title: 'Can You',
      text: 'Please add text here.',
      type: 'info'
      });" class="btn btn-block btn-info-alt">Info Style</button>
        </div>
      </div>--> 
  
  <!-----> 
  
  <!--      <div class="col-md-2 control-label" style="margin-left:10px;">
        <div class="toggle" style="height: 30px; width: 150px;">
          <div class="toggle-slide active">
           <div class="toggle-inner" style="width: 150px; margin-left: -30px;">
              <div class="toggle-on" style="height: 30px; width: 150px; text-align: center; text-indent: -10px; line-height: 20px;">Real Money</div>
              <div class="toggle-blob" style="height: 30px; width: 150px; margin-left: -10px;"></div>
              <div class="toggle-off active" style="height: 30px; width: 150px; margin-left: -10px; text-align: center; text-indent: 10px; line-height: 20px;">Play Money</div>
            </div>
          </div>
        </div>
      </div>--> 
  
  <!----->
  <div class="clearfix"> </div>
  <div class="container allsection_coloring">
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-primary">
          <div class="panel-heading left_all">
            <div class="col-md-10 left_all">
              <h4>Trade</h4>
            </div>
            
            <!----><!------> 
            
          </div>
          <div class="panel-body">
            <div class="tab-content">
              <div class="tab-pane active" id="domtabs">
                <div class="row">
                  <div class="col-md-12">
                    <div class="tab-container tab-danger">
                      <ul class="nav nav-tabs remove_border" style="margin-bottom:10px;">
                        <li class="active for_settting"><a href="#sell" data-toggle="tab" class="normal_tab"><i class="fa fa-sign-out"></i> Sell</a></li>
                        <li><a href="#buy" data-toggle="tab" class="normal_tab"><i class="fa fa-sign-in"></i> Buy</a></li>
                      </ul>
                      <div class="tab-content remove_border">
                        <div class="tab-pane active" id="sell">
                          <div class="col-md-2">Quantity</div>
                          <div class="input-group col-md-4">
                            <input type="text" class="form-control">
                            <span class="input-group-addon">BTC</span> </div>
                          <div class="col-md-2"  style="padding-left:0 !important;">Order Type</div>
                          <div class="col-md-4">
                            <select class="fields col-md-12 col-xs-4" />
                            
                            <option>Market</option>
                            <option>Limit</option>
                            </select>
                          </div>
                          <div class="clearfix"></div>
                          <br>
                          <div class="col-md-2">Limit Price</div>
                          <div class="input-group col-md-4">
                            <input type="text" class="form-control">
                            <span class="input-group-addon">$/BTC</span> </div>
                          <div class="col-md-2" style="padding-left:0 !important;">Stop Loss Price</div>
                          <div class="input-group col-md-4">
                            <input type="text" class="form-control">
                            <span class="input-group-addon">$/BTC</span> </div>
                          <div class="clearfix"></div>
                          <br>
                          <br>
                          <div class="col-md-6" align="center">Deposit Required&nbsp;&nbsp;<i class="fa fa-long-arrow-right for_arrow_right"></i></div>
                          <div class="col-md-6" align="center">1.00 BTC</div>
                          <br>
                          <br>
                          <div class="col-md-6" align="center">Position Size&nbsp;&nbsp;<i class="fa fa-long-arrow-right for_arrow_right"></i></div>
                          <div class="col-md-6" align="center">10.00 BTC</div>
                          <br>
                          <br>
                          <div class="col-md-6" align="center">Daily Funding Cost&nbsp;&nbsp;<i class="fa fa-long-arrow-right for_arrow_right"></i></div>
                          <div class="col-md-6" align="center">0.009 BTC <small> [(Position Size - Deposit)*0.1%]</small></div>
                          <br>
                          <br>
                          <div align="center"><a class="btn btn-midnightblue" href="#">Send Order</a></div>
                          <div class="clearfix"></div>
                        </div>
                        <!-- <div class="tab-pane" id="buy">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores porro eveniet debitis quas sed harum nobis libero voluptatibus dolorum odio at veniam aut id corrupti hic esse quisquam fugiat. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.</p>
                            </div>--> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-12 col-sm-8">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h4>Account Balance</h4>
            <div class="options"> </div>
          </div>
          <div class="panel-body">
            <table class="table">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Amount</th>
                  <th>Unit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Balance</td>
                  <td>10.5545</td>
                  <td>Bitcoin</td>
                </tr>
                <tr>
                  <td>Deposit</td>
                  <td>1.00</td>
                  <td>Bitcoin</td>
                </tr>
                <tr>
                  <td><strong>Profit/Loss</strong></td>
                  <td>10.5545</td>
                  <td>Bitcoin</td>
                </tr>
                <tr>
                  <td>USD</td>
                  <td></td>
                  <td>10.5545</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h4>Position and Order Table</h4>
          </div>
          <div class="panel-body">
            <div class="tab-content">
              <div id="domtabs" class="tab-pane active">
                <div class="row">
                  <div class="col-md-12">
                    <div class="tab-container tab-danger">
                      <ul class="nav nav-tabs">
                        <li class="extra_toher_tabs"><a>Open Orders</a></li>
                        <!--<li class=""><a data-toggle="tab" href="#order">Open Orders</a></li>-->
                        
                      </ul>
                      <div class="tab-content">
                        <div id="position" class="table-responsive tab-pane active">
                          <table border="0" cellspacing="0" cellpadding="0" id="example" class="table table-striped table-bordered datatables dataTable" aria-describedby="example_info">
                            <thead>
                              <tr role="row">
                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 160px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Date</th>
                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 160px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Direction</th>
                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 160px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Open</th>
                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 160px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Stop Loss</th>
                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 160px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Deposit</th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 242px;" aria-label="Browser: activate to sort column ascending">Position Size($)</th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 209px;" aria-label="Platform(s): activate to sort column ascending">Daily Funding Cost</th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 138px;" aria-label="Engine version: activate to sort column ascending">Profit/Loss($)</th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 96px;" aria-label="CSS grade: activate to sort column ascending">Action</th>
                              </tr>
                            </thead>
                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                              <tr class="gradeA odd">
                                <td class="  sorting_1">April 2 09:50</td>
                                <td class=" ">Buy</td>
                                <td class=" ">$495.11</td>
                                <td class="center ">445.11</td>
                                <td class="center ">1.0000</td>
                                <td class="center ">10.0000</td>
                                <td class="center ">0.009</td>
                                <td class="center ">0.1019</td>
                                <td class="center "><a href="#" class="btn btn-danger">Liquidate</a></td>
                              </tr>
                              <tr class="gradeA even">
                                <td class="  sorting_1">April 2 09:50</td>
                                <td class=" ">Buy</td>
                                <td class=" ">$495.11</td>
                                <td class="center ">445.11</td>
                                <td class="center ">1.0000</td>
                                <td class="center ">10.0000</td>
                                <td class="center ">0.009</td>
                                <td class="center ">0.1019</td>
                                <td class="center "><a href="#" class="btn btn-danger">Liquidate</a></td>
                              </tr>
                              <tr class="gradeA odd">
                                <td class="  sorting_1">April 2 09:50</td>
                                <td class=" ">Buy</td>
                                <td class=" ">$495.11</td>
                                <td class="center ">445.11</td>
                                <td class="center ">1.0000</td>
                                <td class="center ">10.0000</td>
                                <td class="center ">0.009</td>
                                <td class="center ">0.1019</td>
                                <td class="center "><a href="#" class="btn btn-danger">Liquidate</a></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="clearfix"></div>
                        </div>
                        <!--<div id="order" class="tab-pane">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores porro eveniet debitis quas sed harum nobis libero voluptatibus dolorum odio at veniam aut id corrupti hic esse quisquam fugiat. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.</p>
                            </div>--> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!--part 2-->
          
          <div class="panel-body">
            <div class="tab-content">
              <div id="domtabs" class="tab-pane active">
                <div class="row">
                  <div class="col-md-12">
                    <div class="tab-container tab-danger">
                      <ul class="nav nav-tabs">
                        <li class="extra_toher_tabs"><a>Open Position</a></li>
                        <!--<li class=""><a data-toggle="tab" href="#order">Open Orders</a></li>-->
                        
                      </ul>
                      <div class="tab-content">
                        <div id="position" class="table-responsive tab-pane active">
                          <table border="0" cellspacing="0" cellpadding="0" id="example" class="table table-striped table-bordered datatables dataTable" aria-describedby="example_info">
                            <thead>
                              <tr role="row">
                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 160px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Date</th>
                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 160px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Direction</th>
                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 160px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Open</th>
                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 160px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Stop Loss</th>
                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 160px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Deposite</th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 242px;" aria-label="Browser: activate to sort column ascending">Position Size($)</th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 209px;" aria-label="Platform(s): activate to sort column ascending">Daily Funding Cost</th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 138px;" aria-label="Engine version: activate to sort column ascending">Profit/Loss($)</th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 96px;" aria-label="CSS grade: activate to sort column ascending">Action</th>
                              </tr>
                            </thead>
                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                              <tr class="gradeA odd">
                                <td class="  sorting_1">April 2 09:50</td>
                                <td class=" ">Buy</td>
                                <td class=" ">$495.11</td>
                                <td class="center ">445.11</td>
                                <td class="center ">1.0000</td>
                                <td class="center ">10.0000</td>
                                <td class="center ">0.009</td>
                                <td class="center ">0.1019</td>
                                <td class="center "><a href="#" class="btn btn-danger">Liquidate</a></td>
                              </tr>
                              <tr class="gradeA even">
                                <td class="  sorting_1">April 2 09:50</td>
                                <td class=" ">Buy</td>
                                <td class=" ">$495.11</td>
                                <td class="center ">445.11</td>
                                <td class="center ">1.0000</td>
                                <td class="center ">10.0000</td>
                                <td class="center ">0.009</td>
                                <td class="center ">0.1019</td>
                                <td class="center "><a href="#" class="btn btn-danger">Liquidate</a></td>
                              </tr>
                              <tr class="gradeA odd">
                                <td class="  sorting_1">April 2 09:50</td>
                                <td class=" ">Buy</td>
                                <td class=" ">$495.11</td>
                                <td class="center ">445.11</td>
                                <td class="center ">1.0000</td>
                                <td class="center ">10.0000</td>
                                <td class="center ">0.009</td>
                                <td class="center ">0.1019</td>
                                <td class="center "><a href="#" class="btn btn-danger">Liquidate</a></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="clearfix"></div>
                        </div>
                        <!--<div id="order" class="tab-pane">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores porro eveniet debitis quas sed harum nobis libero voluptatibus dolorum odio at veniam aut id corrupti hic esse quisquam fugiat. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.</p>
                            </div>--> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!--End part 2--> 
          
        </div>
      </div>
    </div>
  </div>
  
  <!-- container --> 
</div>
<!--wrap --> 
