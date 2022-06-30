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
    <div class =" upper-bar" style="color: white; background-color: #081839;" >
        <div class="first-bar">
            <div class="container">
                <div class="row">
                    <div class="header col-8 col-md-5 col-lg-7">
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
                        
                        <a href="/new"> <button type="button" class="btn btn-outline-info" >دخول / حساب جديد</button> </a>
                    
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="container-fluid">
                                <button class="navbar-toggler burger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="/home">الرئيسية</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/courses">الدورات</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/aboutus">من نحن</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/medicalarticles">المقالات الطبية </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">اتصل بنا</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>

                    <div class="col-4 col-md-7 col-lg-5">
                        <div class="logo">
                            <a href="home.html">
                                <img class="img-responsive logo_transparent_static visible" style="height: 80px;width: 100px;float: right;" src="images/logo.png" alt="الجمعية السعودية للتمريض المهني">
                                <div style="margin: 17px 20px;float: right;">
                                    <span>الجمعية السعودية للتمريض المهني</span><br>
                                    <em class="text">Saudi Nurses Association</em>
                                </div>
                            </a>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- start headline -->
    
    <div class="headline">
        <div class="first-bar">
            <div class="container">
                <div class="row">
                    <div class="col-4 bread">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">تسجيل الدخول </li>
                            <h5 style="--bs-breadcrumb-divider: '<';"> < </h5>
                            <li class="breadcrumb-item"><a href="home.html">الرئيسية</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-8 title">                    
                        <h2> تسجيل الدخول </h2>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- start textbox -->
    <div class="textbox">
        <div class="first-bar">
        <div class="container">
        <div class="row">
            <div class="col">
                <form class="row g-3">

                    <div class="col-md-6">
                        <label for="formGroupExampleInput" class="form-label">Frist Name</label>
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                        <div class="valid-feedback">
                            Looks good!
                          </div>
                    </div>
                    <div class="col-md-6">
                        <label for="formGroupExampleInput" class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                    </div>
                    
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlTextarea1" class="form-label">phone</label>
                        <input type="number" class="form-control" id="exampleFormControlTextarea1">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Gender</label>
                        <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Male</label>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Date of birth</label>
                        <div>
                            <select aria-label="Day" name="birthday_day" id="day" title="Day" class="form-label" aria-describedby="js_68">
                                <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23" selected="1">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
                            </select>  
                            <select aria-label="Month" name="birthday_month" id="month" title="Month" class="form-label">
                                <option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4" selected="1">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>
                            </select> 
                            <select aria-label="Year" name="birthday_year" id="year" title="Year" class="form-label">
                                <option value="2022" selected="1">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option>
                            </select>            
                        </div>
       
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" placeholder="City" aria-label="City">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>أعذب</option>
                            <option>مرتبط</option>
                            <option>متزوج</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" class="form-control" placeholder="Zip" aria-label="Zip">
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        </div>
    </div>

<!-- start textbox2--> 


    <!-- start textbox3  -->
    

    <!-- start poster3  -->

    <!-- start poster3  -->

    <div class="poster3" style="background-color: #f6fafe;">
        <div class="container">
            <div class="row">
            <div class="title col-lg-7 col-md-7 col-12">
                    <h2>ابقي دائما علي اطلاع 
                        <br>
                        علي آخر أخبارنا</h2>
                </div>
                <div class="login col-lg-5 col-md-5 col-12">
                    <span>اشترك في النشرة الاخبارية</span><br>
                    <div class="email d-flex">
                        <input type="email" class="form-control col-8" placeholder="البريد الالكتروني " aria-label="Username" aria-describedby="basic-addon1">
                        <button type="button" class="btn btn-primary col-4">إشتراك</button>
                    </div>
                    <div class="follow-us d-flex">
                        <ul class="social-icons"> 
                            <li>تابعنا علي</li>
                            <li>
                                <a href="https://www.facebook.com/saudinursing"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/Saudi_Nurses"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://web.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/add/Saudi_Nurses"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>

    <!-- start footer  -->

    <div class="footer">
        <div class="container">
            <div class="row">
            <div class="col-md-5 col-lg-4 col-12">
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
                <div class="col-md-2 col-lg-3 col-4">
                    <h5> القائمة الرئيسية  </h5>
                    <ul class="menu">
                        <li>الرئيسية</li>
                        <li>من نحن</li>
                        <li>الدورات</li>
                        <li>المقالات الطبية</li>
                    </ul>
                </div>
                <div class="col-md-3 col-lg-3 col-4">
                    <h5>المقالات الطبية </h5>
                    <ul class="menu">
                        <li>إجراءات للتعافي من كورونا في منزلك</li>
                        <li>تعرف على أضرار البيوتين</li>
                        <li>ما هي الفواكه التي ترفع الضغط المنخفض</li>
                        <li>التهاب غرز الولادة الطبيعية</li>
                    </ul>
                </div>
                <div class="col-md-2 col-lg-2 col-4 mobile">
                    <h5>تواصل معنا</h5>
                    <ul class="menu">
                        <li>Info@domain.com</li>
                        <li>support@domain.com</li>
                        <li>Mobile: (+00) 000 000 000</li>
                        <li>Fax: (+00) 000 000 000</li>
                    </ul>
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
                <div class="text  row">
                <div class="col-lg-2 col-md-3 col-6 last">
                        سياسة الخصوصية
                    </div> 
                    <div class="col-lg-2 col-md-2 col-6  second">
                        الشروط والاحكام
                    </div>
                    <div class="col-lg-8 col-md-7 col-12 first">
                        جميع الحقوق محفوظة
                        <span>
                            للجمعيه السعودية للتمريض المهني
                        </span>
                        © 2021
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
    

</body>
</html>