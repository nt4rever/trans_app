@extends('layout')
@section('content')
    <!-- Header -->
    <header class="ex-header bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Giới thiệu</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Basic -->
    <div class="ex-basic-1 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-fluid mt-5 mb-3" src="{{ URL::asset('frontend/images/article-details-large.jpg') }}"
                        alt="alternative">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->


    <!-- Basic -->
    <div class="ex-basic-1 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <p>
                        Văn phòng dịch thuật Minh Tuệ được thành lập vào năm 2018 có trụ sở
                        chính tại thành phố Huế là nhà cung ứng dịch vụ biên dịch, phiên dịch
                        toàn quốc. Chúng tôi là một trong những doanh nghiệp đầu tiên cung cấp dịch vụ dịch thuật chuyên
                        nghiệp tại trường Việt Nam.
                    </p>
                    <p class="mb-5">Chúng tôi chuyên cung cấp các dịch vụ biên dịch và phiên dịch, dịch thuật công chứng
                        chất lượng cao
                        hơn 50 ngôn ngữ khác nhau như tiếng Anh, Nhật, Hàn, Trung, Pháp, Đức, Nga, Tây Ban Nha, Bồ Đào Nha,
                        Ý, Ba Lan, Phần Lan, Thái Lan, Hà Lan, Rumani, Lào, Campuchia, Philippin, Indonesia, La Tinh, Thụy
                        Điển, Malaysia, Thổ Nhĩ Kỳ..vv..</p>

                    <h2 class="mb-3">Đội ngũ nhân sự</h2>
                    <p class="mb-4">Văn phòng dịch thuật Minh Tuệ với đội ngũ biên dịch viên được tuyển dụng,
                        chọn lọc khắt khe, đảm bảo tốt nghiệp trình độ đại học chuyên ngữ trở lên và có kinh nghiệm dịch
                        thuật lĩnh vực liên quan của mình từ 5~20 năm, cùng với đội ngũ cộng tác viên dịch thuật chất lượng
                        cao đã hợp tác lâu năm với công ty gồm các tu nghiệp sinh và người bản xứ, các giảng viên chính,
                        thạc sỹ, tiến sỹ đang giảng dạy tại các trường đại học lớn trong nước.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->


    <!-- Cards -->
    <div class="ex-cards-1 pt-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <ul class="list-unstyled">
                            <li class="media">
                                <span class="fa-stack">
                                    <span class="fas fa-circle fa-stack-2x"></span>
                                    <span class="fa-stack-1x">1</span>
                                </span>
                                <div class="media-body">
                                    <h5>Tầm nhìn</h5>
                                    <p>Trở thành người dẫn đầu trong lĩnh vực dịch thuật và được ưa chuộng nhất tại thị
                                        trường Việt Nam.</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <ul class="list-unstyled">
                            <li class="media">
                                <span class="fa-stack">
                                    <span class="fas fa-circle fa-stack-2x"></span>
                                    <span class="fa-stack-1x">2</span>
                                </span>
                                <div class="media-body">
                                    <h5>Sứ mệnh</h5>
                                    <p>Xóa tan mọi rào cản ngôn ngữ, mang lại “thế giới phẳng” cho khách hàng!</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <ul class="list-unstyled">
                            <li class="media">
                                <span class="fa-stack">
                                    <span class="fas fa-circle fa-stack-2x"></span>
                                    <span class="fa-stack-1x">3</span>
                                </span>
                                <div class="media-body">
                                    <h5>Giá trị cốt lõi</h5>
                                    <p>Giá trị cốt lõi là được hình thành từ giá trị của những người sáng lập, điều hành
                                        doanh nghiệp và đội ngũ nhân viên, là “Bản sắc” của doanh nghiệp, là cơ sở để xây
                                        dựng “Văn hóa” của văn phòng dịch thuật Minh Tuệ.</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-cards-1 -->
    <!-- end of cards -->


    <!-- Basic -->
    <div class="ex-basic-1 pt-3 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <p class="mb-5">Khi đem tài năng, sức lực, trí tuệ của bản thân để nỗ lực vì quyền lợi và sự phát triển
                        chung, các thành viên sẽ phát huy hết những tiềm lực, giá trị của bản thân. Đồng thời, khẳng định ý
                        nghĩa tồn tại và giá trị đích thực của mình.</p>

                    <h2 class="mb-4">Hướng đến khách hàng</h2>
                    <img class="img-fluid mb-5" src="{{ URL::asset('frontend/images/article-details-small.jpg') }}"
                        alt="alternative">
                    <p>Khách hàng chính là người trả lương cho chúng ta hàng tháng. Hãy phục vụ khách hàng theo cách tốt
                        nhất bạn có.</p>
                    <p class="mb-5">Sự chuyên nghiệp không phải tự nhiên mà có, nó là kết quả của một quá trình làm việc,
                        đúc rút kinh nghiệm thông qua quá trình học hỏi không ngừng. Mọi thành viên của công ty phải xác
                        định luôn học hỏi để có một tri thức cũng như xây dựng phương pháp làm việc khoa học và làm hài lòng
                        khách hàng nhất</p>
                    <div class="text-box mb-5">
                        <h3>Tinh thần “phải làm được”</h3>
                        <p>Đừng nói KHÔNG THỂ, hãy đưa ra GIẢI PHÁP.</p>
                    </div> <!-- end of text-box -->
                    <p class="mb-4">Chúng tôi mong muốn được hợp tác với tất cả các đơn vị trên toàn Quốc trên tinh thần
                        chia sẽ lợi ích cũng như cơ hội kinh doanh. Quý khách hàng có nhu cầu biên dịch tài liệu hoặc thuê
                        phiên dich, đừng ngần ngại, hãy liên hệ với chúng tôi theo các thông tin dưới đây</p>
                    <ul class="list-unstyled li-space-lg mb-5">
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><strong>Văn phòng</strong> dịch thuật Minh Tuệ</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><strong>Hotline</strong> 0336757208</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><strong>Email</strong> dichthuat.nmt@gmail.com</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><strong>Địa chỉ:</strong> 62 Hàm Nghi, phường Phước Vĩnh, Thành Phố Huế</div>
                        </li>
                    </ul>

                    <a class="btn-solid-reg mb-5" href="{{ URL::to('/contact') }}">Liên hệ</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->

@endsection
