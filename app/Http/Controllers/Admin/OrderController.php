<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.order.order_lists', ['orders' => $orders]);
    }

    public function pending()
    {
        $orders = Order::where('status', 0)->get();
        return view('admin.order.order_lists_pending', ['orders' => $orders]);
    }

    public function shipped()
    {
        $orders =  DB::table('orders')
            ->select('orders.*', 'admins.name as manager')
            ->join('admins', 'admins.id', '=', 'orders.user_id_status_pending')
            ->where('orders.status', 1)->get();
        return view('admin.order.order_lists_shipped', ['orders' => $orders]);
    }

    public function delivered()
    {
        $orders =  DB::table('orders')
            ->select('orders.*', 'admins.name as manager')
            ->join('admins', 'admins.id', '=', 'orders.user_id_status_shipped')
            ->where('orders.status', 2)->get();
        return view('admin.order.order_lists_delivered', ['orders' => $orders]);
    }

    public function cancel()
    {
        $orders =  DB::table('orders')
            ->select('orders.*', 'admins.name as manager')
            ->join('admins', 'admins.id', '=', 'orders.user_id_status_cancel')
            ->where('orders.status', 3)->get();

        return view('admin.order.order_lists_cancel', ['orders' => $orders]);
    }

    public function show($order_id)
    {
        $order = Order::where('order_id', $order_id)->first();
        $order_details = OrderDetail::where('order_id', $order_id)->get();

        return view('admin.order.order_detail', ['order' => $order, 'order_details' => $order_details]);
    }

    public function update(Request $request, $id)
    {
        if (Auth::guard('admin')->check()) {
            $data = $request->all();
            $order = Order::find($data['id']);
            if ($order->status == 0) {
                $user_id_status_pending = Auth::guard('admin')->user()->id;
                $order->user_id_status_pending = $user_id_status_pending;
                $order->status = 1;
            } else {
                if ($order->status == 1) {
                    $user_id_status_shipped = Auth::guard('admin')->user()->id;
                    $order->user_id_status_shipped = $user_id_status_shipped;
                    $order->status = 2;

                    $products_order_detail = DB::table('order_details')
                        ->where('order_id', $order->order_id)
                        ->get();

                    foreach ($products_order_detail as $item) {
                        $product = DB::table('products')
                            ->select('bought')
                            ->where('id', $item->product_id)
                            ->first();

                        $bought = $product->bought + $item->quantity;

                        DB::table('products')->where('id', $item->product_id)
                            ->update([
                                'bought' => $bought
                            ]);
                    }

                    if ($order->user_id) {
                        $user = User::find($order->user_id);
                        if ($user) {
                            $award = (int) (($order->amount + $order->score_awards) / 50);
                            // update score_awards for user
                            $user->score_awards = $user->score_awards + $award;
                            // update money_payment_transactions for user
                            $user->money_payment_transactions = $user->money_payment_transactions + $order->amount;
                            $user->save();
                        }
                    }
                } else {
                    if ($order->status == 2) {
                        $user_id_status_delivered = Auth::guard('admin')->user()->id;
                        $order->user_id_status_delivered = $user_id_status_delivered;
                        $order->status = 3;
                    }
                }
            }

            $flag = $order->save();
        }

        if ($flag) {
            return response()->json(['is' => 'success', 'complete' => 'Đã cập nhật đơn hàng!']);
        }
        return response()->json(['is' => 'unsuccess', 'uncomplete' => 'Đã xảy ra lỗi!']);
    }

    public function note($id)
    {
        $order = Order::find($id);
        return $order;
    }

    public function cancelOrder(Request $request, $id)
    {
        $data = $request->all();
        $order = Order::find($data['id']);

        $products_order_detail = DB::table('order_details')
            ->where('order_id', $order->order_id)
            ->get();

        foreach ($products_order_detail as $item) {
            $product = DB::table('products')
                ->select('quantity')
                ->where('id', $item->product_id)
                ->first();

            $quantity = $product->quantity + $item->quantity;

            DB::table('products')->where('id', $item->product_id)
                ->update([
                    'quantity' => $quantity
                ]);
        }

        $order_detail = DB::table('order_details')->where('order_id', $order->order_id)
            ->update([
                'status' => 0
            ]);

        if ($order->user_id) {
            $score = DB::table('users')->select('score_awards')->where('id', $order->user_id)->first();
            if ($score) {
                DB::table('users')->where('id', $order->user_id)
                    ->update([
                        'score_awards' => $score->score_awards + $order->score_awards,
                    ]);
            }
        }

        if (Auth::guard('admin')->check()) {
            $user_id_status_cancel = Auth::guard('admin')->user()->id;
            $order->notes = $data['notes'];
            $order->user_id_status_cancel = $user_id_status_cancel;
            $order->status = 3;
            $flag = $order->save();
        }

        if ($flag) {
            return response()->json(['is' => 'success', 'complete' => 'Đơn hàng vừa bị hủy!']);
        }
        return response()->json(['is' => 'unsuccess', 'uncomplete' => 'Đơn hàng chưa bị hủy!']);
    }

    public function destroy($id)
    {
        Order::findOrFail($id)->delete();
    }
}
