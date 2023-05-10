@extends('layouts.admin') @section('content')
<section class="content">
  @if(isset($order) && isset($order_details))
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Thông tin đơn hàng</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i>  Pharma Kids
                <small class="pull-right">
                Date : 
                  @if(isset($order))
                  {{$order->created_at}}<br>
                  @endif
                </small>
              </h2>
            </div>
            <!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              From
              <address>
                <strong>Ban quản lý</strong><br>
                Nhà thuốc Nhi Khoa<br>
                Điện thoại:  0704.665.668 hoặc 0989.999.911<br>
                Email:  nhathuocnhikhoa@gmail.com
              </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
              To
              <address>
                @if(isset($order))
                <strong>{{$order->name}}</strong><br>
                {{$order->address}}<br>
                Điện thoại: {{$order->phone}}<br>
                Email: {{$order->email}}
                @endif
              </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <br>
              <b>Mã đơn hàng:</b> @if(isset($order)) {{$order->order_id}} @endif<br>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Sản phẩm</th>
                    <th>Mã sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá gốc (VNĐ)</th>
                    <th>Giá bán (VNĐ)</th>
                    <th>Giảm (%)</th>
                    <th>Tạm tính (VNĐ)</th>
                  </tr>
                </thead>
                <tbody>
                @if(isset($order_details))
                  @foreach($order_details as $item)
                  <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->code}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>{{number_format($item->price*1000 ,0 ,'.' ,'.')}}</td>
                    <td>{{number_format($item->price_sale*1000 ,0 ,'.' ,'.')}}</td>
                    <td>{{floor(($item->price - $item->price_sale)/($item->price)*100)}}%</td>
                    <td>{{number_format($item->price_sale*$item->quantity*1000 ,0 ,'.' ,'.')}}</td>
                  </tr>
                  @endforeach
                @endif
                </tbody>
              </table>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          @if(isset($order) && $order->image != null)
          <div class="row" style="margin-bottom:20px;">
            <div class="col-xs-4" style="box-sizing : border-box">
                <p class="lead">Đơn thuốc đính kèm :</p>
                <div class="col-xs-12">
                  <a target="_blank" href="{{ url('images/prescriptions/'.$order->image) }}" title="Xem đơn thuốc">
                      <img style="width: 100%;" src="{{url('images/prescriptions/'.$order->image)}}" alt="">
                  </a>
                </div>
            </div>
            <!-- accepted payments column -->
            <div class="col-xs-4" style="box-sizing : border-box">
              <p class="lead">Phương thức thanh toán (Hỗ trợ)</p>
              <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                Thanh toán bằng tiền mặt khi giao hàng
              </p>
              <p class="lead">Phương thức thanh toán (Chưa hỗ trợ)</p>
              <img src="../../dist/img/credit/visa.png" alt="Visa">
              <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
              <img src="../../dist/img/credit/american-express.png" alt="American Express">
              <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

              <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                Thanh toán điện tử qua cổng thanh toán Ngân lượng
              </p>

            </div>
            <!-- /.col -->
            <div class="col-xs-4">

              <div class="table-responsive">
                <table class="table">
                @if($order->promotion > 0)
                  <tr>
                    <th style="width:50%">Khuyến mại đơn hàng:</th>
                    <td>{{$order->promotion}} %</td>
                  </tr>
                @endif
                  <tr>
                    <th>Thành tiền (Đã bao gồm VAT):</th>
                    <td>
                      {{number_format(($order->amount+$order->score_awards)*1000 ,0 ,'.' ,'.')}} <span style="font-weight : 600;">VND</span>
                    </td>
                  </tr>
                @if($order->score_awards > 0)
                  <tr>
                    <th style="width:50%">Thanh toán bằng điểm:</th>
                    <td>{{number_format($order->score_awards*1000 ,0 ,'.' ,'.')}} <span style="font-weight : 600;">VND</td>
                  </tr>
                @endif
                <tr>
                    <th>Số tiền phải thu:</th>
                    <td>
                      {{number_format(($order->amount)*1000 ,0 ,'.' ,'.')}} <span style="font-weight : 600;">VND</span>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
            <!-- /.col -->
          </div>
                    <!-- /.row -->
          @else
          <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
              <p class="lead">Phương thức thanh toán (Hỗ trợ)</p>
              <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                Thanh toán bằng tiền mặt khi giao hàng
              </p>
              <p class="lead">Phương thức thanh toán (Chưa hỗ trợ)</p>
              <img src="../../dist/img/credit/visa.png" alt="Visa">
              <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
              <img src="../../dist/img/credit/american-express.png" alt="American Express">
              <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

              <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                Thanh toán điện tử qua cổng thanh toán Ngân lượng
              </p>
            </div>
            <!-- /.col -->
            <div class="col-xs-6">

              <div class="table-responsive">
                <table class="table">
                @if($order->promotion > 0)
                  <tr>
                    <th style="width:50%">Khuyến mại đơn hàng:</th>
                    <td>{{$order->promotion}} %</td>
                  </tr>
                @endif
                  <tr>
                    <th>Thành tiền (Đã bao gồm VAT):</th>
                    <td>
                      {{number_format(($order->amount+$order->score_awards)*1000 ,0 ,'.' ,'.')}} <span style="font-weight : 600;">VND</span>
                    </td>
                  </tr>
                @if($order->score_awards > 0)
                  <tr>
                    <th style="width:50%">Thanh toán bằng điểm:</th>
                    <td>{{number_format($order->score_awards*1000 ,0 ,'.' ,'.')}} <span style="font-weight : 600;">VND</td>
                  </tr>
                @endif
                <tr>
                    <th>Số tiền phải thu:</th>
                    <td>
                      {{number_format(($order->amount)*1000 ,0 ,'.' ,'.')}} <span style="font-weight : 600;">VND</span>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          @endif

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="javascript:void(0)" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
              <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
              </button>
              <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                <i class="fa fa-download"></i> Generate PDF
              </button>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  @endif
  <!-- /.row -->
</section>

@endsection

@section('js')
<script>
  $(document).ready(function() {
   $('#list-users').DataTable( {
    "lengthMenu": [[25, 50, 100, 500, -1], [25, 50, 100, 500, "All"]],
    "order": [[1, "asc" ]],
  } );
 } );
</script>
<script type="text/javascript">
  // delete
  $('.btn-delete').click(function(){
    if(confirm('Bạn có muốn xóa không?')){
      var _this = $(this);
      var id = $(this).attr('data-id');
      $.ajax({
        type: 'delete',
        url: '/admin/user/tracking/' + id,
        data:{
          _token : $('[name="_token"]').val(),
        },
        success: function(response){
          _this.parent().parent().remove();
        }
      })
    }
  });
</script>
@endsection('js')
