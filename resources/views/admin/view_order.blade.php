@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Thông Tin Khách Hàng
        </div>
               
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                <tr>                   
                    <th>Tên Khách Hàng</th>
                    <th>Địa Chỉ</th>
                    <th>Số Điện Thoại</th>
                </tr>
                </thead>
                <tbody>                
                    <tr>
                        <td>{{$nguoinhan->shipping_name}}</td>
                        <td>{{$nguoinhan->shipping_address}}</td>   
                        <td>{{$nguoinhan->shipping_phone}}</td>                        
                    </tr>
                </tbody>
            </table>
        </div>   
    </div>
</div>

<br><br>

<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Chi Tiết Đơn Hàng
        </div>
               
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                <tr>                   
                    <th>Tên Sản Phẩm</th>
                    <th>Số Lượng</th>
                    <th>Giá</th>
                    <th>Tổng Tiền</th>
                </tr>
                </thead>
                <tbody>     
                    @foreach($hang_theo_id as $key => $hang)         
                        <tr>
                            <td>{{ $hang->product_name }}</td>
                            <td>{{ $hang->product_sales_quantity }}</td>
                            <td>{{ number_format($hang->product_price).' '.'VNĐ' }}</td>
                            <td>{{ number_format($hang->product_price * $hang->product_sales_quantity).' '.'VNĐ' }}</td>                          
                        </tr>
                    @endforeach

                    <tr>
                        <td>Tổng: {{ number_format($hang->order_total).' '.'VNĐ'  }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            {{-- @foreach($hang_theo_id as $key => $or) --}}
                                <form action="{{URL::to('/update-stt')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="order_id" value="{{ $hang->order_id }}">
                                    <select name="order_status" style="height: 25px; width:200px;">
                                        <option value="">Chọn trạng thái</option>
                                        <option value="1">Đang chờ xử lý</option>
                                        <option value="2">Đang giao hàng</option>
                                        <option value="3">Giao hàng thành công</option>
                                        <option value="4">Hủy đơn hàng</option>
                                    </select>
                                    <button type="submit">Cập nhật</button>
                                </form>
                            {{-- @endforeach --}}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="position: fixed; right:50px;" target="_blank" href="{{url('/print-order/'.$hang->order_id)}}">In Đơn Hàng</a>
        </div>   
    </div>
</div>
@endsection