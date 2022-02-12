<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
    width: 100 vw;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	/*max-width: 100 vw;*/
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
/*.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}*/
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	
.imageKamar{
	width: 40px;
	height: 40px;
	border-radius: 100;
	color: royalblue;
}
</style>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>My <b>Bookings</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Booking Room</span></a>				
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Jenis kelamin</th>
						<th>No.Identitas</th>
						<th>Tipe Kamar</th>
						<th>Harga</th>
						<th>Tanggal Pesan</th>
						<th>Durasi Menginap</th>
						<th>Breakfast</th>
						<th>Total</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($bookings as $booking)
						@php
							$user	= App\User::find($booking->user_id);
							$product = App\Product::find($booking->product_id);
						@endphp
						<tr>
							<td>{{$booking->name}}</td>
							<td>{{$booking->gender}}</td>
							<td>{{$booking->gender}}</td>
							<td>{{$product->name}}</td>
							<td>{{$product->harga}}</td>
							<td>{{$booking->date}}</td>
							<td>{{$booking->duration}}</td>
							<td>{{$booking->breakfast ? 'yes' : 'no'}}</td>
							<td>{{$booking->total}}</td>
							<td>
								<a href="#editEmployeeModal{{$booking->id}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
								<a href="#deleteEmployeeModal{{$booking->id}}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
								<a href="#viewEmployeeModal{{$booking->id}}" class="View" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="View details">&#xe8f4;</i></a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>        
</div>
<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{route('booking.post')}}" method="post">
				@csrf
				<div class="modal-header">
					<h4 class="modal-title">Pesan Kamar</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control" required name="name">
					</div>
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Laki-laki">
								<label class="form-check-label" for="inlineRadio1">Laki-laki</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Perempuan">
								<label class="form-check-label" for="inlineRadio2">Perempuan</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>No.Identitas</label>
						<input type="number"  class="form-control" required name="identitas"></input>
					</div>
					<div class="form-group">
						<label>Tipe Kamar</label>
						<select class="form-control" id="product" required name="product">
							@foreach($products as $product)
								<option value="{{$product->id}}">{{$product->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="text" id="harga" class="form-control" value="500000" readonly required name="harga"></input>
					</div>		
					<div class="form-group">
						<label>Tanggal Pesan</label>
						<input type="date" class="form-control" required name="date"></input>
					</div>			
					<div class="form-group">
						<label>Durasi Menginap (Hari)</label>
						<input type="number" min="0" max="30" value="0" class="form-control" id="duration" required name="duration"></input>
					</div>
					<input type="text" class="form-control" id="total" required name="total" hidden></input>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="true" id="breakfast" name="breakfast">
						<label class="form-check-label" for="breakfast">
							Breakfast
						</label>
					</div>
					<div class="totalLabel"><H3>Total:</H3><span><h4 id="harga-total">Rp.--</h4></span></div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Book">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
@foreach($bookings as $booking)
	@php 
		$harga = 0;
		if($booking->product_id ==1){
			$harga = 500000;
		}elseif($booking->product_id ==2){
			$harga = 1000000;
		}elseif($booking->product_id ==3){
			$harga = 1500000;
		}
	@endphp
	<div id="editEmployeeModal{{$booking->id}}" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{route('booking.put', $booking->id)}}" method="post">
					@csrf
					<div class="modal-header">
						<h4 class="modal-title">Edit Kamar</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control" required name="name" value="{{$booking->name}}">
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Laki-laki" {{$booking->gender == "Laki-laki" ? 'checked' : ''}}>
									<label class="form-check-label" for="inlineRadio1">Laki-laki</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Perempuan" {{$booking->gender == "Perempuan" ? 'checked' : ''}}>
									<label class="form-check-label" for="inlineRadio2">Perempuan</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>No.Identitas</label>
							<input type="number"  class="form-control" required name="identitas" value="{{$booking->identitas}}"></input>
						</div>
						<div class="form-group">
							<label>Tipe Kamar</label>
							<select class="form-control" id="product" required name="product">
								@foreach($products as $product)
									@if($product->id == $booking->product_id)
										<option value="{{$product->id}}" selected>{{$product->name}}</option>
									@else
										<option value="{{$product->id}}">{{$product->name}}</option>
									@endif
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label>Harga</label>
							<input type="text" id="harga" class="form-control" value="{{$harga}}" readonly required name="harga"></input>
						</div>		
						<div class="form-group">
							<label>Tanggal Pesan</label>
							<input type="date" class="form-control" required name="date" value="{{$booking->date}}"></input>
						</div>			
						<div class="form-group">
							<label>Durasi Menginap (Hari)</label>
							<input type="number" min="0" max="30" class="form-control" id="duration" required name="duration" value="{{$booking->duration}}"></input>
						</div>
						<input type="text" class="form-control" id="total" required name="total" hidden value="{{$booking->total}}"></input>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="true" id="breakfast" name="breakfast" {{$booking->breakfast ? 'checked' : ''}}>
							<label class="form-check-label" for="breakfast">
								Breakfast
							</label>
						</div>
						<div class="totalLabel"><H3>Total:</H3><span><h4 id="harga-total">{{$booking->total}}</h4></span></div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Book">
					</div>
				</form>
			</div>
		</div>
	</div>
@endforeach
<!-- View Modal HTML -->
@foreach($bookings as $booking)
	@php 
		$product = App\Product::find($booking->product_id);
		$harga = 0;
		if($booking->product_id ==1){
			$type = "Superior Room";
			$harga = 500000;
		}elseif($booking->product_id ==2){
			$type = "Deluxe Room";
			$harga = 1000000;
		}elseif($booking->product_id ==3){
			$type = "Executive Room";
			$harga = 1500000;
		}
	@endphp
	<div id="viewEmployeeModal{{$booking->id}}" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<table class="table table-striped table-hover">
					<tr>
						<td scope="col">Nama:</td>
						<td scope="col">{{$booking->name}}</td>
					</tr>
					<tr>
						<td scope="col">Jenis Kelamin:</td>
						<td scope="col">{{$booking->gender}}</td>
					</tr>
					<tr>
						<td scope="col">No.Identitas:</td>
						<td scope="col">{{$booking->identitas}}</td>
					</tr>
					<tr>
						<td scope="col">Tipe Kamar:</td>
						<td>{{$type}}</td>
					</tr>
					<tr><img src="{{asset('assets/img/portfolio/'.$product->img_type_room)}}" alt="img"></tr>
					<tr>
						<td scd	ope="col">Harga:</td>
						<td scope="col">{{$harga}}</td>
					</tr>
					<tr>
						<td scd	ope="col">Tanggal Pesan:</td>
						<td scope="col">{{$booking->date}}</td>
					</tr>
					<tr>
						<td scd	ope="col">Durasi Menginap:</td>
						<td scope="col">{{$booking->duration}}</td>
					</tr>
					<tr>
						<td scd	ope="col">Breakfast:</td>
						<td scope="col">{{$booking->breakfast ? 'Yes' : 'No'}}	</td>
					</tr>	
				</table>
			</div>
		</div>

	</div>
@endforeach

<!-- Delete Modal HTML -->
@foreach($bookings as $booking)
	<div id="deleteEmployeeModal{{$booking->id}}" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{route('booking.delete', $booking->id)}}">
					@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Delete Book</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Book?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
@endforeach

<script>
	var hargaTotal = 0;
	$(document).on('ready', function(){
		$('#breakfast').val();
	})

	$('#product').on('change', function(){
		var product = $(this).val();
		if(product == '1'){
			$('#harga').val('500000');
		}else if(product == '2'){
			$('#harga').val('1000000');
		}else if(product == '3'){
			$('#harga').val('1500000');
		}
		hitungHarga();
	});

	$('#duration').on('input',function(e){
    hitungHarga()
	});

	$('#breakfast').change(function() {
		hitungHarga();     
	});

	function hitungHarga(){
		var hargaTotal = 0;
		const harga	= $('#harga').val();
		const durasi = $('#duration').val();
		if(durasi > 3){
			hargaTotal 	= (parseFloat(harga) * parseFloat(durasi)) - (parseFloat(harga) * parseFloat(durasi) * (10/100));
		}else{
			hargaTotal 	= parseFloat(harga) * parseFloat(durasi);
		}

		hargaTotal	= $("#breakfast").is(':checked') ? hargaTotal + 80000 : hargaTotal;
		$('#harga-total').text('Rp.' + hargaTotal); 
		$('#total').val(hargaTotal);
	}

</script>
</body>
</html>