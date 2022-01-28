@include ('layouts.front_end.header')


<body>


@include ('layouts.front_end.head')
  

  <!-- ======= Hero Section ======= -->
 
  <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>ผู้จัดทำ</h2>
          <p>ขณะผู้จัดทำเว็บไซต์แอปพิเคชั่นข้าวหมากโบราณจัดทำขึ้นเพื่อศึกษาการทำเว็บไซต์และระบบฐานข้อมูล</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('front_end/assets/img/team/team-1.jpg')}}" alt="">
              <h4>นายธนวัตร พลรักษา</h4>
              <span>Back-End</span>
              <p>
                จัดทำระบบหลังบ้านและระบบฐานข้อมูล
              </p>
             
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('front_end/assets/img/team/team-fontend.jpg')}}" alt="">
              <h4>นายเจตริน สงวนไว้</h4>
              <span>Font-End</span>
              <p>
               จัดทำด้านFont-Endและการออกแบบเว็บไซต์
              </p>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('front_end/assets/img/team/team-3.jpg')}}" alt="">
              <h4>นายสหฐัรัช ตั้งตะกลูชัย</h4>
              <span>Tester</span>
              <p>
                จัดทำด้านเนื้อหาและข้อมูลของเว็บไซต์
              </p>
             
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <section id="map">
    <div class="container">

<div class="section-title">
  <h2>ติดต่อเรา</h2>
 </div>
 
<div class="row">
<div class="col-lg-6">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.9420908772677!2d100.47946531414397!3d13.842514598915947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b4580b8cb59%3A0x2d5fb927e6125fcb!2z4LiV4Lil4Liy4LiU4LmA4LiK4LmJ4Liy4LiX4Li44LiB4Lin4Lix4LiZ!5e0!3m2!1sth!2sth!4v1629922437653!5m2!1sth!2sth" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="col-lg-6">
          <h3>ติดต่อได้ที่นี้</h3>
           <hr>

           <p>Email: ThaiSweetRice@gmail.com</p>
           <p>facebook: ThaiSweetRiceThailand</p>
           <p>Line: ThaiSweetTH</p>
           <p>Instagram: ThaiSweetRice</p>
           <p>Phone: 08xxxxx1</p>
        </div>

        </div>
    </div>
    </section>


    <!-- ======= Portfolio Section ======= -->
    
    <!-- ======= Contact Section ======= -->
    
    @include ('layouts.front_end.footer')
</body>



</html>