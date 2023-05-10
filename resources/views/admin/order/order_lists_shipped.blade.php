@extends('layouts.admin') @section('content')
<section class="content">
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Đơn hàng đang giao</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="table-responsive">
        <table id="list-orders" class="table table-bordered table-striped" style="margin-top : 10px;">
          <thead>
            <tr>
              <th class="col-sm-1" style="text-align : center;">Mã đơn hàng</th>
              <th class="col-sm-2" style="text-align : center;">Số điện thoại <br> (Thông tin chi tiết)</th>
              <th class="col-sm-2" style="text-align : center;">Thời gian đặt hàng</th>
              <th class="col-sm-2" style="text-align : center;">Tổng thanh toán</th>
              <th class="col-sm-2" style="text-align : center;">Phê duyệt đơn hàng</th>
              <th class="col-sm-3" style="text-align : center;">Giao hàng thành công</th>
              <th class="col-sm-1" style="text-align : center;">Hủy đơn hàng</th>
            </tr>
          </thead>
          <tbody>
            @if(isset($orders))
            @foreach ($orders as $value)
            <tr>
              <td class="col-sm-1" style="text-align : center;"><a href="/admin/order/{{$value->order_id}}">{{$value->order_id}}</a></td>
              <td class="col-sm-2" style="text-align : center;">
                <button data-id="{{$value->user_id}}" type="button" class="btn btn-success btn-show">
                  {{$value->phone}}
                </button>
              </td>
              <td class="col-sm-2" style="text-align : center;">{{$value->created_at}}</td>

              <td class="col-sm-2" style="text-align : center;">{{number_format(($value->amount+$value->score_awards)*1000 ,0 ,'.' ,'.')}} VND</td>
              <td class="col-sm-2" style="text-align : center;">
                {{$value->manager}}
              </td>
              <td class="col-sm-2" style="text-align : center;">
                @if($value->status == 1)
                <button data-id="{{$value->id}}" type="button" class="btn btn-info btn-update">
                  Xác nhận
                </button>
                @endif
              </td>
              <td class="col-sm-1" style="text-align : center;">
                <button data-id="{{$value->id}}" type="button" title="Hủy" class="btn btn-danger btn-cancel">
										<i class="fa fa-share-square"></i>
								</button>
              </td>
            </tr>              
          </tr>
          @endforeach
          @endif
        </tbody>
      </table>
    </div>
    <!-- /.table-responsive -->
  </div>

  <!-- modal view -->
  <div class="col-xs-12">
    <div class="modal fade" id="showUser" tabindex="-1" role="dialog" aria-labelledby="formUser" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius : 10px;">
          <div class="modal-header">
            <h4 class="modal-title">Thông tin khách hàng </h4>
          </div>
          <form action="" id="">
            @csrf
            <div class="modal-body">

              <input name="name" type="text" class="form-control" id="showName" placeholder="Tên tài khoản" disabled><br>

              <input name="email" type="text" class="form-control" id="showEmail" placeholder="Email" disabled><br>

              <input name="phone" type="text" class="form-control" id="showPhone" placeholder="Phone" disabled><br>

              <input name="address" type="text" class="form-control" id="showAddress" placeholder="Địa chỉ" disabled><br>

              <input name="created_at" type="text" class="form-control" id="showCreatedAt" placeholder="Tham gia" disabled><br>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- modal view -->
  <div class="col-xs-12">
    <div class="modal fade" id="showMessage" tabindex="-1" role="dialog" aria-labelledby="formMessage" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius : 10px;">
          <div class="modal-header">
            <h4 class="modal-title">Thông báo</h4>
          </div>
           <div class="modal-body text-center">
                <p style="font-size: 16px;">Khách vãng lai, chưa đăng kí tài khoản trên cửa hàng!</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
            </div>
        </div>
      </div>
    </div>
  </div>

   <!-- modal view -->
   <div class="col-xs-12">
    <div class="modal fade" id="showNote" tabindex="-1" role="dialog" aria-labelledby="formNote" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius : 10px;">
          <div class="modal-header">
            <h4 class="modal-title">Ghi chú</h4>
          </div>
          <form action="" id="">
            @csrf
            <div class="modal-body">
              <input type="hidden" class="form-control" id="getId"><br>
              <textarea name="note" type="text" class="form-control" id="getNote" placeholder="Lý do hủy đơn hàng ..." rows="5" cols="10"></textarea><br>
						</textarea>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-success btn-save" data-dismiss="modal">Lưu lại</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
  <div class="box-footer clearfix">
    <a href="/admin/order" class="btn btn-sm btn-default btn-flat pull-right">Xem toàn bộ đơn hàng</a>
  </div>
  <!-- /.box-footer -->
</div>
@endsection

@section('js')
<script>
  $(document).ready(function() {
    $('#list-orders').DataTable( {
      "lengthMenu": [[30, 50, 100, 500, -1], [30, 50, 100, 500, "All"]],
      "order": [[2, 'desc']]
    } );
  } );
</script>

<script type="text/javascript">
  // show
  $('.btn-show').click(function(){
    var id = $(this).attr('data-id');
    if(id != null && id != ''){
      $.ajax({
      type : "get",
      url : "/admin/user/member/" + id,
      data : {
        _token :$('[name="_token"]').val(),
      },
      success : function(response){
        $('#showName').val(response.name),
        $('#showEmail').val(response.email),
        $('#showPhone').val(response.phone_number),
        $('#showAddress').val(response.address),
        $('#showCreatedAt').val(response.created_at)
      }
    });

      $('#showUser').modal('show');
    }
    else{
      $('#showMessage').modal('show');
    }
  });

  // update state order 
  $('.btn-update').click(function(){
    var id = $(this).attr('data-id');
    $.ajax({
      type: 'put',
      url: '/admin/order/' + id,
      data:{
        _token :$('[name="_token"]').val(),
        id : id
      },
      success: function(response){
        if(response.is === 'success'){
          alert(response.complete);
        }
        
        if(response.is === 'unsuccess'){
          alert(response.uncomplete);
        }
      }
    });

    setTimeout(function () {
      window.location.href="/admin/order_shipped";
    },500);
  });

  // cancel
  $('.btn-cancel').click(function(){
    if(confirm('Bạn thực sự muốn hủy ?')){
      var _this = $(this);
      var id = $(this).attr('data-id');
      $('#getId').val(id);
      $('#showNote').modal('show');
    }
  });

  // save 
  $('.btn-save').click(function(){
      var id = $('#getId').val();
      var notes = $('#getNote').val();
      if((notes.trim()).length > 0){
        $.ajax({
        type: 'put',
        url: '/admin/order/cancel/' + id,
        data:{
          _token : $('[name="_token"]').val(),
          id : id,
          notes : notes
        },
        success: function(response){
          if(response.is === 'success'){
              location.reload();
          }else{
            alert('Đã có lỗi xảy ra!');
          }
        }
      });
      }
      else{
        alert("Cần có lý do hủy đơn hàng!");
      }
  });
</script>
@endsection('js')
