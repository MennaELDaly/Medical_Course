<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SNA </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700&display=swap" rel="stylesheet">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
</head>
<body>
    <!-- start upper bar-->
    <div class =" upper-bar" >
        <div class="container">
            <div class="row">
                <div class="header col-7">
                    <div class="search">
                        <a href="#" type="button" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                            <i class="fas fa-search"></i>
                        </a>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                              
                              <div class="modal-body">
                                <div class="search-title">SEARCH</div>
                                <form role="search" method="get" id="searchform" action="https://wordpresslms.nazil.net/">
                                    <div class="search-wrapper input-group">
                                        <input placeholder="Start typing here..." type="text" class="form-control search-input" value="" name="s" id="s">
                                        <button type="button" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-outline-info" >دخول / حساب جديد</button>
                
                    <nav class="nav">
                        <a class="nav-link" href="#">اتصل بنا</a>
                        <a class="nav-link" href="/medicalarticles">المقالات الطبية </a>
                        <a class="nav-link" href="/aboutus">من نحن</a>
                        <a class="nav-link" href="/courses">الدورات</a>
                        <a class="nav-link active" aria-current="page" href="/home">الرئيسية</a>
                    </nav>
                </div>

                <div class="col-5">
                    <div class="logo">
                        <a href="home.html">
                            <img class="img-responsive logo_transparent_static visible" style="height: 80px;width: 100px;float: right;" src="images/logo.png" alt="الجمعية السعودية للتمريض المهني">
                            <div style="margin: 17px 20px;float: right;">
                                <span>الجمعية السعودية للتمريض المهني</span><br>
                                <em>Saudi Nurses Association</em>
                            </div>
                        </a>
                    </div>  
                </div>
            </div>
        </div>
    </div>
        <!-- end upper bar-->
        
    <!-- start poster-->

    <div class ="poster1" style="background-image: url('images/7.png');">
        <div class="container">
            <div class="row" style="background-image: url('images/6.jpg'); background-size: cover; background-position: top center;position: relative;">
               
                <div class="slider col-6">
                    <h1> فريق مدرسين ذو الخبرة<br> 
                        ومؤهلات عالية لرعاية   لا <br> مثيل لها</h1>
                    <p> هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص</p> <br>
                    <button type="button" class="btn btn-outline-light">تسجيل الدخول</button>
                    <button type="button" class="btn btn-info">تصفح الدورات</button>

                </div>
            </div>
        </div>
    </div>
    <!-- end poster -->
    <!-- start slider-->
    <div class ="landing1" >
        <div class="container">
            <div class="row">
                <div class="icons col-5">
                    <div class="col">
                        <img src="images/i1.png">
                        <h5>محاضرات مرئية</h5>
                    </div>
                    <div class="col">
                        <img src="images/i2.png">
                        <h5>متابعة التقدم الدراسي</h5>
                    </div>
                    <div class="col">
                        <img src="images/i3.png">
                        <h5>محاضرات مباشرة</h5>
                    </div>
                    <div class="col">
                        <img src="images/i4.png">
                        <h5>شهادات حضور</h5>
                    </div>
                </div>
                <div class="detals col-7">
                    <h1> الجمعية السعودية للتمريض المهني</h1>
                    <p> هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى)
                         <span> 
                             لوريم ايبسوم ( Lorem Ipsum ) 
                        </span>
                        ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبيبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص،
                         لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider-->
    <!-- start slider1--> 
    
    <div class ="slider1" >
        <div class="container">
            <div class="row">
                <div class="top">
                    <h1>أحدث الدورات</h1>
                    <a href="/courses"> عرض كل الدورات</a>
                </div>
                <div id="fslider" class="owl-carousel  owl-theme">
                    @foreach($courses as $course)
                        <div class="ms-2">
                            <a href="/one_of_courses"> 
                                <div class="card mb-3" >
                                    <div class="row g-0">
                                        <div class="col-md-6">
                                            <img src="{{$course->image}}" class="img-fluid rounded-start">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <span class="first">{{$course->date}}</span>
                                                <span class="second"> {{$course->department_id}}</span>
                                                <h4 class="card-title">{{$course->name}}</h4>
                                                <h5>{{$course->price}} <span class="last">ر.س</span> </h5>
                                                <button type="button" class="btn btn-info a1" href="/one_of_courses"> عرض معلومات الدورة </button>
                                                <button type="button" class="btn btn-outline-info"><i class="fas fa-cart-plus"></i></button>

                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
            
        </div>

    </div>
    
<!-- end slider1--> 
<!-- start poster2-->

<div class =" poster2" style="background-image: url('images/7.png');">
    <div class="container">
        <div class="row" style="background-image: url('images/14.jpg'); background-size: cover; background-position: top center;position: relative;">
           
            <div class="slider col-6">
                <h1>إصنع قصة نجاحك</h1>
                <p> هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص</p> <br>
                <p> هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر </p> <br>
                <button type="button" class="btn btn-outline-light">من نحن</button>
                <button type="button" class="btn btn-info">دخول / حساب جديد</button>

            </div>
        </div>
    </div>
</div>
<!-- end poster2 -->
<!-- end landing2 -->

<div class ="landing2" >
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>2782</h3>
                <h4> شهادة ممنوحة</h4>
            </div>
            <div class="col">
                <h3>3237</h3>
                <h4>دورة متقدمة </h4>
            </div>
            <div class="col">
                <h3>5750</h3>
                <h4> طالب مبدع</h4>
            </div>
            <div class="col">
                <h3>4905</h3>
                <h4> محاضر متخصص</h4>
            </div>
        </div>
    </div>
</div>
<!-- end landing2 -->
<!-- start sliderteam  -->

<div class ="sliderteam" >
    <div class="container">
        <div class="row">
            <div class="top">
                <h1>أفضل المدربين</h1>
            </div>
            <div id="lslider" class="owl-carousel owl-theme">
                @foreach($teams as $team)
                    <div class="ms-2">
                        <div class="card mb-3" >
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{$team->image}}" class="img-fluid rounded-circle">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <span class="first">{{$team->department_id}}</span>
                                        <h5 class="card-title">{{$team->name}}</h5>
                                        <span class="second"> <i class="far fa-file"></i> 20 دورة </span>
                                        <span class="last"> <i class="far fa-star"></i> 14 تقييم </span>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

<!-- start medical  -->

<div class="slidermedical">
    <div class="container">
        <div class="row">
            <div class="top">
                <h1> المقالات الطبية</h1>
                <a href="/medicalarticles"> عرض كل المقالات</a>
            </div>
            <div id="mslider" class="owl-carousel owl-theme">
                @foreach($blogs as $blog)
                    <div class="card bg-dark text-white">
                        <a href="/one_of_Articles"> 
                            <img src="{{$blog->image}}" class="card-img" >
                            <div class="card-img-overlay">
                                <h5 class="card-title">{{$blog->title}}</h5>
                                <span>{{$blog->date}}</span>
                                <span> {{$blog->department_id}}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
                  
            </div>
        </div>
    </div>
</div>

<!-- start subscribe  -->

<div class="poster3">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <span>اشترك في النشرة الاخبارية</span><br>
                <div class="email d-flex">
                    <button type="button" class="btn btn-primary">إشتراك</button>
                    <input type="email" class="form-control" placeholder="البريد الالكتروني " aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="follow-us d-flex">
                    <ul class="social-icons">
                        <li>
                            <a href="https://www.instagram.com/add/Saudi_Nurses"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://web.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/Saudi_Nurses"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/saudinursing"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>تابعنا علي</li>
                    </ul>
                </div>
                
            </div>
            <div class="title col-6">
                <h2>ابقي دائما علي اطلاع 
                    <br>
                    علي آخر أخبارنا</h2>
            </div>
        </div>
    </div>

</div>

<!-- start footer  -->

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <h5>تواصل معنا</h5>
                <ul class="menu">
                    <li>Info@domain.com</li>
                    <li>support@domain.com</li>
                    <li>Mobile: (+00) 000 000 000</li>
                    <li>Fax: (+00) 000 000 000</li>
                </ul>
            </div>
            <div class="col-3">
                <h5>المقالات الطبية </h5>
                <ul class="menu">
                    <li>إجراءات للتعافي من كورونا في منزلك</li>
                    <li>تعرف على أضرار البيوتين</li>
                    <li>ما هي الفواكه التي ترفع الضغط المنخفض</li>
                    <li>التهاب غرز الولادة الطبيعية</li>
                </ul>
            </div>
            <div class="col-3">
                <h5> القائمة الرئيسية  </h5>
                <ul class="menu">
                    <li>الرئيسية</li>
                    <li>من نحن</li>
                    <li>الدورات</li>
                    <li>المقالات الطبية</li>
                </ul>
            </div>
            <div class="col-4">
                <div class="logo d-flex">
                    <a href="https://sna.myevntoo.info/en/homepage">
                        <img class="img-responsive logo_transparent_static visible" style="height: 60px;width: 80px;float: right;" src="https://sna.org.sa/wp-content/uploads/2021/05/logo.png" alt="الجمعية السعودية للتمريض المهني">
                        <div class="title">
                            <span style="font-weight: bold;padding-bottom: 10px;">الجمعية السعودية للتمريض المهني</span><br>
                            <em>Saudi Nurses Association</em>
                        </div>
                    </a>
                </div> <br>
                <p> هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن 
                    <br>
                    الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات 
                    <br>
                    العشوائية إلى النص</p> 
            </div>
        </div>
    </div>
</div>

<!-- start copyright  -->

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="line">
                    <li class="my-3 mx-4 border-top"></li>
            </div>
            <div class="text d-flex">
                <div class="col-8 first">
                    جميع الحقوق محفوظة
                    <span>
                        للجمعيه السعودية للتمريض المهني
                    </span>
                    © 2021
                </div> 
                <div class="col-2  second">
                    الشروط والاحكام
                </div>                    
                <div class="col-2 last">
                    سياسة الخصوصية
                </div>                    
            
            </div>
        </div>
    </div>
    
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>
        $('#fslider').owlCarousel({
            rtl:true,
            margin: 15,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        })
    </script>
    <script>
        $('#lslider').owlCarousel({
            rtl:true,
            margin: 15,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
    <script>
        $('#mslider').owlCarousel({
            rtl:true,
            margin: 15,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
    
</body>
</html>