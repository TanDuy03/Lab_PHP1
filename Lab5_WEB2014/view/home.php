    <!--  -->
    <article>
        <main>
            <div class="slideshow-container">
                <div class="mySlides fade">
                  <div class="numbertext"></div>
                  <img src="./img/Banner/shoe_bn1.jpg">
                </div>         
                <div class="mySlides fade">
                  <div class="numbertext"></div>
                  <img src="./img/Banner/shoe_bn2.jpeg">
                </div>
                <div class="mySlides fade">
                  <div class="numbertext"></div>
                  <img src="./img/Banner/shoe_bn3.jpg">
                </div>
                </div>
                <div class="nutt" style="text-align: center;">
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
            </div>
        </main>
        <!--  -->
        <script>
            let slideIndex = 0;
            showSlides();      
            function showSlides() {
              let i;
              let slides = document.getElementsByClassName("mySlides");
              let dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 2000);
            }
        </script>
        <div class="box-layout">
            <div class="box-1"></div>
            <div class="box-main">
                <div class="list-item">
                    <h1>Sản phẩm nổi bật</h1>
                    <div class="boxsp">
                        <form action="" method="post">
                            <img src="img/Maugiay/giay1.jpg">
                            <p class="name">Peak E12817</p>
                            <p class="price">1,112,000</p>
                            <input type="hidden" name="img" value="img/iP1.png"/>               
                            <input type="hidden" name="tensp" value="Điện thoại 1"/>              
                            <input type="hidden" name="gia" value="11120000"/>
                            <input type="hidden" name="id" value="1"/>
                            <span class="slnum">Số lượng</span>
                            <input type="number" name="sl" id="" value="1" class="slsp"><br> 
                            <input type="submit" name="dathang" value="Đặt hàng" class="btn" />
                        </form>
                    </div>
                    <div class="boxsp">
                        <form action="" method="post">
                            <img src="img/Maugiay/giay2.jpg">
                            <p class="name">Nike Air Zoom Pegasus</p>
                            <p class="price">4,039,000</p>
                            <input type="hidden" name="img" value="img/iP1.png"/>               
                            <input type="hidden" name="tensp" value="Điện thoại 1"/>              
                            <input type="hidden" name="gia" value="4039000"/>
                            <input type="hidden" name="id" value="1"/>
                            <span class="slnum">Số lượng</span>
                            <input type="number" name="sl" id="" value="1" class="slsp"><br> 
                            <input type="submit" name="dathang" value="Đặt hàng" class="btn" />
                        </form>
                    </div>
                    <div class="boxsp">
                        <form action="" method="post">
                            <img src="img/Maugiay/giay3.jpg">
                            <p class="name">Nike React Infinity</p>
                            <p class="price">4,699,000</p>
                            <input type="hidden" name="img" value="img/iP1.png"/>               
                            <input type="hidden" name="tensp" value="Điện thoại 1"/>              
                            <input type="hidden" name="gia" value="4699000"/>
                            <input type="hidden" name="id" value="1"/>
                            <span class="slnum">Số lượng</span>
                            <input type="number" name="sl" id="" value="1" class="slsp"><br> 
                            <input type="submit" name="dathang" value="Đặt hàng" class="btn" />
                        </form>
                    </div>
                    <div class="boxsp">
                        <form action="" method="post">
                            <img src="img/Maugiay/giay4.jpg">
                            <p class="name">Nike Jordan Point Lane</p>
                            <p class="price">4,519,000</p>
                            <input type="hidden" name="img" value="img/iP1.png"/>               
                            <input type="hidden" name="tensp" value="Điện thoại 1"/>              
                            <input type="hidden" name="gia" value="4519000"/>
                            <input type="hidden" name="id" value="1"/>
                            <span class="slnum">Số lượng</span>
                            <input type="number" name="sl" id="" value="1" class="slsp"><br>
                            <input type="submit" name="dathang" value="Đặt hàng" class="btn" />
                        </form>
                    </div>
                </div>
                <div class="bns">
                    <img src="img/Banner/bngiay1.webp" alt="">
                </div>
                <div style="clear: both;"></div>
                <div class="list-item" style="margin-top: -5px;">
                    <h1>Sản phẩm khuyến mãi</h1>
                    <div class="boxsp">
                        <form action="" method="post">
                            <img src="img/Maugiay/giay5.jpg">
                            <p class="name">Peak E12817</p>
                            <p class="price">1,112,000</p>
                            <input type="hidden" name="img" value="img/iP1.png"/>               
                            <input type="hidden" name="tensp" value="Điện thoại 1"/>              
                            <input type="hidden" name="gia" value="11120000"/>
                            <input type="hidden" name="id" value="1"/>
                            <span class="slnum">Số lượng</span>
                            <input type="number" name="sl" id="" value="1" class="slsp"><br> 
                            <input type="submit" name="dathang" value="Đặt hàng" class="btn" />
                        </form>
                    </div>
                    <div class="boxsp">
                        <form action="" method="post">
                            <img src="img/Maugiay/giay6.jpg">
                            <p class="name">Nike Air Zoom Pegasus</p>
                            <p class="price">4,039,000</p>
                            <input type="hidden" name="img" value="img/iP1.png"/>               
                            <input type="hidden" name="tensp" value="Điện thoại 1"/>              
                            <input type="hidden" name="gia" value="4039000"/>
                            <input type="hidden" name="id" value="1"/>
                            <span class="slnum">Số lượng</span>
                            <input type="number" name="sl" id="" value="1" class="slsp"><br> 
                            <input type="submit" name="dathang" value="Đặt hàng" class="btn" />
                        </form>
                    </div>
                    <div class="boxsp">
                        <form action="" method="post">
                            <img src="img/Maugiay/giay7.jpg">
                            <p class="name">Nike React Infinity</p>
                            <p class="price">4,699,000</p>
                            <input type="hidden" name="img" value="img/iP1.png"/>               
                            <input type="hidden" name="tensp" value="Điện thoại 1"/>              
                            <input type="hidden" name="gia" value="4699000"/>
                            <input type="hidden" name="id" value="1"/>
                            <span class="slnum">Số lượng</span>
                            <input type="number" name="sl" id="" value="1" class="slsp"><br> 
                            <input type="submit" name="dathang" value="Đặt hàng" class="btn" />
                        </form>
                    </div>
                    <div class="boxsp">
                        <form action="" method="post">
                            <img src="img/Maugiay/giay8.jpg">
                            <p class="name">Nike Jordan Point Lane</p>
                            <p class="price">4,519,000</p>
                            <input type="hidden" name="img" value="img/iP1.png"/>               
                            <input type="hidden" name="tensp" value="Điện thoại 1"/>              
                            <input type="hidden" name="gia" value="4519000"/>
                            <input type="hidden" name="id" value="1"/>
                            <span class="slnum">Số lượng</span>
                            <input type="number" name="sl" id="" value="1" class="slsp"><br>
                            <input type="submit" name="dathang" value="Đặt hàng" class="btn" />
                        </form>
                    </div>
                </div>
                <div class="bns">
                    <img src="img/Banner/bngiay3.jpg" alt="">
                </div>
            </div>
            <div class="box-2"></div>
        </div>
    </article>
    <!--  -->
    <aside>
        <div class="as-container">
            <!-- <div class="as-box1">Box1</div> -->
            <div class="as-boxmain">
                <h2>Tin nổi bật</h2>
                <hr>
                <div class="as-list">
                    <div class="as-new">
                        <img src="img/Maugiay/tintuc3.webp" alt="">
                        <div class="as-content">
                            <h5>Đôi giày chạy mới nhất của New Balance liệu có thay đổi cuộc chơi?</h5>
                            <i class="fa fa-calendar"> 04/08/2022</i>
                            <i class="fa fa-user"> Người tham gia</i><br>
                            <div class="infor" style="margin-left: 20px;">
                                <span>
                                    Trong những năm gần đây, thế giới giày chạy dường như bị Nike chi phối rất nhiều. Kể từ khi giới thiệu Vaporfly Next% và Alphafly
                                    Next% vào năm 2017, những đôi giày được làm từ ...
                                </span>
                            </div>
                        </div>
                        <div class="as-link">
                            <a href=""><span class="fa fa-angle-double-right">&nbsp;</span>Xem chi tiết </a>
                        </div>
                    </div>  
                    <div class="as-new">
                        <img src="img/Maugiay/giay_tintuc.webp" alt="">
                        <div class="as-content">
                            <h5>Những chi tiết giúp bạn phân biệt Travis Scott x Nike SB Dunk Low Real và Fake?</h5>
                            <i class="fa fa-calendar"> 18/07/2022</i>
                            <i class="fa fa-user"> Người tham gia</i>
                            <div class="infor" style="margin-left: 20px;">
                                <span>
                                    Trong vài năm qua, Travis Scott đã dần trở thành một thế lực của thế giới sneakers.
                                    Rapper 28 tuổi người Houston đã chế tạo ra một số đôi giày được săn lùng nhiều nhất nhờ mối q...
                                </span>
                            </div>
                        </div>
                        <div class="as-link">
                            <a href=""><span class="fa fa-angle-double-right">&nbsp;</span>Xem chi tiết </a>
                        </div>
                    </div>  
                    <div class="as-new">
                        <img src="img/Maugiay/tintuc2.webp" alt="">
                        <div class="as-content">
                            <h5>Top 7 đôi Golden Goose không thể thiếu trong tủ đồ của bạn</h5>
                            <i class="fa fa-calendar"> 02/08/2022</i>
                            <i class="fa fa-user"> Người tham gia</i>
                            <div class="infor" style="margin-left: 20px;">
                                <span>
                                    Golden Goose Deluxe Brand được thành lập vào năm 2000 sau khi hợp nhất tinh thần sáng tạo của Francesca Rinaldo và
                                    Alessandro Gallo ở Ý. Trong những năm qua, họ đã từng bước phá...
                                </span>
                            </div>
                        </div>
                        <div class="as-link">
                            <a href=""><span class="fa fa-angle-double-right">&nbsp;</span>Xem chi tiết </a>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- <div class="as-box2">Box2</div> -->
        </div>
    </aside>
    <!--  -->