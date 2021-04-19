@extends('index')
@section('main')
<div class="main-check-out">
        <div class="check-out">
            <div class="container">


                <div class="col-md-12">
                    <div class="ch-out-add">

                        <div class=" check-out-product check-pd">
                            <div>
                                <span>
                                    Giỏ hàng của bạn có ( 2 sản phẩm )
                                </span>
                            </div>
                            <div class="info-product">
                               <a href="#">Mua sản phẩm khác >></a>
                            </div>
                        </div>
                        <div class="check-out-product">
                            <div class="check-pd">
                                <div class="check-put-img">
                                    <a class="img-check-out">
                                        <img src="./img/35819_laptop_dell_inspiron_3581_v5i3027w_1_2.png" alt=""
                                            class="check-img">
                                    </a>
                                </div>
                                <div class="img-check-out ">
                                    <div class="check-out-name check-kc-name">
                                        <span>
                                            Asus Vivobook X407UA-BV537T/Core i3-7020U/4GB/1TB/WIN10
                                        </span>
                                    </div>
                                </div>
                                <div class="img-check-out">
                                    <div class="check-out-name">
                                        <span class="bnt-value">
                                            <i>-</i>
                                        </span>
                                        <input class="bnt-value2" type="text" readonly="readonly" value="1"
                                            placeholder="0">
                                        <span class="bnt-value"><i>+</i></span>
                                    </div>
                                </div>
                                <div class="img-check-out ">
                                    <div class="check-out-name check-kc-price">
                                        <span>
                                            12.000.000 vnd
                                        </span>
                                    </div>
                                </div>

                                <span class="clearn-pd">x</span>

                            </div>
                        </div>
                        <div class="check-out-product">
                            <div class="check-pd">
                                <div class="check-put-img">
                                    <a class="img-check-out">
                                        <img src="./img/35819_laptop_dell_inspiron_3581_v5i3027w_1_2.png" alt=""
                                            class="check-img">
                                    </a>
                                </div>
                                <div class="img-check-out ">
                                    <div class="check-out-name check-kc-name">
                                        <span>
                                            Asus Vivobook X407UA-BV537T/Core i3-7020U/4GB/1TB/WIN10
                                        </span>
                                    </div>
                                </div>
                                <div class="img-check-out">
                                    <div class="check-out-name">
                                        <span class="bnt-value">
                                            <i>-</i>
                                        </span>
                                        <input class="bnt-value2" type="text" readonly="readonly" value="1"
                                            placeholder="0">
                                        <span class="bnt-value"><i>+</i></span>
                                    </div>
                                </div>
                                <div class="img-check-out ">
                                    <div class="check-out-name check-kc-price">
                                        <span>
                                            12.000.000 vnd
                                        </span>
                                    </div>
                                </div>

                                <span class="clearn-pd">x</span>

                            </div>
                        </div>
                        <div class="check-out-product">
                            <div class="check-pd">
                                <div class="check-put-img">
                                    <a class="img-check-out">
                                        <img src="./img/35819_laptop_dell_inspiron_3581_v5i3027w_1_2.png" alt=""
                                            class="check-img">
                                    </a>
                                </div>
                                <div class="img-check-out ">
                                    <div class="check-out-name check-kc-name">
                                        <span>
                                            Asus Vivobook X407UA-BV537T/Core i3-7020U/4GB/1TB/WIN10
                                        </span>
                                    </div>
                                </div>
                                <div class="img-check-out">
                                    <div class="check-out-name">
                                        <span class="bnt-value">
                                            <i>-</i>
                                        </span>
                                        <input class="bnt-value2" type="text" readonly="readonly" value="1"
                                            placeholder="0">
                                        <span class="bnt-value"><i>+</i></span>
                                    </div>
                                </div>
                                <div class="img-check-out ">
                                    <div class="check-out-name check-kc-price">
                                        <span>
                                            12.000.000 vnd
                                        </span>
                                    </div>
                                </div>

                                <span class="clearn-pd">x</span>

                            </div>
                        </div>
                        <div class=" check-out-product check-pd">
                            <div class="check-sum">
                                <span>
                                    Tổng Tiền:
                                </span>
                            </div>
                            <div class="check-sum1">
                                <span>
                                    20.000.000 đ
                                </span>
                            </div>
                        </div>
                        <div class=" check-out-product check-pd">
                            <div class="">
                                
                                <form action="" method="POST" role="form">
                                    <legend class="info-kh">Thông tin khách hàng </legend>
                                
                                    <div class="form-group">
                                        <label for="">Họ tên</label>
                                        <input type="text" class="form-control" id="" placeholder="Nhập họ và tên...">
                                        <label for="">Số điện thoại</label>
                                        <input type="text" class="form-control" id="" placeholder="Nhập số điện thoại...">
                                        <label for="">Địa chỉ</label>
                                        <input type="text" class="form-control" id="" placeholder="Nhập địa chỉ...">
                                    </div>
                                
                                    
                                
                                    <button type="submit" class="btn btn-primary btn-purchase">Mua hàng</button>
                                    <button type="submit" class="btn btn-primary btn-purchase">Hủy</button>
                                </form>
                                
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection