@extends('layouts.admin') @section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Đơn hàng đang chờ</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @csrf
                    <table
                        id="list-users"
                        class="table table-bordered table-striped"
                        style="margin-top: 10px"
                    >
                        <thead>
                            <tr>
                                <th class="col-sm-1">Mã đơn hàng</th>
                                <th class="col-sm-2">Email</th>
                                <th class="col-sm-2">Số điện thoại</th>
                                <th class="col-sm-2">Họ và tên</th>
                                <th class="col-sm-2">Thời gian đặt hàng</th>
                                <th class="col-sm-1">Tổng thanh toán</th>
                                <th class="col-sm-2">Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php Carbon\Carbon::setLocale('vi'); @endphp
                            @if(isset($logs)) @foreach ($logs as $value)
                            <tr>
                                <td class="col-sm-2">{{$value->name}}</td>
                                <td class="col-sm-2">{{$value->ip}}</td>
                                <td class="col-sm-2">{{$value->subject}}</td>
                                <td class="col-sm-2">{{$value->url}}</td>
                                <td class="col-sm-1">{{$value->method}}</td>
                                <td class="col-sm-1">
                                    {{Carbon\Carbon::parse($value->updated_at)->diffForHumans()}}
                                </td>
                                <td class="col-sm-2" style="text-align: center">
                                    <button
                                        data-id="{{$value->id}}"
                                        type="button"
                                        title="Xóa"
                                        class="btn btn-danger btn-delete"
                                    >
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="col-sm-2">Tên tài khoản</th>
                                <th class="col-sm-2">Địa chỉ IP</th>
                                <th class="col-sm-2">Thông điệp</th>
                                <th class="col-sm-2">URL</th>
                                <th class="col-sm-1">Phương thức</th>
                                <th class="col-sm-1">Thời gian</th>
                                <th class="col-sm-2">Hành động</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

@endsection @section('js')
<script>
    $(document).ready(function () {
        $("#list-users").DataTable({
            lengthMenu: [
                [25, 50, 100, 500, -1],
                [25, 50, 100, 500, "All"],
            ],
            order: [[1, "asc"]],
        });
    });
</script>
<script type="text/javascript">
    // delete
    $(".btn-delete").click(function () {
        if (confirm("Bạn có muốn xóa không?")) {
            var _this = $(this);
            var id = $(this).attr("data-id");
            $.ajax({
                type: "delete",
                url: "/admin/user/tracking/" + id,
                data: {
                    _token: $('[name="_token"]').val(),
                },
                success: function (response) {
                    _this.parent().parent().remove();
                },
            });
        }
    });
</script>
@endsection('js')
