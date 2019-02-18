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
                    <li><a href="#home" class="smoothScroll">HOME</a></li>
					<li><a href="#project" class="smoothScroll">PROJECT</a></li>
					<li><a href="#tokenomics" class="smoothScroll">TOKENOMICS</a></li>
					<li><a href="#roadmap" class="smoothScroll">ROADMAP</a></li>
					<li><a href="#team" class="smoothScroll">TEAM</a></li>
					<li><a href="#news" class="smoothScroll">NEWS</a></li>
					<li><a href="#" class="smoothScroll">WHITEPAPER</a></li>
					<li>
						<select name="lang-select" class="lang-select" onchange="location.href=this.value">
							<option value="/lang/en" @if(Cookie::get('language') == "en") selected @endif>EN</option>
							<option value="/lang/kr" @if(Cookie::get('language') == "kr") selected @endif>KR</option>
						</select>
					</li>
					<li>
						<div class="sns-icon">
							<ul>
							<li><a href="javascript:alert('coming soon');"><img src="/images/mobile/icon_tel.png" alt="telegram"></a></li>
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
						<p class="s_txt_01 txt_type_03 txt_w txt_b">DoubleBet</span>
						<p class="s_txt_02 txt_type_02 txt_w">Sports Betting Blockchain Platform</p>
						<p class="s_txt_03 txt_w">Featuring blockchain-based cryptocurrency deposit/withdrawal capabilities(Double X Core-Wallet), increased transparency and fairness, the DoubleBet(Sports Betting Blockchain Platform) will emerge as a new player in the global sports betting market.</p>
						<a href="{{$paper_link}}" class="section-btn-01 btn btn-default smoothScroll">Whitepaper</a>&nbsp;&nbsp;&nbsp;
						<a href="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")' class="section-btn-02 btn btn-default smoothScroll">Whitepaper(Draft)</a>
					</li>
					<li class="item-02">
						<p class="s_txt_01 txt_type_03 txt_w txt_b">DoubleBet</span>
						<p class="s_txt_02 txt_type_02 txt_w">Sports Betting Blockchain Platform</p>
						<p class="s_txt_03 txt_w">Featuring blockchain-based cryptocurrency deposit/withdrawal capabilities(Double X Core-Wallet), increased transparency and fairness, the DoubleBet(Sports Betting Blockchain Platform) will emerge as a new player in the global sports betting market.</p>
						<a href="{{$paper_link}}" class="section-btn-01 btn btn-default smoothScroll">Whitepaper</a>&nbsp;&nbsp;&nbsp;
						<a href="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")' class="section-btn-02 btn btn-default smoothScroll">Whitepaper(Draft)</a>
					</li>
					<li class="item-03">
						<p class="s_txt_01 txt_type_03 txt_w txt_b">DoubleBet</span>
						<p class="s_txt_02 txt_type_02 txt_w">Sports Betting Blockchain Platform</p>
						<p class="s_txt_03 txt_w">Featuring blockchain-based cryptocurrency deposit/withdrawal capabilities(Double X Core-Wallet), increased transparency and fairness, the DoubleBet(Sports Betting Blockchain Platform) will emerge as a new player in the global sports betting market.</p>
						<a href="{{$paper_link}}" class="section-btn-01 btn btn-default smoothScroll">Whitepaper</a>&nbsp;&nbsp;&nbsp;
						<a href="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")' class="section-btn-02 btn btn-default smoothScroll">Whitepaper(Draft)</a>
					</li>
					<li class="item-04">
						<p class="s_txt_01 txt_type_03 txt_w txt_b">DoubleBet</span>
						<p class="s_txt_02 txt_type_02 txt_w">Sports Betting Blockchain Platform</p>
						<p class="s_txt_03 txt_w">Featuring blockchain-based cryptocurrency deposit/withdrawal capabilities(Double X Core-Wallet), increased transparency and fairness, the DoubleBet(Sports Betting Blockchain Platform) will emerge as a new player in the global sports betting market.</p>
						<a href="{{$paper_link}}" class="section-btn-01 btn btn-default smoothScroll">Whitepaper</a>&nbsp;&nbsp;&nbsp;
						<a href="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")' class="section-btn-02 btn btn-default smoothScroll">Whitepaper(Draft)</a>
					</li>
					<li class="item-05">
						<p class="s_txt_01 txt_type_03 txt_w txt_b">DoubleBet</span>
						<p class="s_txt_02 txt_type_02 txt_w">Sports Betting Blockchain Platform</p>
						<p class="s_txt_03 txt_w">Featuring blockchain-based cryptocurrency deposit/withdrawal capabilities(Double X Core-Wallet), increased transparency and fairness, the DoubleBet(Sports Betting Blockchain Platform) will emerge as a new player in the global sports betting market.</p>
						<a href="{{$paper_link}}" class="section-btn-01 btn btn-default smoothScroll">Whitepaper</a>&nbsp;&nbsp;&nbsp;
						<a href="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")' class="section-btn-02 btn btn-default smoothScroll">Whitepaper(Draft)</a>
					</li>
				</ul>
			</div>
		</section>

		<section id="project" data-stellar-background-ratio="0.5">
        <!-- market/ -->
			<div class="project-content">
				<div class="section-title t_center fadeInUp" data-wow-delay="0.1s">
					<p class="txt_type_03_1 txt_c_01 txt_b">Global Sports Betting Market</p>
				</div>
				<!-- market1/ -->
				<div class="project-intro">
					<div class="project-intro1 wow fadeInUp" data-wow-delay="0.2s">
					<p class="t_mid pa_ce_20 txt_type_00 txt_w txt_b">The most profitable business in the global gambling market</p>
					</div>
					<div class="project-intro2 wow fadeInUp" data-wow-delay="0.2s">
					<p class="t_mid pa_ce_20">Moving forward, sports betting is expected to grow from 44.5% in 2017 to 46% in 2020. As of 2017, the sports betting market was 21.3bn(USD). However, by 2022, the market is expected to reach 27.2bn(USD).</p>
					</div>

					<div class="project-intro3 wow fadeInUp" data-wow-delay="0.2s">
					<img src="/images/mobile/intro_di_01.jpg" class="img-bottom" alt="">
					</div>
				</div>
				<!-- /market1 -->
				<!-- market2/ -->
				<div class="project-intro">
					<div class="project-intro1 wow fadeInUp" data-wow-delay="0.3s">
					<p class="t_mid pa_ce_20 txt_type_00 txt_w txt_b">Fastest growing sports<br />betting market : USA</p>
					</div>
					<div class="project-intro2 wow fadeInUp" data-wow-delay="0.3s">
					<p class="t_mid pa_ce_20">In May 2018, the US Supreme Court made a ruling that, in effect, would legalize sports betting. Legalization of sports betting is expected to bring the industry, which is estimated at 160bn(USD) in size, out of the shadows and into the light.</p>
					</div>

					<div class="porject-intro3 wow fadeInUp" data-wow-delay="0.3s">
					<img src="/images/mobile/intro_di_02.jpg" class="img-bottom" alt="">
					</div>
				</div>
				<!-- /market2 -->
				<!-- market3/ -->
				<div class="project-intro">
					<div class="project-intro1 wow fadeInUp" data-wow-delay="0.4s">
					<p class="t_mid pa_ce_20 txt_type_00 txt_w txt_b">Asia-Pacific (APAC) : Largest sports<br />betting market in the world</p>
					</div>
					<div class="project-intro2 wow fadeInUp" data-wow-delay="0.4s">
					<p class="t_mid pa_ce_20">Currently, in Asian markets, more than 95% of all betting actions go through illegal private companies due to regulations on sports betting. The size of these illicit markets in total is estimated at more than 10 times the size of the legal sports betting market.</p>
					</div>

					<div class="porject-intro3 wow fadeInUp" data-wow-delay="0.4s">
					<img src="/images/mobile/intro_di_03.jpg" class="img-bottom" alt="">
					</div>
				</div>
				<!-- /market3 -->
				
				
			</div>

			<div class="project-content" style="background:#a563f5;padding-bottom:50px">
				<div class="section-title t_center wow fadeInUp" data-wow-delay="0.1s">
					<p class="txt_type_03_1 txt_w txt_b">Implications and Vision of DoubleBet</p>
				</div>
				<div class="wow fadeInUp" data-wow-delay="0.3s"  style="border:1px solid #d2b1fa;border-radius:3px;color:#decff1;text-align:center;padding:10px;margin-bottom:15px">
					Monopolization of sports betting
				</div>
				<div class="wow fadeInUp" data-wow-delay="0.4s"   style="border:1px solid #d2b1fa;border-radius:3px;color:#decff1;text-align:center;padding:10px;margin-bottom:15px">
					Convoluted market with illegal private vendors
				</div>
				<div class="wow fadeInUp" data-wow-delay="0.5s"   style="border:1px solid #d2b1fa;border-radius:3px;color:#decff1;text-align:center;padding:10px;margin-bottom:15px">
					Standardization of sports betting mechanisms
				</div>
				<div class="txt_w " style="text-align:center;background:#7748b1;padding:20px;font-size:1.5em;line-height:1.5em;">
						Move users to illegal private companies with high dividend rates and increase damage Low transparency and reliability of operating systems Users do not have the opportunity to enjoy various betting options.
				</div>
				<div style="text-align:center;background:#fff;padding-bottom:30px;">
					<img src="/images/mobile/img_down_arrow.png" style="width:80px;margin-top:-6px"/>
					<p style="margin-top:30px;color:#a563f5">DoubleBet : Sports Betting Blockchain Platform</p>
					<p class="txt_type_02 txt_b" style="color:#a563f5">Evolution of global<br>sports betting systems</p>
					<div style="margin-top:20px;"class="wow fadeInUp" data-wow-delay="0.1s"  >
						<img src="/images/mobile/icon_01.png" style="max-width:100px;padding-bottom:5px" />
						<p class="txt_c_15" >Legal global sports betting services for the global market</p>
					</div>
					<div style="margin-top:20px;"class="wow fadeInUp" data-wow-delay="0.3s"  >
						<img src="/images/mobile/icon_02.png" style="max-width:100px;padding-bottom:5px" />
						<p class="txt_c_15" >Transparent, reliable system based on blockchain technology</p>
					</div>
					<div style="margin-top:20px;"class="wow fadeInUp" data-wow-delay="0.5s"  >
						<img src="/images/mobile/icon_03.png" style="max-width:100px;padding-bottom:5px" />
						<p class="txt_c_15"  >Diversity in services using two-way services</p>
					</div>
				</div>
			</div>
			<div class="project-content">
				<div class="section-title t_center fadeInUp" data-wow-delay="0.1s">
					<p class="txt_type_03_1 txt_c_01 txt_b">DoubleBet Service</p>
					<p class="txt_c_02">At its core, DoubleBet's sports betting system will
						use the company’s p2p (pear-to-pear) open
						blockchain technology, which is transparent and
						almost instantaneous, in combination
						with an AI-based 'Double X Core' system.
					</p>
				</div>
				<div class="wow fadeInUp" data-wow-delay="0.1s">
					<img src="/images/mobile/img_service_01.png" />
				</div>
			</div>
			<div style="background:#a563f5;">
				
				<div class="section-title t_center "  style="padding:1em 1.5em;">
					<p class="txt_type_03_1 txt_w txt_b">DoubleBet Service</p>
					<p class="txt_c_03">The Core Technology of DoubleBets Forming a Sports Beting Block Chain Platform</p>
				</div>
				<div class="wow fadeInUp" data-wow-delay="0.1s">
					<p class="txt_type_01 txt_c_04 text-center txt_b"style="padding:20px 0px 10px"  >Double X Core AI</p>
					<img src="/images/mobile/img_service_02.png" />
					<p class="txt_w" style="text-align:center;background:#7748b1;padding:2em 1.5em;">
							To collect high-quality,
						exclusive information from numerous
						bookmarkers, DoubleBet developed the
						'Double X Core - AI,' which has its own
						artificial intelligence (AI) capabilities, in-house.
						The Odds API system featuring the
						Double X Core - AI will provide stable and reliable
						sports betting content.
					</p>
				</div>
				<div class="wow fadeInUp" data-wow-delay="0.2s">
					<p class="txt_type_01 txt_c_04 text-center txt_b" style="padding:20px 0px 10px" >Double X Core Wallet</p>
					<img src="/images/mobile/img_service_03.png" />
					<p class="txt_w " style="text-align:center;background:#7748b1;padding:2em 1.5em;">
						Cryptocurrency transactions require
						top-grade stability and security.
						DoubleBet will ensure its system security is at least
						on par with other currency exchanges.
						The Double X Core - Wallet is the best security
						technology system developed to work with BitGo,
						a leader in cryptocurrency security,
						when exchanging and storing cryptocurrencies. 
					</p>
				</div>
				<div class="wow fadeInUp" data-wow-delay="0.3s">
					<p class="txt_type_01 txt_c_04 text-center txt_b" style="padding:20px 0px 10px"   >Double X Core Betting</p>
					<img src="/images/mobile/img_service_04.png" />
					<p class="txt_w" style="text-align:center;background:#7748b1;padding:2em 1.5em;">
						Double X Core-Betting is a stable, transparent,
						and fast core algorithm technology
						featured in DoubleBet’s blockchain-based
						betting system. Also, Double X Core - Betting is
						designed to take into account the special
						circumstances of the betting system,
						and handle over 100,000 betting
						transactions per second. 
					</p>
				</div>
			</div>
		<!-- /market -->
		</section>


		<section id="tokenomics" data-stellar-background-ratio="0.5" >
			<div class="tokenomics-content" style="background:#f8f8f8">
				<div class="section-title t_center fadeInUp" data-wow-delay="0.1s">
					<p class="txt_type_03_1 txt_c_01 txt_b">Tokenomics</p>
					<p class="txt_c_02">DoubleBet Tokens(DBET) can be purchased with
							cryptocurrencies during the private sale
							period in early 2019(TBD). 
							Investors can purchase DoubleBet(DBET)
							Tokens with cryptocurrencies
							(Tether (USDT) and Ethereum (ETH)).</p>
				</div>
				<div class="row wow fadeInUp" style="margin-bottom:20px;" data-wow-delay="0.1s">
					<div class="col-xs-6" >
						<div style="background:#a563f5;padding:10px;width:100%;">
							<p class="txt_w text-center txt_type_07">TOKEN SYMBOL</p>
							<p class="txt_c_04 txt_b text-center txt_type_02">DBET</p>
						</div>
					</div>
					<div class="col-xs-6">
						<div style="border-top:1px solid #a563f5;background:#ffff;padding:10px;">
							<p class="txt_c_02 text-center txt_type_07">TOTAL TOKEN SUPPLY</p>
							<p class="txt_c_01 text-center txt_type_02">1,250,000,000</p>
						</div>
					</div>
				</div>
				<div class="row wow fadeInUp" style="margin-bottom:20px;" data-wow-delay="0.2s">
					<div class="col-xs-6">
						<div style="border-top:1px solid #a563f5;background:#fff;padding:10px">
							<p class="txt_c_02 text-center txt_type_07">DBET PRICE</p>
							<p class="txt_c_01 text-center txt_type_02">$0.15</p>
						</div>
					</div>
					<div class="col-xs-6 wow fadeInUp">
						<div style="border-top:1px solid #a563f5;background:#fff;padding:10px">
								<p class="txt_c_02 text-center txt_type_07">PRE-SALE HARDCAP</p>
								<p class="txt_c_01 text-center txt_type_02">250,000,000</p>
							</div>
					</div>
				</div>
				<div class="row wow fadeInUp" style="margin-bottom:20px;" data-wow-delay="0.3s">
					<div class="col-xs-6">
						<div style="border-top:1px solid #a563f5;background:#fff;padding:10px">
							<p class="txt_c_02 text-center txt_type_07">ACCEPT CURRENCY</p>
							<p class="txt_c_01 text-center txt_type_02">USDT, ETH</p>
						</div>
					</div>
					<div class="col-xs-6">
						<div style="border-top:1px solid #a563f5;background:#fff;padding:10px">
							<p class="txt_c_02 text-center txt_type_07" >TECHNICAL SPECIFICATIONS</p>
							<p class="txt_c_01 text-center txt_type_02">ERC-20</p>
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
			</div>

			<div class="tokenomics-content" >
				<div class="section-title t_center fadeInUp" data-wow-delay="0.1s">
					<p class="txt_type_03_1 txt_c_01 txt_b">Token distributionkenomics</p>
				</div>
				
				<div class="text-center" style="position:relative;">
					<img src="/images/mobile/img_tokenomics_bg01.png" style="width:60%;padding:60px 0px;" />
					<div class="wow fadeInLeft" data-wow-delay="0.1s" style="position:absolute;top:7%;left:10%;">
						<div class="txt_c_06 txt_type_08" style="text-align: right;float:left;"><span class="txt_c_05">15%</span><br>Retainedat the<br>company</div>
						<div  style="float:left;text-align:left;padding:30px 0px 0px 5px"><img src="/images/mobile/img_tokenomics_line_01.png" style="width:25%;"/></div>
					</div>
					<div class="wow fadeInLeft" data-wow-delay="0.2s"  style="position:absolute;top:24%;left:0%;">
						<div class="txt_c_06 txt_type_08" style="text-align: right;float:left"><span class="txt_c_09">10%</span><br>Marketing<br>& Bounty<br>& Airdrop</div>
						<div style="float:left;text-align:left;padding:30px 0px 0px 5px"><img src="/images/mobile/img_tokenomics_line_02.png" style="width:25%;"/></div>
					</div>
					<div  class="wow fadeInLeft" data-wow-delay="0.3s"  style="position:absolute;top:53%;left:0%;">
						<div class="txt_c_06 txt_type_08" style="text-align: right;float:left"><span class="txt_c_10">15%</span><br>DoubleBet<br>Team</div>
						<div style="float:left;text-align:left;padding:0px 0px 0px 5px"><img src="/images/mobile/img_tokenomics_line_03.png" style="width:25%;"/></div>
					</div>
					<div  class="wow fadeInUp" data-wow-delay="0.4s" style="position:absolute;top:73%;left:13%;">
						<div class="txt_c_06 txt_type_08" style="text-align: right;float:left"><span class="txt_c_11">10%</span><br>Strategic<br>Partner</div>
						<div style="float:left;text-align:left;padding:0px 0px 0px 5px;"><img src="/images/mobile/img_tokenomics_line_04.png" style="width:25%;"/></div>
					</div>
					<div  class="wow fadeInUp" data-wow-delay="0.5s" style="position:absolute;top:78%;left:50%;">
						<div style="text-align:left;float:left;"><img src="/images/mobile/img_tokenomics_line_05.png" style="width:44px;"/></div>
						<div class="txt_c_06 txt_type_08" style="text-align:left;float:left;padding:10px 0px 0px 5px;"><span class="txt_c_14">10%</span><br>Initial Investor</div>
					</div>
					<div  class="wow fadeInRight" data-wow-delay="0.6s"  style="position:absolute;top:60%;left:70%;">
						<div style="text-align:left;float:left;"><img src="/images/mobile/img_tokenomics_line_06.png" style="width:35px;"/></div>
						<div class="txt_c_06 txt_type_08" style="text-align:left;float:left;padding:0px 0px 0px 5px;"><span class="txt_c_13">20%</span><br>Exchange<br>Sales</div>
					</div>
					<div  class="wow fadeInRight" data-wow-delay="0.7s"  style="position:absolute;top:30%;left:67%;">
						<div style="text-align:left;float:left;"><img src="/images/mobile/img_tokenomics_line_07.png" style="width:34px;"/></div>
						<div class="txt_c_06 txt_type_08" style="text-align:left;float:left;padding:0px 0px 0px 5px;"><span class="txt_c_12">20%</span><br>Private sales</div>
					</div>
				</div>
			</div>

			<div class="tokenomics-content" style="background:#a563f5">
				<div class="section-title t_center fadeInUp" data-wow-delay="0.1s" style="padding:1em 1.5em;">
					<p class="txt_type_03_1 txt_w txt_b">STO Conversion</p>
					<p class="txt_w">Security Token Offering (STO) is classified as a
						security-type token. Upon completing its
						private sales, DoubleBet plans to
						initiate its STO in the US with a
						DoubleBet Token (DBET) in compliance
						with STO issuance guidelines stipulated
						by the Securities and Exchange
						Commission (SEC). 
					</p>
				</div>
				<div class="text-center" style="position:relative;">
					<img src="/images/mobile/img_tokenomics_bg02.png" style="width:60%;padding:60px 0px;" />
					<div class="wow fadeInLeft" data-wow-delay="0.1s" style="position:absolute;top:27%;left:1%;">
						<div class="txt_w txt_type_08" style="text-align: right;float:left">20%<br>Business<br>Expansion and<br>Management</div>
						<div style="float:left;text-align:left;padding:30px 0px 0px 5px"><img src="/images/mobile/img_tokenomics_line_08.png" style="width:25%;"/></div>
					</div>
					
					<div class="wow fadeInLeft" data-wow-delay="0.2s" style="position:absolute;top:65%;left:4%;">
						<div class="txt_w txt_type_08"  style="text-align: right;float:left">30%<br>Marketing and<br>Partnerships</div>
						<div style="float:left;text-align:left;padding:30px 0px 0px 5px"><img src="/images/mobile/img_tokenomics_line_09.png" style="width:25%;"/></div>
					</div>
					<div class="wow fadeInRight" data-wow-delay="0.3s" style="position:absolute;top:20%;left:45%;">
						<div style="text-align:left;float:left;"><img src="/images/mobile/img_tokenomics_line_10.png" style="width:100px;"/></div>
						<div class="txt_w txt_type_08"  style="text-align:left;float:left;padding:0px 0px 0px 5px;">10%<br>Initial Investor</div>
					</div>
					<div class="wow fadeInRight" data-wow-delay="0.4s" style="position:absolute;top:50%;left:75%;">
						<div style="text-align:left;float:left;"><img src="/images/mobile/img_tokenomics_line_11.png" style="width:20px;"/></div>
						<div  class="txt_w txt_type_08"  style="text-align:left;float:left;padding:0px 0px 0px 5px;">40%<br>Development<br>Cost</div>
					</div>
				</div>
			</div>
			<div class="tokenomics-content"  >
				<div class="section-title t_center fadeInUp" data-wow-delay="0.1s">
					<p class="txt_type_03_1 txt_c_01 txt_b">Token Sales</p>
				</div>
				<div class="row wow fadeInUp"  data-wow-delay="0.1s">
					<div class="col-xs-12" >
						<div style="display: inline-block;background:#a563f5;width:100%;margin-bottom:10px">
							<div  class="col-xs-4 txt_w txt_type_08" style="padding:10px">
									<p>2019.01</p>
									<p>Sale to Domestic
									/International
									Institutions</p>
							</div>
							<div  class="col-xs-4 text-center txt_c_04 txt_type_06 txt_b" style="padding-top:15px">$0.10</div>
							<div class="col-xs-4 txt_w txt_type_08" style="padding:10px">
								<p>1,000USDT Minimum</p>
								<p>10ETH Minimum</p>
								<p>1,000USDT = 10,000DBET</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row wow fadeInUp"  data-wow-delay="0.2s">
					<div class="col-xs-12" >
						<div style="display: inline-block;background:#f8f8f8;width:100%;margin-bottom:10px">
							<div  class="col-xs-4 txt_c_01 txt_type_08" style="padding:10px">
									<p>2019.01</p>
									<p>1st Private Sale</p>
							</div>
							<div  class="col-xs-4 text-center txt_c_01 txt_type_06 txt_b" style="padding-top:15px">$0.15</div>
							<div class="col-xs-4 txt_c_02 txt_type_08" style="padding:10px">
								<p>1,000USDT Minimum</p>
								<p>10ETH Minimum</p>
								<p>1,000USDT = 6,667DBET</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row wow fadeInUp"  data-wow-delay="0.3s">
					<div class="col-xs-12" >
						<div style="display: inline-block;background:#f8f8f8;width:100%;margin-bottom:10px">
							<div  class="col-xs-4 txt_c_01 txt_type_08" style="padding:10px">
									<p>2019.01</p>
									<p>2st Private Sale</p>
							</div>
							<div  class="col-xs-4 text-center txt_c_01 txt_type_06 txt_b" style="padding-top:15px">$0.30</div>
							<div class="col-xs-4 txt_c_02 txt_type_08" style="padding:10px">
								<p>1,000USDT Minimum</p>
								<p>10ETH Minimum</p>
								<p>1,000USDT = 3,334DBET</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>

		<section id="roadmap" data-stellar-background-ratio="0.5" >
			<div class="roadmap-content" style="background:#7748b1;height:1450px;">
				<div class="section-title t_center fadeInUp" data-wow-delay="0.1s" style="padding:1em 1.5em;">
					<p class="txt_type_03_1 txt_w txt_b">Roadmap</p>
					
				</div>
				<div class="row" >
					<div class="col-xs-6" style="position:relative;height:1450px; border-right:1px solid #fff">
						<div class="wow fadeInLeft" data-wow-delay="0.2s" style="position:absolute;right:20px;top:100px;text-align: right">
							<div style="position:absolute;right: -24px;"><img src="/images/mobile/img_roadmap_line_01.png" style="width:20px;"/></div>
							<p class="txt_w" style="margin-bottom:0px;">2012. 06</p>
							<p class="txt_c_07" >Launched the Bulls NineMobile Web / App<br>Opened the asino game service</p>
						</div>
						<div class="wow fadeInLeft" data-wow-delay="0.4s"  style="position:absolute;right:20px;top:280px;text-align: right">
								<div style="position:absolute;right: -24px;"><img src="/images/mobile/img_roadmap_line_01.png" style="width:20px;"/></div>
							<p class="txt_w" style="margin-bottom:0px;">2018. 08</p>
							<p class="txt_c_07" >Partially upgraded the Fixed<br>Odds system<br>within the UPOLL service<br>Stabilized the UPOLL system</p>
						</div>
						<div class="wow fadeInLeft" data-wow-delay="0.6s"  style="position:absolute;right:20px;top:540px;text-align: right">
							<div style="position:absolute;right: -24px;"><img src="/images/mobile/img_roadmap_line_01.png" style="width:20px;"/></div>
							<p class="txt_w" style="margin-bottom:0px;">2018. 12</p>
							<p class="txt_c_07" >Issued DoubleBet(DBET) Tokens Developed the DoubleBet Wallet</p>
						</div>

						<div class="wow fadeInLeft" data-wow-delay="0.8s"  style="position:absolute;right:20px;top:750px;text-align: right">
							<div style="position:absolute;right: -24px;"><img src="/images/mobile/img_roadmap_line_01.png" style="width:20px;"/></div>
							<p class="txt_w" style="margin-bottom:0px;">2019. 02</p>
							<p class="txt_c_07" >DoubleBet(DBET)<br>Coin pre-sale</p>
						</div>

						<div class="wow fadeInLeft" data-wow-delay="0.9s"  style="position:absolute;right:20px;top:830px;text-align: right">
							<div style="position:absolute;right: -24px;"><img src="/images/mobile/img_roadmap_line_01.png" style="width:20px;"/></div>
							<p class="txt_w" style="margin-bottom:0px;">2019. 03</p>
							<p class="txt_c_07" >DoubleBet(DBET)<br>Coin public sale</p>
						</div>

						<div class="wow fadeInLeft" data-wow-delay="1.0s"  style="position:absolute;right:20px;top:900px;text-align: right">
							<div style="position:absolute;right: -24px;"><img src="/images/mobile/img_roadmap_line_01.png" style="width:20px;"/></div>
							<p class="txt_w" style="margin-bottom:0px;">2019. 05</p>
							<p class="txt_c_07" >Float the DoubleBet (DBET) Coin </p>
						</div>
						<div class="wow fadeInLeft" data-wow-delay="1.2s"  style="position:absolute;right:20px;top:1140px;text-align: right">
							<div style="position:absolute;right: -24px;"><img src="/images/mobile/img_roadmap_line_01.png" style="width:20px;"/></div>
							<p class="txt_w" style="margin-bottom:0px;">2019. 10</p>
							<p class="txt_c_07" >Expand DoubleBet services<br>
								- Establish a global service<br>
								expansion strategy<br>
								- Establish a local service maintenance and management strategy
							</p>
						</div>
						
					</div>
					<div class="col-xs-6" style="position:relative;" >
						<div class="wow fadeInRight" data-wow-delay="0.1s"  style="position:absolute;left:20px;top:25px;">
							<div style="text-align:left;float:left;margin-left:-25px"><img src="/images/mobile/img_roadmap_line_02.png" style="width:20px;"/> </div>
							<p class="txt_w" style="margin-bottom:0px;">2011. 12</p>
							<p class="txt_c_07" >Launched the Bulls Nine<br>(total betting system) </p>
						
						</div>

						<div class="wow fadeInRight" data-wow-delay="0.3s"  style="position:absolute;left:20px;top:190px;">
							<div style="text-align:left;float:left;margin-left:-25px"><img src="/images/mobile/img_roadmap_line_02.png" style="width:20px;"/> </div>
							<p class="txt_w" style="margin-bottom:0px;">2018. 04</p>
							<p class="txt_c_07" >Launched the UPOLL<br>(match prediction system)<br>service</p>
						</div>

						<div class="wow fadeInRight" data-wow-delay="0.5s"  style="position:absolute;left:20px;top:390px;">
							<div style="text-align:left;float:left;margin-left:-25px"><img src="/images/mobile/img_roadmap_line_02.png" style="width:20px;"/> </div>
							<p class="txt_w" style="margin-bottom:0px;">2018. 09</p>
							<p class="txt_c_07" >Introduced blockchain technology in the UPOLL system<br>Established plans for the DoubleBet (sports betting system) environment</p>
							
						</div>

						<div class="wow fadeInRight" data-wow-delay="0.7s"  style="position:absolute;left:20px;top:630px;">
							<div style="text-align:left;float:left;margin-left:-25px"><img src="/images/mobile/img_roadmap_line_02.png" style="width:20px;"/> </div>
							<p class="txt_w" style="margin-bottom:0px;">2019. 01</p>
							<p class="txt_c_07" >Published the reverse ICO white paper<br>Commenced DoubleBet Coin private sale</p>
						</div>
						<div class="wow fadeInRight" data-wow-delay="0.8s"  style="position:absolute;left:20px;top:750px;">
							<div style="text-align:left;float:left;margin-left:-25px"><img src="/images/mobile/img_roadmap_line_02.png" style="width:20px;"/> </div>
							<p class="txt_w" style="margin-bottom:0px;">2019. 02</p>
							<p class="txt_c_07" >Acquire corporate license in Georgia</p>
						</div>
						<div class="wow fadeInRight" data-wow-delay="0.9s"  style="position:absolute;left:20px;top:830px;">
							<div style="text-align:left;float:left;margin-left:-25px"><img src="/images/mobile/img_roadmap_line_02.png" style="width:20px;"/> </div>
							<p class="txt_w" style="margin-bottom:0px;">2019. 03</p>
							<p class="txt_c_07" >Develop the DoubleBet prototype </p>
						</div>
						<div class="wow fadeInRight" data-wow-delay="1.0s"  style="position:absolute;left:20px;top:900px;">
							<div style="text-align:left;float:left;margin-left:-25px"><img src="/images/mobile/img_roadmap_line_02.png" style="width:20px;"/> </div>
							<p class="txt_w" style="margin-bottom:0px;">2019. 05</p>
							<p class="txt_c_07" >Launch DoubleBet global version<br>- Web (PC, Mobile), App </p>
						</div>
						<div class="wow fadeInRight" data-wow-delay="1.1s"  style="position:absolute;left:20px;top:1000px;">
							<div style="text-align:left;float:left;margin-left:-25px"><img src="/images/mobile/img_roadmap_line_02.png" style="width:20px;"/> </div>
							<p class="txt_w" style="margin-bottom:0px;">2019. 07</p>
							<p class="txt_c_07" >
								Launch DoubleBet localized version<br>
								- Localization for each country in Asia<br>
								- Localization for the US 
							</p>
						</div>
						
						
					</div>
					
				</div>
			</div>
			<div style="clear:both;"></div>
				
		</section>

		<section id="team" data-stellar-background-ratio="0.5" >
			<div class="ourteam-content" >
				<div class="section-title t_center fadeInUp" data-wow-delay="0.1s">
					<p class="txt_type_06 txt_c_01 txt_b">Our Team</p>
				</div>
				<div class="row" >
					<div class="col-xs-12 text-center wow fadeInUp" data-wow-delay="0.1s"  style="margin-bottom:30px">
						<img src="/images/mobile/team_01.jpg" alt="" style="max-width:230px">
						<p class="txt_c_16" style="margin:10px 0px 0px">Kim Jae Hong</p>
						<p class="txt_c_02">Co-founder & CEO of CHAINPLUS<br>CEO of Melonbit</p>
						<p><a href="https://bit.ly/2QI1b5H" target="_blank"><img src="/images/mobile/icon_link.jpg" style="width:20px;" alt=""></a></p>
					</div>
					<div class="col-xs-12 text-center wow fadeInUp" data-wow-delay="0.2s"  style="margin-bottom:30px">
						<img src="/images/mobile/team_02.jpg" alt="" style="max-width:230px">
						<p class="txt_c_16" style="margin:10px 0px 0px">Hyung Yul Yoo</p>
						<p class="txt_c_02">Co-founder & CTO of CHAINPLUS<br>CTO of Melonbit</p>
					</div>
					<div class="col-xs-12 text-center wow fadeInUp"  data-wow-delay="0.3s"  style="margin-bottom:30px">
						<img src="/images/mobile/team_03.jpg"  alt="" style="max-width:230px">
						<p class="txt_c_16" style="margin:10px 0px 0px">Sang Guk Lee</p>
						<p class="txt_c_02">Co-founder & COO of CHAINPLUS<br>Director of MGAME</p>
					</div>
					<div class="col-xs-12 text-center wow fadeInUp " data-wow-delay="0.4s"  style="margin-bottom:30px">
						<img src="/images/mobile/team_04.jpg" alt="" style="max-width:230px">
						<p class="txt_c_16" style="margin:10px 0px 0px">Michael Kim</p>
						<p class="txt_c_02">Co-founder & CMO of CHAINPLUS<BR>CSO of Barunson E&A</p>
						<p><a href="https://bit.ly/2Spjz93" target="_blank"><img src="/images/mobile/icon_link.jpg" style="width:20px;" alt=""></a></p>
					</div>
					<div class="col-xs-12 text-center wow fadeInUp " data-wow-delay="0.5s"  style="margin-bottom:30px">
						<img src="/images/mobile/team_05.jpg"  alt="" style="max-width:230px">
						<p class="txt_c_16" style="margin:10px 0px 0px">William. Ha</p>
						<p class="txt_c_02">Founder & CEO of TennTen<BR>CEO of ABLEX</p>
					</div>
					<div class="col-xs-12 text-center wow fadeInUp " data-wow-delay="0.6s"  style="margin-bottom:30px">
						<img src="/images/mobile/team_06.jpg"  alt="" style="max-width:230px">
						<p class="txt_c_16" style="margin:10px 0px 0px">Yu Sik Kim</p>
						<p class="txt_c_02">Founder & CEO of DCInside</p>
					</div>
				</div>
			</div>
		</section>

		<section id="new" data-stellar-background-ratio="0.5" >
			<div class="new-content" style="background:#a563f5">
				<div class="section-title t_center fadeInUp" data-wow-delay="0.1s" style="padding:1em 1.5em;">
					<p class="txt_type_06 txt_w txt_b">News</p>
				</div>
				<ul style="padding:0px 0px 0px 30px	">
					<li style="background:#fff;border-radius:3px;margin-bottom:30px">
						<div class="row">
							<div class="col-xs-5" ><img src="/images/mobile/img_news_01.png" style="width:100%;margin:30px 0px 30px -30px;border-radius:3px;"/></div>
							<div class="col-xs-7">
								<div style="margin-left:-40px;padding:30px 10px 0px 0px">
									<p class="txt_c_01 txt_type_01 ">Sportsbet — bitcoin sports betting</p>
									<p class="txt_c_02">The project launched in June 2016 and
										due to rising popularity of bitcoin, the
										customer base grew rapidly and by
										November 2017 the amount of active
										users had doubled.
									</p>
								</div>
							</div>
						</div>
					</li>
					<li style="background:#fff;border-radius:3px;margin-bottom:30px">
						<div class="row">
							<div class="col-xs-5" ><img src="/images/mobile/img_news_02.png" style="width:100%;margin:30px 0px 30px -30px;border-radius:3px;"/></div>
							<div class="col-xs-7">
								<div style="margin-left:-40px;padding:30px 10px 0px 0px">
									<p class="txt_c_01 txt_type_01 ">ZenSports Launches Peer-to-Peer Sports Betting! </p>
									<p class="txt_c_02">We can’t contain our excitement
										over here at ZenSports’ headquarters 
										— today we’re announcing the launch
										of a new peer-to-peer sports betting
										marketplace where anyone can
									</p>
								</div>
							</div>
						</div>
					</li>
					<li style="background:#fff;border-radius:3px;">
						<div class="row">
							<div class="col-xs-5" ><img src="/images/mobile/img_news_03.png" style="width:100%;margin:30px 0px 30px -30px;border-radius:3px;"/></div>
							<div class="col-xs-7">
								<div style="margin-left:-40px;padding:30px 10px 0px 0px">
									<p class="txt_c_01 txt_type_01 ">Sports betting should be legal across the country.</p>
									<p class="txt_c_02">The Oakland Raiders’ impending move to
										Las Vegas has reignited debate about
										the legality of betting on sports.
										Most states ban betting schemes
										(although Nevada is an exception), 
									</p>
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
						<span class="txt_w txt_type_01" style="border-bottom:1px solid #564f5b;padding:0px 20px 5px 0px">DoubleBet</span>
						<ul style="padding:0px;margin-top:15px;">
							<li class="txt_c_07" style="padding-bottom:5px;"><a href="#home">Home</a></li>
							<li class="txt_c_07" style="padding-bottom:5px;"><a href="#roadmap">Roadmap</a></li>
							<li class="txt_c_07" style="padding-bottom:5px;"><a href="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")'>Terms and conditions</a></li>
							<li class="txt_c_07"  style="padding-bottom:5px;"><a href="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")'>Privacy Policy</a></li>
						</ul>
					</div>
					<div class="col-xs-6">
						<span class="txt_w txt_type_01" style="border-bottom:1px solid #564f5b;padding:0px 20px 5px 0px">Contact us</span>
						<ul style="padding:0px;margin-top:15px;">
							<li class="txt_c_07" style="padding-bottom:5px;">help@doublebet.io</li>
							<li>
								<a herf="javascript:" onclick='alert("{!! trans('messages.paper_alert') !!}")'><img src="/images/mobile/sns_tel.png" class="" alt="" style="width:30px"></a>&nbsp;
								<a href="https://medium.com/@chainplus365" target="_blank"><img src="/images/mobile/sns_med.png" class="" alt="" style="width:30px"></a>
							</li>
						</ul>
                    </div>
                    <form name="subscribeForm" method="POST" onsubmit="return write_check();">
                    {!! csrf_field() !!}
					<div class="col-xs-12" style="margin-top:40px">
						<div class="txt_w txt_type_01" style="border-bottom:1px solid #564f5b;padding:0px 0px 5px 0px" >SUBSCRIBE</div>
						<p class="txt_c_07" style="padding:5px 0px">tay informed on our Fashion Updates & offers</p>
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