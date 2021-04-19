@extends('index')
@section('slide')
<div class="test" >
        <div class="container size-slide "  style=" display: block;">
            <div class="row">
                <div class="col-md-3">
                    <div id="responsive-nav">
                        <!-- NAV -->
                        <ul class="main-nav nav navbar-nav gird-menu">
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Ưu đãi</a></li>
                            <li><a href="#">Laptop</a></li>
                            <li><a href="#">Điện thoại</a></li>
                            <li><a href="#">Loa</a></li>
                            <li><a href="#">Dây sạc</a></li>
                        </ul>
                        <!-- /NAV -->
                    </div>
                </div>
                <div class="col-md-6 max-width">
                    <div id="my-slider" class="carousel slide" data-ride="carcousel">
                        <ol class="carousel-indicators">
                            <li data-target="#my-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#my-slider" data-slide-to="1"></li>
                            <li data-target="#my-slider" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="./img/banner.jpg" alt="fruits" />
                            </div>
                            <div class="item">
                                <img src="./img/banner1.jpg" alt="fruits">
                            </div>
                            <div class="item">
                                <img src="./img/banner2.jpg" alt="fruits">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#my-slider" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#my-slider" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="banner-img">
                        <a href="#" class="image-size">
                            <img src="./img/man.jpg" alt="" width="480" height="314" style="display: block;">
                           </a>
                    </div>
                    <div class="banner-img">
                        
                           <a href="#" class="image-size">
                            <img src="./img/cauhinh3.jpg" alt="" width="480" height="314" style="display: block;" >
                           </a>
                          
                    </div>
                    <div class="banner-img">
                        
                           <a href="#" class="image-size">
                            <img src="./img/gaminggear23.jpg" alt="" width="480" height="314" style="display: block;" >
                           </a>
                         
                    </div>
                  
                </div>
            </div>
        </div>
        
    </div>
@endsection
@section('main')
 <!-- //main -->
 <div class="main-top"  data-aos="zoom-in">

<div class="container add-top" data-aos="zoom-in">
    <div class="row tile-category border-bottom">
        <div class="title-cate">
            <span>LAPTOP</span>
        </div>
    </div>
    <div class="row border-bottom">
        <div class="col-md-3">
            <div class="top-img">
                <div class="text-img">
                    <div>
                        <a href="#">
                            <img src="./img/35819_laptop_dell_inspiron_3581_v5i3027w_1_2.png" alt=""
                                class="size-img">
                        </a>
                    </div>
                    <div class="border-center">
                        <a href="#">QUICK VIEW</a>
                    </div>
                    <div class="div-text">
                        <div class="box-text">
                            <a href="#">LAPTOP DELL INSPIRON 3581
                            </a>
                        </div>
                        <div class="price">
                            <span class="line-through">14.000.000</span>
                            <a href="#">12.000.000</a>
                        </div>
                    </div>
                    <div class="div-bt">
                        <button class="set-button">Mua ngay</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="top-img">
                <div class="text-img">
                    <div>
                        <a href="#">
                            <img src="./img/dell-inspiron-7591-n5i5591w_b86ccf6f5aeb4142b05f3bec8b0c0b49_grande.png"
                                alt="" class="size-img">
                        </a>
                    </div>
                    <div class="border-center">
                        <a href="#">QUICK VIEW</a>
                    </div>
                    <div class="div-text">
                        <div class="box-text">
                            <a href="#"> LAPTOP DELL INSPRION 7591
                            </a>
                        </div>
                        <div class="price">
                            <span class="line-through">14.000.000</span>
                            <a href="#">12.000.000</a>
                        </div>
                    </div>
                    <div class="div-bt">
                        <button class="set-button">Mua ngay</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="top-img">
                <div class="text-img">
                    <div>
                        <a href="#">
                            <img src="./img/LAPTOP ASUS F571GT-BQ266T.jpg" alt="" class="size-img">
                        </a>
                    </div>
                    <div class="border-center">
                        <a href="#">QUICK VIEW</a>
                    </div>
                    <div class="div-text">
                        <div class="box-text">
                            <a href="#"> LAPTOP ASUS F571GT
                            </a>
                        </div>
                        <div class="price">
                            <span class="line-through">14.000.000</span>
                            <a href="#">12.000.000</a>
                        </div>
                    </div>
                    <div class="div-bt">
                        <button class="set-button">Mua ngay</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="top-img">
                <div class="text-img">
                    <div>
                        <a href="#">
                            <img src="./img/LAPTOP GAMING MSI GE75 RAIDER 9SF 806VN.jpg" alt=""
                                class="size-img">
                        </a>
                    </div>
                    <div class="border-center">
                        <a href="#">QUICK VIEW</a>
                    </div>
                    <div class="div-text">
                        <div class="box-text">
                            <a href="#"> LAPTOP GAMING MSI GE75 RAIDER 9SF 806VN
                            </a>
                        </div>
                        <div class="price">
                            <span class="line-through">14.000.000</span>
                            <a href="#">12.000.000</a>
                        </div>
                    </div>
                    <div class="div-bt">
                        <button class="set-button">Mua ngay</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row border-bottom">
        <div class="col-md-3">
            <div class="top-img">
                <div class="text-img">
                    <div>
                        <a href="#">
                            <img src="./img/laptop_dell_inspiron_5482_1_2-768x768.jpg" alt="" class="size-img">
                        </a>
                    </div>
                    <div class="border-center">
                        <a href="#">QUICK VIEW</a>
                    </div>
                    <div class="div-text">
                        <div class="box-text">
                            <a href="#"> LAPTOP DELL INSPIRONn 5482N
                            </a>
                        </div>
                        <div class="price">
                            <span class="line-through">14.000.000</span>
                            <a href="#">12.000.000</a>
                        </div>
                    </div>
                    <div class="div-bt">
                        <button class="set-button">Mua ngay</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="top-img">
                <div class="text-img">
                    <div>
                        <a href="#">
                            <img src="./img/35819_laptop_dell_inspiron_3581_v5i3027w_1_2.png" alt=""
                                class="size-img">
                        </a>
                    </div>
                    <div class="border-center">
                        <a href="#">QUICK VIEW</a>
                    </div>
                    <div class="div-text">
                        <div class="box-text">
                            <a href="#"> LAPTOP GAMING MSI GE75 RAIDER 9SF 806VN
                            </a>
                        </div>
                        <div class="price">
                            <span class="line-through">14.000.000</span>
                            <a href="#">12.000.000</a>
                        </div>
                    </div>
                    <div class="div-bt">
                        <button class="set-button">Mua ngay</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="top-img">
                <div class="text-img">
                    <div>
                        <a href="#">
                            <img src="./img/dell-inspiron-7591-n5i5591w_b86ccf6f5aeb4142b05f3bec8b0c0b49_grande.png"
                                alt="" class="size-img">
                        </a>
                    </div>
                    <div class="border-center">
                        <a href="#">QUICK VIEW</a>
                    </div>
                    <div class="div-text">
                        <div class="box-text">
                            <a href="#"> LLAPTOP DELL GE75 RAIDER 9SF 806VN
                            </a>
                        </div>
                        <div class="price">
                            <span class="line-through">14.000.000</span>
                            <a href="#">12.000.000</a>
                        </div>
                    </div>
                    <div class="div-bt">
                        <button class="set-button">Mua ngay</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="top-img">
                <div class="text-img">
                    <div>
                        <a href="#">
                            <img src="./img/LAPTOP ASUS F571GT-BQ266T.jpg" alt="" class="size-img">
                        </a>
                    </div>
                    <div class="border-center">
                        <a href="#">QUICK VIEW</a>
                    </div>
                    <div class="div-text">
                        <div class="box-text">
                            <a href="#"> LAPTOP ASUS F571GT
                            </a>
                        </div>
                        <div class="price">
                            <span class="line-through">14.000.000</span>
                            <a href="#">12.000.000</a>
                        </div>
                    </div>
                    <div class="div-bt">
                        <button class="set-button">Mua ngay</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>





<div class="container add-top" data-aos="zoom-in">
    <div class="row tile-category border-bottom">
        <div class="title-cate">
            <span>Điện Thoại</span>
        </div>
    </div>
    <div class="row border-bottom">
        <div class="col-md-3">
            <div class="top-img">
                <div class="text-img">
                    <div>
                        <a href="#">
                            <img src="./img/xiaomi-redmi-8-64gb-red-400x400.jpg" alt="" class="size-img">
                        </a>
                    </div>
                    <div class="border-center">
                        <a href="#">QUICK VIEW</a>
                    </div>
                    <div class="div-text">
                        <div class="box-text">
                            <a href="#">XIAOMI REDMI 8 64gb
                            </a>
                        </div>
                        <div class="price">
                            <span class="line-through">14.000.000</span>
                            <a href="#">12.000.000</a>
                        </div>
                    </div>
                    <div class="div-bt">
                        <button class="set-button">Mua ngay</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="top-img">
                <div class="text-img">
                    <div>
                        <a href="#">
                            <img src="./img/samsung-galaxy-s20-ultra-600x600-1-400x400.jpg" alt=""
                                class="size-img">
                        </a>
                    </div>
                    <div class="border-center">
                        <a href="#">QUICK VIEW</a>
                    </div>
                    <div class="div-text">
                        <div class="box-text">
                            <a href="#"> SAM SUNG GALAXY s20
                            </a>
                        </div>
                        <div class="price">
                            <span class="line-through">14.000.000</span>
                            <a href="#">12.000.000</a>
                        </div>
                    </div>
                    <div class="div-bt">
                        <button class="set-button">Mua ngay</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="top-img">
                <div class="text-img">
                    <div>
                        <a href="#">
                            <img src="./img/oppo-a91-trang-600x600-400x400.jpg" alt="" class="size-img">
                        </a>
                    </div>
                    <div class="border-center">
                        <a href="#">QUICK VIEW</a>
                    </div>
                    <div class="div-text">
                        <div class="box-text">
                            <a href="#"> OPPO A91
                            </a>
                        </div>
                        <div class="price">
                            <span class="line-through">14.000.000</span>
                            <a href="#">12.000.000</a>
                        </div>
                    </div>
                    <div class="div-bt">
                        <button class="set-button">Mua ngay</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="top-img">
                <div class="text-img">
                    <div>
                        <a href="#">
                            <img src="./img/blackberry-key2-4-400x400.jpg" alt="" class="size-img">
                        </a>
                    </div>
                    <div class="border-center">
                        <a href="#">QUICK VIEW</a>
                    </div>
                    <div class="div-text">
                        <div class="box-text">
                            <a href="#"> BLACKBERRY
                            </a>
                        </div>
                        <div class="price">
                            <span class="line-through">14.000.000</span>
                            <a href="#">12.000.000</a>
                        </div>
                    </div>
                    <div class="div-bt">
                        <button class="set-button">Mua ngay</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row border-bottom">
        <div class="col-md-3">
            <div class="top-img">
                <div class="text-img">
                    <div>
                        <a href="#">
                            <img src="./img/laptop_dell_inspiron_5482_1_2-768x768.jpg" alt="" class="size-img">
                        </a>
                    </div>
                    <div class="border-center">
                        <a href="#">QUICK VIEW</a>
                    </div>
                    <div class="div-text">
                        <div class="box-text">
                            <a href="#"> LAPTOP DELL INSPIRONn 5482N
                            </a>
                        </div>
                        <div class="price">
                            <span class="line-through">14.000.000</span>
                            <a href="#">12.000.000</a>
                        </div>
                    </div>
                    <div class="div-bt">
                        <button class="set-button">Mua ngay</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="top-img">
                <div class="text-img">
                    <div>
                        <a href="#">
                            <img src="./img/35819_laptop_dell_inspiron_3581_v5i3027w_1_2.png" alt=""
                                class="size-img">
                        </a>
                    </div>
                    <div class="border-center">
                        <a href="#">QUICK VIEW</a>
                    </div>
                    <div class="div-text">
                        <div class="box-text">
                            <a href="#"> LAPTOP GAMING MSI GE75 RAIDER 9SF 806VN
                            </a>
                        </div>
                        <div class="price">
                            <span class="line-through">14.000.000</span>
                            <a href="#">12.000.000</a>
                        </div>
                    </div>
                    <div class="div-bt">
                        <button class="set-button">Mua ngay</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="top-img">
                <div class="text-img">
                    <div>
                        <a href="#">
                            <img src="./img/dell-inspiron-7591-n5i5591w_b86ccf6f5aeb4142b05f3bec8b0c0b49_grande.png"
                                alt="" class="size-img">
                        </a>
                    </div>
                    <div class="border-center">
                        <a href="#">QUICK VIEW</a>
                    </div>
                    <div class="div-text">
                        <div class="box-text">
                            <a href="#"> LLAPTOP DELL GE75 RAIDER 9SF 806VN
                            </a>
                        </div>
                        <div class="price">
                            <span class="line-through">14.000.000</span>
                            <a href="#">12.000.000</a>
                        </div>
                    </div>
                    <div class="div-bt">
                        <button class="set-button">Mua ngay</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="top-img">
                <div class="text-img">
                    <div>
                        <a href="#">
                            <img src="./img/LAPTOP ASUS F571GT-BQ266T.jpg" alt="" class="size-img">
                        </a>
                    </div>
                    <div class="border-center">
                        <a href="#">QUICK VIEW</a>
                    </div>
                    <div class="div-text">
                        <div class="box-text">
                            <a href="#"> LAPTOP ASUS F571GT
                            </a>
                        </div>
                        <div class="price">
                            <span class="line-through">14.000.000</span>
                            <a href="#">12.000.000</a>
                        </div>
                    </div>
                    <div class="div-bt">
                        <button class="set-button">Mua ngay</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--main //-->
<script>
          const body = document.body;
 
    const scrollUp = "scroll-up";
    const scrollDown = "scroll-down";
    let lastScroll = 0;
    
  
    window.addEventListener("scroll", () => {
      const currentScroll = window.pageYOffset;
      if (currentScroll == 0) {
        body.classList.remove(scrollUp);
        return;
      }
      
      if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
        // down
        body.classList.remove(scrollUp);
        body.classList.add(scrollDown);
      } else if (currentScroll < lastScroll && body.classList.contains(scrollDown)) {
        // up
        body.classList.remove(scrollDown);
        body.classList.add(scrollUp);
      }
      lastScroll = currentScroll;
    });
      </script>
@endsection