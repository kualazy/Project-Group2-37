@include ('layouts.back_end.head')

<body class="g-sidenav-show  bg-gray-100">
  @include ('layouts.back_end.sideber')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">หน้า</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">หน้าแรก</li>
          </ol>
          <h5 class="font-weight-bolder mb-0">หน้าแรก</h5>
        </nav>

        </ul>
      </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">ผู้ใช้</p>
                    <h5 class="font-weight-bolder mb-0">
                      {{$users->count()}} คน
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">จำนวนสินค้า</p>
                    <h5 class="font-weight-bolder mb-0">
                      {{$product->count()}} ชิ้น
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<br>

      <div class="table-responsive">
        <table class="table ">
          <thead class="">
            <tr class=" table-dark align-middle text-center">



              <th scope="col">ลำดับ</th>
              <th scope="col">ชื่อ</th>
              <th scope="col">ที่อยู่</th>
              <th scope="col">E-mail</th>
              <th scope="col">เบอร์โทร</th>
              <th scope="col">Admin - User</th>
              <th scope="col">รูป</th>
          
            </tr>
          </thead>
          
          <tbody>
            
              
            @foreach($users as $user)
            <tr class=" table-light align-middle text-center">
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->address }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->phone }}</td>
              <td>{{ $user->isAdmin }}</td>
              <td><img src="{{ $user->image }}" width="150px" alt=""></td>
             
            </tr>
            @endforeach
          </tbody>

        </table>
      </div>

      </section>
    </div>
    </div>

    </section>
    </section>
    <!--main content end-->
    </section>

</body>

</html>