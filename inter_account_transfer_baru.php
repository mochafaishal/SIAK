<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://manager.megahkarya.com:8080/resources/select2/select2.css?17.10.60.0">
    <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>AKUNTANSI</b></a>
            <!--logo end-->

            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
       <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li class="mt">
                      <a class="dcjq-parent" href="index.php">
                         <i class="fa fa-desktop"></i>
                          <span>Ringkasan</span>
                      </a>
                  </li>
                  <li class="dcjq-parent">
                      <a class="" href="rekening-bank.php">
                         <i class="fa fa-bank"></i>
                          <span>Rekening BANK</span>
                          
                      </a>
                  </li>
                   <li class="dcjq-parent">
                      <a class="" href="transaksi_bank.php">
                         <i class="fa fa-briefcase"></i>
                          <span>Transaksi BANK</span>
                      </a>
                  </li>
                   <li class="dcjq-parent">
                      <a class="dcjq-parent" href="akun-kas.php">
                         <i class="fa fa-balance-scale"></i>
                          <span>Akun KAS</span>
                      </a>
                  </li>
                  <li class="dcjq-parent">
                      <a class="" href="transaksi_kas.php">
                         <i class="fa fa-clipboard"></i>
                          <span>Transaksi KAS</span>
                      </a>
                  </li>
                  <li class="dcjq-parent">
                      <a class="active" href="Inter_Account_Transfers.php">
                         <i class="fa fa-arrows"></i>
                          <span>Inter Account Transfers</span>
                      </a>
                  </li>
                  <li class="dcjq-parent">
                      <a class="dcjq-parent" href="Reimburse.php">
                         <i class="fa fa-book"></i>
                          <span>Reimburse</span>
                      </a>
                  </li>
                  <li class="dcjq-parent">
                      <a class="dcjq-parent" href="Pelanggan.php">
                         <i class="fa fa-child"></i>
                          <span>Pelanggan</span>
                      </a>
                  </li>
                  <li class="dcjq-parent">
                      <a class="dcjq-parent" href="penawaran_penjualan.php">
                         <i class="fa fa-address-book"></i>
                          <span>Penawaran Penjualan</span>
                      </a>
                  </li>
                  <li class="dcjq-parent">
                      <a class="dcjq-parent" href="pesanan_penjualan.php">
                         <i class="fa fa-archive"></i>
                          <span>Pesanan Penjualan</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                        <h3>Inter Account Transfers</h3>
                        <hr>
       <div class="">
   <div class=""><span class="header"></span></div>
   <div class="" style="box-shadow: inset 0px 1px 0px #fff; padding: 30px">
      <table>
         <tbody>
            <tr>
               <td>
                  <div class="form-group">
                     <label>Tanggal</label>
                     <div class="controls"><input type="text" class="form-control input-sm" style="width: 100px; margin-bottom: 0px; text-align: center" data-bind="datePicker: Date"></div>
                  </div>
               </td>
               <td style="padding-left: 10px">
                  <div class="form-group">
                     <label>Referensi</label>
                     <div class="input-group"><span class="input-group-addon">#</span><input type="text" class="form-control input-sm" style="width: 80px; text-align: center" placeholder="Otomatis" data-bind="value: Reference"></div>
                  </div>
               </td>
            </tr>
         </tbody>
      </table>
      <div class="form-group"><label>Deskripsi</label><input type="text" class="form-control input-sm" style="width: 400px" data-bind="value: Description"></div>
      <table>
         <tbody>
            <tr>
               <td>
                  <div class="form-group">
                     <label>Dibayarkan dari</label>
                     <div class="controls">
                        <div>
                           <div class="select2-container" id="s2id_autogen1" style="width: 300px">
                              <a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2"> </span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2">
                              <div class="select2-drop select2-display-none select2-with-searchbox">
                                 <div class="select2-search">       <label for="s2id_autogen2_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">   </div>
                                 <ul class="select2-results" role="listbox" id="select2-results-2">   </ul>
                              </div>
                           </div>
                           <input type="hidden" style="width: 300px; display: none;" data-bind="select2data: CreditAccount" data-autocomplete="inter-account-transfer-account-autocomplete?FileID=a5578f2c-1b18-4b54-8840-bf278d5b705b" data-placeholder="" tabindex="-1" title="">
                        </div>
                     </div>
                  </div>
               </td>
               <td>
                  <div class="form-group">
                     <div style="text-align: center"><label>Jumlah</label></div>
                     <input type="text" class="form-control input-sm" style="width: 100px; text-align: right" data-bind="textInput: CreditAmount, visible: CreditAccount() == null || CreditAccount().currency == null">
                     <div data-bind="visible: CreditAccount() != null &amp;&amp; CreditAccount().currency != null" style="display: none;">
                        <table>
                           <tbody>
                              <tr>
                                 <td style="padding: 0px">
                                    <div class="input-group" style="margin-bottom: 0px"><input type="text" class="form-control input-sm" style="width: 100px; text-align: right" data-bind="textInput: CreditAmount"><span class="input-group-addon input-sm" data-bind="text: (CreditAccount() != null ? CreditAccount().currency : null)"></span></div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </td>
               <td>
                  <div class="form-group" data-bind="visible: CreditAccount() != null &amp;&amp; CreditAccount().type == 'bank'" style="display: none;">
                     <div style="text-align: center"><label>Status</label></div>
                     <div class="controls">
                        <div class="select2-container" id="s2id_autogen3">
                           <a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-4">Transaksi sesuai</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen4" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-4" id="s2id_autogen4">
                           <div class="select2-drop select2-display-none select2-with-searchbox">
                              <div class="select2-search">       <label for="s2id_autogen4_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-4" id="s2id_autogen4_search" placeholder="">   </div>
                              <ul class="select2-results" role="listbox" id="select2-results-4">   </ul>
                           </div>
                        </div>
                        <select data-bind="value: CreditClearStatus, select2" tabindex="-1" title="" style="display: none;">
                           <option value="Pending">Tertunda</option>
                           <option value="Cleared">Transaksi sesuai</option>
                        </select>
                     </div>
                  </div>
               </td>
               <td>
                  <div class="form-group" data-bind="visible: CreditAccount() != null &amp;&amp; CreditAccount().type == 'bank' &amp;&amp; CreditClearStatus() == 'Cleared'" style="display: none;">
                     <label>&nbsp;</label>
                     <div class="controls"><input type="text" class="form-control input-sm" style="width: 100px; margin-bottom: 0px; text-align: center" placeholder="Tanggal" data-bind="datePicker: CreditClearDate"></div>
                  </div>
               </td>
            </tr>
         </tbody>
      </table>
      <table>
         <tbody>
            <tr>
               <td>
                  <div class="form-group">
                     <label>Dana Masuk</label>
                     <div class="controls">
                        <div>
                           <div class="select2-container" id="s2id_autogen5" style="width: 300px">
                              <a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-6"> </span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen6" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-6" id="s2id_autogen6">
                              <div class="select2-drop select2-display-none select2-with-searchbox">
                                 <div class="select2-search">       <label for="s2id_autogen6_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-6" id="s2id_autogen6_search" placeholder="">   </div>
                                 <ul class="select2-results" role="listbox" id="select2-results-6">   </ul>
                              </div>
                           </div>
                           <input type="hidden" style="width: 300px; display: none;" data-bind="select2data: DebitAccount" data-autocomplete="inter-account-transfer-account-autocomplete?FileID=a5578f2c-1b18-4b54-8840-bf278d5b705b" data-placeholder="" tabindex="-1" title="">
                        </div>
                     </div>
                  </div>
               </td>
               <td>
                  <div class="form-group" data-bind="visible: DebitAccount() != null &amp;&amp; CreditAccount() != null &amp;&amp; DebitAccount().currency != CreditAccount().currency" style="display: none;">
                     <div style="text-align: center"><label>Jumlah</label></div>
                     <table>
                        <tbody>
                           <tr>
                              <td style="padding: 0px">
                                 <div class="input-group" style="margin-bottom: 0px"><input type="text" class="form-control input-sm" style="width: 100px; text-align: right" placeholder="0" data-bind="value: DebitAmount"><span class="input-group-addon input-sm" data-bind="text: (DebitAccount() != null ? DebitAccount().currency : null)"></span></div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div class="form-group" data-bind="visible: DebitAccount() != null &amp;&amp; CreditAccount() != null &amp;&amp; DebitAccount().currency == CreditAccount().currency" style="display: none;">
                     <div style="text-align: center"><label>Jumlah</label></div>
                     <input type="text" class="form-control input-sm" style="width: 100px; text-align: right" data-bind="textInput: CreditAmount, visible: CreditAccount() == null || CreditAccount().currency == null">
                     <div data-bind="visible: CreditAccount() != null &amp;&amp; CreditAccount().currency != null" style="display: none;">
                        <table>
                           <tbody>
                              <tr>
                                 <td style="padding: 0px">
                                    <div class="input-group" style="margin-bottom: 0px"><input type="text" class="form-control input-sm" style="width: 100px; text-align: right" data-bind="textInput: CreditAmount"><span class="input-group-addon input-sm" data-bind="text: (CreditAccount() != null ? CreditAccount().currency : null)"></span></div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </td>
               <td>
                  <div class="form-group" data-bind="visible: DebitAccount() != null &amp;&amp; DebitAccount().type == 'bank'" style="display: none;">
                     <div style="text-align: center"><label>Status</label></div>
                     <div class="controls">
                        <div class="select2-container" id="s2id_autogen7">
                           <a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-8">Transaksi sesuai</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen8" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-8" id="s2id_autogen8">
                           <div class="select2-drop select2-display-none select2-with-searchbox">
                              <div class="select2-search">       <label for="s2id_autogen8_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-8" id="s2id_autogen8_search" placeholder="">   </div>
                              <ul class="select2-results" role="listbox" id="select2-results-8">   </ul>
                           </div>
                        </div>
                        <select data-bind="value: DebitClearStatus, select2" tabindex="-1" title="" style="display: none;">
                           <option value="Pending">Tertunda</option>
                           <option value="Cleared">Transaksi sesuai</option>
                        </select>
                     </div>
                  </div>
               </td>
               <td>
                  <div class="form-group" data-bind="visible: DebitAccount() != null &amp;&amp; DebitAccount().type == 'bank' &amp;&amp; DebitClearStatus() == 'Cleared'" style="display: none;">
                     <label>&nbsp;</label>
                     <div class="controls"><input type="text" class="form-control input-sm" style="width: 100px; margin-bottom: 0px; text-align: center" placeholder="Tanggal" data-bind="datePicker: DebitClearDate"></div>
                  </div>
               </td>
            </tr>
         </tbody>
      </table>
      <div></div>
   </div>
   <div class="panel-footer" style="padding: 15px 30px">
      <img src="resources/ajax-loader.gif" id="ajaxIndicator" style="display: none; margin-right: 10px">
      <div class="btn-group">
         <input type="button" id="btnCreate" class="btn btn-primary" style="font-weight: bold" value="Buat"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
         <ul class="dropdown-menu">
            <li><input type="button" id="btnCreateAndAddAnother" class="btn btn-link" value="Buat &amp; Tambahkan Baru"></li>
         </ul>
      </div>
   </div>
</div>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
      $('#example').DataTable();
  </script>
  </body>
</html>
 
 
