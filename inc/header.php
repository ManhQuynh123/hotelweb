<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">TD Hotel</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="#">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Phòng</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Cơ sở</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Liên hệ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Về dịch vụ</a>
        </li>
      </ul>
      <div class="d-flex">
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
            Đăng Nhập
        </button>
        <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
          Đăng Ký
        </button>
      </div>
    </div>
  </div>
</nav>
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-circle fs-3 me-2"></i>User Login</h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label class="form-label">Email của bạn</label>
                  <input type="email" class="form-control shadow-none">
                </div>
                <div class="mb-4">
                  <label class="form-label">Mật Khẩu</label>
                  <input type="password" class="form-control shadow-none">
                </div>
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <button class = "btn btn-dark shadow-none">Đăng Nhập</button>
                  <a href="javascript: void(0)" class="text-secondary text-decoration-none">Quên Mật Khẩu</a>
                </div>
              </div>
              
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-lines-fill fs-3 me-2"></i>User Register</h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                Lưu ý: Thông tin chi tiết của bạn phải khớp với ID của bạn (thẻ CMND, hộ chiếu, bằng lái xe, v.v.) sẽ được yêu cầu khi nhận phòng
              </span>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Tên</label>
                    <input type="text" class="form-control shadow-none">
                  </div>
                  <div class="col-md-6 p-0">
                    <label class="form-label">Email của bạn</label>
                    <input type="email" class="form-control shadow-none">
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Số điện thoại</label>
                    <input type="number" class="form-control shadow-none">
                  </div>
                  <div class="col-md-6 p-0 mb-3">
                    <label class="form-label">Ảnh</label>
                    <input type="file" class="form-control shadow-none">
                  </div>
                  <div class="col-md-12 p-0 mb-3">
                    <label class="form-label">Địa chỉ</label>
                    <textarea class="form-control shadow-none" rows="1"></textarea>
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">CMND</label>
                    <input type="number" class="form-control shadow-none">
                  </div>
                  <div class="col-md-6 p-0 mb-3">
                    <label class="form-label">Ngày Đặt</label>
                    <input type="date" class="form-control shadow-none">
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Mật Khẩu</label>
                    <input type="password" class="form-control shadow-none">
                  </div>
                  <div class="col-md-6 p-0 mb-3">
                    <label class="form-label">Xác nhận mật khẩu</label>
                    <input type="password" class="form-control shadow-none">
                  </div>
                </div>
              </div>
              <div class="text-center my-1">
                <button type="submit" class = "btn btn-dark shadow-none">Đăng Ký</button>
              </div>
                <!--<div class="mb-3">
                  
                </div>
                <div class="mb-4">
                  <label class="form-label">Mật Khẩu</label>
                  <input type="password" class="form-control shadow-none">
                </div>
                <div class="d-flex align-items-center justify-content-between mb-2">
                  
                  <a href="javascript: void(0)" class="text-secondary text-decoration-none">Quên Mật Khẩu</a>
                </div>-->
              </div>
              
        </form>
      </div>
    </div>
  </div>