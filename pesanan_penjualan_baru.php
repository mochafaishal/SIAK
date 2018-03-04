<?php include 'include/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Pesanan Penjualan</title>
    <link rel="shortcut icon" href="images/akuntansi.png">
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
                        <h3>Pesanan Penjualan</h3>
                        <hr>
       <div class="">
   <div class=""><span class="header"></span></div>
   <div class="" style="box-shadow: inset 0px 1px 0px #fff; padding: 30px">
      <table>
         <tbody>
            <tr>
               <td>
                  <div class="form-group">
                     <label>Tanggal diterbitkan</label>
                     <div class="controls"><input type="text" class="form-control input-sm" style="width: 100px; margin-bottom: 0px; text-align: center" data-bind="datePicker: Date"></div>
                  </div>
               </td>
               <td style="padding-left: 10px">
                  <div class="form-group">
                     <label>Nomor pesanan</label>
                     <div class="input-group" style="margin-bottom: 0px"><span class="input-group-addon">#</span><input type="text" class="form-control input-sm" style="width: 80px; text-align: center" data-bind="value: Reference"></div>
                  </div>
               </td>
            </tr>
         </tbody>
      </table>
      <div class="form-group">
         <label>Pelanggan</label>
         <div class="controls">
            <div>
               <div class="select2-container" id="s2id_autogen1" style="width: 300px">
                  <a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2"> </span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2">
                  <div class="select2-drop select2-display-none select2-with-searchbox">
                     <div class="select2-search">       <label for="s2id_autogen2_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">   </div>
                     <ul class="select2-results" role="listbox" id="select2-results-2">   </ul>
                  </div>
               </div>
               <input type="hidden" style="width: 300px; display: none;" data-bind="select2data: Customer" data-autocomplete="sales-invoice-contact-autocomplete?FileID=a5578f2c-1b18-4b54-8840-bf278d5b705b" data-placeholder="" tabindex="-1" title="">
            </div>
         </div>
      </div>
      <div class="form-group"><label>Alamat Penagihan</label><textarea class="form-control input-sm" style="width: 300px; height: 100px" data-bind="value: BillingAddress"></textarea></div>
      <div class="form-group"><label>Deskripsi</label><input type="text" class="form-control input-sm" style="width: 500px" placeholder="Opsional" data-bind="value: Summary"></div>
      <table style="margin-left: -20px">
         <thead>
            <tr>
               <th></th>
               <th style="text-align: left"><label>Deskripsi</label></th>
               <th style="text-align: center"><label>Kuantitas</label></th>
               <th style="text-align: center"><label>Harga satuan</label></th>
               <th style="text-align: center; display: none;" data-bind="visible: $root.Discount()"><label>Diskon</label></th>
               <th style="text-align: center"><label>Jumlah</label></th>
            </tr>
         </thead>
         <tbody data-bind="sortable: { data: Lines, options: { handle: '.sortableHandle', cursor: 'move' } }" class="ko_container ui-sortable">
            <tr data-select2height="46">
               <td class="sortableHandle" style="cursor: move"><img src="resources/webalys/_16px/interface-30.png" style="margin-right: 4px; opacity: 0;" data-bind="style: { opacity: ($root.Lines().length > 1) ? '0.25' : '0' }"></td>
               <td style="vertical-align: top"><textarea class="form-control input-sm autosize" style="height: 48px; width: 300px; margin-bottom: 0px; resize: none; overflow: hidden; word-wrap: break-word;" data-bind="value: Description, autosize: Description" spellcheck="true"></textarea></td>
               <td style="vertical-align: top"><input type="text" class="regular form-control input-sm" style="width: 80px; text-align: center; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" data-bind="textInput: Qty"></td>
               <td style="vertical-align: top"><input type="text" class="regular form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" data-bind="textInput: Amount"></td>
               <td style="vertical-align: top; display: none;" data-bind="visible: $root.Discount()">
                  <div class="input-group" style="margin-bottom: 0px" data-bind="visible: $root.DiscountType() == 'Percentage'"><input type="text" class="regular form-control input-sm" style="width: 50px; text-align: center; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" placeholder="0" data-bind="textInput: Discount"><span class="input-group-addon" style="vertical-align: top; padding-left: 5px; padding-right: 5px">%</span></div>
                  <input type="text" class="regular form-control input-sm" style="width: 80px; text-align: right; margin-bottom: 0px; line-height: 14px; display: none; height: 48px; padding-bottom: 24px;" placeholder="0" data-bind="textInput: DiscountAmount, visible: $root.DiscountType() == 'ExactAmount'">
               </td>
               <td style="vertical-align: top"><input type="text" class="regular form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" readonly="readonly" data-bind="value: FormattedLineTotal"></td>
               <td style="vertical-align: top; padding-left: 5px; padding-top: 5px"><a href="#" class="close" style="font-size: 24px; float: none; display: none;" data-bind="click: $root.RemoveLines, visible: $root.Lines().length > 1">×</a></td>
            </tr>
         </tbody>
         <tbody>
            <tr>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td data-bind="visible: $root.Discount()" style="display: none;"></td>
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
      <div class="checkbox">
         <label><input type="checkbox" data-bind="checked: Discount">Diskon</label>
         <div class="form-group" data-bind="visible: Discount" style="display: none;">
            <div class="select2-container" id="s2id_autogen3" style="width: 200px">
               <a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-4">Persentase</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen4" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-4" id="s2id_autogen4">
               <div class="select2-drop select2-display-none select2-with-searchbox">
                  <div class="select2-search">       <label for="s2id_autogen4_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-4" id="s2id_autogen4_search" placeholder="">   </div>
                  <ul class="select2-results" role="listbox" id="select2-results-4">   </ul>
               </div>
            </div>
            <select style="width: 200px; display: none;" data-bind="value: DiscountType, select2" tabindex="-1" title="">
               <option value="Percentage">Persentase</option>
               <option value="ExactAmount">Exact amount</option>
            </select>
         </div>
      </div>
      <div class="form-group">
         <label>Tanggal Kirim</label>
         <div class="controls"><input type="text" class="form-control input-sm" style="width: 100px; margin-bottom: 0px; text-align: center" data-bind="datePicker: DeliveryDate"></div>
      </div>
      <div class="form-group"><label>Alamat Pengiriman</label><textarea class="form-control input-sm" style="width: 400px; height: 100px" data-bind="value: DeliveryAddress"></textarea></div>
      <div class="form-group"><label>Instruksi Pengiriman</label><textarea class="form-control input-sm" style="width: 400px; height: 100px" data-bind="value: DeliveryInstructions" spellcheck="true"></textarea></div>
      <div class="form-group"><label>Diotorisasi oleh</label><input type="text" class="form-control input-sm" style="width: 400px" data-bind="value: AuthorizedBy"></div>
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
 
 
