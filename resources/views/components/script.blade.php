	<!-- Bootstrap JS -->
	<script src="{{ asset('template/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('template/js/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.js"></script>
    <script src="{{ asset('template/js/jquery.validate.js') }}"></script>
	<script src="{{ asset('template/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('template/plugins/metismenu/js/metisMenu.min.js?v2') }}"></script>
	<script src="{{ asset('template/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ asset('template/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('template/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset('template/plugins/chartjs/js/Chart.min.js') }}"></script>
	<script src="{{ asset('template/plugins/chartjs/js/Chart.extension.js') }}"></script>
	<script src="{{ asset('template/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('template/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('template/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );

			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	<!--notification js -->
	<script src="{{ asset('template/plugins/notifications/js/lobibox.min.js') }}"></script>
	<script src="{{ asset('template/plugins/notifications/js/notifications.min.js') }}"></script>
	<script src="{{ asset('template/js/index.js') }}"></script>
	<!--app JS-->
	<script src="{{ asset('template/js/app.js') }}"></script>
