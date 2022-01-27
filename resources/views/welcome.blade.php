@include('layouts.head')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

<body>
    @include('layouts.header')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-9">
                    <h1>Welcome to <span>Thai Massage Shop</span></h1>
                    <h2 class="mt-4">ยินดีต้อนรับเข้าสู่เว็บไซต์ร้านนวดเเผนไทย</h2>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative"
                    data-aos="zoom-in" data-aos-delay="200">

                </div>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="hero" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="about-img">
                            <img src="{{ asset('assets/img/a.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>นวดแผนไทย </h3>
                        <p>
                            นวดแผนไทย คือ การนวดชนิดหนึ่ง ซึ่งเป็นศาสตร์บำบัดและรักษาโรคแขนงหนึ่งของการแพทย์แผนไทย
                            โดยจะเน้นในลักษณะการกด การคลึง การบีบ การดัด การดึง การอบ และประคบ
                            ซึ่งรู้จักกันโดยทั่วไปในชื่อ “นวดแผนโบราณ” ซึ่งไม่ใช่เพื่อรักษาความเจ็บปวดเท่านั้น
                            แต่ยังดีต่อสุขภาพ และสามารถรักษาโรค เพราะการนวดจะส่งผลโดยตรงต่อร่างกายและจิตใจ
                            โดยอาศัยการสัมผัสอย่างมีศิลปะ 
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">


                <!-- ======= Menu Section ======= -->
                <section id="menu" class="menu section-bg">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <h2>menu</h2>
                            <p>รายการบริการนวด</p>
                        </div>


                        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
                            @foreach ($services as $service)
                                <div class="col-lg-6 menu-item filter-starters">
                                    <img class="menu-img" src="{{ asset('backend/images/' . $service->image) }}"
                                        width="150px" alt="">
                                    <div class="menu-content">
                                        <a>{{ $service->name }}</a>
                                        <span>{{ $service->price }}</span>

                                    </div>
                                    <div class="menu-ingredients">
                                        <a> {{ $service->detail }}</a>
                                    </div>

                                </div>
                            @endforeach

                        </div>
                        <div class="mt-4">
                            {{ $services->links() }}
                        </div>
                    </div>
            </div>

            </div>
        </section><!-- End Menu Section -->



        <!-- ======= Events Section ======= -->
        <section id="e.jpg" class="events">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>events</h2>
                    <p>เกร็ดความรู้</p>
                </div>
                <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="{{ asset('assets/img/a.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>การนวด</h3>
                                    <p>
                                        การนวดคือ การบำบัดและทำให้ร่างกายผ่อนคลาย
                                        โดยใช้ทักษะทางร่างกายและอุปกรณ์เสริมด้วยการ บีบ จับ คลึง รีดเส้น เหยียบ ยัน
                                        กดจุด ดัด หรือกระตุ้นด้วยการสั่น
                                        เพื่อกระตุ้นให้การทำงานของกล้ามเนื้อและระบบต่างของร่างกายทำงานได้ดีขึ้น
                                        ถือเป็นประเภทหนึ่งของการรักษาที่มีมายาวนาน ทั้งนี้หากคุณสงสัยว่า
                                        เมื่อใดกันนะที่ร่างกายต้องการการนวด ลองสังเกตดูนะคะ
                                        เมื่อใดก็ตามที่รู้สึกว่าร่างกายทำงานได้ไม่ดีเหมือนเก่า เช่น รู้สึกตัวหนัก
                                        กล้ามเนื้อส่วนใดส่วนหนึ่งมีอาการเกร็งตึง เคลื่อนไหวได้ไม่คล่องแคล่วเหมือนแต่ก่อน
                                        เมื่อนั้นแสดงว่าร่างกายคุณต้องการการนวดแล้วล่ะ

                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="{{ asset('assets/img/d.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>ข้อควรรู้ก่อนจะไปนวดแผนไทย หรือ นวดแผนโบราณ </h3>

                                    <p>
                                        ทุกวันนี้เวลาเดินไปไหนมาไหนในกรุงเทพฯ สถานที่ที่เราพบเจอกันบ่อยพอ ๆ กับ 7-11
                                        ก็เห็นจะเป็นร้านนวดแผนไทยนี่แหละค่ะ
                                        นั่นก็เพราะว่าการนวดไทยนั้นกำลังเป็นที่ฮอตฮิตในทั้งหมู่คนไทยและชาวต่างประเทศสุด
                                        ๆ ไปเลยค่ะ

                                        แม้ว่าการนวดไทยนั้นทำให้เราสบายตัว คลายความเมื่อยล้า เลยทำให้เป็นที่นิยมสุด
                                        ๆ ผู้คนมากมายแห่เดินเข้าร้านนวดกันว่าเล่น แต่จริง ๆ
                                        แล้วรู้กันไหมคะการนวดนั้นใช่ว่าจะมีแต่ข้อดีเสมอไป จริงอยู่ว่าการนวดไทย หรือ
                                        การนวดแผนโบราณ นั้นมีข้อดีอยู่มาก แต่ก็ใช่ว่าจะไม่มีข้อเสียเลยค่ะ
                                        ดังนั้นก่อนเข้ารับการนวด
                                        ผู้นวดจึงควรจะต้องศึกษาข้อมูลเรื่องประโยชน์และโทษให้ดีเสียก่อน
                                        เพื่อป้องกันอันตราย หรือความเสียหายบางอย่างที่อาจเกิดขึ้นกับร่างกายได้ค่ะ <br>

                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="{{ asset('assets/img/c.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>หากมีแผล ควรงดนวด </h3>
                                    <p>
                                        ผู้ที่มีบาดแผล หรือบาดแผลติดเชื้อ
                                        การนวดแผนไทยจะทำให้แผลลุกลามและเสี่ยงต่อการติดเชื้อมากขึ้น โดยเฉพาะกับอุปกรณ์
                                        หมอน ผ้าปู ต่าง ๆ ควรจะเลือกเข้ารับการนวดจากร้านที่มีอนามัยที่ดีค่ะ
                                        ยิ่งถ้าการนวดต้องมีการใช้น้ำและน้ำมันควรหลีกเลี่ยงจนกว่าแผลจะหาย
                                        เพราะอาจเสี่ยงติดเชื้อได้
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Events Section -->

        <!-- ======= Book A Table Section ======= -->
        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Reservation</h2>
                    <p>Book a Table</p>
                </div>

                <form action="{{ route('book.create') }}" method="POST" role="form" class="form-group"
                    data-aos-delay="100">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" placeholder="Your Email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                            <input type="text" class="form-control" name="phone" placeholder="Your Phone">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <input type="text" name="date" class="form-control" placeholder="Date" id="datepicker">
                            @error('date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <input type="text" class="form-control" name="time" id="timepicker" placeholder="Time">
                            @error('time')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <input type="text" class="form-control" name="people" placeholder="People">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-primary">Send Booking</button>
                    </div>
                </form>

            </div>
        </section><!-- End Book A Table Section -->



        <!-- ======= Chefs Section ======= -->
        <section id="chefs" class="chefs">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Chefs</h2>
                    <p>teammenber</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <img src="{{ asset('assets/img/chefs/รูปภาพ1.jpg') }}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Mr.Kunlabut Boonchouy</h4>
                                    <span>font-end</span>
                                </div>
                                <div class="social">
                                    <a href="https://twitter.com/kunlabut2"><i class="bi bi-twitter"></i></a>
                                    <a href="https://web.facebook.com/kunlabut.kunlabut"><i
                                            class="bi bi-facebook"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <img src="assets/img/chefs/รูปภาพ2.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Mr. Natchat Thesrit</h4>
                                    <span>black-end</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="300">
                            <img src="assets/img/chefs/รูปภาพ3.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Mr. Sanphet Hom Huan</h4>
                                    <span>testterw</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Chefs Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>
            </div>

            <div data-aos="fade-up">
                <iframe style="border:0; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9213.991142370482!2d100.49934453676704!3d13.838674469267284!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x944b4fd9d843b40c!2z4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14Lie4LiH4Lip4LmM4Liq4Lin4Lix4Liq4LiU4Li04LmM!5e0!3m2!1sth!2sth!4v1630124653489!5m2!1sth!2sth"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></iframe>
            </div>

            <div class="container" data-aos="fade-up">

                <div class="row mt-5">
                    {{-- <div class="col-md-3">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>14, ถนน พิบูลสงคราม ตำบลสวนใหญ่ อำเภอเมืองนนทบุรี นนทบุรี 11000</p>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-md-3">
                        <div class="info">
                            <div class="open-hours">
                                <i class="bi bi-clock"></i>
                                <h4>Open Hours:</h4>
                                <p>
                                    Monday-Saturday:<br>
                                    6:00 AM - 23:00 PM
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>Kunlabut.2547@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
    @include('layouts.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    {{-- date --}}
    <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker({
                changeMonth: true,
                changeYear: true
            });
        });
    </script>

    {{-- cloes date --}}
    {{-- time --}}
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        $('#timepicker').timepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
    {{-- close time --}}

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;
            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;
            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;
            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
            }
        @endif
    </script>
</body>

</html>
