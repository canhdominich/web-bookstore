<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Majestic Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{
                asset(
                    'assets/template/vendors/mdi/css/materialdesignicons.min.css'
                )
            }}" />
    <link rel="stylesheet" href="{{
                asset('assets/template/vendors/base/vendor.bundle.base.css')
            }}" />
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/template/css/style.css') }}" />
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/template/images/favicon.png') }}" />
    <script type="text/javascript" src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
                <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                    <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../images/logo.svg" alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../images/logo-mini.svg" alt="logo" /></a>
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
                            <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search" />
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
                            <p class="mb-0 font-weight-normal float-left dropdown-header">
                                Messages
                            </p>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <img src="../../images/faces/face4.jpg" alt="image" class="profile-pic" />
                                </div>
                                <div class="item-content flex-grow">
                                    <h6 class="ellipsis font-weight-normal">
                                        David Grey
                                    </h6>
                                    <p class="font-weight-light small-text text-muted mb-0">
                                        The meeting is cancelled
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <img src="../../images/faces/face2.jpg" alt="image" class="profile-pic" />
                                </div>
                                <div class="item-content flex-grow">
                                    <h6 class="ellipsis font-weight-normal">
                                        Tim Cook
                                    </h6>
                                    <p class="font-weight-light small-text text-muted mb-0">
                                        New product launch
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <img src="../../images/faces/face3.jpg" alt="image" class="profile-pic" />
                                </div>
                                <div class="item-content flex-grow">
                                    <h6 class="ellipsis font-weight-normal">
                                        Johnson
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
                            <p class="mb-0 font-weight-normal float-left dropdown-header">
                                Notifications
                            </p>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <div class="item-icon bg-success">
                                        <i class="mdi mdi-information mx-0"></i>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="font-weight-normal">
                                        Application Error
                                    </h6>
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
                                    <h6 class="font-weight-normal">
                                        Settings
                                    </h6>
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
                                    <h6 class="font-weight-normal">
                                        New user registration
                                    </h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                            <img src="../../images/faces/face5.jpg" alt="profile" />
                            <span class="nav-profile-name">Louis Barnett</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="mdi mdi-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item">
                                <i class="mdi mdi-logout text-primary"></i>
                                Logout
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
            <!-- partial:../../partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.html">
                            <i class="mdi mdi-home menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <i class="mdi mdi-circle-outline menu-icon"></i>
                            <span class="menu-title">UI Elements</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/forms/basic_elements.html">
                            <i class="mdi mdi-view-headline menu-icon"></i>
                            <span class="menu-title">Form elements</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/charts/chartjs.html">
                            <i class="mdi mdi-chart-pie menu-icon"></i>
                            <span class="menu-title">Charts</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/tables/basic-table.html">
                            <i class="mdi mdi-grid-large menu-icon"></i>
                            <span class="menu-title">Tables</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/icons/mdi.html">
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
                                <li class="nav-item">
                                    <a class="nav-link" href="../../pages/samples/login.html">
                                        Login
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../pages/samples/login-2.html">
                                        Login 2
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../pages/samples/register.html">
                                        Register
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../pages/samples/register-2.html">
                                        Register 2
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../pages/samples/lock-screen.html">
                                        Lockscreen
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../documentation/documentation.html">
                            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                            <span class="menu-title">Documentation</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                @if(isset($book))
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Cập nhật sách</h4>
                                    <form class="forms-sample" onsubmit="submitForm(event)">
                                        @csrf
                                        <input name="id" type="hidden" class="form-control" id="bookId" value="{{$book->id}}">
                                        <div class="form-group">
                                            <label for="name">Tên sách</label>
                                            <input type="text" class="form-control" id="name" value="{{$book->name}}" />
                                        </div>

                                        <div class="form-group">
                                            <label for="code">Mã</label>
                                            <input type="text" class="form-control" id="code" value="{{{$book->code}}}" />
                                        </div>

                                        <div class="form-group">
                                            <label for="category">Danh mục</label>
                                            <input type="text" class="form-control" id="categoryId" value="{{$book->category_id}}" />
                                        </div>

                                        <div class="form-group">
                                            <label>Hình ảnh</label>
                                            <div class="text-center">
                                                <img style="width: 100px; height: 200px; border-radius: 0;" src="{{url('images/books/'.$book->image)}}" alt=" text-center">
                                            </div>
                                            <input type="file" name="img[]" class="file-upload-default" />
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled placeholder="Cập nhật ảnh bìa" />
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary text-white" type="button">
                                                        Cập nhật ảnh bìa
                                                    </button>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Mô tả</label>
                                            <textarea class="form-control" rows="10" id="description">
                                            {!! $book->description !!}
                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="author">Tác giả</label>
                                            <input type="text" class="form-control" id="author" value="{{$book->author}}" />
                                        </div>

                                        <div class="form-group">
                                            <label for="price">Giá gốc</label>
                                            <input type="text" class="form-control" id="price" value="{{$book->price}}" />
                                        </div>

                                        <div class="form-group">
                                            <label for="priceSale">Giá bán</label>
                                            <input type="text" class="form-control" id="priceSale" value="{{$book->price_sale}}" />
                                        </div>

                                        <div class="form-group">
                                            <label for="quantity">Số lượng</label>
                                            <input type="text" class="form-control" id="quantity" value="{{$book->quantity}}" />
                                        </div>

                                        <div class="form-group">
                                            <label for="status">Trạng thái</label>
                                            <select name="status" class="form-control form-control form-control-lg" id="status">
                                                @if($book->status)
                                                <option value="1" selected>Công khai</option>
                                                <option value="0">Riêng tư</option>
                                                @else
                                                <option value="1">Công khai</option>
                                                <option value="0" selected>Riêng tư</option>
                                                @endif
                                            </select><br>
                                        </div>

                                        <button type="submit" class="btn btn-primary me-2 text-white btn-save">
                                            Cập nhật
                                        </button>
                                        <a href="/admin/book" class="btn btn-danger text-white">Hủy</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
                            <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best
                            <a href="https://www.bootstrapdash.com/" target="_blank">
                                Bootstrap dashboard
                            </a>
                            templates</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{
                asset('assets/template/vendors/base/vendor.bundle.base.js')
            }}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{ asset('assets/template/js/off-canvas.js') }}"></script>
    <script src="{{
                asset('assets/template/js/hoverable-collapse.js')
            }}"></script>
    <script src="{{ asset('assets/template/js/template.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets/template/js/file-upload.js') }}"></script>

    <script type="text/javascript">
        function submitForm(event) {
            event.preventDefault();
        }
        $(".btn-save").click(function() {
            var form_data = new FormData();
            var id = $('#bookId').val();
            var name = $("#name").val();
            var image = $("input[type=file]")[0].files[0];
            var code = $("#code").val();
            var author = $("#author").val();
            var description = $("#description").val();
            var category_id = $("#categoryId").val();
            var quantity = $("#quantity").val();
            var price = $("#price").val();
            var price_sale = $("#priceSale").val();
            var status = $("#status").val();
            if (!name) {
                swal({
                    title: "Lỗi!",
                    text: "Tên sách là bắt buộc",
                    icon: "warning",
                    buttons: true,
                    buttons: ["Ok"],
                    timer: 3000,
                });
                return;
            }
            if (!code) {
                swal({
                    title: "Lỗi!",
                    text: "Mã sách là bắt buộc",
                    icon: "warning",
                    buttons: true,
                    buttons: ["Ok"],
                    timer: 3000,
                });
                return;
            }
            if (!description) {
                swal({
                    title: "Lỗi!",
                    text: "Mô tả là bắt buộc",
                    icon: "warning",
                    buttons: true,
                    buttons: ["Ok"],
                    timer: 3000,
                });
                return;
            }
            if (!category_id) {
                swal({
                    title: "Lỗi!",
                    text: "Danh mục sách là bắt buộc",
                    icon: "warning",
                    buttons: true,
                    buttons: ["Ok"],
                    timer: 3000,
                });
                return;
            }
            if (!quantity) {
                swal({
                    title: "Lỗi!",
                    text: "Số lượng sách là bắt buộc",
                    icon: "warning",
                    buttons: true,
                    buttons: ["Ok"],
                    timer: 3000,
                });
                return;
            }
            if (!auth) {
                swal({
                    title: "Lỗi!",
                    text: "Tác giả là bắt buộc",
                    icon: "warning",
                    buttons: true,
                    buttons: ["Ok"],
                    timer: 3000,
                });
                return;
            }
            if (!price) {
                swal({
                    title: "Lỗi!",
                    text: "Giá sách là bắt buộc",
                    icon: "warning",
                    buttons: true,
                    buttons: ["Ok"],
                    timer: 3000,
                });
                return;
            }
            if (!price_sale) {
                swal({
                    title: "Lỗi!",
                    text: "Giá bán là bắt buộc",
                    icon: "warning",
                    buttons: true,
                    buttons: ["Ok"],
                    timer: 3000,
                });
                return;
            }
            form_data.append("_token", "{{csrf_token()}}");
            form_data.append("id", id);
            form_data.append("name", name.trim());
            if (image) {
                form_data.append("image", image);
            }
            form_data.append("code", code.trim());
            form_data.append("author", author.trim());
            form_data.append("description", description.trim());
            form_data.append("category_id", +category_id);
            form_data.append("quantity", +quantity);
            form_data.append("price_sale", +price_sale);
            form_data.append("price", +price);
            form_data.append("status", status);
            $.ajax({
                type: "post",
                url: "/admin/update-book",
                data: form_data,
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.is === "success") {
                        setTimeout(function() {
                            window.location.href = "/admin/book";
                        }, 1600);
                        swal({
                            title: "Hoàn thành!",
                            text: "Cập nhật sách thành công",
                            icon: "success",
                            buttons: true,
                            buttons: ["Ok"],
                            timer: 1500,
                        });
                    }
                    if (response.is === "unsuccess") {
                        swal({
                            title: "Lỗi!",
                            text: "Không cập nhật được sách",
                            icon: "warning",
                            buttons: true,
                            buttons: ["Ok"],
                            timer: 3000,
                        });
                        return;
                    }
                },
            });
        });
    </script>
    <!-- End custom js for this page-->
</body>

</html>