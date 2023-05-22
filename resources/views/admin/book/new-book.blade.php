@extends('layouts.admin') 

@section('content')
<div class="row">
    @csrf
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Thêm sách</h4>
                <form
                    class="forms-sample"
                    onsubmit="submitForm(event)"
                >
                    <div class="form-group">
                        <label for="name"
                            >Tên sách</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="name"
                        />
                    </div>

                    <div class="form-group">
                        <label for="code">Mã</label>
                        <input
                            type="text"
                            class="form-control"
                            id="code"
                        />
                    </div>

                    <div class="form-group">
                        <label for="category"
                            >Danh mục</label
                        >
                        <select id="category" class="form-control form-control-lg">
                            @if(isset($list_categories))
                                @foreach($list_categories as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            @endif
						</select><br>
                    </div>

                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input
                            type="file"
                            name="img[]"
                            class="file-upload-default"
                        />
                        <div
                            class="input-group col-xs-12"
                        >
                            <input
                                type="text"
                                class="form-control file-upload-info"
                                disabled
                                placeholder="Upload Image"
                            />
                            <span
                                class="input-group-append"
                            >
                                <button
                                    class="file-upload-browse btn btn-primary text-white"
                                    type="button"
                                >
                                    Upload
                                </button>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description"
                            >Mô tả</label
                        >
                        <textarea
                            class="form-control"
                            rows="10"
                            id="description"
                        >
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="author"
                            >Tác giả</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="author"
                        />
                    </div>

                    <div class="form-group">
                        <label for="publisher"
                            >Nhà xuất bản</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="publisher"
                        />
                    </div>

                    <div class="form-group">
                        <label for="yearOfPublication"
                            >Năm xuất bản</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="yearOfPublication"
                        />
                    </div>

                    <div class="form-group">
                        <label for="totalPage"
                            >Số trang</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="totalPage"
                        />
                    </div>

                    <div class="form-group">
                        <label for="size"
                            >Kích thước</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="size"
                        />
                    </div>

                    <div class="form-group">
                        <label for="supplier"
                            >Nhà cung cấp</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="supplier"
                        />
                    </div>

                    <div class="form-group">
                        <label for="typeCover"
                            >Loại bìa</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="typeCover"
                        />
                    </div>

                    <div class="form-group">
                        <label for="price"
                            >Giá gốc</label
                        >
                        <input
                            type="number"
                            class="form-control"
                            id="price"
                        />
                    </div>

                    <div class="form-group">
                        <label for="priceSale"
                            >Giá bán</label
                        >
                        <input
                            type="number"
                            class="form-control"
                            id="priceSale"
                        />
                    </div>

                    <div class="form-group">
                        <label for="quantity"
                            >Số lượng</label
                        >
                        <input
                            type="number"
                            class="form-control"
                            id="quantity"
                        />
                    </div>

                    <div class="form-group">
                        <label for="status"
                            >Trạng thái</label
                        >
						<select class="form-control form-control-lg" id="status">
							<option value="1">Công khai</option>
							<option value="0">Riêng tư</option>
						</select><br>
                    </div>

                    <button
                        type="submit"
                        class="btn btn-primary me-2 text-white btn-save"
                    >
                        Thêm mới
                    </button>
                    <a
                        href="/admin/book"
                        class="btn btn-danger text-white"
                        >Hủy</a
                    >
                </form>
            </div>
        </div>
    </div>
</div>
@endsection('content')

@section('js')
<script src="{{ asset('assets/template/js/file-upload.js') }}"></script>
<script type="text/javascript">
    function submitForm(event) {
        event.preventDefault();
    }
    $(".btn-save").click(function () {
        var form_data = new FormData();
        var name = $("#name").val();
        var image = $("input[type=file]")[0].files[0];
        var code = $("#code").val();
        var author = $("#author").val();
        var description = $("#description").val();
        var category_id = $("#category").val();
        var quantity = $("#quantity").val();
        var price = $("#price").val();
        var price_sale = $("#priceSale").val();
        var status = $("#status").val();
        var publisher = $("#publisher").val();
        var yearOfPublication = $("#yearOfPublication").val();
        var totalPage = $("#totalPage").val();
        var size = $("#size").val();
        var supplier = $("#supplier").val();
        var typeCover = $("#typeCover").val();
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
        if (!author) {
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
        if (!image) {
            swal({
                title: "Lỗi!",
                text: "Hình ảnh là bắt buộc",
                icon: "warning",
                buttons: true,
                buttons: ["Ok"],
                timer: 3000,
            });
            return;
        }
        if (!publisher) {
            swal({
                title: "Lỗi!",
                text: "Nhà xuất bản",
                icon: "warning",
                buttons: true,
                buttons: ["Ok"],
                timer: 3000,
            });
            return;
        }
        if (!yearOfPublication) {
            swal({
                title: "Lỗi!",
                text: "Năm xuất bản",
                icon: "warning",
                buttons: true,
                buttons: ["Ok"],
                timer: 3000,
            });
            return;
        }
        if (!totalPage) {
            swal({
                title: "Lỗi!",
                text: "Số trang",
                icon: "warning",
                buttons: true,
                buttons: ["Ok"],
                timer: 3000,
            });
            return;
        }
        if (!size) {
            swal({
                title: "Lỗi!",
                text: "Kích thước",
                icon: "warning",
                buttons: true,
                buttons: ["Ok"],
                timer: 3000,
            });
            return;
        }
        if (!supplier) {
            swal({
                title: "Lỗi!",
                text: "Nhà cung cấp",
                icon: "warning",
                buttons: true,
                buttons: ["Ok"],
                timer: 3000,
            });
            return;
        }
        if (!typeCover) {
            swal({
                title: "Lỗi!",
                text: "Loại bìa",
                icon: "warning",
                buttons: true,
                buttons: ["Ok"],
                timer: 3000,
            });
            return;
        }
        form_data.append("_token", "{{csrf_token()}}");
        form_data.append("name", name.trim());
        form_data.append("image", image);
        form_data.append("code", code.trim());
        form_data.append("author", author.trim());
        form_data.append("description", description.trim());
        form_data.append("category_id", +category_id);
        form_data.append("quantity", +quantity);
        form_data.append("price_sale", +price_sale);
        form_data.append("price", +price);
        form_data.append("status", +status);
        form_data.append("publisher", publisher);
        form_data.append("yearOfPublication", yearOfPublication);
        form_data.append("totalPage", +totalPage);
        form_data.append("size", size);
        form_data.append("supplier", supplier);
        form_data.append("typeCover", typeCover);
        $.ajax({
            type: "post",
            url: "/admin/book",
            data: form_data,
            dataType: "json",
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.is === "success") {
                    setTimeout(function () {
                        window.location.href = "/admin/book";
                    }, 1600);
                    swal({
                        title: "Hoàn thành!",
                        text: "Thêm sách thành công",
                        icon: "success",
                        buttons: true,
                        buttons: ["Ok"],
                        timer: 1500,
                    });
                }
                if (response.is === "unsuccess") {
                    swal({
                        title: "Lỗi!",
                        text: "Không thêm được sách",
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
@endsection('js')
