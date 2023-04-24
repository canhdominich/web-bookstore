@section('controll')
Danh sách danh mục
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Book Store Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('assets/template/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/template/vendors/base/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('assets/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('assets/template/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('assets/template/images/favicon.png') }}" />
</head>
<body>
	@csrf
	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
		  <div class="navbar-brand-wrapper d-flex justify-content-center">
			<div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
				<a class="navbar-brand brand-logo" href="../../index.html"><img src="{{ asset('assets/template/images/logo.svg') }}" alt="logo"/></a>
				<a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="{{ asset('assets/template/images/logo-mini.svg')}}" alt="logo"/></a>
			  <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
				<span class="mdi mdi-sort-variant"></span>
			  </button>
			</div>  
		  </div>
		  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
			<ul class="navbar-nav mr-lg-4 w-100">
			  <li class="nav-item nav-search d-none d-lg-block w-100">
				<div class="input-group">
				  <div class="input-group-prepend">
					<span class="input-group-text" id="search">
					  <i class="mdi mdi-magnify"></i>
					</span>
				  </div>
				  <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
				</div>
			  </li>
			</ul>
			<ul class="navbar-nav navbar-nav-right">
			  <li class="nav-item dropdown me-1">
				<a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
				  <i class="mdi mdi-message-text mx-0"></i>
				  <span class="count"></span>
				</a>
				<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
				  <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
				  <a class="dropdown-item">
					<div class="item-thumbnail">
						<img src="images/faces/face4.jpg" alt="image" class="profile-pic">
					</div>
					<div class="item-content flex-grow">
					  <h6 class="ellipsis font-weight-normal">David Grey
					  </h6>
					  <p class="font-weight-light small-text text-muted mb-0">
						The meeting is cancelled
					  </p>
					</div>
				  </a>
				  <a class="dropdown-item">
					<div class="item-thumbnail">
						<img src="images/faces/face2.jpg" alt="image" class="profile-pic">
					</div>
					<div class="item-content flex-grow">
					  <h6 class="ellipsis font-weight-normal">Tim Cook
					  </h6>
					  <p class="font-weight-light small-text text-muted mb-0">
						New product launch
					  </p>
					</div>
				  </a>
				  <a class="dropdown-item">
					<div class="item-thumbnail">
						<img src="images/faces/face3.jpg" alt="image" class="profile-pic">
					</div>
					<div class="item-content flex-grow">
					  <h6 class="ellipsis font-weight-normal"> Johnson
					  </h6>
					  <p class="font-weight-light small-text text-muted mb-0">
						Upcoming board meeting
					  </p>
					</div>
				  </a>
				</div>
			  </li>
			  <li class="nav-item dropdown me-4">
				<a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
				  <i class="mdi mdi-bell mx-0"></i>
				  <span class="count"></span>
				</a>
				<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
				  <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
				  <a class="dropdown-item">
					<div class="item-thumbnail">
					  <div class="item-icon bg-success">
						<i class="mdi mdi-information mx-0"></i>
					  </div>
					</div>
					<div class="item-content">
					  <h6 class="font-weight-normal">Application Error</h6>
					  <p class="font-weight-light small-text mb-0 text-muted">
						Just now
					  </p>
					</div>
				  </a>
				  <a class="dropdown-item">
					<div class="item-thumbnail">
					  <div class="item-icon bg-warning">
						<i class="mdi mdi-settings mx-0"></i>
					  </div>
					</div>
					<div class="item-content">
					  <h6 class="font-weight-normal">Settings</h6>
					  <p class="font-weight-light small-text mb-0 text-muted">
						Private message
					  </p>
					</div>
				  </a>
				  <a class="dropdown-item">
					<div class="item-thumbnail">
					  <div class="item-icon bg-info">
						<i class="mdi mdi-account-box mx-0"></i>
					  </div>
					</div>
					<div class="item-content">
					  <h6 class="font-weight-normal">New user registration</h6>
					  <p class="font-weight-light small-text mb-0 text-muted">
						2 days ago
					  </p>
					</div>
				  </a>
				</div>
			  </li>
			  <li class="nav-item nav-profile dropdown">
				<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
				  <img src="{{ asset('assets/template/images/faces/face5.jpg') }}" alt="profile"/>
				  <span class="nav-profile-name">{{Auth::guard('admin')->user()->name}}</span>
				</a>
				<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
				  <a class="dropdown-item">
					<i class="mdi mdi-settings text-primary"></i>
					Cài đặt
				  </a>
				  <a class="dropdown-item" href="/admin/logout">
					<i class="mdi mdi-logout text-primary"></i>
					Đăng xuất
				  </a>
				</div>
			  </li>
			</ul>
			<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
			  <span class="mdi mdi-menu"></span>
			</button>
		  </div>
		</nav>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
		  <!-- partial:partials/_sidebar.html -->
		  <nav class="sidebar sidebar-offcanvas" id="sidebar">
			<ul class="nav">
			  <li class="nav-item">
				<a class="nav-link" href="/admin/dashboard">
				  <i class="mdi mdi-home menu-icon"></i>
				  <span class="menu-title">Trang chủ</span>
				</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
				  <i class="mdi mdi-circle-outline menu-icon"></i>
				  <span class="menu-title">Quản lý sách</span>
				  <i class="menu-arrow"></i>
				</a>
				<div class="collapse" id="ui-basic">
				  <ul class="nav flex-column sub-menu">
					<li class="nav-item"> <a class="nav-link" href="/admin/category">Danh mục</a></li>
                	<li class="nav-item"> <a class="nav-link" href="/admin/book">Sách</a></li>
				  </ul>
				</div>
			  </li>
	
			  <li class="nav-item">
				<a class="nav-link" href="pages/forms/basic_elements.html">
				  <i class="mdi mdi-view-headline menu-icon"></i>
				  <span class="menu-title">Form elements</span>
				</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="pages/charts/chartjs.html">
				  <i class="mdi mdi-chart-pie menu-icon"></i>
				  <span class="menu-title">Charts</span>
				</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="pages/tables/basic-table.html">
				  <i class="mdi mdi-grid-large menu-icon"></i>
				  <span class="menu-title">Tables</span>
				</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="pages/icons/mdi.html">
				  <i class="mdi mdi-emoticon menu-icon"></i>
				  <span class="menu-title">Icons</span>
				</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
				  <i class="mdi mdi-account menu-icon"></i>
				  <span class="menu-title">User Pages</span>
				  <i class="menu-arrow"></i>
				</a>
				<div class="collapse" id="auth">
				  <ul class="nav flex-column sub-menu">
					<li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
					<li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
					<li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
					<li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
					<li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
				  </ul>
				</div>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="documentation/documentation.html">
				  <i class="mdi mdi-file-document-box-outline menu-icon"></i>
				  <span class="menu-title">Documentation</span>
				</a>
			  </li>
			</ul>
		  </nav>
			<div class="main-panel">
				<div class="content-wrapper">
					<div style="margin-bottom: 30px; text-align: end;">
						<a href="/admin/new/category" class="btn btn-info btn-add text-white">Thêm danh mục</a>
					</div>
				<div class="row">
				<div class="col-md-12 stretch-card">
				<div class="card">
					<div class="card-body">
					<p class="card-title">Danh sách danh mục</p>
					<div class="table-responsive">
						<table id="recent-purchases-listing" class="table">
						<thead>
							<tr>
								<th class="col-sm-1 text-center">#</th>
								<th class="col-sm-3 text-center">Tên danh mục</th>
								<th class="col-sm-3 text-center">Mô tả danh mục</th>
								<th class="col-sm-2 text-center">Ngày tạo</th>
								<th class="col-sm-3 text-center">Hành động</th>
							</tr>
						</thead>
						<tbody>
							@if(isset($categories))
							@foreach ($categories as $value)
							<tr>
								<td class="col-sm-1 text-center">{{$value->id}}</td>
								<td class="col-sm-3 text-center">{{$value->name}}</td>
								<td class="col-sm-3 text-center">{{$value->description}}</td>
								<td class="col-sm-2 text-center">{{$value->created_at}}</td>
								<td class="col-sm-3 text-center">
									<a href="/admin/category/{{$value->id}}" class="btn btn-warning btn-edit">
										<i class="mdi mdi-table-edit" style="color: #fff;"></i>
									</a>
									<a href="#" data-id="{{$value->id}}" type="button" class="btn btn-danger btn-delete">
										<i class="mdi mdi-delete-forever" style="color: #fff;"></i>
									</a>
								</td>
								<style>
									button i::before {
										padding-top: 5px;
									}
								</style>
							</tr>
							@endforeach
							@endif
						</tbody>
						</table>
					</div>
					</div>
				</div>
				</div>
			</div>
				</div>
			</div>
	</div>
  <!-- plugins:js -->
  <script src="{{ asset('assets/template/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ asset('assets/template/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('assets/template/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('assets/template/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('assets/template/js/off-canvas.js')}}"></script>
  <script src="{{ asset('assets/template/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('assets/template/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('assets/template/js/dashboard.js')}}"></script>
  <script src="{{ asset('assets/template/js/data-table.js')}}"></script>
  <script src="{{ asset('assets/template/js/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('assets/template/js/dataTables.bootstrap4.js')}}"></script>
  <!-- End custom js for this page-->

  <script src="{{ asset('assets/template/js/jquery.cookie.js')}}" type="text/javascript"></script>
</body>
<script type="text/javascript">
	// show
	$('.btn-show').click(function(){
		var id = $(this).attr('data-id');
		$.ajax({
			type : "get",
			url : "/admin/category/" + id,
			data : {
				_token :$('[name="_token"]').val(),
			},
			success : function(response){
				$('#showName').val(response.name),
				$('#showPrice').val(response.price),
				$('#showThumbnail').attr('src', '/images/categories/'+response.thumbnail),
				$('#showExpirationPeriod').val(response.expiration_period),
				$('#showDescription').val(response.description),
				$('#showCreatedAt').val(response.created_at),
				$('#showUpdatedAt').val(response.updated_at)
			}
		});

		$('#showCategory').modal('show');
	});

	$('.btn-edit').click(function(){
		var id = $(this).attr('data-id');
		$.ajax({
			type : "get",
			url : "/admin/category/" + id,
			data : {
				_token :$('[name="_token"]').val(),
			},
			success : function(response){
				$('#editID').val(response.id),
				$('#editName').val(response.name),
				$('#editPriceId').val(response.price),
				$('#editExpirationPeriod').val(response.expiration_period),
				$('#Thumbnail').attr('src', '/images/categories/'+response.thumbnail),
				$('#editSlug').val(response.slug),
				$('#editDescription').val(response.description)
			}
		});

		$('#editCategory').modal('show');
	});
	
	$('.btn-update').click(function(){
		var category_id = $('#editID').val();
		var form_data = new FormData();
		form_data.append("_token", '{{csrf_token()}}');
		form_data.append("id", $('#editID').val());
		form_data.append("name", $('#editName').val());
		form_data.append("price", $('#editPriceId').val());
		form_data.append("expiration_period", $('#editExpirationPeriod').val());
		form_data.append('thumbnail', $('input[type=file]')[0].files[0]); 
		form_data.append("description", $('#editDescription').val());

		$.ajax({
			type : 'post',
			url : '/admin/update_category',
			data : form_data,
			contentType: false,
			processData: false,
			success: function(response){
				if(response.is === 'failed'){
					$.each(response.error, function( key, value ) {
						message = value;
					});

					swal({
						title: "Thất bại!",
						text: message,
						icon: "error",
						buttons: true,
						buttons: ["Ok"],
						timer: 3000
					});
				}
				if(response.is === 'success'){
					swal({
						title: "Hoàn thành!",
						text: response.complete,
						icon: "success",
						buttons: true,
						buttons: ["Ok"],
						timer: 1000
					});

					setTimeout(function () {
						window.location.href="/admin/category/";
					},1000);
				}
				if(response.is === 'unsuccess'){
					swal({
						title: "Thất bại!",
						text: response.uncomplete,
						icon: "error",
						buttons: true,
						buttons: ["Ok"],
						timer: 5000
					});
				}
			}
		});
	});

	// delete
	$('.btn-delete').click(function(){
		if(confirm('Bạn có muốn xóa không?')){
			var _this = $(this);
			var id = $(this).attr('data-id');
			$.ajax({
				type: 'delete',
				url: '/admin/category/' + id,
				data:{
					_token : $('[name="_token"]').val(),
				},
				success: function(response){
					_this.parent().parent().remove();
					window.location.reload();
				}
			})
		}
	});
</script>
</html>
