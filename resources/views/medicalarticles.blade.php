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
                        
                        <button type="button" class="btn btn-outline-info">???????? / ???????? ????????</button>
                    
                        <nav class="nav">
                            <a class="nav-link" href="#">???????? ??????</a>
                            <a class="nav-link active" aria-current="page" href="/medicalarticles">???????????????? ???????????? </a>
                            <a class="nav-link" href="/aboutus">???? ??????</a>
                            <a class="nav-link" href="/courses">??????????????</a>
                            <a class="nav-link" href="/home">????????????????</a>
                        </nav>
                    </div>

                    <div class="col-5">
                        <div class="logo">
                            <a href="home.html">
                                <img class="img-responsive logo_transparent_static visible" style="height: 80px;width: 100px;float: right;" src="images/logo.png" alt="?????????????? ???????????????? ?????????????? ????????????">
                                <div style="margin: 17px 20px;float: right;">
                                    <span>?????????????? ???????????????? ?????????????? ????????????</span><br>
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
                            <li class="breadcrumb-item active" aria-current="page">???????????????? ????????????</li>
                            <h5 style="--bs-breadcrumb-divider: '<';"> < </h5>
                            <li class="breadcrumb-item"><a href="home.html">????????????????</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-8 title">                    
                        <h2>???????????????? ????????????</h2>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- start slider1--> 
        
    <div class="slidermedical">
        <div class="container">
            <div class="row">
                <div class="card-content">
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
    <!-- end slider1-->
    


    <!-- start poster3  -->

    <div class="poster3">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <span>?????????? ???? ???????????? ??????????????????</span><br>
                        <div class="email d-flex">
                            <button type="button" class="btn btn-primary">????????????</button>
                            <input type="email" class="form-control" placeholder="???????????? ???????????????????? " aria-label="Username" aria-describedby="basic-addon1">
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
                                <li>???????????? ??????</li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="title col-6">
                        <h2>???????? ?????????? ?????? ?????????? 
                            <br>
                            ?????? ?????? ??????????????</h2>
                    </div>
                </div>
            </div>
    </div>
    <!-- start footer  -->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <h5>?????????? ????????</h5>
                    <ul class="menu">
                        <li>Info@domain.com</li>
                        <li>support@domain.com</li>
                        <li>Mobile: (+00) 000 000 000</li>
                        <li>Fax: (+00) 000 000 000</li>
                    </ul>
                </div>
                <div class="col-3">
                    <h5>???????????????? ???????????? </h5>
                    <ul class="menu">
                        <li>?????????????? ?????????????? ???? ???????????? ???? ??????????</li>
                        <li>???????? ?????? ?????????? ????????????????</li>
                        <li>???? ???? ?????????????? ???????? ???????? ?????????? ??????????????</li>
                        <li>???????????? ?????? ?????????????? ????????????????</li>
                    </ul>
                </div>
                <div class="col-3">
                    <h5> ?????????????? ????????????????  </h5>
                    <ul class="menu">
                        <li>????????????????</li>
                        <li>???? ??????</li>
                        <li>??????????????</li>
                        <li>???????????????? ????????????</li>
                    </ul>
                </div>
                <div class="col-4">
                    <div class="logo d-flex">
                        <a href="https://sna.myevntoo.info/en/homepage">
                            <img class="img-responsive logo_transparent_static visible" style="height: 60px;width: 80px;float: right;" src="https://sna.org.sa/wp-content/uploads/2021/05/logo.png" alt="?????????????? ???????????????? ?????????????? ????????????">
                            <div class="title">
                                <span style="font-weight: bold;padding-bottom: 10px;">?????????????? ???????????????? ?????????????? ????????????</span><br>
                                <em>Saudi Nurses Association</em>
                            </div>
                        </a>
                    </div> <br>
                    <p> ?????????? ???????????? ???? ?????????????? ???????????????? ?????????? ?????????? ?????????????? ???????? 
                        <br>
                        ???????????????? ???? ?????????????? ???????? ???? ?????? ?????????? ?????? ?????????????? ???? ?????????????? 
                        <br>
                        ?????????????????? ?????? ????????</p> 
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
                        ???????? ???????????? ????????????
                        <span>
                            ?????????????? ???????????????? ?????????????? ????????????
                        </span>
                        ?? 2021
                    </div> 
                    <div class="col-2 second">
                        ???????????? ????????????????
                    </div>                    
                    <div class="col-2 last">
                        ?????????? ????????????????
                    </div>                    
                
                </div>
            </div>
        </div>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
    function getPageList(totalPages, page, maxLength){
    function range(start, end){
        return Array.from(Array(end - start + 1), (_, i) => i + start);
    }

    var sideWidth = maxLength < 9 ? 1 : 2;
    var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
    var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;

    if(totalPages <= maxLength){
        return range(1, totalPages);
    }

    if(page <= maxLength - sideWidth - 1 - rightWidth){
        return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
    }

    if(page >= totalPages - sideWidth - 1 - rightWidth){
        return range(1, sideWidth).concat(0, range(totalPages- sideWidth - 1 - rightWidth - leftWidth, totalPages));
    }

    return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth + 1, totalPages));
    }

    $(function(){
    var numberOfItems = $(".card-content .pic").length;
    var limitPerPage = 3; //How many card items visible per a page
    var totalPages = Math.ceil(numberOfItems / limitPerPage);
    var currentPage;

    function showPage(whichPage){
        if(whichPage < 1 || whichPage > totalPages) return false;

        currentPage = whichPage;

        $(".card-content .pic").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();

        $(".pagination li").slice(1, -1).remove();

        getPageList(totalPages, currentPage, paginationSize).forEach(item => {
        $("<li>").addClass("page-item").addClass(item ? "current-page" : "dots")
        .toggleClass("active", item === currentPage).append($("<a>").addClass("page-link")
        .attr({href: "javascript:void(0)"}).text(item || "...")).insertBefore(".next-page");
        });

        $(".previous-page").toggleClass("disable", currentPage === 1);
        $(".next-page").toggleClass("disable", currentPage === totalPages);
        return true;
    }

    $(".pagination").append(
        $("<li>").addClass("page-item").addClass("previous-page").append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Prev")),
        $("<li>").addClass("page-item").addClass("next-page").append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Next"))
    );

    $(".card-content").show();
    showPage(1);

    $(document).on("click", ".pagination li.current-page:not(.active)", function(){
        return showPage(+$(this).text());
    });

    $(".next-page").on("click", function(){
        return showPage(currentPage + 1);
    });

    $(".previous-page").on("click", function(){
        return showPage(currentPage - 1);
    });
    });
</script>
      
        
        
</body>
</html>