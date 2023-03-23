@extends('layout')
@section('content')

<section id="cart_items">
    <div class="container" style="margin-right: 10px">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="#">Trang chủ</a></li>
              <li class="active">Giỏ hàng</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
    <?php
    $content = Cart::content();
    ?>

            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Hình ảnh</td>
                        <td class="description"></td>
                        <td class="price">Giá</td>
                        <td class="quantity">Số lượng</td>
                        <td class="total">Tổng tiền</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($content as $v_content)
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" height="70" width="60" alt="" /></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{$v_content->name}}</a></h4>
                        </td>
                        <td class="cart_price">
                            <p>{{number_format($v_content->price).' '.'VNĐ'}}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <form action="{{URL::to('/update-cart-quatity')}}" method="POST">
                                    {{ csrf_field() }}
                                    <input class="cart_quantity_input" type="number" min="0" name="cart_quantity" value="{{$v_content->qty}}">
                                    <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
                                    <input type="submit" value="Cập nhật" name="update_qty" class="btl btl-default btl-sm">
                                </form>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">
                                <?php
                                    $subtotal = $v_content->price * $v_content->qty;
                                    echo number_format($subtotal).' '.'vnd';
                                ?>
                            </p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->

<section id="do_action">
    <div style="width: 1050px;" class="container">
        <div class="heading">
            <h3>Bạn thích làm gì tiếp theo?</h3>
            <p>Chọn xem bạn có mã giảm giá hoặc điểm thưởng muốn sử dụng hoặc muốn ước tính chi phí giao hàng của mình.</p>
        </div>
        <div style="height: 500px;" class="row">
            {{-- <div class="col-sm-6">
                <div style="height: 350px;" class="chose_area">
                    <ul class="user_option">
                        <li>
                            <input type="checkbox">
                            <label>Sử dụng mã phiếu giảm giá</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Sử dụng phiêu qua tặng</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Ước tính hàng & Thuế</label>
                        </li>
                    </ul>
                    <ul class="user_info">
                        <li class="single_field">
                            <label>Quốc gia:</label>
                            <select>
                                <option>Việt Nam</option>
                                <option>Bangladesh</option>
                                <option>UK</option>
                                <option>India</option>
                                <option>Pakistan</option>
                                <option>Ucrane</option>
                                <option>Canada</option>
                                <option>Dubai</option>
                            </select>
                            
                        </li>
                        <li class="single_field">
                            <label>Tỉnh:</label>
                            <select>
                                <option>Select</option>
                                <option>Hà nội</option>
                                <option>Hải Phòng</option>
                                <option>Hưng Yên</option>
                                <option>Nam Định</option>
                                <option>Thái Bình</option>
                                <option>Hải Dương</option>
                                <option>Huế</option>
                            </select>
                        
                        </li>
                        <li class="single_field zip-field">
                            <label>Mã Bưu Chính:</label>
                            <input type="text">
                        </li>
                    </ul>
                    <a class="btn btn-default update" href="">Lấy lời trích dẫn</a>
                    <a class="btn btn-default check_out" href="">Tiếp tục</a>
                </div>
            </div> --}}
            <div class="col-sm-6">
                <div style="height: 350px;" class="total_area">
                    <ul>
                        <li>Tổng <span>{{Cart::subtotal(0).' '.'vnd'}}</span></li>
                        <li>Thuế <span>{{Cart::tax(0).' '.'vnd'}}</span></li>
                        <li>Phí Vận Chuyển <span>Free</span></li>
                        <li>Thành Tiền <span>{{Cart::total(0).' '.'vnd'}}</span></li>
                    </ul>

                    <?php
                        use Illuminate\Support\Facades\Session;
                        $user_id = Session::get('user_id');
                        if($user_id != NULL){
                    ?>
                        <a style="margin-left: 40px;" class="btn btn-default check_out" href="{{URL::to('/checkout')}}">Thanh toán</a>
                    <?php
                    } else{
                    ?>
                        <a style="margin-left: 40px;" class="btn btn-default check_out" href="{{URL::to('/login-checkout')}}">Thanh toán</a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection