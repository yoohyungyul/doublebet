
<?php

$paper_link = "https://drive.google.com/file/d/1qqJ63CWZfCPGhYYzWHrbcIFlm1HfPEGZ/view?usp=sharing";
if(Cookie::get('language') == "kr") $paper_link = "https://drive.google.com/file/d/144Qyh45NECrcK6id5PWhu2H948h5DhpJ/view?usp=sharing";

?>

<!DOCTYPE html>
<html lang="{{Cookie::get('language')}}">
<head>
	<title>DoubleBet</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
@if(Cookie::get('language') == "kr")
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR" rel="stylesheet">
@else
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800" rel='stylesheet' type='text/css'>
@endif	
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/animate.css">
	<link rel="stylesheet" href="/css/owl.carousel.css">
	<link rel="stylesheet" href="/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="/css/magnific-popup.css">
	<link rel="stylesheet" href="/css/style.css?v=2">

    <style>
        .container {
            width: 1182px;
            max-width: none !important;
        }
    </style>
</head>
<body>


    <section id="project" data-stellar-background-ratio="0.5">
        <div class="c_bg_01">
            <div class="container">
                <div class="row">
                    
                    <!-- market/ -->
                    <div class="col-xs-12">
                        <p class="space_50">&nbsp;</p>
                        <div class="section-title wow t_center fadeInUp" data-wow-delay="0.1s">
                            <h1>{!! trans('messages.po_st_00') !!}</h1>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <!-- market1/ -->
                        <div class="project-intro">
                            <div class="project-intro1 wow fadeInUp" data-wow-delay="0.2s">
                            <p class="t_mid pa_ce_28 txt_type_02 txt_w txt_b">{!! trans('messages.po_st_01') !!}</p>
                            </div>
                            <div class="project-intro2 wow fadeInUp" data-wow-delay="0.2s">
                            <p class="t_mid pa_ce_25">{!! trans('messages.po_st_02') !!}</p>
                            </div>

                            <div class="porject-intro3 wow fadeInUp" data-wow-delay="0.2s">
                            <img src="/images/project_graph_01.jpg" class="img-responsive" alt="">
                            </div>
                        </div>
                        <!-- /market1 -->
                        <!-- market2/ -->
                        <div class="project-intro">
                            <div class="project-intro1 wow fadeInUp" data-wow-delay="0.3s">
                            <p class="t_mid pa_ce_28 txt_type_02 txt_w txt_b">{!! trans('messages.po_st_03') !!}</p>
                            </div>
                            <div class="project-intro2 wow fadeInUp" data-wow-delay="0.3s">
                            <p class="t_mid pa_ce_20">{!! trans('messages.po_st_04') !!}</p>
                            </div>

                            <div class="porject-intro3 wow fadeInUp" data-wow-delay="0.3s">
                            <img src="/images/project_graph_02.jpg" class="img-responsive" alt="">
                            </div>
                        </div>
                        <!-- /market2 -->
                        <!-- market3/ -->
                        <div class="project-intro">
                            <div class="project-intro1 wow fadeInUp" data-wow-delay="0.4s">
                            <p class="t_mid pa_ce_28 txt_type_02 txt_w txt_b">{!! trans('messages.po_st_05') !!}</p>
                            </div>
                            <div class="project-intro2 wow fadeInUp" data-wow-delay="0.4s">
                            <p class="t_mid pa_ce_20">{!! trans('messages.po_st_06') !!}</p>
                            </div>

                            <div class="porject-intro3 wow fadeInUp" data-wow-delay="0.4s">
                            <img src="/images/project_graph_03.jpg" class="img-responsive" alt="">
                            </div>
                        </div>
                        <!-- /market3 -->
                    </div>
                    <div class="col-xs-12">
                        <p class="space_01">&nbsp;</p>
                    </div>
                    <!-- /market -->
                    <!-- vision/ -->
                    <div class="col-xs-12">
                        <p class="space_100">&nbsp;</p>
                        <div class="section-title wow t_center fadeInUp" data-wow-delay="0.1s">
                            <h2>{!! trans('messages.po_vs_00') !!}</h2>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="vision-01 wow fadeInUp" data-wow-delay="0.2s">
                            <ul>
                                <li class="txt_type_01 txt_w space_04">{!! trans('messages.po_vs_01') !!}</li>
                                <li class="txt_type_01 txt_w space_04">{!! trans('messages.po_vs_02') !!}</li>
                                <li class="txt_type_01 txt_w space_04">{!! trans('messages.po_vs_03') !!}</li>
                            </ul>
                        </div>
                        <div class="vision-02 wow fadeInUp" data-wow-delay="0.3s">
                            <ul>
                                <li class="txt_type_01 txt_w txt_b">{!! trans('messages.po_vs_04') !!}</li>
                                <li class="txt_type_01 txt_w txt_b">{!! trans('messages.po_vs_05') !!}</li>
                                <li class="txt_type_01 txt_w txt_b">{!! trans('messages.po_vs_06') !!}</li>
                            </ul>
                            <div class="vision-03 wow fadeInUp" data-wow-delay="0.5s">
                                <p class="txt_type_02 t_center txt_c_01">{!! trans('messages.po_vs_07') !!}</p>
                                <p class="txt_type_03 t_center txt_c_01 txt_b">{!! trans('messages.po_vs_08') !!}</p>
                                <p><img src="/images/vision_03.jpg" class="img-responsive" alt=""></p>
                                <ul>
                                    <li class="txt_type_01 space_01">{!! trans('messages.po_vs_09') !!}</li>
                                    <li class="txt_type_01 space_01">{!! trans('messages.po_vs_10') !!}</li>
                                    <li class="txt_type_01 space_01">{!! trans('messages.po_vs_11') !!}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <p class="space_150">&nbsp;</p>
                    </div>
                    <!-- /vision -->
                    <!-- service -->
                    <div class="col-xs-12">
                        <p class="space_50">&nbsp;</p>
                        <div class="section-title wow t_center fadeInUp" data-wow-delay="0.2s">
                            <h1>{!! trans('messages.po_svc_00') !!}</h1>
                            <p class="txt_type_02 space_01 txt_c_02">{!! trans('messages.po_svc_01') !!}</p>
                        </div>
                        <div class="section-title wow t_center fadeInUp" data-wow-delay="0.3s">
                            <img src="/images/doublebet_service.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <p class="space_50">&nbsp;</p>
                    </div>
                    <!-- /service -->
                    <!-- dobule x core/ -->
                    <div class="col-xs-12">
                        <p class="space_50">&nbsp;</p>
                        <div class="section-title wow t_center fadeInUp" data-wow-delay="0.1s">
                            <h2>{!! trans('messages.po_core_00') !!}</h2>
                            <p class="txt_type_02 space_01 txt_c_03">{!! trans('messages.po_core_01') !!}</p>
                        </div>
                        <div class="section-title wow t_center fadeInUp" data-wow-delay="0.3s">
                            <img src="/images/double_x_core.jpg" class="img-responsive" style="padding-top:21px;" alt="">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="double-x wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li class="txt_type_00 txt_w space_05">{!! trans('messages.po_core_02') !!}</li>
                                <li class="txt_type_00 txt_w space_06">{!! trans('messages.po_core_03') !!}</li>
                                <li class="txt_type_00 txt_w space_07">{!! trans('messages.po_core_04') !!}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <p class="space_50">&nbsp;</p>
                    </div>
                    <!-- /dobule x core -->

                </div>
            </div>
        </div>
    </section>
    
    

	<!-- SCRIPTS -->
	<script src="/js/jquery.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/jquery.stellar.min.js"></script>
	<script src="/js/wow.min.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/jquery.magnific-popup.min.js"></script>
	<script src="/js/smoothscroll.js"></script>
	<script src="/js/select.box.js"></script>
	<script src="/js/jquery.singlePageNav.min.js"></script>
	<script src="/js/custom.js"></script>

</body>
</html>