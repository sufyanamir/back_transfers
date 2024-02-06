
<hr class="border border-gray-300">
<div class="  p-5 flex flex-wrap justify-between items-center ">

    <div>
        <span>© 2022 Luxride</span>
    </div>
    <div>
        <ul class="flex gap-5 font-montserrat capitalize">
            <li><a href="">terms</a></li>
            <li><a href="">privacy policy</a></li>
            <li><a href="">legal notice</a></li>
            <li><a href="">accesibility</a></li>
        </ul>
    </div>

</div>
</div>
<script src="../path/to/datatables.min.js"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{asset('assets/js/dataTable.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<!--Datatables -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	<script>
		$(document).ready(function() {

			var table = $('#example').DataTable({
					responsive: true
				})
				.columns.adjust()
				.responsive.recalc();
		});
	</script>

<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
<link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
</body>
</html>
