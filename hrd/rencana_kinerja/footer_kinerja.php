  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.5
    </div>
    <strong>Build & developed by MSIB batch 3 intern 2023</strong> - Solo Techno Park Finance Analyzer (Soto Panaz)
  </footer>

  
</div>



<script src="../../assets/bower_components/jquery/dist/jquery.min.js"></script>

<script src="../../assets/bower_components/jquery-ui/jquery-ui.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<script src="../../assets/dist/js/Chart.js"></script>
<script src="../../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="../../assets/bower_components/raphael/raphael.min.js"></script>
<script src="../../assets/bower_components/morris.js/morris.min.js"></script>

<script src="../../assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>


<script src="../../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="../../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<script src="../../assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

<script src="../../assets/bower_components/moment/min/moment.min.js"></script>
<script src="../../assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="../../assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script src="../../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script src="../../assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script src="../../assets/bower_components/fastclick/lib/fastclick.js"></script>

<script src="../../assets/dist/js/adminlte.min.js"></script>

<script src="../../assets/dist/js/pages/dashboard.js"></script>

<script src="../../assets/dist/js/demo.js"></script>
<script src="../../assets/bower_components/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="../../chartjs/Chart.js"></script>

<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
    $("#example1").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": true
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});
</script>

<script>
  $(document).ready(function(){
   // $(".edit").hide();
   $('#table-datatable').DataTable({
    'paging'      : true,
    'lengthChange': true,
    'searching'   : true,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : true,
    "pageLength": 50
  });

 });
  
  $('#datepicker').datepicker({
    autoclose: true,
    format: 'dd/mm/yyyy',
  }).datepicker("setDate", new Date());

  $('.datepicker2').datepicker({
    autoclose: true,
    format: 'yyyy/mm/dd',
  });
</script>

</body>
</html>