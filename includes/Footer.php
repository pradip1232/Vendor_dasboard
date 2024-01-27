<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>



<!-- DataTables  & Plugins -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>






<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard.js"></script>

<!-- Page specific script -->
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Add an event listener for the "Add Another Video" button
    document.getElementById('addAnotherVideoBtn').addEventListener('click', function() {
      // Clone the entire container with its content
      var containerClone = document.getElementById('variantsContainer').cloneNode(true);

      // Clear the input values in the cloned container
      containerClone.querySelector('#videoFile').value = '';
      containerClone.querySelector('#videoName').value = '';
      containerClone.querySelector('#videoDescription').value = '';
      containerClone.querySelector('#videoHighlights1').value = '';

      // Append the cloned container to the document
      document.body.appendChild(containerClone);
    });
  });
</script>
<script>
  $(document).ready(function() {
    $("#addRowBtn").click(function() {
      // Toggle the visibility of #variantsContainer
      $("#variantsContainer").removeClass("d-none");
    });
    var highlightCounter = 1;
    $("#addHighlightBtn").click(function() {
      var originalHighlight = $(".highlight-container:first");
      var newHighlight = originalHighlight.clone();
      console.log("Heloooo");
      highlightCounter++;
      newHighlight.find('label').text('Highlights ' + highlightCounter);
      newHighlight.find('input').attr({
        'id': 'productSize' + highlightCounter,
        'name': 'size[]'
      });

      // Clear the input value of the new highlight
      newHighlight.find('input').val('');

      // Append the new highlight to the container
      newHighlight.appendTo(".container12");
    });
  });




  // $(document).ready(function() {
  //   // Add more highlights
  //   $("#addHighlightBtn").click(function() {
  //     var originalHighlight = $(".highlight-container:first");
  //     var newHighlight = originalHighlight.clone();
  //     console.log("Heloooo");
  //     // Clear the input value of the new highlight
  //     newHighlight.find('input').val('');

  //     // Append the new highlight to the container
  //     newHighlight.appendTo(".container12");
  //   });
  // });
</script>
</body>

</html>