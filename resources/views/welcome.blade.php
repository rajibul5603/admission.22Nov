<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ trans('panel.site_title') }}</title>
    <link rel="icon" href="{{ asset('public/images/favicon/favicon.ico') }}" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        * {
            padding: 0px;
            margin: 0px;

        }
        

        @font-face {
            font-family: nikosh;
            src: url('{{ asset("font/Nikosh.tff") }}');
        }


        body {
            font-family: "nikosh" !important;
            font-size: 20px;
        }

        .center {
            margin: auto;
            width: 50%;
            padding: 10px;
        }

        p {
            text-align: justify;
        }

        a:not([href]):not([tabindex]) {
            color: inherit;
            text-decoration: none;
        }

        #applyBtn>a {
            color: inherit;
            text-decoration: none;
        }

        span.required {
            color: #cd0000;
            margin: 0 2px;
        }

        /*eservice statics info*/
        .eservice-statics-info {
            margin-left: 20px;
            margin-right: 20px;
            margin-top: 20px;
            overflow: hidden;
            background: #fff;
            border: 1px solid #a0a0a0;
            /*border-top: 2px solid #9d84c1; border-bottom: 2px solid #58c41d; _background: linear-gradient(#ffffff10, #58c41d30)*/
        }

        .eservice-statics-info>div.row>div {
            _padding: 0px
        }

        .eservice-statics-info>div.row>div:first-child {
            _padding-left: 15px
        }

        .eservice-statics-info>div.row>div:last-child {
            border-right: 0px;
            _padding-right: 15px
        }

        .eservice-statics-info .eservice-statics {
            padding: 20px 3px
        }

        .eservice-statics-info .eservice-statics img {
            width: 35px;
            float: left;
            margin-right: 7px
        }

        .eservice-statics-info .eservice-statics .eservice-statics-name {
            white-space: nowrap;
            display: inline-block;
            text-align: left;
            line-height: 21px;
            _margin-top: 3px
        }

        .eservice-statics-info .eservice-statics .eservice-statics-name .statics {
            display: block;
            color: #182d7c;
            font-weight: bold;
            font-size: 1rem
        }

        /*eservice statics info*/

        .eservice-guide {
            padding: 0px;
            background: #f9f9f950;
            padding: 15px;
            border: 1px solid #e2e2e2;
            border-radius: 5px;
        }


        .eservice-guide-info-title {
            background: linear-gradient(to right, #663390, #66339090);
            color: #FFF;
            border-radius: 5px 0 0 5px;
            font-size: 1.2rem;
            line-height: 35px;
            text-align: center;
            padding: 10px;
            text-shadow: 0px 1px 1px #000;
        }

        .eservice-guide-info {
            background: #66339030;
            border-radius: 0 5px 5px 0;
            padding: 10px;
            font-size: 20px;
        }

        .common-eservice-rules {

            padding: 0px 20px 0px 0px;
            background: #f9f9f950;
            padding: 15px;
            border: 1px solid #e2e2e2;
            border-radius: 5px;
        }



        .common-eservice-rules ul {
            list-style: none;
        }

        .common-eservice-rules ul li {
            margin: 10px 5px 10px 0px;
            text-align: justify;
        }



        .steps-icon-progress {
            margin: 1rem -1rem 2rem -1rem;
            border-bottom: 1px solid #f1f1f1
        }

        .steps-icon-progress li {
            width: 33.3%;
            -webkit-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out
        }

        .steps-icon-progress .icon .font-icon {
            display: none
        }

        .steps-icon-progress .caption {
            font-size: 0.95rem
        }

        .steps-icon-progress .active .caption {
            font-size: 0.95rem
        }

        .steps-icon-progress ul {
            margin-bottom: 20px
        }

        .steps-icon-progress .icon {
            width: 20px;
            height: 20px
        }

        .steps-icon-progress li:before {
            height: 5px;
            top: 9px
        }

        .eservice-guide-basic {
            min-height: 100px
        }

        .eservice-agree-information .eservice-name {
            font-size: 1.3rem;
            margin: 10px 0px 10px 0px;
            color: #0082c6;
            background: #e9f2f675;
            padding: 7px;
            border-radius: 5px
        }

        .eservice-agree-information .apply-online {
            display: inline-block;
            margin: auto;
            padding: 7px;
            background: #8bc64380;
            border-radius: 5px;
            width: 185px;
            cursor: pointer;
            color: black;
            font-weight: bold;
            text-decoration: none;
        }

        .eservice-agree-information .apply-online img {
            height: 50px
        }

        .eservice-agree-information .apply-online i {
            padding: 8px 6px 7px 9px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            color: #FFF;
            background: #8bc643;
            margin-left: 10px
        }

        .eservice-agree-information .apply-online:hover {
            background: #8bc643;
            color: #fff;
        }

        .eservice-agree-information .apply-online:hover span {
            color: #fff
        }

        .eservice-agree-information .apply-online:hover i {
            background: #c5e2a1;
            color: #333
        }

        .eservice-guide {
            padding: 0px;
            background: #f9f9f950;
            padding: 15px;
            border: 1px solid #e2e2e2;
            border-radius: 5px
        }

        .eservice-guide h6 {
            border-bottom: 1px solid #cacaca;
            padding-bottom: 5px;
            font-weight: bold;
            font-size: 26px;
        }

        .eservice-guide-info-title {
            background: linear-gradient(to right, #663390, #66339090);
            color: #FFF;
            border-radius: 5px 0 0 5px;
            font-size: 1.2rem;
            line-height: 35px;
            text-align: center;
            padding: 10px;
            text-shadow: 0px 1px 1px #000
        }

        .eservice-guide-info-title i {
            display: none
        }


        .common-eservice-rules {
            _text-align: left;
            padding: 0px 20px 0px 0px;
            background: #f9f9f950;
            padding: 15px;
            border: 1px solid #e2e2e2;
            border-radius: 5px
        }

        .common-eservice-rules h6 {

            border-bottom: 1px solid #cacaca;
            padding-bottom: 5px;
            font-weight: bold;
            font-size: 26px;
        }

        .common-eservice-rules ul li {
            margin: 0px 50px 10px 0px;
            text-align: justify
        }

        .eservice-required-docs {
            margin-bottom: 5px
        }

        .eservice-required-docs i {
            margin-right: 10px;
            color: #FFF;
            text-shadow: 0px 1px 1px #000
        }

        .eservice-required-docs a {
            color: #663390;
            _display: block
        }

        .eservice-required-docs a i {
            color: #663390;
            text-shadow: none;
            margin-right: 5px
        }

        .faq {
            margin-bottom: 5px;
        }

        .modal-title {
            font-size: 25px;
            font-weight: bold;
        }

        .nav-item>.nav-link {
            font-weight: bold;
        }
    </style>

</head>

<body>

    <main class="flex-shrink-0 ">
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light ">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">
                    <img src="{{asset('public/images/aams-logo-big.png')}}" class="img-fluid" alt="PMEAT">
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="#" class="nav-item nav-link" data-bs-toggle="modal" data-bs-target="#helpDesk">
                            <i class="fa fa-mobile" aria-hidden="true"></i> ??????????????????????????????</a>

                        <a href="#" class="nav-item nav-link" data-bs-toggle="modal" data-bs-target="#faqModal">
                            <i class="fa fa-question-circle" aria-hidden="true"></i> ?????????????????? ??????????????????????????? ??????????????????</a>
                        @if (Route::has('login'))
                        @auth
                        <!-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a> -->
                        <a href="{{ url('/home') }}" class="nav-item nav-link">
                            <i class="fa fa-home" aria-hidden="true"></i> ?????????????????? ?????????
                        </a>
                        @else


                        @if (Route::has('register'))
                        <!-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a> -->
                        <a href="{{ route('register') }}" class="nav-item nav-link">
                            <i class="fa fa-user-plus" aria-hidden="true"></i> ???????????????????????????????????? ????????????
                        </a>

                        <!-- <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a> -->
                        <a href="{{ route('login') }}" class="nav-item nav-link">
                            <i class="fa fa-sign-in" aria-hidden="true"></i> ???????????? ????????????
                        </a>
                        @endif
                        @endauth

                        @endif
                    </div>
                </div>
            </div>
        </nav>

        <div class="container-fluid px-4">

            <section id="eservice" class="main-panel">
                <div class="eservice-agree-information step1" style="display: block;">
                    <div class="eservice-guide-basic mb-4">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <h2 class="eservice-name"><b>
                                        ?????????????????? ??? ????????????????????? ??????????????????????????????????????? ?????????????????? ????????????????????????????????? ??????????????? ????????????????????????????????? ??????????????? ??????????????????
                                        ?????????????????? ????????????????????????????????? ???????????????????????? ?????????????????????
                                    </b>
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <p class="px-2 text-justify">
                                    ?????????????????????????????????????????? ?????????????????? ?????????????????? ????????????????????? ???????????????????????? ????????????????????? ???????????????????????? ?????????????????? ??? ??????????????????
                                    ??????????????????????????????????????? ?????????????????? ????????????????????????????????? ???????????????
                                    ????????????????????????????????? ??????????????? ?????????????????? ?????????????????? ????????? ??????????????? ???????????????????????? ?????????????????? ??? ??????????????????
                                    ??????????????????????????????????????? ?????????????????? ????????????????????????????????? ???????????????
                                    ????????????????????????????????? ???????????????????????? ????????????????????? ???,????????? ????????????, ???????????? ???????????????????????? ????????????????????? ???,????????? ???????????? ????????? ??????????????????
                                    ???
                                    ??????????????? ????????????????????? ??????,????????? ???????????? ????????????
                                    ??????????????? ?????????????????? ?????????????????? ????????? ?????????????????? <a href="http://www.pmeat.gov.bd/site/page/c8674318-daa3-4b75-8b7d-33d2ef84d78f/%E0%A6%AD%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BF-%E0%A6%B8%E0%A6%B9%E0%A6%BE%E0%A7%9F%E0%A6%A4%E0%A6%BE" target="_blank" rel="noopener noreferrer">???????????????????????????>></a>
                                    <hr>
                                    <span class="px-2 fw-bold text-wrap">
                                        ?????????????????????????????? ?????????????????? ??????????????? ????????????????????? ?????????????????? ????????????????????? ?????????????????????????????? ???????????????</b>

                                        <!-- modal button  -->
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#userManualModal">
                                            <i class="fa fa-book" aria-hidden="true"></i>
                                            ????????????????????? ??????????????????????????????
                                        </a>
                                        <br>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#faqModal">
                                            <i class="fa fa-question-circle" aria-hidden="true"></i> ?????????????????? ???????????????????????????
                                            ??????????????????
                                        </a>

                                    </span>



                                </p>
                            </div>
                            <div class="col-12 col-md-4 text-center">
                                <a href="{{ url('/home') }}" class="apply-online eservice-agree-but mt-2 mb-2">
                                    ??????????????? ????????????
                                    <i class="fa fa-mouse-pointer"></i>
                                </a>

                                <div class="clear">

                                    <iframe style="border: #028824 10px solid;" width="220" height="150" src="https://www.youtube.com/embed/V2U1lx6yvfc?start=34" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="eservice-guide">
                                <h6>???????????? ??????????????????????????? ????????????</h6>
                                <div class="row m-0 mt-2">
                                    <div class="col-12 col-md-4 eservice-guide-info-title">
                                        ????????????????????????????????? ????????????????????????
                                    </div>
                                    <div class="col-12 col-md-8 eservice-guide-info">
                                        <div class="eservice-required-docs"><i class="fa fa-angle-double-right"></i>?????????<span class="required">*</span>
                                        </div>
                                        <div class="eservice-required-docs"><i class="fa fa-angle-double-right"></i>????????????
                                            ?????????????????????
                                            ?????????<span class="required">*</span></div>
                                        <div class="eservice-required-docs"><i class="fa fa-angle-double-right"></i>??????????????????
                                            ?????????????????????????????? (??????????????????????????????)</div>
                                        <div class="eservice-required-docs"><i class="fa fa-angle-double-right"></i>?????????????????????
                                            ???????????????????????? ???????????????????????? ???????????????????????? ?????????<span class="required">*</span></div>
                                        <div class="eservice-required-docs"><i class="fa fa-angle-double-right"></i>?????? ???
                                            ????????????
                                            ????????????????????? ??????????????????????????? ?????????????????????????????? ??????????????? ?????????????????? ???????????? ???????????? ????????????/??????????????????????????? ??????????????????
                                            ??????????????????????????????
                                            ???????????????????????? ??????????????????????????? ????????????/?????????????????????<span class="required">*</span></div>
                                    </div>
                                </div>

                                <div class="row m-0 mt-2">
                                    <div class="col-12 col-md-4 eservice-guide-info-title">
                                        ??????????????? ?????????????????? ??????????????????????????? ?????????????????????
                                    </div>
                                    <div class="col-12 col-md-8 eservice-guide-info">
                                        <i class="fa fa-angle-double-right"></i> ??????????????? ?????? ????????? ??????????????? ??????????????? ???????????? ??????????????????
                                        ?????????
                                        ?????????
                                        <div class="extra-note">
                                            ????????????????????????, ??????, ????????????????????? ???????????? ???????????????????????? ?????????????????? ???????????? ???????????????????????? ???????????????????????????
                                            ???????????????????????????????????????
                                            ??????????????? ??????????????? ?????????????????? ?????????????????? ????????? ?????????
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="common-eservice-rules">
                                <h6>??????????????? ????????? ?????????????????? ???????????????????????????</h6>
                                <ul>
                                    <li>?????? ??????????????? ??????????????? ????????? ??????????????? ????????????????????? ?????????????????? ?????????????????? ???????????? ??????????????? ???????????????????????? ?????????????????? ????????????
                                        ?????????????????????
                                    </li>
                                    <li>?????? ??????????????? ?????????????????????????????? ????????????????????? ?????????????????? ?????????????????? ???????????????????????? ????????? ????????????????????? ????????? ????????? ?????????
                                        ???????????????????????????
                                        ???????????? ????????????????????????????????? ???????????? ????????? ?????????????????? ??????????????? ?????????????????? ???????????? ????????? ???????????????</li>
                                    <li>?????? ??????????????? ????????????????????? ?????? ????????????????????? ????????????????????? ???????????? ???????????? ??????????????????????????? ????????????????????? ??????????????? ?????????????????? ?????????
                                        ?????????
                                        ???????????? ????????????????????? ????????? ???????????? ????????????????????????????????? ???????????? ????????? ????????????????????? ????????????????????? ???????????? ???????????????</li>
                                </ul>
                            </div>
                        </div>

                    </div>
            </section>
        </div>
    </main>
    <footer class="footer mt-auto py-3 bg-light" style="position:absolute; padding-top: 60px;">
        <div class="container">
            <span class="text-muted  float-start ">
                ????????????????????????-  ?????????????????????????????????,?????????????????????
            </span> &nbsp; &nbsp;
            <span class="float-end">????????????????????? &copy;?????????????????????????????????????????? ?????????????????? ?????????????????? ?????????????????????</span>
        </div>
    </footer>


    <!-- Modal -->
    <div class="modal fade" id="userManualModal">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">????????????????????? ??????????????????????????????</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <object data="{{asset('public/files/efasV1_2.pdf')}}" type=" application/pdf">

                        <embed src="{{asset('public/files/efasV1_2.pdf')}}" width="100%" height="100%">

                        </embed>

                        <p>
                            <a href="{{asset('public/files/efasV1_2.pdf')}}">?????????????????????</a>
                        </p>
                    </object>
                    <!-- <iframe src='https://drive.google.com/file/d/1-xPSMUdfLjrfXdoDn0narfr1w3Gib4QM/view' width='px' height='px' frameborder='0'>
                    </iframe> -->

                </div>

                <!-- Modal footer -->
                <div class=" modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="faqModal">
        <div class="modal-dialog  modal-xl">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">?????????????????? ??????????????????????????? ??????????????????</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <div id="accordion">
                        <div class="card">
                            <div class="card-header">
                                <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                                    ???. ????????????????????? ?????????????????? ??????????????? ??????????????? ????????? ???????????? ?????????????
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                <div class="card-body">
                                    ?????? ????????????????????? ??????????????? ??????????????? ???????????? ????????? ?????????????????? ??????????????? ????????????????????? ????????? ????????????????????? ????????????
                                    ????????????
                                    ??????????????????????????? ?????????
                                    ??????????????????????????? ??????????????? ???????????? ?????????????????? ????????? ????????? ??????????????????????????? ??????????????? ??????????????? ???????????? ??????????????? ????????????
                                    ??????????????????
                                    ??????????????????
                                    ????????????????????? ????????? ?????????
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                                    ??????. ??????????????? ???????????? ?????????????????? ???????????? ???????????? ??????????????? ??????????????? ??????????????? ???????????? ??????????????? ????????? ?????????????
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                <div class="card-body">
                                    ?????? ???????????????????????????????????? ?????????????????????????????? ????????????????????? ????????? ???????????? ???????????? ???????????????????????? ???????????? ??????????????? ??????????????? ??????????????? ?????????
                                    ??????????????? ?????????????????????????????? ??????????????? ??????????????? ????????????
                                    ????????????????????? ?????? ???????????? ??????????????? ???????????????????????? ????????????????????? ????????? ???????????? ???????????? ??????????????? ???????????????????????? ????????????????????? ????????? ?????????
                                    ???????????? ?????? ?????????????????? ??????????????? ?????????????????? ????????? ?????????
                                    ????????? ????????????????????? ????????????????????? ????????????????????? ?????????????????? ????????????
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
                                    ??????. ???????????????????????? ???????????? ?????? ?????????????????? ??????????????? ?????????????
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                <div class="card-body">
                                    ??????????????? ????????????????????? ???????????? ??????????????????????????? ???????????????????????????????????? ???????????? ??? ???????????????????????? ??????????????????????????? ????????????????????? ????????? ????????????
                                    ??????????????? ??????????????? ????????????????????? ????????? ??? ????????? ????????????
                                    ??? ???????????????????????? ??????????????? ?????? ???????????? ?????????????????? ????????????????????? ????????? ??????????????? ???????????? ??????????????????????????? ????????????????????? ?????????????????????
                                    ???????????? ????????? ????????? ????????????????????? ???????????? ??? ?????????????????????
                                    ???????????????????????? ?????????????????? ??????????????????????????? ???????????? ???????????? ????????????????????? ??????????????? ????????????????????? ??????????????? ??????????????????????????? ????????????????????????
                                    ???????????? ??? ???????????????????????? ???????????? ???????????? ????????????????????????
                                    ???????????? ????????????????????? ???????????????????????? ???????????? ???????????????
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="helpDesk">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">??????????????????????????????</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <p> ??????????????? ??? ???????????????????????? ?????????????????? ??????????????? ????????? ?????????????????? ???????????? ???:?????? - ??????????????? ???:??????</p>
                    <p>01778958356</p>
                    <p>01778964156</p>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

</body>

</html>