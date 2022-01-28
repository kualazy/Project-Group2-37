@include ('layouts.back_end.head')

<body class="g-sidenav-show  bg-gray-100">
  @include ('layouts.back_end.sideber')
  @include ('layouts.back_end.header')

  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
      </nav>

      </ul>
      </li>
      </ul>
    </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <!--main content start-->

  <div class="row">
    <div class="col-lg-12">
      <section class="panel">
        <header class="panel-heading">
          แก้ไขข้อมูลหน้าโปรโมชั่น
        </header>
        <form method="POST" enctype="multipart/form-data" action="{{route('admin.promotion.update', ['id' => $promotion->id])}}">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">ชื่อ</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $promotion->name }}" placeholder="Enter email">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">เนื้อหา</label>
            <input type="text" name="content" class="form-control" id="exampleInputEmail1" value="{{ $promotion->content }}" placeholder="Enter email">
          </div>

          <div class="form-group">
            <label for="exampleInputFile">เปลี่ยนรูป</label>
            <input type="file" name="image" id="exampleInputFile">
          </div>

          <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
        </form>

    </div>
    </section>
  </div>

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