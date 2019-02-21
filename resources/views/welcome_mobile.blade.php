<?php

$paper_link = "https://bit.ly/2SMkkbA";
if(Cookie::get('language') == "kr") $paper_link = "https://bit.ly/2UUIkqs";

?>
<!DOCTYPE html>
<html lang="{{Cookie::get('language')}}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>DoubleBet</title>
	<link rel="shortcut icon" href="/images/favicon.ico">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/menu_styles.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/mobile_style.css?v=4">
</head>
<body>
<div id="pgcontainer">
    <header>
        <div id="navbar">
			<a href="#" class="menubtn">menu</a>
            <span class="newLogo"><img src="/images/mobile/logo.png" alt="Doublbet"></span>
			<div class="top_sns">
				<a href="javascript:alert('coming soon');"><img src="/images/mobile/icon_tel.png" alt=""></a>
				<a href="https://medium.com/@chainplus365" target="_blank"><img src="/images/mobile/icon_med.png" alt=""></a>
			</div>

            <!-- 메뉴항목 -->
            <div id="hamburgermenu">
                <div class="menuTop">
					<a href="#" class="menu_bi"><img src="/images/mobile/logo_bg.png" alt=""></a></span>
                    <a href="#" class="menu_close"><img src="/images/mobile/btn_close.png" alt="메뉴닫기"></a> 
                </div>
                <ul>
                    <li><a href="#home" class="smoothScroll link">{!! trans('messages.me_home') !!}</a></li>
					<li><a href="#project" class="smoothScroll link">{!! trans('messages.me_project') !!}</a></li>
					<li><a href="#tokenomics" class="smoothScroll link">{!! trans('messages.me_tokenomics') !!}</a></li>
					<li><a href="#roadmap" class="smoothScroll link">{!! trans('messages.me_roadmap') !!}</a></li>
					<li><a href="#team" class="smoothScroll link">{!! trans('messages.me_team') !!}</a></li>
					<li><a href="#news" class="smoothScroll link">{!! trans('messages.me_news') !!}</a></li>
					<li><a href="{{$paper_link}}" target="_blank">{!! trans('messages.me_whitepaper') !!}</a></li>
					<li>
						<select name="lang-select" class="lang-select" onchange="location.href=this.value">
							<option value="/lang/en" @if(Cookie::get('language') == "en") selected @endif>EN</option>
							<option value="/lang/kr" @if(Cookie::get('language') == "kr") selected @endif>KR</option>
						</select>
					</li>
					<li>
						<div class="sns-icon">
							<ul>
							<li><a href="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")'><img src="/images/mobile/icon_tel.png" alt="telegram"></a></li>
							<li><a href="https://medium.com/@chainplus365" target="_blank"><img src="/images/mobile/icon_med.png" alt="medium"></a></li>
							</ul>
						</div>
					</li>
                </ul>
            </div>
            <div class="overlay"></div> 
        </div>
	</header>
	

	
    
    <!-- 컨텐츠 내용-->      
    <div id="content">
		<section id="home" data-stellar-background-ratio="0.5">
			<div class="home-visual">
				<ul class="home-visual-slider">
					<li class="item-01">
						<p class="s_txt_01 txt_type_03 txt_w txt_b">{!! trans('messages.ho_t_1_01') !!}</span>
						<p class="s_txt_02 txt_type_01 txt_w">{!! trans('messages.ho_t_1_02') !!} </p>
						<p class="s_txt_03 txt_w">{!! trans('messages.ho_t_1_03') !!}</p>
						<a href="{{$paper_link}}" target="_blank" class="section-btn-01 btn btn-default ">{!! trans('messages.ho_t_1_04') !!}</a>&nbsp;&nbsp;&nbsp;
						<a href="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")' class="section-btn-02 btn btn-default ">{!! trans('messages.ho_t_1_05') !!}</a>
					</li>
					<li class="item-02">
						<p class="s_txt_01 txt_type_03 txt_w txt_b">{!! trans('messages.ho_t_2_01') !!}</span>
						<p class="s_txt_02 txt_type_01 txt_w">{!! trans('messages.ho_t_2_02') !!}</p>
						<p class="s_txt_03 txt_w">{!! trans('messages.ho_t_2_03') !!}</p>
						<a href="{{$paper_link}}" target="_blank" class="section-btn-01 btn btn-default ">{!! trans('messages.ho_t_2_04') !!}</a>&nbsp;&nbsp;&nbsp;
						<a href="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")' class="section-btn-02 btn btn-default ">{!! trans('messages.ho_t_2_05') !!}</a>
					</li>
					<li class="item-03">
						<p class="s_txt_01 txt_type_03 txt_w txt_b">{!! trans('messages.ho_t_3_01') !!}</span>
						<p class="s_txt_02 txt_type_01 txt_w">{!! trans('messages.ho_t_3_02') !!}</p>
						<p class="s_txt_03 txt_w">{!! trans('messages.ho_t_3_03') !!}</p>
						<a href="{{$paper_link}}" target="_blank" class="section-btn-01 btn btn-default ">{!! trans('messages.ho_t_3_04') !!}</a>&nbsp;&nbsp;&nbsp;
						<a href="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")' class="section-btn-02 btn btn-default ">{!! trans('messages.ho_t_3_05') !!}</a>
					</li>
					<li class="item-04">
						<p class="s_txt_01 txt_type_03 txt_w txt_b">{!! trans('messages.ho_t_4_01') !!}</span>
						<p class="s_txt_02 txt_type_01 txt_w">{!! trans('messages.ho_t_4_02') !!}</p>
						<p class="s_txt_03 txt_w">{!! trans('messages.ho_t_4_03') !!}</p>
						<a href="{{$paper_link}}" target="_blank" class="section-btn-01 btn btn-default ">{!! trans('messages.ho_t_4_04') !!}</a>&nbsp;&nbsp;&nbsp;
						<a href="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")' class="section-btn-02 btn btn-default ">{!! trans('messages.ho_t_4_05') !!}</a>
					</li>
					<li class="item-05">
						<p class="s_txt_01 txt_type_03 txt_w txt_b">{!! trans('messages.ho_t_5_01') !!}</span>
						<p class="s_txt_02 txt_type_01 txt_w">{!! trans('messages.ho_t_5_02') !!}</p>
						<p class="s_txt_03 txt_w">{!! trans('messages.ho_t_5_03') !!}</p>
						<a href="{{$paper_link}}" target="_blank" class="section-btn-01 btn btn-default ">{!! trans('messages.ho_t_5_04') !!}</a>&nbsp;&nbsp;&nbsp;
						<a href="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")' class="section-btn-02 btn btn-default ">{!! trans('messages.ho_t_5_05') !!}</a>
					</li>
				</ul>
			</div>
		</section>

		<section id="project" data-stellar-background-ratio="0.5">
        <!-- market/ -->
			<div class="project-content">
				<div class="section-title t_center fadeInUp" data-wow-delay="0.1s">
					<p class="txt_type_02 txt_c_01 txt_b">{!! trans('messages.po_st_00') !!}</p>
				</div>
				<!-- market1/ -->
				<div class="project-intro wow fadeInUp" data-wow-delay="0.2s">
					<div class="project-intro1 " >
						<p class="t_mid pa_ce_20 txt_type_00 txt_w txt_b">{!! trans('messages.po_st_01_m') !!}</p>
					</div>
					<div class="text-center"><img src="/images/mobile/img_down_arrow_02.png" style="width: 10%;margin-top: -6px;"/></div>
					<div class="project-intro2 " >
					<p class="t_mid pa_ce_20">{!! trans('messages.po_st_02_m') !!}</p>
					</div>

					<div class="project-intro3 " >
					<img src="/images/mobile/intro_di_01.jpg" class="img-bottom" alt="">
					</div>
				</div>
				<!-- /market1 -->
				<!-- market2/ -->
				<div class="project-intro wow fadeInUp" data-wow-delay="0.3s">
					<div class="project-intro1 " >
						<p class="t_mid pa_ce_20 txt_type_00 txt_w txt_b">{!! trans('messages.po_st_03_m') !!}</p>
					</div>
					<div class="text-center"><img src="/images/mobile/img_down_arrow_02.png" style="width: 10%;margin-top: -6px;"/></div>
					<div class="project-intro2 " >
					<p class="t_mid pa_ce_20">{!! trans('messages.po_st_04_m') !!}</p>
					</div>

					<div class="porject-intro3 " >
					<img src="/images/mobile/intro_di_02.jpg" class="img-bottom" alt="">
					</div>
				</div>
				<!-- /market2 -->
				<!-- market3/ -->
				<div class="project-intro wow fadeInUp" data-wow-delay="0.4s">
					<div class="project-intro1 ">
					<p class="t_mid pa_ce_20 txt_type_00 txt_w txt_b">{!! trans('messages.po_st_05_m') !!}</p>
					</div>
					<div class="text-center"><img src="/images/mobile/img_down_arrow_02.png" style="width: 10%;margin-top: -6px;"/></div>
					<div class="project-intro2 " >
					<p class="t_mid pa_ce_20">{!! trans('messages.po_st_06_m') !!}</p>
					</div>

					<div class="porject-intro3 " >
					<img src="/images/mobile/intro_di_03.jpg" class="img-bottom" alt="">
					</div>
				</div>
				<!-- /market3 -->
				
				
			</div>

			<div class="project-content" style="background:#a563f5;padding-bottom:50px">
				<div class="section-title t_center wow fadeInUp" data-wow-delay="0.1s">
					<p class="txt_type_02 txt_w txt_b">{!! trans('messages.po_vs_00') !!}</p>
				</div>
				<div class="wow fadeInUp" data-wow-delay="0.3s"  style="border:1px solid #d2b1fa;border-radius:3px;color:#decff1;text-align:center;padding:10px;margin-bottom:15px">
                {!! trans('messages.po_vs_01') !!}
				</div>
				<div class="wow fadeInUp" data-wow-delay="0.4s"   style="border:1px solid #d2b1fa;border-radius:3px;color:#decff1;text-align:center;padding:10px;margin-bottom:15px">
                {!! trans('messages.po_vs_02') !!}
				</div>
				<div class="wow fadeInUp" data-wow-delay="0.5s"   style="border:1px solid #d2b1fa;border-radius:3px;color:#decff1;text-align:center;padding:10px;margin-bottom:15px">
				{!! trans('messages.po_vs_03') !!}
				</div>
				<div class="txt_w " style="text-align:center;background:#7748b1;padding:20px;font-size:1.5em;line-height:1.5em;">
				{!! trans('messages.po_vs_04') !!}
				</div>
				<div style="text-align:center;background:#fff;padding-bottom:30px;">
					<img src="/images/mobile/img_down_arrow.png" style="width:80px;margin-top:-6px"/>
					<p style="margin-top:30px;color:#a563f5">{!! trans('messages.po_vs_07') !!}</p>
					<p class="txt_type_02 txt_b" style="color:#a563f5">{!! trans('messages.po_vs_08') !!}</p>
					<div style="margin-top:20px;"class="wow fadeInUp" data-wow-delay="0.1s"  >
						<img src="/images/mobile/icon_01.png" style="max-width:100px;padding-bottom:5px" />
						<p class="txt_c_15" >{!! trans('messages.po_vs_09') !!}</p>
					</div>
					<div style="margin-top:20px;"class="wow fadeInUp" data-wow-delay="0.3s"  >
						<img src="/images/mobile/icon_02.png" style="max-width:100px;padding-bottom:5px" />
						<p class="txt_c_15" >{!! trans('messages.po_vs_10') !!}</p>
					</div>
					<div style="margin-top:20px;"class="wow fadeInUp" data-wow-delay="0.5s"  >
						<img src="/images/mobile/icon_03.png" style="max-width:100px;padding-bottom:5px" />
						<p class="txt_c_15"  >{!! trans('messages.po_vs_11') !!}</p>
					</div>
				</div>
			</div>
			<div class="project-content">
				<div class="section-title t_center fadeInUp" data-wow-delay="0.1s">
					<p class="txt_type_02 txt_c_01 txt_b">{!! trans('messages.po_svc_00') !!}</p>
					<p class="txt_c_02">{!! trans('messages.po_svc_01') !!}</p>
				</div>
				<div class="wow fadeInUp" data-wow-delay="0.1s">
					<img src="/images/mobile/img_service_01.png" />
				</div>
			</div>
			<div style="background:#a563f5;">
				
				<div class="section-title t_center "  style="padding:1em 1.5em;">
					<p class="txt_type_02 txt_w txt_b">{!! trans('messages.po_core_00') !!}</p>
					<p class="txt_c_03">T{!! trans('messages.po_core_01') !!}</p>
				</div>
				<div class="wow fadeInUp" data-wow-delay="0.1s">
					<p class="txt_type_01 txt_c_04 text-center txt_b"style="padding:20px 0px 10px"  >Double X Core AI</p>
					<img src="/images/mobile/img_service_02.png" />
					<p class="txt_w" style="text-align:center;background:#7748b1;padding:2em 1.5em;">
                        {!! trans('messages.po_core_02') !!}
					</p>
				</div>
				<div class="wow fadeInUp" data-wow-delay="0.2s">
					<p class="txt_type_01 txt_c_04 text-center txt_b" style="padding:20px 0px 10px" >Double X Core Wallet</p>
					<img src="/images/mobile/img_service_03.png" />
					<p class="txt_w " style="text-align:center;background:#7748b1;padding:2em 1.5em;">
                        {!! trans('messages.po_core_03') !!}
					</p>
				</div>
				<div class="wow fadeInUp" data-wow-delay="0.3s">
					<p class="txt_type_01 txt_c_04 text-center txt_b" style="padding:20px 0px 10px"   >Double X Core Betting</p>
					<img src="/images/mobile/img_service_04.png" />
					<p class="txt_w" style="text-align:center;background:#7748b1;padding:2em 1.5em;">
                        {!! trans('messages.po_core_04') !!}
					</p>
				</div>
			</div>
		<!-- /market -->
		</section>


		<section id="tokenomics" data-stellar-background-ratio="0.5" >
			<div class="tokenomics-content" style="background:#f8f8f8">
				<div class="section-title t_center fadeInUp" data-wow-delay="0.1s">
					<p class="txt_type_02 txt_c_01 txt_b">{!! trans('messages.to_int_00') !!}</p>
					<p class="txt_c_02">{!! trans('messages.to_int_01') !!}</p>
				</div>
				<div class="row wow fadeInUp" style="margin-bottom:20px;" data-wow-delay="0.1s">
					<div class="col-xs-6" >
						<div style="background:#a563f5;padding:10px;width:100%;">
							<p class="txt_w text-center txt_type_07">{!! trans('messages.to_dg_01') !!}</p>
							<p class="txt_c_04 txt_b text-center txt_type_02">{!! trans('messages.to_dg_02') !!}</p>
						</div>
					</div>
					<div class="col-xs-6">
						<div style="border-top:1px solid #a563f5;background:#fff;padding:10px;">
							<p class="txt_c_02 text-center txt_type_07">{!! trans('messages.to_dg_03') !!}</p>
							<p class="txt_c_01 text-center txt_type_02">{!! trans('messages.to_dg_04') !!}</p>
						</div>
					</div>
				</div>
				<div class="row wow fadeInUp" style="margin-bottom:20px;" data-wow-delay="0.2s">
					<div class="col-xs-6">
						<div style="border-top:1px solid #a563f5;background:#fff;padding:10px">
							<p class="txt_c_02 text-center txt_type_07">{!! trans('messages.to_dg_05') !!}</p>
							<p class="txt_c_01 text-center txt_type_02">{!! trans('messages.to_dg_06') !!}</p>
						</div>
					</div>
					<div class="col-xs-6 wow fadeInUp">
						<div style="border-top:1px solid #a563f5;background:#fff;padding:10px">
								<p class="txt_c_02 text-center txt_type_07">{!! trans('messages.to_dg_07') !!}</p>
								<p class="txt_c_01 text-center txt_type_02">{!! trans('messages.to_dg_08') !!}</p>
							</div>
					</div>
				</div>
				<div class="row wow fadeInUp" style="margin-bottom:20px;" data-wow-delay="0.3s">
					<div class="col-xs-6">
						<div style="border-top:1px solid #a563f5;background:#fff;padding:10px">
							<p class="txt_c_02 text-center txt_type_07">{!! trans('messages.to_dg_09') !!}</p>
							<p class="txt_c_01 text-center txt_type_02">{!! trans('messages.to_dg_10') !!}</p>
						</div>
					</div>
					<div class="col-xs-6">
						<div style="border-top:1px solid #a563f5;background:#fff;padding:10px">
							<p class="txt_c_02 text-center txt_type_07" >{!! trans('messages.to_dg_11') !!}</p>
							<p class="txt_c_01 text-center txt_type_02">{!! trans('messages.to_dg_12') !!}</p>
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
			</div>

			<div class="tokenomics-content" >
				<div class="section-title t_center fadeInUp" data-wow-delay="0.1s">
					<p class="txt_type_02 txt_c_01 txt_b">{!! trans('messages.to_dt_00') !!}</p>
				</div>
				
				<div class="text-center" style="position:relative;">
					
					<img src="/images/mobile/img_tokenomics_bg01.png" class="tokenomics_donut"  />
					<div class="wow fadeInLeft tokenomics_donut_graph_01" data-wow-delay="0.1s">
						<div class="txt_c_06 txt_type_08" style="text-align: right;float:left;"><span class="txt_c_05">{!! trans('messages.to_dt_01') !!}</span><br>{!! trans('messages.to_dt_02_m') !!}</div>
						<div  style="float:left;text-align:left;padding:30px 0px 0px 5px"><img src="/images/mobile/img_tokenomics_line_01.png" style="width:25%;"/></div>
					</div>
					<div class="wow fadeInLeft tokenomics_donut_graph_02" data-wow-delay="0.2s">
						<div class="txt_c_06 txt_type_08" style="text-align: right;float:left"><span class="txt_c_09">{!! trans('messages.to_dt_03') !!}</span><br>{!! trans('messages.to_dt_04_m') !!}</div>
						<div style="float:left;text-align:left;padding:30px 0px 0px 5px"><img src="/images/mobile/img_tokenomics_line_02.png" style="width:25%;"/></div>
					</div>
					<div  class="wow fadeInLeft tokenomics_donut_graph_03" data-wow-delay="0.3s"  >
						<div class="txt_c_06 txt_type_08" style="text-align: right;float:left"><span class="txt_c_10">{!! trans('messages.to_dt_05') !!}</span><br>{!! trans('messages.to_dt_06_m') !!}</div>
						<div style="float:left;text-align:left;padding:0px 0px 0px 5px"><img src="/images/mobile/img_tokenomics_line_03.png" style="width:25%;"/></div>
					</div>
					<div  class="wow fadeInUp tokenomics_donut_graph_04" data-wow-delay="0.4s">
						<div class="txt_c_06 txt_type_08" style="text-align: right;float:left"><span class="txt_c_11">{!! trans('messages.to_dt_07') !!}</span><br>{!! trans('messages.to_dt_08_m') !!}</div>
						<div style="float:left;text-align:left;padding:0px 0px 0px 5px;"><img src="/images/mobile/img_tokenomics_line_04.png" style="width:25%;"/></div>
					</div>
					<div  class="wow fadeInUp tokenomics_donut_graph_05" data-wow-delay="0.5s" >
						<div style="text-align:left;float:left;"><img src="/images/mobile/img_tokenomics_line_05.png" style="width:44px;"/></div>
						<div class="txt_c_06 txt_type_08" style="text-align:left;float:left;padding:10px 0px 0px 5px;"><span class="txt_c_14">{!! trans('messages.to_dt_13') !!}</span><br>{!! trans('messages.to_dt_14_m') !!}</div>
					</div>
					<div  class="wow fadeInRight tokenomics_donut_graph_06" data-wow-delay="0.6s">
						<div style="text-align:left;float:left;"><img src="/images/mobile/img_tokenomics_line_06.png" style="width:35px;"/></div>
						<div class="txt_c_06 txt_type_08" style="text-align:left;float:left;padding:0px 0px 0px 5px;"><span class="txt_c_13">{!! trans('messages.to_dt_11') !!}</span><br>{!! trans('messages.to_dt_12_m') !!}</div>
					</div>
					<div  class="wow fadeInRight tokenomics_donut_graph_07" data-wow-delay="0.7s"  >
						<div style="text-align:left;float:left;"><img src="/images/mobile/img_tokenomics_line_07.png" style="width:34px;"/></div>
						<div class="txt_c_06 txt_type_08" style="text-align:left;float:left;padding:0px 0px 0px 5px;"><span class="txt_c_12">{!! trans('messages.to_dt_09') !!}</span><br>{!! trans('messages.to_dt_10_m') !!}</div>
					</div>
				</div>
			</div>

			<!-- <div class="tokenomics-content" style="background:#a563f5">
				<div class="section-title t_center fadeInUp" data-wow-delay="0.1s" style="padding:1em 1.5em;">
					<p class="txt_type_02 txt_w txt_b">{!! trans('messages.to_sto_00') !!}</p>
					<p class="txt_w">{!! trans('messages.to_sto_01') !!}</p>
				</div>
				<div class="text-center" style="position:relative;">
					<img src="/images/mobile/img_tokenomics_bg02.png" style="width:60%;padding:60px 0px;" />
					<div class="wow fadeInLeft" data-wow-delay="0.1s" style="position:absolute;top:27%;left:1%;">
						<div class="txt_w txt_type_08" style="text-align: right;float:left">{!! trans('messages.to_fund_01') !!}<br>{!! trans('messages.to_fund_02') !!}</div>
						<div style="float:left;text-align:left;padding:30px 0px 0px 5px"><img src="/images/mobile/img_tokenomics_line_08.png" style="width:25%;"/></div>
					</div>
					
					<div class="wow fadeInLeft" data-wow-delay="0.2s" style="position:absolute;top:65%;left:4%;">
						<div class="txt_w txt_type_08"  style="text-align: right;float:left">{!! trans('messages.to_fund_03') !!}<br>{!! trans('messages.to_fund_04') !!}</div>
						<div style="float:left;text-align:left;padding:30px 0px 0px 5px"><img src="/images/mobile/img_tokenomics_line_09.png" style="width:25%;"/></div>
					</div>
					<div class="wow fadeInRight" data-wow-delay="0.3s" style="position:absolute;top:20%;left:45%;">
						<div style="text-align:left;float:left;"><img src="/images/mobile/img_tokenomics_line_10.png" style="width:100px;"/></div>
						<div class="txt_w txt_type_08"  style="text-align:left;float:left;padding:0px 0px 0px 5px;">{!! trans('messages.to_fund_05') !!}<br>{!! trans('messages.to_fund_06') !!}</div>
					</div>
					<div class="wow fadeInRight" data-wow-delay="0.4s" style="position:absolute;top:50%;left:75%;">
						<div style="text-align:left;float:left;"><img src="/images/mobile/img_tokenomics_line_11.png" style="width:20px;"/></div>
						<div  class="txt_w txt_type_08"  style="text-align:left;float:left;padding:0px 0px 0px 5px;">{!! trans('messages.to_fund_07') !!}<br>{!! trans('messages.to_fund_08') !!}</div>
					</div>
				</div>
			</div> -->
			<div class="tokenomics-content"  >
				<div class="section-title t_center fadeInUp" data-wow-delay="0.1s">
					<p class="txt_type_02 txt_c_01 txt_b">{!! trans('messages.to_sale_00') !!}</p>
				</div>
				<div class="row wow fadeInUp"  data-wow-delay="0.1s">
					<div class="col-xs-12" >
						<div style="display: inline-block;background:#a563f5;width:100%;margin-bottom:10px">
							<div  class="col-xs-4 txt_w txt_type_08" style="padding:10px">
									<p>{!! trans('messages.to_sale_01') !!}</p>
									<p>{!! trans('messages.to_sale_02') !!}</p>
							</div>
							<div  class="col-xs-4 text-center txt_c_04 txt_type_03 txt_b" style="padding-top:15px">{!! trans('messages.to_sale_03') !!}</div>
							<div class="col-xs-4 txt_w txt_type_08" style="padding:10px">
								<p>{!! trans('messages.to_sale_04') !!}</p>
								<p>{!! trans('messages.to_sale_05') !!}</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row wow fadeInUp"  data-wow-delay="0.2s">
					<div class="col-xs-12" >
						<div style="display: inline-block;background:#f8f8f8;width:100%;margin-bottom:10px">
							<div  class="col-xs-4 txt_c_01 txt_type_08" style="padding:10px">
									<p>{!! trans('messages.to_sale_06') !!}</p>
									<p>{!! trans('messages.to_sale_07') !!}</p>
							</div>
							<div  class="col-xs-4 text-center txt_c_01 txt_type_03 txt_b" style="padding-top:15px">{!! trans('messages.to_sale_08') !!}</div>
							<div class="col-xs-4 txt_c_02 txt_type_08" style="padding:10px">
								<p>{!! trans('messages.to_sale_09') !!}</p>
								<p>{!! trans('messages.to_sale_10') !!}</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row wow fadeInUp"  data-wow-delay="0.3s">
					<div class="col-xs-12" >
						<div style="display: inline-block;background:#f8f8f8;width:100%;margin-bottom:10px">
							<div  class="col-xs-4 txt_c_01 txt_type_08" style="padding:10px">
									<p>{!! trans('messages.to_sale_11') !!}</p>
									<p>{!! trans('messages.to_sale_12') !!}</p>
							</div>
							<div  class="col-xs-4 text-center txt_c_01 txt_type_03 txt_b" style="padding-top:15px">{!! trans('messages.to_sale_13') !!}</div>
							<div class="col-xs-4 txt_c_02 txt_type_08" style="padding:10px">
								<p>{!! trans('messages.to_sale_14') !!}</p>
								<p>{!! trans('messages.to_sale_15') !!}</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>

		<section id="roadmap" data-stellar-background-ratio="0.5" >
			<div class="roadmap-content" style="background:#7748b1;height:1450px;">
				<div class="section-title t_center fadeInUp" data-wow-delay="0.1s" style="padding:1em 1.5em;">
					<p class="txt_type_02 txt_w txt_b">{!! trans('messages.to_map_00') !!}</p>
					
				</div>
				<div class="row" >
					<div class="col-xs-6" style="position:relative;height:1450px; border-right:1px solid #fff">
						<div class="wow fadeInLeft" data-wow-delay="0.2s" style="position:absolute;right:20px;top:100px;text-align: right">
							<div style="position:absolute;right: -24px;"><img src="/images/mobile/img_roadmap_line_01.png" style="width:20px;"/></div>
							<p class="txt_w" style="margin-bottom:0px;">{!! trans('messages.to_map_03') !!}</p>
							<p class="txt_c_07" >{!! trans('messages.to_map_04') !!}</p>
						</div>
						<div class="wow fadeInLeft" data-wow-delay="0.4s"  style="position:absolute;right:20px;top:280px;text-align: right">
								<div style="position:absolute;right: -24px;"><img src="/images/mobile/img_roadmap_line_01.png" style="width:20px;"/></div>
							<p class="txt_w" style="margin-bottom:0px;">{!! trans('messages.to_map_07') !!}</p>
							<p class="txt_c_07" >{!! trans('messages.to_map_08') !!}</p>
						</div>
						<div class="wow fadeInLeft" data-wow-delay="0.6s"  style="position:absolute;right:20px;top:540px;text-align: right">
							<div style="position:absolute;right: -24px;"><img src="/images/mobile/img_roadmap_line_01.png" style="width:20px;"/></div>
							<p class="txt_w" style="margin-bottom:0px;">{!! trans('messages.to_map_11') !!}</p>
							<p class="txt_c_07" >{!! trans('messages.to_map_12') !!}</p>
						</div>

						<div class="wow fadeInLeft" data-wow-delay="0.8s"  style="position:absolute;right:20px;top:750px;text-align: right">
							<div style="position:absolute;right: -24px;"><img src="/images/mobile/img_roadmap_line_01.png" style="width:20px;"/></div>
							<p class="txt_w" style="margin-bottom:0px;">{!! trans('messages.to_map_21') !!}</p>
							<p class="txt_c_07" >{!! trans('messages.to_map_22') !!}</p>
						</div>

						

						<div class="wow fadeInLeft" data-wow-delay="1.0s"  style="position:absolute;right:20px;top:900px;text-align: right">
							<div style="position:absolute;right: -24px;"><img src="/images/mobile/img_roadmap_line_01.png" style="width:20px;"/></div>
							<p class="txt_w" style="margin-bottom:0px;">{!! trans('messages.to_map_17') !!}</p>
							<p class="txt_c_07" >{!! trans('messages.to_map_18') !!}</p>
						</div>
						<div class="wow fadeInLeft" data-wow-delay="1.2s"  style="position:absolute;right:20px;top:1140px;text-align: right">
							<div style="position:absolute;right: -24px;"><img src="/images/mobile/img_roadmap_line_01.png" style="width:20px;"/></div>
							<p class="txt_w" style="margin-bottom:0px;">{!! trans('messages.to_map_13') !!}</p>
							<p class="txt_c_07" >{!! trans('messages.to_map_14') !!}</p>
						</div>
						
					</div>
					<div class="col-xs-6" style="position:relative;" >
						<div class="wow fadeInRight" data-wow-delay="0.1s"  style="position:absolute;left:20px;top:25px;">
							<div style="text-align:left;float:left;margin-left:-25px"><img src="/images/mobile/img_roadmap_line_02.png" style="width:20px;"/> </div>
							<p class="txt_w" style="margin-bottom:0px;">{!! trans('messages.to_map_02') !!}</p>
							<p class="txt_c_07" >{!! trans('messages.to_map_01') !!}</p>
						
						</div>

						<div class="wow fadeInRight" data-wow-delay="0.3s"  style="position:absolute;left:20px;top:190px;">
							<div style="text-align:left;float:left;margin-left:-25px"><img src="/images/mobile/img_roadmap_line_02.png" style="width:20px;"/> </div>
							<p class="txt_w" style="margin-bottom:0px;">{!! trans('messages.to_map_06') !!}</p>
							<p class="txt_c_07" >{!! trans('messages.to_map_05') !!}</p>
						</div>

						<div class="wow fadeInRight" data-wow-delay="0.5s"  style="position:absolute;left:20px;top:390px;">
							<div style="text-align:left;float:left;margin-left:-25px"><img src="/images/mobile/img_roadmap_line_02.png" style="width:20px;"/> </div>
							<p class="txt_w" style="margin-bottom:0px;">{!! trans('messages.to_map_10') !!}</p>
							<p class="txt_c_07" >{!! trans('messages.to_map_09') !!}</p>
							
						</div>

						<div class="wow fadeInRight" data-wow-delay="0.7s"  style="position:absolute;left:20px;top:630px;">
							<div style="text-align:left;float:left;margin-left:-25px"><img src="/images/mobile/img_roadmap_line_02.png" style="width:20px;"/> </div>
							<p class="txt_w" style="margin-bottom:0px;">{!! trans('messages.to_map_24') !!}</p>
							<p class="txt_c_07" >{!! trans('messages.to_map_23') !!}</p>
						</div>
                        
                        
						<div class="wow fadeInRight" data-wow-delay="0.9s"  style="position:absolute;left:20px;top:830px;">
							<div style="text-align:left;float:left;margin-left:-25px"><img src="/images/mobile/img_roadmap_line_02.png" style="width:20px;"/> </div>
							<p class="txt_w" style="margin-bottom:0px;">{!! trans('messages.to_map_20') !!}</p>
							<p class="txt_c_07" >{!! trans('messages.to_map_19') !!}</p>
						</div>
						<div class="wow fadeInRight" data-wow-delay="1.1s"  style="position:absolute;left:20px;top:1000px;">
							<div style="text-align:left;float:left;margin-left:-25px"><img src="/images/mobile/img_roadmap_line_02.png" style="width:20px;"/> </div>
							<p class="txt_w" style="margin-bottom:0px;">{!! trans('messages.to_map_16') !!}</p>
							<p class="txt_c_07" >{!! trans('messages.to_map_15') !!}</p>
						</div>
						
						
					</div>
					
				</div>
			</div>
			<div style="clear:both;"></div>
				
		</section>

		<section id="team" data-stellar-background-ratio="0.5" >
			<div class="ourteam-content" >
				<div class="section-title t_center fadeInUp" data-wow-delay="0.1s">
					<p class="txt_type_06 txt_c_01 txt_b">{!! trans('messages.team_00') !!}</p>
				</div>
				<div class="row" >
					<div class="col-xs-12 text-center wow fadeInUp" data-wow-delay="0.1s"  style="margin-bottom:30px">
						<img src="/images/mobile/team_01.jpg" alt="" style="max-width:230px">
						<p class="txt_c_16" style="margin:10px 0px 0px">Jae Hong Kim</p>
						<p class="txt_c_02">CEO of DOUBLEBET<br>CEO of Melonbit</p>
						<p><a href="https://bit.ly/2QI1b5H" target="_blank"><img src="/images/mobile/icon_link.jpg" style="width:20px;" alt=""></a></p>
					</div>
					<div class="col-xs-12 text-center wow fadeInUp" data-wow-delay="0.2s"  style="margin-bottom:30px">
						<img src="/images/mobile/team_02.jpg" alt="" style="max-width:230px">
						<p class="txt_c_16" style="margin:10px 0px 0px">Hyung Yul Yoo</p>
						<p class="txt_c_02">CTO of DOUBLEBET<br>CTO of Melonbit</p>
					</div>
					<div class="col-xs-12 text-center wow fadeInUp"  data-wow-delay="0.3s"  style="margin-bottom:30px">
						<img src="/images/mobile/team_03.jpg"  alt="" style="max-width:230px">
						<p class="txt_c_16" style="margin:10px 0px 0px">Sang Guk Lee</p>
						<p class="txt_c_02">COO of DOUBLEBET<br>Director of MGAME</p>
					</div>
					<div class="col-xs-12 text-center wow fadeInUp " data-wow-delay="0.4s"  style="margin-bottom:30px">
						<img src="/images/mobile/team_04.jpg" alt="" style="max-width:230px">
						<p class="txt_c_16" style="margin:10px 0px 0px">Michael Kim</p>
						<p class="txt_c_02">CMO of DOUBLEBET<BR>CSO of Barunson E&A</p>
						<p><a href="https://bit.ly/2Spjz93" target="_blank"><img src="/images/mobile/icon_link.jpg" style="width:20px;" alt=""></a></p>
					</div>

					<div class="col-xs-12 text-center wow fadeInUp " data-wow-delay="0.5s"  style="margin-bottom:30px">
						<img src="/images/mobile/team_07.jpg" alt="" style="max-width:230px">
						<p class="txt_c_16" style="margin:10px 0px 0px">Kyung Soo Kim</p>
						<p class="txt_c_02">CFO of DOUBLEBET<br>Finance in Samsung & Hyosung</p>
						
					</div>

					<div class="col-xs-12 text-center wow fadeInUp " data-wow-delay="0.6s"  style="margin-bottom:30px">
						<img src="/images/mobile/team_08.jpg" alt="" style="max-width:230px">
						<p class="txt_c_16" style="margin:10px 0px 0px">Jay W. Kim</p>
						<p class="txt_c_02">CLO of DOUBLEBET<br>Attorney at Law (NY, NJ) & C.P.A</p>
						
					</div>


					<div class="col-xs-12 text-center wow fadeInUp " data-wow-delay="0.7s"  style="margin-bottom:30px">
						<img src="/images/mobile/team_05.jpg"  alt="" style="max-width:230px">
						<p class="txt_c_16" style="margin:10px 0px 0px">William. Ha</p>
						<p class="txt_c_02">Founder & CEO of TennTen<BR>CEO of ABLEX</p>
					</div>
					<div class="col-xs-12 text-center wow fadeInUp " data-wow-delay="0.8s"  style="margin-bottom:30px">
						<img src="/images/mobile/team_06.jpg"  alt="" style="max-width:230px">
						<p class="txt_c_16" style="margin:10px 0px 0px">Yu Sik Kim</p>
						<p class="txt_c_02">Founder & CEO of DCInside</p>
					</div>
				</div>
			</div>
		</section>

		<section id="news" data-stellar-background-ratio="0.5" >
			<div class="new-content" style="background:#a563f5">
				<div class="section-title t_center fadeInUp" data-wow-delay="0.1s" style="padding:1em 1.5em;">
					<p class="txt_type_06 txt_w txt_b">{!! trans('messages.news_00') !!}</p>
				</div>
				<ul style="padding:0px 0px 0px 30px	">
					<li style="background:#fff;border-radius:3px;margin-bottom:30px">
						<div class="row">
							<div class="col-xs-5" ><img src="/images/mobile/img_news_01.png" style="width:100%;margin:30px 0px 30px -30px;border-radius:3px;"/></div>
							<div class="col-xs-7">
								<div style="margin-left:-40px;padding:30px 10px 0px 0px">
                                    <a href="https://bitcoinexchangeguide.com/bitcoin-sports-betting/" target="_blank"> 
									    <p class="txt_c_01 txt_type_01 ">Bitcoin Sports Betting & Live Player Gambling?</p>
                                        <p class="txt_c_02">When it comes to online sports betting, or any betting really, there is a lot involved with starting a successful website.</p>
                                    </a>
								</div>
							</div>
						</div>
					</li>
					<li style="background:#fff;border-radius:3px;margin-bottom:30px">
						<div class="row">
							<div class="col-xs-5" ><img src="/images/mobile/img_news_02.png" style="width:100%;margin:30px 0px 30px -30px;border-radius:3px;"/></div>
							<div class="col-xs-7">
								<div style="margin-left:-40px;padding:30px 10px 0px 0px">
                                    <a href="https://www.learnliberty.org/blog/sports-betting-should-be-legal-across-the-country-heres-why/" target="_blank">
									    <p class="txt_c_01 txt_type_01 ">Sports betting should be legal across the country.</p>
                                        <p class="txt_c_02">The Oakland Raiders’ impending move to Las Vegas has reignited debate about the legality of betting on sports. Most states ban betting schemes (although Nevada is an exception)</p>
                                    </a>
								</div>
							</div>
						</div>
					</li>
					<li style="background:#fff;border-radius:3px;">
						<div class="row">
							<div class="col-xs-5" ><img src="/images/mobile/img_news_03.png" style="width:100%;margin:30px 0px 30px -30px;border-radius:3px;"/></div>
							<div class="col-xs-7">
								<div style="margin-left:-40px;padding:30px 10px 0px 0px">
                                    <a href="https://blog.zensports.com/zensports-launches-peer-to-peer-sports-betting-c4e82c4d64c5" target="_blank">
									    <p class="txt_c_01 txt_type_01 ">ZenSports Launches Peer-to-Peer Sports Betting!</p>
                                        <p class="txt_c_02">We can’t contain our excitement over here at ZenSports’ headquarters — today we’re announcing the launch of a new peer-to-peer sports betting marketplace where anyone can</p>
                                    </a>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>

		<footer >
			<div class="footer-content" style="background:#241f28">
				<div class="row" style="margin-top:40px">
					<div class="col-xs-6">
						<span class="txt_w txt_type_01" style="border-bottom:1px solid #564f5b;padding:0px 20px 5px 0px">{!! trans('messages.foot_me_00') !!}</span>
						<ul style="padding:0px;margin-top:15px;">
							<li class="txt_c_07" style="padding-bottom:5px;"><a href="#home">{!! trans('messages.foot_me_01') !!}</a></li>
							<li class="txt_c_07" style="padding-bottom:5px;"><a href="#roadmap">{!! trans('messages.foot_me_02') !!}</a></li>
							<li class="txt_c_07" style="padding-bottom:5px;"><a href="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")'>{!! trans('messages.foot_me_03') !!}</a></li>
							<li class="txt_c_07"  style="padding-bottom:5px;"><a href="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")'>{!! trans('messages.foot_me_04') !!}</a></li>
						</ul>
					</div>
					<div class="col-xs-6">
						<span class="txt_w txt_type_01" style="border-bottom:1px solid #564f5b;padding:0px 20px 5px 0px">{!! trans('messages.foot_us_00') !!}</span>
						<ul style="padding:0px;margin-top:15px;">
							<li class="txt_c_07" style="padding-bottom:5px;"><a href="mailto:jhkim@doublebet.io">jhkim@doublebet.io</a></li>
							<li>
								<a herf="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")'><img src="/images/mobile/sns_tel.png" class="" alt="" style="width:30px"></a>&nbsp;
								<a href="https://medium.com/@chainplus365" target="_blank"><img src="/images/mobile/sns_med.png" class="" alt="" style="width:30px"></a>
							</li>
						</ul>
                    </div>
                    <form name="subscribeForm" method="POST" onsubmit="return write_check();">
                    {!! csrf_field() !!}
					<div class="col-xs-12" style="margin-top:40px">
						<div class="txt_w txt_type_01" style="border-bottom:1px solid #564f5b;padding:0px 0px 5px 0px" >{!! trans('messages.foot_mail_00') !!}</div>
						<p class="txt_c_07" style="padding:5px 0px">{!! trans('messages.foot_mail_01') !!}</p>
					</div>     
					<div class="col-xs-8"><input type="email" style="width:100%;height:50px;padding:3px 15px; margin:0 5px 0 0;color:#ffffff;background:#241f28;border:1px solid #564f5b"id="email" placeholder="e-mail" name="email" /></div>
                    <div class="col-xs-4"><input type="submit" style="width:100%;height:50px;background:#564f5b;border:0px;color:#FFF" value="SUBSCRIBE"/></div>
                    </form>
					<div class="col-xs-12">
						<p class="txt_type_08 txt_c_08" style="margin:20px 0px 40px">© Copyright 2019 CHAINPLUS. All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!-- 컨텐츠 내용-->
</div>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/hamburger-menu.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/jquery.singlePageNav.min.js"></script>
	<script>

	new WOW().init();
	$(document).ready(function() {
		$('.home-visual-slider').bxSlider({
			mode: 'horizontal',
			randomStart: false,
			minSlides: 1,
			maxSlides: 1,
			pager: true, 
			auto:false, //자동스크롤 여부
			autoControls:false,  //star,stop
			controls:false //next,prve 
		});	
    });
    

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