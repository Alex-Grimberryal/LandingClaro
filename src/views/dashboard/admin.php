
<?php require '../template/navegacion/navb.php'; ?>
	<div class="container-fluid mx-auto">
		<div class="card mx-auto mt-1" style="width: 70rem;">			
			<div class="card-body">
				<table class="table" id="myTable">
					<thead>
						<tr>
							<th>Id</th>
							<th>Número</th>
							<th>E-mail</th>
							<th>Opción Seleccionada</th>
							<th>Indicaciones extras</th>
						</tr>
					</thead>
					<tbody>
						<?php require '../dashboard/visualizacion.php'; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>    
	<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
	<script>
        $(document).ready( function () {
    		$('#myTable').DataTable( {
				dom: 'Bfrtip',
				buttons: [
					'excel'
				]
			} );
		} );
    </script>

</body>
</html>
