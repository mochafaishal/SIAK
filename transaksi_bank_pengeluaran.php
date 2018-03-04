<?php include 'include/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Transaksi Bank</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/select2.css">
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
     <?php include 'include/aside.php'; ?>
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
  <div class="">
   <div class=""><span class="header"></span></div>
   <h3>Pengeluaran Transaksi Bank</h3>
   <hr>
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
                     <div class="input-group"><span class="input-group-addon">#</span><input type="text" class="form-control input-sm" style="width: 80px; text-align: center" data-bind="value: Reference"></div>
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
                     <label>Akun bank</label>
                     <div class="controls">
                        <div>
                           <div class="select2-container" id="s2id_autogen1" style="width: 300px">
                              <a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">Akun tidak terdefinisi</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2">
                              <div class="select2-drop select2-display-none select2-with-searchbox">
                                 <div class="select2-search">       <label for="s2id_autogen2_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">   </div>
                                 <ul class="select2-results" role="listbox" id="select2-results-2">   </ul>
                              </div>
                           </div>
                           <input type="hidden" style="width: 300px; display: none;" data-bind="select2data: BankAccount" data-autocomplete="bank-account-autocomplete?FileID=a5578f2c-1b18-4b54-8840-bf278d5b705b" data-placeholder="Akun tidak terdefinisi" tabindex="-1" title="">
                        </div>
                     </div>
                  </div>
               </td>
               <td>
                  <div class="form-group">
                     <label>Status</label>
                     <div class="controls">
                        <div class="select2-container" id="s2id_autogen3">
                           <a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-4">Transaksi sesuai</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen4" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-4" id="s2id_autogen4">
                           <div class="select2-drop select2-display-none select2-with-searchbox">
                              <div class="select2-search">       <label for="s2id_autogen4_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-4" id="s2id_autogen4_search" placeholder="">   </div>
                              <ul class="select2-results" role="listbox" id="select2-results-4">   </ul>
                           </div>
                        </div>
                        <select data-bind="value: BankClearStatus, select2" tabindex="-1" title="" style="display: none;">
                           <option value="Cleared">Transaksi sesuai</option>
                           <option value="Pending">Tertunda</option>
                        </select>
                     </div>
                  </div>
               </td>
               <td>
                  <div class="form-group" data-bind="visible: BankClearStatus() == 'Cleared'">
                     <label>&nbsp;</label>
                     <div class="controls"><input type="text" class="form-control input-sm" style="width: 100px; margin-bottom: 0px; text-align: center" placeholder="Tanggal" data-bind="datePicker: BankClearDate"></div>
                  </div>
               </td>
            </tr>
         </tbody>
      </table>
      <div class="form-group">
         <label>Diterima oleh</label>
         <div class="controls"><span class="twitter-typeahead" style="position: relative; display: inline-block;"><input class="tt-hint" type="text" autocomplete="off" spellcheck="off" disabled="" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><input type="text" class="form-control input-sm tt-query" style="width: 300px; position: relative; vertical-align: top; background-color: rgb(255, 255, 255);" data-bind="value: Payee, typeahead: 'contact-autocomplete?FileID=a5578f2c-1b18-4b54-8840-bf278d5b705b'" autocomplete="off" spellcheck="false" dir="auto"><span style="position: absolute; left: -9999px; visibility: hidden; white-space: nowrap; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></span><span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"></span></span></div>
      </div>
      <div class="form-group"><label>Deskripsi</label><input type="text" class="form-control input-sm" style="width: 500px" data-bind="textInput: Description"></div>
      <table style="margin-left: -20px">
         <thead>
            <tr>
               <th></th>
               <th style="text-align: left; min-width: 200px" colspan="3"><label>Akun</label></th>
               <th style="text-align: left"><label>Deskripsi</label></th>
               <th style="text-align: center"><label>Kuantitas</label></th>
               <th style="text-align: center"><label>Harga satuan</label></th>
               <th style="text-align: center"><label>Jumlah</label></th>
            </tr>
         </thead>
         <tbody data-bind="sortable: { data: Lines, options: { handle: '.sortableHandle', cursor: 'move' } }" class="ko_container ui-sortable">
            <tr data-select2height="46">
               <td class="sortableHandle" style="cursor: move"><img src="resources/webalys/_16px/interface-30.png" style="margin-right: 4px; opacity: 0;" data-bind="style: { opacity: ($root.Lines().length > 1) ? '0.25' : '0' }"></td>
               <td style="vertical-align: top" data-bind="attr: { colspan: Item() == null &amp;&amp; Helper() != null &amp;&amp; (Helper().id == '054dfae1-c34a-475e-abde-49e0385ffc9a' || Helper().id == '650a36fe-801f-4031-8d5b-ab422d061fca' || Helper().id == 'f728124f-c6b6-4dad-82c5-22fc0d8d0571' || Helper().id == 'd1489e95-bb28-4f5d-b42e-67d3291b3893' || Helper().id == '059dbfb9-1c80-4043-887f-0fc441099fe0') ? '1' : '3' }" colspan="3">
                  <div data-bind="visible: Item() != null" style="display: none;"></div>
                  <div data-bind="visible: Item() == null">
                     <div class="select2-container" id="s2id_autogen5" style="width: 100%;">
                        <a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1" style="height: 48px;">   <span class="select2-chosen" id="select2-chosen-6">Akun tidak terdefinisi</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen6" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-6" id="s2id_autogen6">
                        <div class="select2-drop select2-display-none select2-with-searchbox">
                           <div class="select2-search">       <label for="s2id_autogen6_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-6" id="s2id_autogen6_search" placeholder="">   </div>
                           <ul class="select2-results" role="listbox" id="select2-results-6">   </ul>
                        </div>
                     </div>
                     <select data-bind="select2data: Helper" data-placeholder="Akun tidak terdefinisi" data-width="100%" tabindex="-1" title="" style="display: none;">
                        <option></option>
                        <optgroup label="Tak terkategori"></optgroup>
                        <optgroup label="Income">
                           <option value="23f790a0-1dac-474a-8ee6-bd22e9a44a3c" data-taxcode="" data-account="23f790a0-1dac-474a-8ee6-bd22e9a44a3c">Interest received</option>
                           <option value="6b30a97b-8026-4b69-ae7f-2993ea880703" data-taxcode="" data-account="6b30a97b-8026-4b69-ae7f-2993ea880703">Sales</option>
                        </optgroup>
                        <optgroup label="Expenses">
                           <option value="528b72c8-94af-42f2-a4bd-a9eb8d8d542a" data-taxcode="" data-account="528b72c8-94af-42f2-a4bd-a9eb8d8d542a">Accounting fees</option>
                           <option value="2abb858b-8824-4319-b044-912a37d69d83" data-taxcode="" data-account="2abb858b-8824-4319-b044-912a37d69d83">Advertising and promotion</option>
                           <option value="0a56736d-c472-4860-9aa7-2b4b56bbd84c" data-taxcode="" data-account="0a56736d-c472-4860-9aa7-2b4b56bbd84c">Bank charges</option>
                           <option value="6bce3096-45a7-455f-be47-fa6543e2c473" data-taxcode="" data-account="6bce3096-45a7-455f-be47-fa6543e2c473">Computer equipment</option>
                           <option value="4b3eb2c9-c433-4b9c-86a9-4dabe9034fb5" data-taxcode="" data-account="4b3eb2c9-c433-4b9c-86a9-4dabe9034fb5">Donations</option>
                           <option value="4fbcd9ed-dd7f-411e-b826-8f5a225928f7" data-taxcode="" data-account="4fbcd9ed-dd7f-411e-b826-8f5a225928f7">Electricity</option>
                           <option value="e21e0749-8c61-4572-bbb2-44cbcc8ca0c0" data-taxcode="" data-account="e21e0749-8c61-4572-bbb2-44cbcc8ca0c0">Entertainment</option>
                           <option value="19522f71-a068-4082-a778-584ab96db5c1" data-taxcode="" data-account="19522f71-a068-4082-a778-584ab96db5c1">Legal fees</option>
                           <option value="750ab4a3-7fbc-49b3-b9c7-b2b926e8dbcb" data-taxcode="" data-account="750ab4a3-7fbc-49b3-b9c7-b2b926e8dbcb">Motor vehicle expenses</option>
                           <option value="1c21f8cb-a313-49fc-9f8b-52856ec8416f" data-taxcode="" data-account="1c21f8cb-a313-49fc-9f8b-52856ec8416f">Printing and stationery</option>
                           <option value="789f1063-6523-49c5-81b5-692255c8e7df" data-taxcode="" data-account="789f1063-6523-49c5-81b5-692255c8e7df">Rent</option>
                           <option value="bf51c9f6-f1ca-4095-82e7-a6c71aecbea8" data-taxcode="" data-account="bf51c9f6-f1ca-4095-82e7-a6c71aecbea8">Repairs and maintenance</option>
                           <option value="39941432-8eeb-40fc-b379-0838fa06166f" data-taxcode="" data-account="39941432-8eeb-40fc-b379-0838fa06166f">Telephone</option>
                        </optgroup>
                        <optgroup label="Aktiva">
                           <option value="059dbfb9-1c80-4043-887f-0fc441099fe0" data-taxcode="" data-account="059dbfb9-1c80-4043-887f-0fc441099fe0" data-currency="">Pengeluaran Tagihan</option>
                           <option value="d1489e95-bb28-4f5d-b42e-67d3291b3893" data-taxcode="" data-account="" data-currency="">Piutang Dagang</option>
                        </optgroup>
                        <optgroup label="Kewajiban"></optgroup>
                        <optgroup label="Ekuitas">
                           <option value="74dfd025-d68e-4a99-9c78-5d43e17c0e09" data-taxcode="" data-account="74dfd025-d68e-4a99-9c78-5d43e17c0e09" data-currency="">Laba Ditahan</option>
                        </optgroup>
                        <optgroup label="Tak terkategori"></optgroup>
                     </select>
                  </div>
               </td>
               <!-- ko if: (Item() == null && Helper() != null && (Helper().id == 'd1489e95-bb28-4f5d-b42e-67d3291b3893')) --><!-- /ko --><!-- ko if: (Item() == null && Helper() != null && (Helper().id == 'd1489e95-bb28-4f5d-b42e-67d3291b3893') && Account() != null) --><!-- /ko --><!-- ko if: (Item() == null && Helper() != null && Helper().id == '059dbfb9-1c80-4043-887f-0fc441099fe0') --><!-- /ko --><!-- ko if: (Item() == null && Helper() != null && Helper().id == '650a36fe-801f-4031-8d5b-ab422d061fca') --><!-- /ko --><!-- ko if: (Item() == null && Helper() != null && Helper().id == 'f728124f-c6b6-4dad-82c5-22fc0d8d0571') --><!-- /ko --><!-- ko if: (Item() == null && Helper() != null && Helper().id == '054dfae1-c34a-475e-abde-49e0385ffc9a') --><!-- /ko --><!-- ko if: (Item() == null && Helper() != null && Helper().id == '054dfae1-c34a-475e-abde-49e0385ffc9a') --><!-- /ko -->
               <td style="vertical-align: top"><textarea class="form-control input-sm autosize" style="height: 48px; width: 300px; margin-bottom: 0px; resize: none; overflow: hidden; word-wrap: break-word;" data-bind="value: Description, autosize: Description" spellcheck="true"></textarea></td>
               <td style="vertical-align: top"><input type="text" class="regular form-control input-sm" style="width: 80px; text-align: center; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" data-bind="textInput: Qty"></td>
               <td style="vertical-align: top"><input type="text" class="regular form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" data-bind="textInput: Amount"></td>
               <td style="vertical-align: top"><input type="text" class="regular form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" readonly="readonly" data-bind="value: FormattedLineTotal"></td>
               <td style="vertical-align: top; padding-left: 5px; padding-top: 5px"><a href="#" class="close" style="font-size: 24px; float: none; display: none;" data-bind="click: $root.RemoveLines, visible: $root.Lines().length > 1">×</a></td>
            </tr>
         </tbody>
         <tbody>
            <tr>
               <td></td>
               <td colspan="3"></td>
               <td></td>
               <td></td>
               <td></td>
               <td><input type="text" class="form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; font-weight: bold" readonly="readonly" data-bind="value: function() { var total = 0; for (i = 0; i < $root.Lines().length; i++) { total += $root.Lines()[i].LineTotal(); } return Globalize.format(total, 'n'+total.getDecimals()); }()"></td>
            </tr>
         </tbody>
      </table>
      <div class="btn-group" style="margin-top: -50px; margin-left: 3px">
         <button class="btn btn-default btn-xs" data-bind="click: AddLines">Tambah baris</button><button class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" style="min-width: 0px"><span class="caret"></span></button>
         <ul class="dropdown-menu">
            <li><a href="#" data-bind="click: AddLines">Tambah baris</a></li>
            <li><a href="#" data-bind="click: Add5Lines">Tambah baris (5×)</a></li>
            <li><a href="#" data-bind="click: Add10Lines">Tambah baris (10×)</a></li>
            <li><a href="#" data-bind="click: Add20Lines">Tambah baris (20×)</a></li>
         </ul>
      </div>
      <div class="form-group"><label>Catatan</label><textarea class="form-control input-sm" style="width: 400px; height: 100px" data-bind="value: Notes" spellcheck="true"></textarea></div>
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
  <?php include 'include/footer.php'; ?>
  </body>
</html>
 
