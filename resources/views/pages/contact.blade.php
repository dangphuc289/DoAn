@extends('layout')
@section('content')

<div style="width:1050px;" id="contact-page" class="container">
    <div class="bg">
        <div style="margin-bottom: 100px;" class="row">    		
            <div class="col-sm-10">    			   			
                <h2 class="title text-center">Liên Hệ Với Chúng Tôi</h2>    			    				    				
                <div id="gmap" class="contact-map">
                {{-- <img style="width:900px; height: 500px;" src="{{URL::to('public/frontend/images/a22.jpg')}}" alt="" /> --}}
                <iframe
                    width="900"
                    height="500"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9580368999004!2d105.77980121489776!3d21.034364985995314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b52ac3055d%3A0xe43166ef08929729!2zMjcgWHXDom4gVGjhu6d5LCBE4buLY2ggVuG7jW5nIEjhuq11LCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1680440624273!5m2!1svi!2s"
                    allowfullscreen>
                    </iframe>

                </div>
            </div>			 		
        </div>  

        <div class="row">  	
            <div class="col-sm-6">
                <div class="contact-form">
                    <h2 class="title text-center">Liên Lạc</h2>
                    <div class="status alert alert-success" style="display: none"></div>
                    <form id="main-contact-form" class="contact-form row" name="contact-form">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Họ và tên">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" name="subject" class="form-control" required="required" placeholder="Số điện thoại">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Lời nhắn của bạn"></textarea>
                        </div>                        
                        <div class="form-group col-md-12">
                            <input type="submit" name="submit" class="btn btn-primary pull-right" value="Gửi">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact-info">
                    <h2 class="title text-center">Thông Tin Liên Lạc</h2>
                    <address>
                        <p>Shop my pham</p>
                        <p>Số 27, Xuân Thủy, Cầu giấy, Hà Nội</p>
                        <p>Việt Nam</p>
                        <p>Mobile: +84 328 652 001</p>
                        <p>Fax: 1-714-252-0026</p>
                        <p>Email: dangdinhphuc2809@gmail.com</p>
                    </address>
                    <div class="social-networks">
                        <h2 class="title text-center">Mạng Xã Hội</h2>
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/DangPhuc.289/" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/A_Phuc_i" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/@n5-anginhphuc855/featured" target="_blank"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>    			
        </div>  
    </div>	
</div>

@endsection