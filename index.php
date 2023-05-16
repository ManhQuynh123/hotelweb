<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khách Sạn Tỷ Sao</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <?php require('inc/links.php'); ?>
/>
    <style>
        
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/*(Lỗi) Firefox 
input[type=number] {
  -moz-appearance: textfield;
}*/

.custom-bg{
  background-color: #2ec1ac;
  border: 1px solid #2ec1ac;
}

.custom-bg:hover{
  background-color: #279e8c;
  border-color: #279e8c;
}

        .availability-form{
          margin-top: -50px;
          z-index: 2;
          position: relative;
        }

        @media screen and (max-width: 575px) {
          .availability-form{
          margin-top: 25px;
          padding: 0 35px;
        }
        }
    </style>
</head>
<?php require('inc/header.php');?>

  <!--Carousel(Băng chuyền)-->

  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/IMG_15372.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_40905.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_55677.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_62045.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_93127.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_99736.png" class="w-100 d-block" />
        </div>
      </div>
    </div>
  </div>
  <!--Kiểm tra hình thức sẵn có-->
  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Kiểm tra phòng trống</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3">
              <label class="form-label" style="font-weight: 500;">Nhận phòng</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3">
              <label class="form-label" style="font-weight: 500;">Trả phòng</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3">
              <label class="form-label" style="font-weight: 500;">Người lớn</label>
              <select class="form-select shadow-none">
                
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
            <div class="col-lg-2">
              <label class="form-label" style="font-weight: 500;">Trẻ em</label>
              <select class="form-select shadow-none">
                
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
            <div class="col-lg-1 mb-lg-0 mt-2">
              <button type="submit" class="btn text-white shadow-none custom-bg">Tìm</button>
              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!--Our room(Phòng còn trống)-->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">PHÒNG CÒN TRỐNG</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Phòng Kiệt Không Lỏ</h5>
            <h6 class="mb-4">1.000.000đ/Đêm</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Điểm đặc trưng</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Phòng
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Phòng tắm
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Ban công
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 Ghế Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Cơ sở</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Tivi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Điều hoà
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Đánh giá</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt Ngay</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Xem chi tiết</a>
            </div>
            
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Phòng Bình Thường</h5>
            <h6 class="mb-4">1.000.000đ/Đêm</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Điểm đặc trưng</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Phòng
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Phòng tắm
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Ban công
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 Ghế Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Cơ sở</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Tivi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Điều hoà
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Đánh giá</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt Ngay</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Xem chi tiết</a>
            </div>
            
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Phòng Kiệt Lỏ</h5>
            <h6 class="mb-4">1.000.000đ/Đêm</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Điểm đặc trưng</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Phòng
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Phòng tắm
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Ban công
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 Ghế Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Cơ sở</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Tivi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Điều hoà
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Đánh giá</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt Ngay</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Xem chi tiết</a>
            </div>
            
          </div>
        </div>
      </div>

      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Xem Thêm >>></a>
      </div>
    </div>
  </div>

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">CÁC CƠ SỞ CỦA CHÚNG TÔI</h2>

  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/IMG_43553.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/IMG_43553.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/IMG_43553.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/IMG_43553.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/IMG_43553.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Xem Thêm Cơ Sở >>></a>
      </div>
    </div>
  </div>

  <!--Nhận xét từ khách hàng-->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">NHẬN XÉT TỪ KHÁCH HÀNG</h2>
  <div class="container mt-5">
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/facilities/star.svg" width="30px">
            <h6 class="m-0 ms-2">Nguyễn Tuấn Kiệt</h6>
          </div>
          <p>Dịch vụ này rất tốt chú rất thích
            Chú Bo thêm Cháu Quỳnh 5 triệu coi 
            như là quà động lực phát triển
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            
          </div>
        </div>

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/facilities/star.svg" width="30px">
            <h6 class="m-0 ms-2">Nguyễn Tuấn Kiệt</h6>
          </div>
          <p>Dịch vụ này rất tốt chú rất thích
            Chú Bo thêm Cháu Quỳnh 5 triệu coi 
            như là quà động lực phát triển
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/facilities/star.svg" width="30px">
            <h6 class="m-0 ms-2">Nguyễn Tuấn Kiệt</h6>
          </div>
          <p>Dịch vụ này rất tốt chú rất thích
            Chú Bo thêm Cháu Quỳnh 5 triệu coi 
            như là quà động lực phát triển
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Xem Thêm >>></a>
      </div>
  </div>

  <!--Liên hệ(Google Map)-->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">ĐẾN VỚI CHÚNG TÔI</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.91222098452!2d107.09537997469067!3d10.348903689775062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31756f341086d1e1%3A0x28f6e8aceed2aaa3!2sAnnata%20Beach%20Hotel!5e0!3m2!1svi!2s!4v1684244918632!5m2!1svi!2s" loading="lazy"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Liên Hệ Với Chúng Tôi</h5>
          <a href="tel: 0348328530" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>0348328530
          </a>
          <br>
          <a href="tel: 0348328531" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>0348328530
          </a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Theo Dõi Chúng Tôi</h5>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-twitter me-1"></i>Twitter
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook me-1"></i>Facebook
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram me-1"></i>Instagram
            </span>
          </a>
          
          
        </div>
      </div>
    </div>
  </div>

  <?php require('inc/footer.php') ?>

  
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      }
    });

    
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      /*Biện pháp tạm thời note"3" */
      slidesPerView: "auto",
      /*Lỗi loop dm nó*/
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoint: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  
  </script>
</body>
</html>