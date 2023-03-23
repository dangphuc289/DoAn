@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt Kê Đơn Hàng
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <!-- <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                 -->
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <form action="{{URL::to('/search-order')}}" method="POST">
			    {{ csrf_field() }}
          <div class="input-group">
            <input type="text" name="keywords_submit" class="input-sm form-control" placeholder="Search">
            <!-- <span class="input-group-btn">
                <button class="btn btn-sm btn-default" type="button">Go!</button>
            </span> -->
          </div>
        </form>
      </div>
    </div>
    <?php
      use Illuminate\Support\Facades\Session;
      $message=Session::get('message');
      if($message){
      echo '<span style="color:red; margin-left:15px;">',$message,'</span>';
      Session::put('message',null);
      }
      ?>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <!-- <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th> -->
            <th>Tên Người Đặt</th>
            <th>Tổng Giá Tiền</th>
            <th>Tình Trạng</th>
            <th>Chức Năng</th>
          </tr>
        </thead>
        <tbody>
            @foreach($all_order as $key => $order)
            <tr>
                <!-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> -->
                <td>{{ $order->user_name }}</td>
                <td>{{ $order->order_total }}</td>
                <td>{{ $order->order_status }}</td>
                
                <td>
                    <a style="font-size: 20px;" href="{{URL::to('/view-order/'.$order->order_id)}}" class="active" ui-toggle-class="">
                        <i style="margin-right:30px;" class="fa fa-eye text-success text-active"></i>
                    </a>                    
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing max 5 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
        <div>
        {!! $all_order->links() !!}
        </div>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection