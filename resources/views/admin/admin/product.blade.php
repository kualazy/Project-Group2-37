@include ('layouts.back_end.head')

<body>
  @include ('layouts.back_end.sideber')

  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">สินค้า</li>
        </ol>
        <h5 class="font-weight-bolder mb-0">สินค้า</h5>
      </nav>

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


  <hr class="horizontal dark mt-0">


  <a href="{{ route('admin.addproduct') }}" class="btn btn-primary">เพิ่มข้อมูล</a>

  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr class=" table-dark align-middle text-center">
          <th>ลำดับ</th>
          <th>ชื่อสินค้า</th>
          <th>รหัสสินค้า</th>
          <th>ราคา</th>
          <th>รูปภาพ</th>
          <th>แก้ไขข้อมูล</th>
          <th>ลบข้อมูล</th>

        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
        <tr class=" table-light align-middle text-center">
          <td>{{ $product->id_product }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->product_code }}</td>
          <td>{{ $product->price }}</td>
          <td><img src="{{ $product->image }}" width="150px" alt=""></td>
          <td><a href="{{ route('admin.product.edit', ['id' => $product->id_product]) }}" class="btn btn-warning">แก้ไขข้อมูล</a></td>
          <td>
            <form action="{{ route('admin.product.delete', ['id' => $product->id_product]) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">ลบข้อมูล</button>
            </form>
          </td>
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