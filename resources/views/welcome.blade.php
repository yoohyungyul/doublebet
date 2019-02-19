<?php

$paper_link = "https://bit.ly/2SMkkbA";
if(Cookie::get('language') == "kr") $paper_link = "https://bit.ly/2UUIkqs";

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
    <link rel="shortcut icon" href="/images/favicon.ico">
	@if(Cookie::get('language') == "kr")
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR" rel="stylesheet">
    @else
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800" rel='stylesheet' type='text/css'>
    @endif
    <link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/animate.css">
	<link rel="stylesheet" href="/css/owl.carousel.css">
	<link rel="stylesheet" href="/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="/css/magnific-popup.css">
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<!-- PRE LOADER -->
	<section class="preloader">
		<div class="spinner">
			<span class="spinner-rotate"></span>              
		</div>
	</section>

	<!-- MENU -->
	<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
		<div class="gnb">
		<div class="container">
			
			<div class="navbar-header">
				<!-- lOGO TEXT HERE -->
				<a href="#home" class="navbar-brand"><img src="/images/blank.png" border="0" width="183" height="62" alt="DoubleBet" /></a>
			</div>
			<!-- MENU LINKS -->
			<div class="collapse navbar-collapse" id="tmNav">
				<ul class="nav navbar-nav navbar-nav-first">
					<li><a href="#home" class="smoothScroll"><span>{!! trans('messages.me_home') !!}</span></a></li>
					<li><a href="#project" class="smoothScroll"><span>{!! trans('messages.me_project') !!}</span></a></li>
					<li><a href="#tokenomics" class="smoothScroll"><span>{!! trans('messages.me_tokenomics') !!}</span></a></li>
					<li><a href="#roadmap" class="smoothScroll"><span>{!! trans('messages.me_roadmap') !!}</span></a></li>
					<li><a href="#team" class="smoothScroll"><span>{!! trans('messages.me_team') !!}</span></a></li>
					<li><a href="#news" class="smoothScroll"><span>{!! trans('messages.me_news') !!}</span></a></li>
					<li><a href="#" class="smoothScroll"><span>{!! trans('messages.me_whitepaper') !!}</span></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					 <li>
						<div  class="custom-select"  style="width:60px;margin-top:14px;margin-right:16px;">
                            <select onchange="location.href=this.value" >
                                <option value="/lang/en" @if(Cookie::get('language') == "en") selected @endif>EN</option>
                                <option value="/lang/kr" @if(Cookie::get('language') == "kr") selected @endif>KR</option>
                            </select>
						</div>
					 </li>
				</ul>
			</div>
			
		</div>
		</div>
	</section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                            <p class="txt_type_05 txt_w txt_b">{!! trans('messages.ho_t_1_01') !!}</p>
											<p class="txt_type_03 txt_w">{!! trans('messages.ho_t_1_02') !!}</p>
                                            <p class="txt_box_01 txt_type_01 txt_w">{!! trans('messages.ho_t_1_03') !!}</p>
                                            <a href="{{$paper_link}}" class="section-btn-01 btn btn-default smoothScroll" target="_blank">{!! trans('messages.ho_t_1_04') !!}</a>&nbsp;&nbsp;&nbsp;
                                            <a href="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")' class="section-btn-02 btn btn-default smoothScroll">{!! trans('messages.ho_t_1_05') !!}</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <p class="txt_type_05 txt_w txt_b">{!! trans('messages.ho_t_2_01') !!}</p>
											 <p class="txt_type_03 txt_w">{!! trans('messages.ho_t_2_02') !!}</p>
                                             <p class="txt_box_01 txt_type_01 txt_w">{!! trans('messages.ho_t_2_03') !!}</p>
                                             <a href="{{$paper_link}}" class="section-btn-01 btn btn-default smoothScroll" target="_blank">{!! trans('messages.ho_t_2_04') !!}</a>&nbsp;&nbsp;&nbsp;
                                            <a href="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")' class="section-btn-02 btn btn-default smoothScroll">{!! trans('messages.ho_t_2_05') !!}</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <p class="txt_type_05 txt_w txt_b">{!! trans('messages.ho_t_3_01') !!}</p>
											 <p class="txt_type_03 txt_w">{!! trans('messages.ho_t_3_02') !!}</p>
                                             <p class="txt_box_01 txt_type_01 txt_w">{!! trans('messages.ho_t_3_03') !!}</p>
                                             <a href="{{$paper_link}}" class="section-btn-01 btn btn-default smoothScroll" target="_blank">{!! trans('messages.ho_t_3_04') !!}</a>&nbsp;&nbsp;&nbsp;
                                            <a href="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")' class="section-btn-02 btn btn-default smoothScroll">{!! trans('messages.ho_t_3_05') !!}</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

						 <div class="item item-four">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <p class="txt_type_05 txt_w txt_b">{!! trans('messages.ho_t_4_01') !!}</p>
											 <p class="txt_type_03 txt_w">{!! trans('messages.ho_t_4_02') !!}</p>
                                             <p class="txt_box_01 txt_type_01 txt_w">{!! trans('messages.ho_t_4_03') !!}</p>
                                             <a href="{{$paper_link}}" class="section-btn-01 btn btn-default smoothScroll" target="_blank">{!! trans('messages.ho_t_4_04') !!}</a>&nbsp;&nbsp;&nbsp;
                                            <a href="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")' class="section-btn-02 btn btn-default smoothScroll">{!! trans('messages.ho_t_4_05') !!}</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

						 <div class="item item-five">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <p class="txt_type_05 txt_w txt_b">{!! trans('messages.ho_t_5_01') !!}</p>
											 <p class="txt_type_03 txt_w">{!! trans('messages.ho_t_5_02') !!}</p>
                                             <p class="txt_box_01 txt_type_01 txt_w">{!! trans('messages.ho_t_5_03') !!}</p>
                                             <a href="{{$paper_link}}" class="section-btn-01 btn btn-default smoothScroll" target="_blank">{!! trans('messages.ho_t_5_04') !!}</a>&nbsp;&nbsp;&nbsp;
                                            <a href="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")' class="section-btn-02 btn btn-default smoothScroll">{!! trans('messages.ho_t_5_05') !!}</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

          </div>
     </section>


	<!-- Project -->
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


	<!-- Tokenomics -->
	<section id="tokenomics" data-stellar-background-ratio="0.5">
		<div class="c_bg_02">
		<div class="container">
			<div class="row">

				<!-- tokenomics/ -->
				<div class="col-xs-12">
					<p class="space_50">&nbsp;</p>
					<div class="section-title wow t_center fadeInUp" data-wow-delay="0.1s">
						<h1>{!! trans('messages.to_int_00') !!}</h1>
						<p class="txt_type_02 space_01 txt_c_02">{!! trans('messages.to_int_01') !!}</p>
					</div>
				</div>
				<!-- /tokenomics -->

				<div class="col-xs-4 col-xs-4">
					<div class="token-thumb wow fadeInUp" data-wow-delay="0.2s">
						<p class="token-thumb-box">
							<span class="txt_type_02 t_center">{!! trans('messages.to_dg_01') !!}</span><br/><br/>
							<span class="txt_type_05 txt_c_01 t_center txt_b">{!! trans('messages.to_dg_02') !!}</span>
						</p>
						<div class="token-hover">
							<div class="token-item">
								<span class="txt_type_02 txt_w t_center">{!! trans('messages.to_dg_01') !!}</span><br/><br/>
								<span class="txt_type_05 txt_c_04 t_center txt_b">{!! trans('messages.to_dg_02') !!}</span>
							</div>
						</div>
					 </div>
				</div>

				<div class="col-xs-4 col-xs-4">
					<div class="token-thumb wow fadeInUp" data-wow-delay="0.4s">
						<p class="token-thumb-box">
							<span class="txt_type_02 t_center">{!! trans('messages.to_dg_03') !!}</span><br/><br/>
							<span class="txt_type_05 txt_c_01 t_center txt_b">{!! trans('messages.to_dg_04') !!}</span>
						</p>
						<div class="token-hover">
							<div class="token-item">
								<span class="txt_type_02 txt_w t_center">{!! trans('messages.to_dg_03') !!}</span><br/><br/>
								<span class="txt_type_05 txt_c_04 t_center txt_b">{!! trans('messages.to_dg_04') !!}</span>
							</div>
						</div>
					 </div>
				</div>

				<div class="col-xs-4 col-xs-4">
					<div class="token-thumb wow fadeInUp" data-wow-delay="0.6s">
						<p class="token-thumb-box">
							<span class="txt_type_02 t_center">{!! trans('messages.to_dg_05') !!}</span><br/><br/>
							<span class="txt_type_05 txt_c_01 t_center txt_b">{!! trans('messages.to_dg_06') !!}</span>
						</p>
						<div class="token-hover">
							<div class="token-item">
								<span class="txt_type_02 txt_w t_center">{!! trans('messages.to_dg_05') !!}</span><br/><br/>
								<span class="txt_type_05 txt_c_04 t_center txt_b">{!! trans('messages.to_dg_06') !!}</span>
							</div>
						</div>
					 </div>
				</div>

				<div class="col-xs-4 col-xs-4">
					<div class="token-thumb wow fadeInUp" data-wow-delay="0.2s">
						<p class="token-thumb-box">
							<span class="txt_type_02 t_center">{!! trans('messages.to_dg_07') !!}</span><br/><br/>
							<span class="txt_type_05 txt_c_01 t_center txt_b">{!! trans('messages.to_dg_08') !!}</span>
						</p>
						<div class="token-hover">
							<div class="token-item">
								<span class="txt_type_02 txt_w t_center">{!! trans('messages.to_dg_07') !!}</span><br/><br/>
								<span class="txt_type_05 txt_c_04 t_center txt_b">{!! trans('messages.to_dg_08') !!}</span>
							</div>
						</div>
					 </div>
				</div>

				<div class="col-xs-4 col-xs-4">
					<div class="token-thumb wow fadeInUp" data-wow-delay="0.4s">
						<p class="token-thumb-box">
							<span class="txt_type_02 t_center">{!! trans('messages.to_dg_09') !!}</span><br/><br/>
							<span class="txt_type_05 txt_c_01 t_center txt_b">{!! trans('messages.to_dg_10') !!}</span>
						</p>
						<div class="token-hover">
							<div class="token-item">
								<span class="txt_type_02 txt_w t_center">{!! trans('messages.to_dg_09') !!}</span><br/><br/>
								<span class="txt_type_05 txt_c_04 t_center txt_b">{!! trans('messages.to_dg_10') !!}</span>
							</div>
						</div>
					 </div>
				</div>

				<div class="col-xs-4 col-xs-4">
					<div class="token-thumb wow fadeInUp" data-wow-delay="0.6s">
						<p class="token-thumb-box">
							<span class="txt_type_02 t_center">{!! trans('messages.to_dg_11') !!}</span><br/><br/>
							<span class="txt_type_05 txt_c_01 t_center txt_b">{!! trans('messages.to_dg_12') !!}</span>
						</p>
						<div class="token-hover">
							<div class="token-item">
								<span class="txt_type_02 txt_w t_center">{!! trans('messages.to_dg_11') !!}</span><br/><br/>
								<span class="txt_type_05 txt_c_04 t_center txt_b">{!! trans('messages.to_dg_12') !!}</span>
							</div>
						</div>
					 </div>
				</div>

				<div class="col-xs-12">
					<p class="space_100">&nbsp;</p>
				</div>

				<!-- distribution/ -->
				<div class="col-xs-12 col-xs-12">
					<p class="space_50">&nbsp;</p>
					<div class="section-title wow t_center fadeInUp" data-wow-delay="0.1s">
						<h1>{!! trans('messages.to_dt_00') !!}</h1>
					</div>
				</div>
				<div class="col-xs-12 col-xs-12">
					<div class="token-d wow fadeInUp" data-wow-delay="0.2s">
						<!-- 01/ -->
						<div class="token-d-01 wow fadeInLeft" data-wow-delay="0.4s">
							<table class="tbl_list" style="width:600px;">
								<colgroup>
									<col width="250px" /><col width="*" />
								</colgroup>
								<tbody>
									<tr>
										<td class="right">
											<span class="txt_type_03 txt_c_05 txt_b">{!! trans('messages.to_dt_01') !!}</span><br>
											<span class="txt_type_02 txt_c_06">{!! trans('messages.to_dt_02') !!}</span>
										</td>
										<td>
											<img src="/images/token_d_01.png" class="img-responsive" alt="">
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /01 -->
						<!-- 02/ -->
						<div class="token-d-02 wow fadeInLeft" data-wow-delay="0.5s">
							<table class="tbl_list" style="width:600px;">
								<colgroup>
									<col width="250px" /><col width="*" />
								</colgroup>
								<tbody>
									<tr>
										<td class="right">
											<span class="txt_type_03 txt_c_05 txt_b">{!! trans('messages.to_dt_03') !!}</span><br>
											<span class="txt_type_02 txt_c_06">{!! trans('messages.to_dt_04') !!}</span>
										</td>
										<td>
											<img src="/images/token_d_02.png" class="img-responsive" alt="">
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /02 -->
						<!-- 03/ -->
						<div class="token-d-03 wow fadeInLeft" data-wow-delay="0.6s">
							<table class="tbl_list" style="width:600px;">
								<colgroup>
									<col width="250px" /><col width="*" />
								</colgroup>
								<tbody>
									<tr>
										<td class="right">
											<span class="txt_type_03 txt_c_05 txt_b">{!! trans('messages.to_dt_05') !!}</span><br>
											<span class="txt_type_02 txt_c_06">{!! trans('messages.to_dt_06') !!}</span>
										</td>
										<td>
											<img src="/images/token_d_02.png" class="img-responsive" alt="">
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /03 -->
						<!-- 04/ -->
						<div class="token-d-04 wow fadeInLeft" data-wow-delay="0.7s">
							<table class="tbl_list" style="width:600px;">
								<colgroup>
									<col width="250px" /><col width="*" />
								</colgroup>
								<tbody>
									<tr>
										<td class="right">
											<span class="txt_type_03 txt_c_05 txt_b">{!! trans('messages.to_dt_07') !!}</span><br>
											<span class="txt_type_02 txt_c_06">{!! trans('messages.to_dt_08') !!}</span>
										</td>
										<td>
											<img src="/images/token_d_02.png" class="img-responsive" alt="">
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /04 -->
						<!-- 05/ -->
						<div class="token-d-05 wow fadeInRight" data-wow-delay="0.4s">
							<table class="tbl_list" style="width:400px;">
								<colgroup>
									<col width="170px" /><col width="*" />
								</colgroup>
								<tbody>
									<tr>
										<td>
											<img src="/images/token_d_03.png" class="img-responsive" alt="">
										</td>
										<td>
											<span class="txt_type_03 txt_c_05 txt_b">{!! trans('messages.to_dt_09') !!}</span><br>
											<span class="txt_type_02 txt_c_06">{!! trans('messages.to_dt_10') !!}</span>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /05 -->
						<!-- 06/ -->
						<div class="token-d-06 wow fadeInRight" data-wow-delay="0.5s">
							<table class="tbl_list" style="width:400px;">
								<colgroup>
									<col width="170px" /><col width="*" />
								</colgroup>
								<tbody>
									<tr>
										<td>
											<img src="/images/token_d_04.png" class="img-responsive" alt="">
										</td>
										<td>
											<span class="txt_type_03 txt_c_05 txt_b">{!! trans('messages.to_dt_11') !!}</span><br>
											<span class="txt_type_02 txt_c_06">{!! trans('messages.to_dt_12') !!}</span>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /06 -->
						<!-- 07/ -->
						<div class="token-d-07 wow fadeInRight" data-wow-delay="0.4s">
							<table class="tbl_list" style="width:430px;">
								<colgroup>
									<col width="170px" /><col width="*" />
								</colgroup>
								<tbody>
									<tr>
										<td>
											<img src="/images/token_d_03.png" class="img-responsive" alt="">
										</td>
										<td>
											<span class="txt_type_03 txt_c_05 txt_b">{!! trans('messages.to_dt_13') !!}</span><br>
											<span class="txt_type_02 txt_c_06">{!! trans('messages.to_dt_14') !!}</span>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /07 -->
					</div>
				</div>
				<!-- <div class="col-xs-12 col-sm-12">
					<p class="space_100">&nbsp;</p>
				</div> -->
				<!-- /distribution -->
				<!-- sto/ -->
				<!-- <div class="col-xs-12 col-xs-12">
					<p class="space_50">&nbsp;</p>
					<div class="section-title wow t_center fadeInUp" data-wow-delay="0.1s">
						<h2>{!! trans('messages.to_sto_00') !!}</h2>
						<p class="txt_type_02 space_01 txt_c_03">{!! trans('messages.to_sto_01') !!}</p>
					</div>
				</div> -->
				<!-- /sto -->
				<!-- use of fund/ -->
				<!-- <div class="col-xs-12 col-xs-12">
					<div class="section-title wow fund-d-00 fadeInUp" data-wow-delay="0.1s">
						<h2>{!! trans('messages.to_fund_00') !!}</h2>
					</div>
					<div class="fund-d wow fadeInUp" data-wow-delay="0.2s">
					
						<div class="fund-d-01 wow fadeInLeft" data-wow-delay="0.4s">
							<table class="tbl_list" style="width:600px;">
								<colgroup>
									<col width="250px" /><col width="*" />
								</colgroup>
								<tbody>
									<tr>
										<td class="right">
											<span class="txt_type_03 txt_w txt_b">{!! trans('messages.to_fund_01') !!}</span><br>
											<span class="txt_type_02 txt_w">{!! trans('messages.to_fund_02') !!}</span>
										</td>
										<td>
											<img src="/images/use_fund_01.png" class="img-responsive" alt="">
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						
						<div class="fund-d-02 wow fadeInLeft" data-wow-delay="0.4s">
							<table class="tbl_list" style="width:600px;">
								<colgroup>
									<col width="300px" /><col width="*" />
								</colgroup>
								<tbody>
									<tr>
										<td class="right">
											<span class="txt_type_03 txt_w txt_b">{!! trans('messages.to_fund_03') !!}</span><br>
											<span class="txt_type_02 txt_w">{!! trans('messages.to_fund_04') !!}</span>
										</td>
										<td>
											<img src="/images/use_fund_01.png" class="img-responsive" alt="">
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						
						<div class="fund-d-03 wow fadeInRight" data-wow-delay="0.4s">
							<table class="tbl_list" style="width:600px;">
								<colgroup>
									<col width="390px" /><col width="*" />
								</colgroup>
								<tbody>
									<tr>
										<td>
											<img src="/images/use_fund_04.png" class="img-responsive" alt="">
										</td>
										<td>
											<span class="txt_type_03 txt_w txt_b">{!! trans('messages.to_fund_05') !!}</span><br>
											<span class="txt_type_02 txt_w">{!! trans('messages.to_fund_06') !!}</span>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						
						<div class="fund-d-04 wow fadeInRight" data-wow-delay="0.4s">
							<table class="tbl_list" style="width:600px;">
								<colgroup>
									<col width="160px" /><col width="*" />
								</colgroup>
								<tbody>
									<tr>
										<td>
											<img src="/images/use_fund_03.png" class="img-responsive" alt="">
										</td>
										<td>
											<span class="txt_type_03 txt_w txt_b">{!! trans('messages.to_fund_07') !!}</span><br>
											<span class="txt_type_02 txt_w">{!! trans('messages.to_fund_08') !!}</span>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div> -->
				<div class="col-xs-12 col-xs-12">
					<p class="space_150">&nbsp;</p>
				</div>
				<!-- /use of fund -->
				<!-- Sales/ -->
				<div class="col-xs-12 col-xs-12">
					<p class="space_50">&nbsp;</p>
					<div class="section-title wow t_center fadeInUp" data-wow-delay="0.1s">
						<h1 class="txt_w">{!! trans('messages.to_sale_00') !!}</h1>
					</div>
				</div>
				<div class="col-xs-4 col-xs-4">
					<div class="sale-thumb wow fadeInUp" data-wow-delay="0.2s">
						<div class="sale-thumb-box">
							<p class="txt_type_02 t_center sale-t-bg-01">{!! trans('messages.to_sale_01') !!}</p><br/>
							<p class="txt_type_02_24 t_center txt_c_01">{!! trans('messages.to_sale_02') !!}</p><br/><br/>
							<p class="txt_type_05 txt_c_01 t_center txt_b">{!! trans('messages.to_sale_03') !!}</p><br/>
							<p class="txt_type_02 t_center txt_c_02">{!! trans('messages.to_sale_04') !!}</p><br/>
							<p class="txt_type_02 t_center txt_c_02">{!! trans('messages.to_sale_05') !!}</p>
						</div>
						<!-- <div class="sale-hover">
							<div class="sale-item">
								<p class="txt_type_02 t_center txt_w sale-t-bg-02">{!! trans('messages.to_sale_01') !!}</p><br/>
								<p class="txt_type_02_24 t_center txt_w">{!! trans('messages.to_sale_02') !!}</p><br/><br/>
								<p class="txt_type_05 txt_c_04 t_center txt_b">{!! trans('messages.to_sale_03') !!}</p><br/>
								<p class="txt_type_02 t_center txt_w">{!! trans('messages.to_sale_04') !!}</p><br/>
								<p class="txt_type_02 t_center txt_w">{!! trans('messages.to_sale_05') !!}</p>
							</div>
						</div> -->
					 </div>
				</div>
				<div class="col-xs-4 col-xs-4">
					<div class="sale-thumb wow fadeInUp" data-wow-delay="0.3s">
						<div class="sale-thumb-box">
							<p class="txt_type_02 t_center sale-t-bg-01">{!! trans('messages.to_sale_06') !!}</p><br/>
							<p class="txt_type_02_24 t_center txt_c_01" style="padding-top:38px;">{!! trans('messages.to_sale_07') !!}</p><br/><br/>
							<p class="txt_type_05 txt_c_01 t_center txt_b">{!! trans('messages.to_sale_08') !!}</p><br/>
							<p class="txt_type_02 t_center txt_c_02">{!! trans('messages.to_sale_09') !!}</p><br/>
							<p class="txt_type_02 t_center txt_c_02">{!! trans('messages.to_sale_10') !!}</p>
						</div>
						<!-- <div class="sale-hover">
							<div class="sale-item">
								<p class="txt_type_02 t_center txt_w sale-t-bg-02">{!! trans('messages.to_sale_06') !!}</p><br/>
								<p class="txt_type_02_24 t_center txt_w" style="padding-top:34px;">{!! trans('messages.to_sale_07') !!}</p><br/><br/>
								<p class="txt_type_05 txt_c_04 t_center txt_b">{!! trans('messages.to_sale_08') !!}</p><br/>
								<p class="txt_type_02 t_center txt_w">{!! trans('messages.to_sale_09') !!}</p><br/>
								<p class="txt_type_02 t_center txt_w">{!! trans('messages.to_sale_10') !!}</p>
							</div>
						</div> -->
					 </div>
				</div>
				<div class="col-xs-4 col-xs-4">
					<div class="sale-thumb wow fadeInUp" data-wow-delay="0.4s">
						<div class="sale-thumb-box">
							<p class="txt_type_02 t_center sale-t-bg-01">{!! trans('messages.to_sale_11') !!}</p><br/>
							<p class="txt_type_02_24 t_center txt_c_01" style="padding-top:38px;">{!! trans('messages.to_sale_12') !!}</p><br/><br/>
							<p class="txt_type_05 txt_c_01 t_center txt_b">{!! trans('messages.to_sale_13') !!}</p><br/>
							<p class="txt_type_02 t_center txt_c_02">{!! trans('messages.to_sale_14') !!}</p><br/>
							<p class="txt_type_02 t_center txt_c_02">{!! trans('messages.to_sale_15') !!}</p>
						</div>
						<!-- <div class="sale-hover">
							<div class="sale-item">
								<p class="txt_type_02 t_center txt_w sale-t-bg-02">{!! trans('messages.to_sale_11') !!}</p><br/>
								<p class="txt_type_02_24 t_center txt_w" style="padding-top:34px;">{!! trans('messages.to_sale_12') !!}</p><br/><br/>
								<p class="txt_type_05 txt_c_04 t_center txt_b">{!! trans('messages.to_sale_13') !!}</p><br/>
								<p class="txt_type_02 t_center txt_w">{!! trans('messages.to_sale_14') !!}</p><br/>
								<p class="txt_type_02 t_center txt_w">{!! trans('messages.to_sale_15') !!}</p>
							</div>
						</div> -->
					 </div>
				</div>
				<!-- /Sales -->
				<div class="col-xs-4 col-xs-4">
					<p class="space_100">&nbsp;</p>
				</div>                    
			</div>
		</div>
		</div>
	</section>

	<!-- Roadmap-->
	<section id="roadmap" data-stellar-background-ratio="0.5">
		<div class="c_bg_03">
		<div class="container">
			<div class="row">

				<!-- roadmap/ -->
				<div class="col-xs-12 col-xs-12">
					<p class="space_100">&nbsp;</p>
					<div class="section-title wow t_center fadeInUp" data-wow-delay="0.1s">
						<h2>{!! trans('messages.to_map_00') !!}</h2>
					</div>
				</div>
				<!-- /roadmap -->
				<div class="col-xs-12 col-xs-12">
					<div class="roadmap-d wow">
						<!-- 01/ -->
						<div class="roadmap-01-txt wow fadeInDown" data-wow-delay="0.4s">
							<p class="txt_type_00 txt_c_07">{!! trans('messages.to_map_01') !!}</p>
						</div>
						<div class="roadmap-01-pin wow fadeInDown" data-wow-delay="0.4s">
							<img src="/images/roadmap_01.png" class="img-responsive" alt="">
						</div>
						<div class="roadmap-01-date wow fadeInUp" data-wow-delay="0.4s">
							<p class="txt_type_02 txt_w txt_b">{!! trans('messages.to_map_02') !!}</p>
						</div>
						<!-- /01 -->
						<!-- 02/ -->
						<div class="roadmap-02-date wow fadeInDown" data-wow-delay="0.4s">
							<p class="txt_type_02 txt_w txt_b">{!! trans('messages.to_map_03') !!}</p>
						</div>
						<div class="roadmap-02-pin wow fadeInUp" data-wow-delay="0.4s">
							<img src="/images/roadmap_02.png" class="img-responsive" alt="">
						</div>
						<div class="roadmap-02-txt wow fadeInUp" data-wow-delay="0.4s">
							<p class="txt_type_00 txt_c_07">{!! trans('messages.to_map_04') !!}</p>
						</div>
						<!-- /02 -->
						<!-- 03/ -->
						<div class="roadmap-03-txt wow fadeInDown" data-wow-delay="0.4s">
							<p class="txt_type_00 txt_c_07">{!! trans('messages.to_map_05') !!}</p>
						</div>
						<div class="roadmap-03-pin wow fadeInDown" data-wow-delay="0.4s">
							<img src="/images/roadmap_01.png" class="img-responsive" alt="">
						</div>
						<div class="roadmap-03-date wow fadeInUp" data-wow-delay="0.4s">
							<p class="txt_type_02 txt_w txt_b">{!! trans('messages.to_map_06') !!}</p>
						</div>
						<!-- /03 -->
						<!-- 04/ -->
						<div class="roadmap-04-date wow fadeInDown" data-wow-delay="0.4s">
							<p class="txt_type_02 txt_w txt_b">{!! trans('messages.to_map_07') !!}</p>
						</div>
						<div class="roadmap-04-pin wow fadeInUp" data-wow-delay="0.4s">
							<img src="/images/roadmap_02.png" class="img-responsive" alt="">
						</div>
						<div class="roadmap-04-txt wow fadeInUp" data-wow-delay="0.4s">
							<p class="txt_type_00 txt_c_07">{!! trans('messages.to_map_08') !!}</p>
						</div>
						<!-- /04 -->
						<!-- 05/ -->
						<div class="roadmap-05-txt wow fadeInDown" data-wow-delay="0.4s">
							<p class="txt_type_00 txt_c_07">{!! trans('messages.to_map_09') !!}</p>
						</div>
						<div class="roadmap-05-pin wow fadeInDown" data-wow-delay="0.4s">
							<img src="/images/roadmap_01.png" class="img-responsive" alt="">
						</div>
						<div class="roadmap-05-date wow fadeInUp" data-wow-delay="0.4s">
							<p class="txt_type_02 txt_w txt_b">{!! trans('messages.to_map_10') !!}</p>
						</div>
						<!-- /05 -->
						<!-- 06/ -->
						<div class="roadmap-06-date wow fadeInDown" data-wow-delay="0.4s">
							<p class="txt_type_02 txt_w txt_b">{!! trans('messages.to_map_11') !!}</p>
						</div>
						<div class="roadmap-06-pin wow fadeInUp" data-wow-delay="0.4s">
							<img src="/images/roadmap_02.png" class="img-responsive" alt="">
						</div>
						<div class="roadmap-06-txt wow fadeInUp" data-wow-delay="0.4s">
							<p class="txt_type_00 txt_c_07">{!! trans('messages.to_map_12') !!}</p>
						</div>
						<!-- /06 -->
						<!-- 07/ -->
						<div class="roadmap-07-date wow fadeInUp" data-wow-delay="0.6s">
							<p class="txt_type_02 txt_w txt_b">{!! trans('messages.to_map_13') !!}</p>
						</div>
						<div class="roadmap-07-pin wow fadeInDown" data-wow-delay="0.6s">
							<img src="/images/roadmap_02.png" class="img-responsive" alt="">
						</div>
						<div class="roadmap-07-txt wow fadeInDown" data-wow-delay="0.6s">
							<p class="txt_type_00 txt_c_07">{!! trans('messages.to_map_14') !!}</p>
						</div>
						<!-- /07 -->
						<!-- 08/ -->
						<div class="roadmap-08-txt wow fadeInUp" data-wow-delay="0.6s">
							<p class="txt_type_00 txt_c_07">{!! trans('messages.to_map_15') !!}</p>
						</div>
						<div class="roadmap-08-pin wow fadeInUp" data-wow-delay="0.6s">
							<img src="/images/roadmap_01.png" class="img-responsive" alt="">
						</div>
						<div class="roadmap-08-date wow fadeInDown" data-wow-delay="0.6s">
							<p class="txt_type_02 txt_w txt_b">{!! trans('messages.to_map_16') !!}</p>
						</div>
						<!-- /08 -->
						<!-- 09/ -->
						<div class="roadmap-09-date wow fadeInUp" data-wow-delay="0.6s">
							<p class="txt_type_02 txt_w txt_b">{!! trans('messages.to_map_17') !!}</p>
						</div>
						<div class="roadmap-09-pin wow fadeInDown" data-wow-delay="0.6s">
							<img src="/images/roadmap_02.png" class="img-responsive" alt="">
						</div>
						<div class="roadmap-09-txt wow fadeInDown" data-wow-delay="0.6s">
							<p class="txt_type_00 txt_c_07">{!! trans('messages.to_map_18') !!}</p>
						</div>
						<!-- /09 -->
						<!-- 10/ -->
						<div class="roadmap-10-txt wow fadeInUp" data-wow-delay="0.6s">
							<p class="txt_type_00 txt_c_07">{!! trans('messages.to_map_19') !!}</p>
						</div>
						<div class="roadmap-10-pin wow fadeInUp" data-wow-delay="0.6s">
							<img src="/images/roadmap_01.png" class="img-responsive" alt="">
						</div>
						<div class="roadmap-10-date wow fadeInDown" data-wow-delay="0.6s">
							<p class="txt_type_02 txt_w txt_b">{!! trans('messages.to_map_20') !!}</p>
						</div>
						<!-- /10 -->
						<!-- 11/ -->
						<div class="roadmap-11-date wow fadeInUp" data-wow-delay="0.6s">
							<p class="txt_type_02 txt_w txt_b">{!! trans('messages.to_map_21') !!}</p>
						</div>
						<div class="roadmap-11-pin wow fadeInDown" data-wow-delay="0.6s">
							<img src="/images/roadmap_02.png" class="img-responsive" alt="">
						</div>
						<div class="roadmap-11-txt wow fadeInDown" data-wow-delay="0.6s">
							<p class="txt_type_00 txt_c_07">{!! trans('messages.to_map_22') !!}</p>
						</div>
						<!-- /11 -->
						<!-- 12/ -->
						<div class="roadmap-12-txt wow fadeInUp" data-wow-delay="0.6s">
							<p class="txt_type_00 txt_c_07">{!! trans('messages.to_map_23') !!}</p>
						</div>
						<div class="roadmap-12-pin wow fadeInUp" data-wow-delay="0.6s">
							<img src="/images/roadmap_01.png" class="img-responsive" alt="">
						</div>
						<div class="roadmap-12-date wow fadeInDown" data-wow-delay="0.6s">
							<p class="txt_type_02 txt_w txt_b">{!! trans('messages.to_map_24') !!}</p>
						</div>
						<!-- /12 -->
					</div>
				</div>
				<div class="col-xs-12 col-xs-12">
					<p class="space_50">&nbsp;</p>
				</div>

			</div>
		</div>
	</section>

	<!-- team -->
    <section id="team" data-stellar-background-ratio="0.5">
		<div class="c_bg_04">
		<div class="container">
			<div class="row">

				<!-- team/ -->
				<div class="col-xs-12 col-xs-12">
					<p class="space_50">&nbsp;</p>
					<div class="section-title wow t_center fadeInUp" data-wow-delay="0.1s">
						<h1>{!! trans('messages.team_00') !!}</h1>
					</div>
                </div>
      
                <div class="col-xs-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-thumb-box">
                            <p class="t_center"><img src="/images/team_01.jpg" class="img-responsive" alt=""></p>
                            <p class="team_name txt_type_02 txt_b">Jae Hong Kim</p>
                            <p class="team_company txt_type_01">Co-founder & CEO of CHAINPLUS<br>CEO of Melonbit</p>
                            <p class="team_link_01"><a href="https://bit.ly/2QI1b5H" target="_blank"><img src="/images/icon_link.jpg" width="22" height="22" alt=""></a></p>
                        </div>
                        <div class="team-hover">
                            <div class="team-item">&nbsp;</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-thumb-box team_mg_01">
                            <p class="t_center"><img src="/images/team_02.jpg" class="img-responsive" alt=""></p>
                            <p class="team_name txt_type_02 txt_b">Hyung Yul Yoo</p>
                            <p class="team_company txt_type_01">Co-founder & CTO of CHAINPLUS<br>CTO of Melonbit</p>
                            <!-- <p class="team_link_02"><a href="https://bit.ly/2Spjz93" target="_blank"><img src="/images/icon_link.jpg" width="22" height="22" alt=""></a></p> -->
                        </div>
                        <div class="team-hover">
                            <div class="team-item">&nbsp;</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-thumb-box team_mg_02">
                            <p class="t_center"><img src="/images/team_03.jpg" class="img-responsive" alt=""></p>
                            <p class="team_name txt_type_02 txt_b">Sang Guk Lee</p>
                            <p class="team_company txt_type_01">Co-founder & COO of CHAINPLUS<br>Director of MGAME</p>
                            <!-- <p class="team_link_03"><a href="#"><img src="/images/icon_link.jpg" width="22" height="22" alt=""></a></p> -->
                        </div>
                        <div class="team-hover">
                            <div class="team-item">&nbsp;</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-thumb-box">
                            <p class="t_center"><img src="/images/team_04.jpg" class="img-responsive" alt=""></p>
                            <p class="team_name txt_type_02 txt_b">Michael Kim</p>
                            <p class="team_company txt_type_01">Co-founder & CMO of CHAINPLUS<BR>CSO of Barunson E&A</p>
                            <p class="team_link_01"><a href="https://bit.ly/2Spjz93" target="_blank"><img src="/images/icon_link.jpg" width="22" height="22" alt=""></a></p>
                        </div>
                        <div class="team-hover">
                            <div class="team-item">&nbsp;</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-thumb-box team_mg_01">
                            <p class="t_center"><img src="/images/team_07.jpg" class="img-responsive" alt=""></p>
                            <p class="team_name txt_type_02 txt_b">Kyung Soo Kim</p>
                            <p class="team_company txt_type_01">CFO of CHAINPLUS<br>Finance in Foxconn, Samsung, Hyosung</p>
                        </div>
                        <div class="team-hover">
                            <div class="team-item">&nbsp;</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-thumb-box team_mg_02">
                            <p class="t_center"><img src="/images/team_08.jpg" class="img-responsive" alt=""></p>
                            <p class="team_name txt_type_02 txt_b">Jay W. Kim</p>
                            <p class="team_company txt_type_01">CLO of CHAINPLUS<br>New York Attorny</p>
                        </div>
                        <div class="team-hover">
                            <div class="team-item">&nbsp;</div>
                        </div>
                    </div>
                </div>


                <div class="col-xs-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-thumb-box ">
                            <p class="t_center"><img src="/images/team_05.jpg" class="img-responsive" alt=""></p>
                            <p class="team_name txt_type_02 txt_b">William. Ha</p>
                            <p class="team_company txt_type_01">Founder & CEO of TennTen<BR>CEO of ABLEX</p>
                        </div>
                        <div class="team-hover">
                            <div class="team-item">&nbsp;</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.9s">
                        <div class="team-thumb-box team_mg_01">
                            <p class="t_center"><img src="/images/team_06.jpg" class="img-responsive" alt=""></p>
                            <p class="team_name txt_type_02 txt_b">Yu Sik Kim</p>
                            <p class="team_company txt_type_01">Founder & CEO of DCInside</p>
                        </div>
                        <div class="team-hover">
                            <div class="team-item">&nbsp;</div>
                        </div>
                    </div>
                </div>
                
				<!-- /team -->
				<div class="col-xs-12 col-xs-12">
					<p class="space_100">&nbsp;</p>
				</div>

			</div>
		</div>
	</section>

	<!-- news -->
    <section id="news" data-stellar-background-ratio="0.5">
		<div class="c_bg_05">
		<div class="container">
			<div class="row">

				<!-- news/ -->
				<div class="col-xs-12 col-xs-12">
					<p class="space_100">&nbsp;</p>
					<div class="section-title wow t_center fadeInUp" data-wow-delay="0.1s">
						<h2>{!! trans('messages.news_00') !!}</h2>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.2s">
                        <div class="news-thumb-box">
                            <a href="https://bitcoinexchangeguide.com/bitcoin-sports-betting/" target="_blank">
                            <p class="news-padding-20"><img src="/images/news_p_01.jpg" class="img-responsive" alt=""></p>
                            <p class="news_title txt_type_02 txt_c_01">Bitcoin Sports Betting & Live Player Gambling?</p>
                            <p class="news_cont txt_type_00">When it comes to online sports betting, or any betting really, there is a lot involved with starting a successful website.</p>
                            </a>
                        </div>
                        <div class="news-hover">
                            <div class="news-item">&nbsp;</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.3s">
                        <div class="news-thumb-box">
                            <a href="https://www.learnliberty.org/blog/sports-betting-should-be-legal-across-the-country-heres-why/" target="_blank">
                            <p class="news-padding-20"><img src="/images/news_p_02.jpg" class="img-responsive" alt=""></p>
                            <p class="news_title txt_type_02 txt_c_01">Sports betting should be legal across the country.</p>
                            <p class="news_cont txt_type_00">The Oakland Raiders’ impending move to Las Vegas has reignited debate about the legality of betting on sports. Most states ban betting schemes (although Nevada is an exception)</p>
                            </a>
                        </div>
                        <div class="news-hover">
                            <div class="news-item">&nbsp;</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <div class="news-thumb-box">
                            <a href="https://blog.zensports.com/zensports-launches-peer-to-peer-sports-betting-c4e82c4d64c5" target="_blank">
                            <p class="news-padding-20"><img src="/images/news_p_03.jpg" class="img-responsive" alt=""></p>
                            <p class="news_title txt_type_02 txt_c_01">ZenSports Launches Peer-to-Peer Sports Betting!</p>
                            <p class="news_cont txt_type_00">We can’t contain our excitement over here at ZenSports’ headquarters — today we’re announcing the launch of a new peer-to-peer sports betting marketplace where anyone can</p>
                            </a>
                        </div>
                        <div class="news-hover">
                            <div class="news-item">&nbsp;</div>
                        </div>
                    </div>
                </div>
				<!-- /news -->
				<div class="col-xs-12 col-xs-12">
					<p class="space_100">&nbsp;</p>
				</div>

			</div>
		</div>
	</section>

	<!-- FOOTER -->
	<footer id="footer" data-stellar-background-ratio="0.5">
		<div class="c_bg_06">	
		<div class="container">
			<div class="row">

				<div class="col-xs-6 col-xs-12">
					<div class="footer-info-01">
						<div class="section-title">
							<p class="txt_type_02 txt_w txt_b wow fadeInUp" data-wow-delay="0.2s">{!! trans('messages.foot_me_00') !!}</p>
						</div>
						<div class="wow fadeInUp" data-wow-delay="0.4s">
							<p class="txt_type_00 txt_c_07"><a href="#home">{!! trans('messages.foot_me_01') !!}</a></p>
							<p class="txt_type_00 txt_c_07"><a href="#roadmap">{!! trans('messages.foot_me_02') !!}</a></p>
							<p class="txt_type_00 txt_c_07"><a href="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")'>{!! trans('messages.foot_me_03') !!}</a></p>
                            <p class="txt_type_00 txt_c_07"><a href="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")'>{!! trans('messages.foot_me_04') !!}</a></p>
                        </div>
					</div>
					<div class="footer-info-01">
						<div class="section-title">
							<p class="txt_type_02 txt_w txt_b wow fadeInUp" data-wow-delay="0.2s">{!! trans('messages.foot_us_00') !!}</p>
						</div>
						<div class="wow fadeInUp" data-wow-delay="0.4s">
							<p class="txt_type_00 txt_c_07"><a href="mailto:jhkim@doublebet.io">jhkim@doublebet.io</a></p>
							<p class="txt_type_00 txt_c_07">
								<a href="javascript:alert('Coming soon!')"><img src="/images/sns_tel.png" class="" alt=""></a>&nbsp;
								<a href="https://medium.com/@chainplus365" target="_blank"><img src="/images/sns_med.png" class="" alt=""></a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-xs-12">
					 <div class="footer-info-02">
						  <div class="section-title">
							   <p class="txt_type_02 txt_w txt_b wow fadeInUp" data-wow-delay="0.2s">{!! trans('messages.foot_mail_00') !!}</p>
						  </div>
						  <form name="subscribeForm" method="POST" onsubmit="return write_check();">
                            {!! csrf_field() !!}
                            <div class="wow fadeInUp" data-wow-delay="0.4s">
                                <p class="txt_type_00 txt_c_07">{!! trans('messages.foot_mail_01') !!}</p>
                                <p class="txt_type_00 txt_c_07">
                                    <input type="email" class="input_email" id="email" placeholder="e-mail" name="email" />
                                    <input type="image" src="/images/btn_submit.png" border="0" alt="Submit" style="float: right;" />
                                    <!-- <a href=""><img src="/images/btn_submit.png" /></a> -->
                                </p>
                            </div>
                            </form>
					 </div>
				</div>

				<div class="col-xs-12 col-xs-12">
					 <div class="wow fadeInUp" data-wow-delay="0.8s"> 
						  <p class="copyright-text txt_c_08"><br>Copyright &copy; 2019 CHAINPLUS. All Rights Reserved.</p>
					 </div>
				</div>
				
		   </div>
		</div>
		</div>
	</footer>

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
    
    <script>
        function write_check(){


            if(!$('#email').val()) {
                $('#email').focus();
                alert("{!! trans('messages.subscribeEmail') !!}");
                return false;
            }


            var formData = $("form[name=subscribeForm]").serialize() ;

            $.ajax({
                type : 'post',
                url : '/subscribe',
                data : formData,
                success : function(data) {
                    if(data == "1") {
                        $('#email').val('');
                        alert("{!! trans('messages.subscribeSuccess') !!}");
                    } else {
                        alert("error");
                    }
                }, // success 
    
                error : function(xhr, status) {
                    alert(xhr + " : " + status);
                }
            });

            return false;

        }


    </script>
 
</body>
</html>