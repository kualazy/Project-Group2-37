@include ('layouts.front_end.header')


<body>


@include ('layouts.front_end.head')
  
  
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="section-title">
          <h2>สินค้าทั่วไป</h2>
            </div>
@foreach ($product as $products)

        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ $products->image }}" class="img-fluid" alt="">
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
        

 


    </section>

    



    <!-- ======= Portfolio Section ======= -->
    
    <!-- ======= Contact Section ======= -->
    
    @include ('layouts.front_end.footer')
</body>



</html>