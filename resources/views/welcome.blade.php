@include ('layouts.front_end.header')
<body>
@include ('layouts.front_end.head')


  <!-- ======= Hero Section ======= -->
 
  <main id="main">

    <!-- ======= Featured Services Section ======= -->
   
    <!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Thai Sweet Fermented Rice</h2>
          
        </div>
         <hr>
        
        <div class="row" >
          <div class="col-lg-6 order-1 order-lg-6">
            <img src="{{asset('front_end/assets/img/about.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-3 pt-lg-0 order-2 order-lg-6 content">
            <h3>ข้าวหมาก คือ..? </h3>
           
            <p>
            ขนมหวานชนิดหนึ่งที่ทำมาจากการนำข้าวเหนียวนึ่งมาหมักกับราและยีสต์ในรูปของแป้ง เพื่อให้ราและยีสต์เปลี่ยนเป็นน้ำตาล หรือเป็นแอลกอฮอล์เล็กน้อย ข้าวที่หมักได้จะมีรสหวาน ส่งกลิ่นหอม
            </p>

          </div>
          
        </div>

      </div>
      <hr>
    </section>

      <section id="about" class="about">
      <div class="container">

        <div class="row" >
          <div class="col-lg-6 order-1 order-lg-5">
            <img src="{{asset('front_end/assets/img/Product/sile2.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-3 pt-lg-0 order-2 order-lg-6 content">
           
          <h3>ข้าวหมาก..?<br>อาหารหมักพื้นบ้านของไทย</br></h3>
           
            <p>
            ทำจากข้าวเหนียวขาวและดำ แต่ข้าวเหนียวดำมักไม่ค่อยเห็น <br>ทั้งๆ ที่ข้าวเหนียวดำมีปริมาณสารแกมม่า-โอไรซานอล และ </br>สามารถสังเคราะห์สารแอนโทไซยานินได้มากกว่าข้าวขาวด้วยซ้ำ <br>แต่ข้าวขาวนั้นเป็นที่นิยมมากกว่า</br>
            </p>

          </div>
        </div>
      </div>
     
      <hr>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    
          <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Product</h2>
        @foreach ($product as $products)
            
        
           

        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ $products->image }}" width="550px" alt="">
              <div class="portfolio-info">
                <h4>{{ $products->name }}</h4>
                <p>{{ $products->price }}</p>
                <div class="portfolio-links">
                  <a href="{{asset('front_end/assets/img/Product/sile1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                  <a href="Product-detil.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
       
          @endforeach

        </div>
        
    </section><!-- End Why Us Section -->


    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>บริการ</h2>
         </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bi bi-shop"></i>
              </div>
              <h4><a href="">ร้านค้าหลายสาขา</a></h4>
              <p>สามารถรับสินค้าได้ตามสาขาทั่วไป มีโปรโมทชั่นสำหรับ รับที่ร้านค้าเช่นแถมหน้ากากและแอลกอฮอล์สำหรับช่วงCovid-19</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bi bi-box-seam"></i>
              </div>
              <h4><a href="">บริการ delivery</a></h4>
              <p>deliveryที่ร่วมรายการ และโปรโมทชั่นสำหรับการสั่งซื้อครั้งแรก</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bi bi-bookmark-check"></i>
              </div>
              <h4><a href="">ได้สินค้าทันใจ</a></h4>
              <p>มาตฐานตาม..และอ.ย ใส่ใจทุกคุณภาพทุกข้นตอนไม่ใส่สารกันเสียและทำสดใหม่ทุกวัน</p>
            </div>
          </div>

          
        </div>

      </div>
    </section><!-- End Services Section -->
    


    <!-- ======= Portfolio Section ======= -->
    
    <!-- ======= Contact Section ======= -->
    
    @include ('layouts.front_end.footer')
</body>



</html>