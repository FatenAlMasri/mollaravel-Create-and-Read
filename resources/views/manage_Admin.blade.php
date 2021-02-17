
@extends('layout')

@section('main')

<!-- MAIN CONTENT-->
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
				  				<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif




						<div class="card-header">Manage Admin</div>
						<div class="card-body">
							<div class="card-title">
								<h3 class="text-center title-2">Create Admin</h3>
							</div>
							<hr>
							<form action="/manage_Admin" method="post">
								@csrf
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Admin Email</label>
									<input  name="admin_email" type="text" class="form-control" data-val-required="Please enter admin email" required="" oninvalid="this.setCustomValidity('Enter Email')" oninput="setCustomValidity('')">
								</div>

								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Admin Password</label>
									<input  name="admin_password" type="Password" class="form-control" pattern="(?=.*\d)(?=.*[a-z]).{8,}" title="Must contain at least one number and lowercase letter, and at least 8 up to 32 digit" required>
								</div>

								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Admin Full Name</label>
									<input  name="admin_fullname" type="text" class="form-control" oninvalid="this.setCustomValidity('Enter Full Name')" oninput="setCustomValidity('')" required="">
								</div>

								<div class="row form-group">
									<div class="col col-md-3">
										<label for="select" class=" form-control-label">Department</label>
									</div>
								</div>

								<div class="row form-group">
									<div class="col-12 col-md-12">
										<select name="admin_dept" id="select" class="form-control" required="">
											<option >Please select</option>
											<option value="Expatriate Labor Directorate">Expatriate Labor Directorate</option>
											<option value="Central Inspection Directorate">Central Inspection Directorate</option>
											<option value="Central Employment Directorate">Central Employment Directorate</option>
											<option value="Directorate of Domestic Workers">Directorate of Domestic Workers</option>
											<option value="Directorate of Human Trafficking">Directorate of Human Trafficking</option>
											<option value="Legal Affairs Directorate">Legal Affairs Directorate</option>
											<option value="Labor Relations Directorate">Labor Relations Directorate</option>

										</select>
									</div>
								</div> 




								<div>
									<button name="Save" type="submit" class="btn btn-lg btn-primary btn-block">

										<span id="payment-button-amount">Save</span>

									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-12">
			<!-- DATA TABLE-->
			<div class="table-responsive m-b-40">
				<table class="table table-borderless table-data3">
					<thead>
						<tr>
							<th>ID</th>
							<th>Email</th>
							<th>Password</th>
							<th>Full Name</th>
							<th>Dept</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
					@foreach($admins as $admin)
					<tr>
					 <td>{{$admin['id']}}</td>
					 <td>{{$admin['admin_email']}}</td>
					 <td>{{$admin['admin_password']}}</td>
					 <td>{{$admin['admin_fullname']}}</td>
					 <td>{{$admin['admin_dept']}}</td>
					 <td>Edit</td>
					 <td>Delete</td>


					</tr>
					@endforeach	
					</tbody>
				</table>
			</div>
			<!-- END DATA TABLE-->
		</div>
	</div>
</div>


@endsection