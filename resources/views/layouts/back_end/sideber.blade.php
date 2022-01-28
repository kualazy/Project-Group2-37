<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header bg-gradient-success">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{route('home')}}">
        <img src="{{asset('back_end/assets/img/')}}" class="navbar-brand-img h-100" alt="">
        <span class="ms-1 font-weight-bold text-center"><h6>ข้าวหมากโบราณ</h6></span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <span class="nav-link-text ms-1 text-center"><h6>ชื่อผู้ใช้: {{Auth()->user()->name}}</h6></span><br>
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link  " href="{{route('admin.index')}}">
           <span class="nav-link-text ms-1 "><h6 class="align-middle">หน้าแรก</h6></span> 
          </a>
        </li>

      <li class="nav-item">
          <a class="nav-link  " href="{{route('admin.promotion')}}">
            <span class="nav-link-text ms-1"><h6>แก้ไขพื้นหลังหน้าบ้าน</h6></span>
          </a>
        </li> 
      
     <!--   <li class="nav-item">
          <a class="nav-link  " href="{{route('admin.job')}}">
            </div>
            <span class="nav-link-text ms-1"><h6>โปรโมชั่น</h6></span>
          </a>
          </li>-->

        <li class="nav-item">
          <a class="nav-link  " href="{{route('admin.user')}}">
            </div>
            <span class="nav-link-text ms-1"><h6>ผู้ใช้งานระบบ</h6></span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link  " href="{{route('admin.product')}}">
            </div>
            <span class="nav-link-text ms-1"><h6>สินค้า</h6></span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link  " href="{{ route('logout') }}"
          onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
            </div>
            <span class="nav-link-text ms-1"><h6>ออกจากระบบ</h6></span>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
        </li>
                
      </ul>
    </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">

 
 
  