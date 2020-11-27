<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/fonts/css/all.css">
	<link rel="stylesheet" href="assets/css/datatables.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap-table ">
		<a class=" btn btn-info btn-sm" data-toggle="modal" href="#student-model">Add New Student</a> <br><br>
		<div class="card shadow">
			<div class="card-body"> 
				<h2>All Data</h2>
				<table id="student_table" class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Roll</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="student_tbody">
						
						

					</tbody>
				</table>
			</div>
		</div>



	</div>


	<div id="student-model" class=" modal fade">
		<div class=" modal-dialog modal-dialog-centered">
			<div class=" modal-content">
				<div class=" modal-header">
					<h4>Add New Student</h4>
					
				</div>
				<div class=" modal-body">
					<div class="mess"></div>
					<form id="add_student_data" action="" method="POST">
						@csrf
						<div class="form-group">
						
							<input name="name" class=" form-control" type="text" placeholder="Name">
						</div>

						<div class="form-group">
							
							<input name="roll" class=" form-control" type="text" placeholder="Roll">
						</div>

						<div class="form-group">
							
							<input name="email" class=" form-control" type="text" placeholder="E-mail">
						</div>
						<div class="form-group">
							
							<input name="cell" class=" form-control" type="text" placeholder="Cell">
						</div>
						<div class="form-group">
							
							<img class="" style="display:block; width: 200px;" id="student_photo_load" src="" alt="">
							<input style="display: none;" name="photo" type="file" id="student_photo">
							
							<label style="font-size:30px; cursor: pointer;" for="student_photo"><i class="fas fa-camera"></i></label>
						</div>

						<div class="form-group">
							
							<input type="submit" value="Submit" class="btn btn-primary btn-block">
						</div>
					</form>
				</div>
				<div></div>
			</div>
		</div>
	</div>
	





	<div id="student-model-edit" class=" modal fade">
		<div class=" modal-dialog modal-dialog-centered">
			<div class=" modal-content">
				<div class=" modal-header">
					<h4>Edit Student Data</h4>
					
				</div>
				<div class=" modal-body">
					<div class="mess"></div>
					<form id="edit_student_data" action="" method="POST">
						@csrf
						<div class="form-group">
						
							<input name="name" class=" form-control" type="text" placeholder="Name">
						</div>

						<div class="form-group">
							
							<input name="roll" class=" form-control" type="text" placeholder="Roll">
						</div>

						<div class="form-group">
							
							<input name="email" class=" form-control" type="text" placeholder="E-mail">
						</div>
						<div class="form-group">
							
							<input name="cell" class=" form-control" type="text" placeholder="Cell">
						</div>
						<div class="form-group">
							
							<img class="" style="display:block; width: 200px;" id="student_photo_load" src="" alt="">
							<input style="display: none;" name="photo" type="file" id="student_photo">
							
							<label style="font-size:30px; cursor: pointer;" for="student_photo"><i class="fas fa-camera"></i></label>
						</div>

						<div class="form-group">
							
							<input type="submit" value="Submit" class="btn btn-primary btn-block">
						</div>
					</form>
				</div>
				<div></div>
			</div>
		</div>
	</div>
	









	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/datatables.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>