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
                เพิ่มข้อมูลหน้าที่อยู่พนักงาน
              </header>
              <form method="POST" enctype="multipart/form-data" action="{{route('admin.storeemployee')}}">
              @csrf
              <div class="form-group">
                    <label for="exampleInputEmail1">เพิ่มข้อมูลชื่อผู้ใช้</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">เพิ่มข้อมูลที่อยู่</label>
                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">เพิ่มข้อมูล E-Mail</label>
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">เพิ่มข้อมูล Facebook</label>
                    <input type="text" name="facebook" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">เพิ่มข้อมูล Line</label>
                    <input type="text" name="line" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputFile">รูป</label>
                    <input type="file" name="image" id="exampleInputFile">
                  </div>
                 
                  <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
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