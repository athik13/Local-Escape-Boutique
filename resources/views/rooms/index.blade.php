@extends('layouts.app')

@section('body_id')
id="accomodation_page" @endsection

@section('content')
        
        <!-- start breadcrumb -->
        <section class="breadcrumb_main_area margin-bottom-80">
            <div class="container-fluid">
                <div class="row">
                    <div class="breadcrumb_main nice_title">
                        <h2>Our Rooms</h2>
                    </div>
                </div>
            </div>            
        </section>
        <!-- end breadcrunb -->
        
        
        <!-- start Hotel Facilities section -->
        <section class="select_room_area padding-top-5 margin-bottom-90">
            <div class="container">
                <div class="row">
                    <div class="select_room clearfix">
                        <div class="section_title nice_title text-center">
                            <h3>Our Recommendation</h3>
                        </div>
                        <div class="select_room_content clearfix">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="room_thumb">
                                    <a href="{{ url('rooms/detail') }}"><img src="img/room-thumb-one.jpg" alt=""></a>
                                    <div class="room_details">
                                        <div class="about_room floatleft">
                                            <div class="room_quality floatleft">
                                                <h5>Deluxe Room</h5>
                                            </div>
                                            <div class="room_rent floatleft">
                                                <p>$180<span> / night</span></p>
                                            </div>
                                        </div>
                                        <div class="room_block floatright">
                                            <a href="{{ url('rooms/detail') }}" class="btn btn-black">Book</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-sx-12">
                                <div class="room_thumb small_room_thumb margin-bottom-35">
                                    <a href="{{ url('rooms/detail') }}"><img src="img/room-thumb-two.jpg" alt=""></a>
                                    <div class="room_details">
                                        <div class="about_room floatleft">
                                            <div class="room_quality floatleft">
                                                <h5>Deluxe Room</h5>
                                            </div>
                                            <div class="room_rent floatleft">
                                                <p>$180<span> / night</span></p>
                                            </div>
                                        </div>
                                        <div class="room_block floatright">
                                            <a href="{{ url('rooms/detail') }}" class="btn btn-black">Book</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="room_thumb small_room_thumb">
                                    <a href="{{ url('rooms/detail') }}"><img src="img/room-thumb-three.jpg" alt=""></a>
                                    <div class="room_details">
                                        <div class="about_room floatleft">
                                            <div class="room_quality floatleft">
                                                <h5>Deluxe Room</h5>
                                            </div>
                                            <div class="room_rent floatleft">
                                                <p>$180<span> / night</span></p>
                                            </div>
                                        </div>
                                        <div class="room_block floatright">
                                            <a href="{{ url('rooms/detail') }}" class="btn btn-black">Book</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end Hotel Facilities section -->


        <!-- start other detect room section -->
        <section class="other_room_area">
            <div class="container">
                <div class="row">
                    <div class="other_room">
                        <div class="section_title nice_title content-center">
                            <h3>All Rooms</h3>
                        </div>
                        <div class="section_content">
                            <!-- start hotel booking -->
                            <div class="hotel_booking_area">
                                <div class="container">
                                    <div class="hotel_booking margin-bottom-30">
                                        <form id="form1" role="form" action="#" class="">
                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                <div class="room_book border-right-dark-1">
                                                    <h6>Book Your</h6>
                                                    <p>Rooms</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <div class="row">
                                                    <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                        <div class="input-group border-bottom-dark-2">
                                                            <select class="form-control" name="room" id="room">
                                                              <option selected="selected" disabled="disabled">Rooms</option>
                                                              <option value="Single">2 Room</option>
                                                              <option value="Double">3 Room</option>
                                                              <option value="Deluxe">4 Room</option>
                                                            </select>               
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                        <div class="input-group border-bottom-dark-2">
                                                            <select class="form-control" name="room" id="adult">
                                                              <option selected="selected" disabled="disabled">Rating</option>
                                                              <option value="Single">One Star</option>
                                                              <option value="Double">Two Star</option>
                                                              <option value="Deluxe">three Star</option>
                                                            </select>               
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                        <div class="input-group border-bottom-dark-2">
                                                            <select class="form-control" name="room" id="child">
                                                              <option selected="selected" disabled="disabled">Beds</option>
                                                              <option value="Single">Single Bed</option>
                                                              <option value="Double">3 Beds</option>
                                                              <option value="Deluxe">5 Beds</option>
                                                            </select>               
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 clearfix">
                                                <a class="btn btn-warning btn-md floatright">Search</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end hotel booking -->

                            <!-- start single room details -->
                            <div class="accomodation_single_room">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            <div class="single_room_wrapper clearfix padding-bottom-30">
                                                <figure class="uk-overlay uk-overlay-hover">
                                                    <div class="room_media">
                                                        <a href="{{ url('rooms/detail') }}"><img src="img/room-image-ten.jpg" alt=""></a>
                                                    </div>
                                                    <div class="room_title border-bottom-whitesmoke clearfix">
                                                            <div class="left_room_title floatleft">
                                                                <h6>Deluxe Room</h6>
                                                                <p>$130/ <span>night</span></p>
                                                            </div>
                                                            <div class="left_room_title floatright">
                                                                <a href="{{ url('rooms/detail') }}" class="btn">Book</a>
                                                            </div>
                                                        </div>
                                                    <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                        <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                            <h5>Elegant Room</h5>
                                                            <p>
                                                                Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                                            </p>
                                                            <p>
                                                                Phasellus accumsan urna vitae molestie interdum.
                                                            </p>
                                                            <div class="single_room_cost clearfix">
                                                                <div class="floatleft">
                                                                    <p>$130/ <span>night</span></p>
                                                                </div>
                                                                <div class="floatright">
                                                                    <a href="{{ url('rooms/detail') }}" class="btn">Book</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end single room details -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- end other detect room section -->

@endsection
