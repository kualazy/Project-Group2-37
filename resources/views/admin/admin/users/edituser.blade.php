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
          แก้ไขข้อมูลหน้าผู้ใช้
        </header>
        <form method="POST" enctype="multipart/form-data" action="{{route('admin.user.update', ['id' => $user->id])}}">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">ชื่อ</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $user->name }}" placeholder="Enter email">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">เพิ่มข้อมูลที่อยู่</label>
            <input type="text" name="address" class="form-control" id="exampleInputEmail1" value="{{ $user->address }}" placeholder="Enter email">
          </div>

          <div class="form-group">
            <label for="exampleInputE-mail1">เพิ่มข้อมูล E-Mail</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="{{ $user->email }}" placeholder="Enter email">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">เพิ่มข้อมูลเบอร์โทร</label>
            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" value="{{ $user->phone }}" placeholder="Enter email">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">สิทธิ์</label>
            <select name="admin" id="" class="form-control">
              <option @if($user->isAdmin) selected @endif value="1">Admin</option>
              <option @if(!$user->isAdmin) selected @endif value="0">User</option>
            </select>
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