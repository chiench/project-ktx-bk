
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>KTX Đại Học Bách Khoa Hà Nội</title>
        <!-- Favicon-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{url('/file')}}/css/styles.css" rel="stylesheet" />
    </head>
    <body>

        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-light">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="#"> <img style="width: 234px; height: 48px;" src="\file\logo_ktx.jpg" alt=""> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        <li class="nav-item"><a class="moveitem" style="color: black" class="nav-link " href="{{route('login')}}">Login</a></li>
                        <li class="nav-item"><a class="moveitem" style="color: black" class="nav-link" href="{{route('register')}}">Register</a></li>
                        <style>
                            .moveitem{
                                list-style: none;

                                text-decoration: none;
                                margin: 10px 10px 10px 10px;
                                padding: 5px 5px 5px 5px;
                                border: 1px solid rgb(248 249 250 / 1);
                            }
                            .moveitem:hover{

                                margin: 10px 10px 10px 10px;
                                text-decoration: none;
                                border-radius: 3px;
                                border: 1px solid rgb(7, 7, 31);
                                background-color: rgb(19, 72, 141);

                            }
                        </style>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="\file\2.1-1.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="\file\2.16.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="\file\2.9.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </header>
        <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <img src="\download.jpg" style="width: 366px; height: 256px;" alt="">
                                <h2 style="font-family: monospace" class="fs-4 fw-bold">THÔNG BÁO CỦA TRUNG TÂM QL KTX</h2>
                                <p class="mb-0">Hiện nay Trung tâm QL KTX đang xếp ở cho sinh viên vào các nhà trong khu nội trú KTX theo lịch học của nhà trường.
                                    Vậy Trung ...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <img src="\download.jpg" style="width: 366px; height: 256px;" alt="">
                                <h2 style="font-family: monospace" class="fs-4 fw-bold">THÔNG BÁO CỦA TRUNG TÂM QL KTX</h2>
                                <p class="mb-0">Yêu cầu sinh viên trước khi vào các tòa nhà ở phải quét QR code đặt ở tại mỗi tòa nhà và tuân thủ thông điệp 5K của Bộ Y tế..</p>                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <img src="\download.jpg" style="width: 366px; height: 256px;" alt="">
                                <h2 style="font-family: monospace" class="fs-4 fw-bold">THÔNG BÁO CỦA TRUNG TÂM QL KTX</h2>
                                <p class="mb-0">Nhà trường và Trung tâm QL KTX xin thông báo thời gian thu lệ phí và mức thu lệ phí xếp cho sinh viên từ K65 trở về trước như sau:</p>                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <hr>
            <div style="text-align: center" class="text">
                 <h1 style="margin-bottom: 20px">
                    ĐƠN VỊ HỖ TRỢ
                </h1>
                <div style="padding: 10px 10px 10px 10px; margin: 10px 0px 40px 0px" class="img">
                    <img style="width: 234px; height: 64px;"  src="\logo.jpg" alt="">
                    <img style="width: 234px; height: 64px;"  src="\logo.jpg" alt="">
                    <img style="width: 234px; height: 64px;"  src="\logo.jpg" alt="">
                    <img style="width: 234px; height: 64px;"  src="\logo.jpg" alt="">
                    <img style="width: 234px; height: 64px;"  src="\logo.jpg" alt="">
                </div>
            </div>

        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">VP TRUNG TÂM</p></div>
            <div class="container"><p class="m-0 text-center text-white">Văn phòng: B9 – 101, 102</p></div>
            <div class="container"><p class="m-0 text-center text-white"> Điện thoại: 024 38692942</p></div>
            <div class="container"><p class="m-0 text-center text-white"> Email: ktx@hust.edu.vn</p></div>
            Email: ktx@hust.edu.vn
            <div class="container"><p class="m-0 text-center text-white"> CSAM 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{url('/file')}}/js/scripts.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
