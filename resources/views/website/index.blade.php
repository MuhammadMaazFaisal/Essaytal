@extends('website.layouts.template')
@section('content')

       <div id="main-wrapper">
		
        <!-- ============================================================== -->
        <!-- Top header  --> 
        <!-- ============================================================== -->
        <!-- Start Navigation -->
        <div class="header header-transparent change-logo">
            <div class="container">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <a class="nav-brand static-logo" href="#"><img src="assets/img/logo-light.png" class="logo" alt="" /></a>
                        <a class="nav-brand fixed-logo" href="#"><img src="assets/img/logo.png" class="logo" alt="" /></a>
                        <div class="nav-toggle"></div>
                        <div class="mobile_nav">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#login" class="crs_yuo12 w-auto text-white theme-bg">
                                        <span class="embos_45"><i class="fas fa-sign-in-alt mr-1"></i>Sign In</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @include('website.partials.menu')
        </div>
        <!-- End Navigation -->
        <div class="clearfix"></div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
<!-- ============================ Hero Banner  Start================================== -->
<div class="hero_banner image-cover" style="background:#03b97c url(assets/img/banner-3.jpg) no-repeat;" data-overlay="5">
<div class="container">
    <div class="row align-items-center">
        <div class="col-xl-7 col-lg-7 col-md-8 col-sm-12">
            <div class="simple-search-wrap text-left">
                <div class="hero_search-2">
                    <div class="elsio_tag">NO HIDDEN CHARGES</div>
                    <h1 class="banner_title mb-4">NEED THE BEST ESSAY HELP IN THE UK?
                        </h1>
                    <p class="font-lg mb-4">LET OUR TRUSTED WRITING SERVICE DO YOUR ESSAY FOR YOU!</p>
                </div>
                <div class="crs_trio_info">
                    <div class="crs_trio">
                        <h4 class="ctr"><span class="rt_count">35</span></h4>
                        <span class="pol_title" style="color: white;">customers</span>
                    </div>
                    <div class="crs_trio">
                        <h4 class="ctr"><span class="rt_count">15</span></h4>
                        <span class="pol_title" style="color: white;">writers online </span>
                    </div>
                    <div class="crs_trio">
                        <h4 class="ctr"><span class="rt_count">9.5/10</span></h4>
                        <span class="pol_title" style="color: white;">average quality score </span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-5 col-lg-7 col-md-8 col-sm-12" style="background-color: #00000017;border-radius: 8px;border: 2px solid;border-image-slice: 1;
        border-width: 2px;  border-image-source: linear-gradient(to left, #10b775, #ef9a07);">
        <div class="simple-search-wrap text-left">
                <div class="hero_search-2">
                    <div class="calculator_title" style="
                    font-size: 22px;
                    line-height: 13px;
                    color: #fff;padding-bottom: 15px;padding-top: 18px;"><span>Place an order</span></div>
                    <label for="customer_order_service_id" style="
                    display: block;
                    margin: 0 0 2px;
                    padding-left: 10px;
                    font-size: 11px;
                    line-height: 14px;
                    color: #e2e2e9;
                    text-transform: uppercase;
                ">Type of service</label>
                    <div class="input-group simple_search" style="padding-bottom: 9px;">
                        <select  class="form-control" style="height: 45px;background-color: #00000052;color: white;">
                            <option value="Academic paper writing" selected>Academic paper writing</option>
                            <option value="Dissertation services">Dissertation services</option>
                            <option value="Admission Services">Admission Services</option>
                            <option value="Math/Physic/Economic/Statistic Problems">Math/Physic/Economic/Statistic Problems</option>
                            <option value="Multiple Choice Questions">Multiple Choice Questions</option>
                            <option value="Editing">Editing</option>
                            <option value="Proofreading">Proofreading</option>
                            <option value="Rewriting">Rewriting</option>
                            <option value="Copywriting">Copywriting</option>
                            <option value="Resume/CV services">Resume/CV services</option>
                          </select>
                    </div>
                </div>
                <div class="hero_search-2">
                    <label for="customer_order_service_id" style="
                    display: block;
                    margin: 0 0 2px;
                    padding-left: 10px;
                    font-size: 11px;
                    line-height: 14px;
                    color: #e2e2e9;
                    text-transform: uppercase;
                ">Type of paper</label>
                    <div class="input-group simple_search" style="padding-bottom: 9px;">
                        <select  class="form-control" style="height: 45px;background-color: #00000052;color: white;">
                            <option value="Essay" selected>Essay</option>
                            <option value="Coursework">Coursework</option>
                            <option value="Term Paper">Term Paper</option>
                            <option value="Research Paper">Research Paper</option>
                            <option value="Case study">Case study</option>
                            <option value="Capstone Project">Capstone Project</option>
                          </select>
                    </div>
                </div>
                <div class="hero_search-2">
                    <label for="customer_order_service_id" style="
                    display: block;
                    margin: 0 0 2px;
                    padding-left: 10px;
                    font-size: 11px;
                    line-height: 14px;
                    color: #e2e2e9;
                    text-transform: uppercase;
                ">NUMBER OF PAGES / WORDS</label>
                    <div class="input-group simple_search" style="padding-bottom: 9px;">
                        <select  class="form-control" style="height: 45px;background-color: #00000052;color: white;">
                            <option value=""selected>Pages/ Words</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                          </select>
                    </div>
                </div>
                <div class="hero_search-2">
                    <label for="customer_order_service_id" style="
                    display: block;
                    margin: 0 0 2px;
                    padding-left: 10px;
                    font-size: 11px;
                    line-height: 14px;
                    color: #e2e2e9;
                    text-transform: uppercase;
                ">Academic level</label>
                    <div class="input-group simple_search" style="padding-bottom: 9px;">
                        <select  class="form-control" style="height: 45px;background-color: #00000052;color: white;">
                            <option value="GCSE / A Level" selected>GCSE / A Level</option>
                            <option value="Undergraduate">Undergraduate</option>
                            <option value="Postgraduate">Postgraduate</option>
                            <option value="MBA">MBA</option>
                            <option value="Law">Law</option>
                            <option value="Medical">Medical</option>
                          </select>
                    </div>
                </div>
                <div class="hero_search-2">
                    <label for="customer_order_service_id" style="
                    display: block;
                    margin: 0 0 2px;
                    padding-left: 10px;
                    font-size: 11px;
                    line-height: 14px;
                    color: #e2e2e9;
                    text-transform: uppercase;
                ">Urgency</label>
                    <div class="input-group simple_search" style="padding-bottom: 9px;">
                        <select  class="form-control" style="height: 45px;background-color: #00000052;color: white;">
                            <option value="6 hours">6 hours</option>
                            <option value="8 hours">8 hours</option>
                            <option value="12 hours">12 hours</option>
                            <option value="18 hours">18 hours</option>
                            <option value="24 hours">24 hours</option>
                            <option value="48 hours">48 hours</option>
                            <option value="3 days">3 days</option>
                            <option value="4 days">4 days</option>
                            <option value="5 days">5 days</option>
                            <option value="6 days">6 days</option>
                            <option value="7 days">7 days</option>
                            <option value="10 days">10 days</option>
                            <option value="14 days" selected>14 days</option>
                          </select>
                    </div>
                </div>
                <div class="price_page"><p>Price per <ui-span ng-bind="texts.perpage" class="ng-binding">page</ui-span>: <span ng-bind="price.formatted_perpage()" class="ng-binding">£11.18</span></p></div>
                <div class="price_total" style="font-size: 16px;
                font-weight: 700;
                line-height: 20px;
                color: #fff;
                text-transform: uppercase;"><p>Total price: <span ng-bind-html="price.total() | formattedCurrency : customer.order_exchange_rate" class="ng-binding"><sup style="font-size: 18px;
line-height: 23px;">£</sup> <strong style="font-size: 28px;">11</strong>.18</span></p></div>
                
                
                <div class="input-group-append" style="
                padding-bottom: 12px;">
                    <button class="btn theme-bg rounded full-width" type="button">Order now</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- ============================ Hero Banner End ================================== -->


<!-- ============================ Our Awards Start ================================== -->
<section class="p-0">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="crp_box sm ovr_top">
                <div class="row align-items-center m-0">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12">
                        <div class="crt_169">
                            <div class="crt_overt"><h4>4.7</h4></div>
                            <div class="crt_stion">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="crt_io90"><h6>3,272 Rating</h6></div>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-9 col-md-8 col-sm-12">
                        <div class="part_rcp">
                            <ul>
                                <li><div class="crp_img"><img src="https://via.placeholder.com/400x110" class="img-fluid" alt="" /></div></li>
                                <li><div class="crp_img"><img src="https://via.placeholder.com/400x110" class="img-fluid" alt="" /></div></li>
                                <li><div class="crp_img"><img src="https://via.placeholder.com/400x110" class="img-fluid" alt="" /></div></li>
                                <li><div class="crp_img"><img src="https://via.placeholder.com/400x110" class="img-fluid" alt="" /></div></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- ============================ Our Awards End ================================== -->

<!-- ============================ Top Categories Start ================================== -->
<section class="min">
<div class="container">

    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-10 text-center">
            <div class="sec-heading center mb-4">
                <h2>Explore Top <span class="theme-cl">Categories</span></h2>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="edu_cat_2 cat-1">
                <div class="edu_cat_icons">
                    <a class="pic-main" href="#"><img src="assets/img/content.png" class="img-fluid" alt="" /></a>
                </div>
                <div class="edu_cat_data">
                    <h4 class="title"><a href="#">Development</a></h4>
                    <ul class="meta">
                        <li class="video"><i class="ti-video-clapper"></i>23 Classes</li>
                    </ul>
                </div>
            </div>							
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="edu_cat_2 cat-2">
                <div class="edu_cat_icons">
                    <a class="pic-main" href="#"><img src="assets/img/briefcase.png" class="img-fluid" alt="" /></a>
                </div>
                <div class="edu_cat_data">
                    <h4 class="title"><a href="#">Business</a></h4>
                    <ul class="meta">
                        <li class="video"><i class="ti-video-clapper"></i>58 Classes</li>
                    </ul>
                </div>
            </div>							
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="edu_cat_2 cat-3">
                <div class="edu_cat_icons">
                    <a class="pic-main" href="#"><img src="assets/img/career.png" class="img-fluid" alt="" /></a>
                </div>
                <div class="edu_cat_data">
                    <h4 class="title"><a href="#">Accounting</a></h4>
                    <ul class="meta">
                        <li class="video"><i class="ti-video-clapper"></i>74 Classes</li>
                    </ul>
                </div>
            </div>							
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="edu_cat_2 cat-4">
                <div class="edu_cat_icons">
                    <a class="pic-main" href="#"><img src="assets/img/python.png" class="img-fluid" alt="" /></a>
                </div>
                <div class="edu_cat_data">
                    <h4 class="title"><a href="#">IT & Software</a></h4>
                    <ul class="meta">
                        <li class="video"><i class="ti-video-clapper"></i>65 Classes</li>
                    </ul>
                </div>
            </div>							
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="edu_cat_2 cat-10">
                <div class="edu_cat_icons">
                    <a class="pic-main" href="#"><img src="assets/img/designer.png" class="img-fluid" alt="" /></a>
                </div>
                <div class="edu_cat_data">
                    <h4 class="title"><a href="#">Art & Design</a></h4>
                    <ul class="meta">
                        <li class="video"><i class="ti-video-clapper"></i>43 Classes</li>
                    </ul>
                </div>
            </div>							
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="edu_cat_2 cat-6">
                <div class="edu_cat_icons">
                    <a class="pic-main" href="#"><img src="assets/img/speaker.png" class="img-fluid" alt="" /></a>
                </div>
                <div class="edu_cat_data">
                    <h4 class="title"><a href="#">Marketing</a></h4>
                    <ul class="meta">
                        <li class="video"><i class="ti-video-clapper"></i>82 Classes</li>
                    </ul>
                </div>
            </div>							
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="edu_cat_2 cat-7">
                <div class="edu_cat_icons">
                    <a class="pic-main" href="#"><img src="assets/img/photo.png" class="img-fluid" alt="" /></a>
                </div>
                <div class="edu_cat_data">
                    <h4 class="title"><a href="#">Photography</a></h4>
                    <ul class="meta">
                        <li class="video"><i class="ti-video-clapper"></i>25 Classes</li>
                    </ul>
                </div>
            </div>							
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="edu_cat_2 cat-8">
                <div class="edu_cat_icons">
                    <a class="pic-main" href="#"><img src="assets/img/yoga.png" class="img-fluid" alt="" /></a>
                </div>
                <div class="edu_cat_data">
                    <h4 class="title"><a href="#">Health & Fitness</a></h4>
                    <ul class="meta">
                        <li class="video"><i class="ti-video-clapper"></i>43 Classes</li>
                    </ul>
                </div>
            </div>							
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="edu_cat_2 cat-9">
                <div class="edu_cat_icons">
                    <a class="pic-main" href="#"><img src="assets/img/health.png" class="img-fluid" alt="" /></a>
                </div>
                <div class="edu_cat_data">
                    <h4 class="title"><a href="#">Lifestyle</a></h4>
                    <ul class="meta">
                        <li class="video"><i class="ti-video-clapper"></i>38 Classes</li>
                    </ul>
                </div>
            </div>							
        </div>
    </div>
    
</div>
</section>
<!-- ============================ Top Categories End ================================== -->

<!-- ============================ How It Works Start ================================== -->
<section class="min gray">
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-8">
            <div class="sec-heading center">
                <h2>HOW CAN <span class="theme-cl">WE HELP</span> STUDENTS?</h2>
                <p>You are a student and you have no time. Indeed, time is a limited and valuable resource and there are so many things you won’t find a better occasion to do. We walked in those shoes, too, and that’s why UK Writings was launched. We are those hours lacking so badly in your schedule.</p>
                <p>We name ourselves UK Writings because we know the insides of the UK educational system and can best cater to its requirements. We also keep in mind that every instructor has their own expectations of what a well-written project is so we do everything possible to meet all the instructions. We will appreciate your involvement in the research and writing process as we strongly believe in the power of cooperation. Alternatively, we have a large pool of resources to use in case you can’t provide materials for the given topic.</p>
                <p>You can contact us any day and hour since our amazing team is available 24/7. Scroll to get to know us better!</p>
                <p></p>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center mt-5">
        
        <!-- Single Location -->
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="wrk_grid">
                <div class="wrk_grid_ico">
                    <i class="fa fa-stamp"></i>
                </div>
                <div class="wrk_caption">
                    <h4>The Best Academic Experts</h4>
                    <p>We hire qualified writers, researchers and editors to ensure that each paper is plagiarism-free and delivered on-time.
                        </p>
                </div>
            </div>
        </div>
        
        <!-- Single Location -->
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="wrk_grid active">
                <div class="wrk_grid_ico">
                    <i class="fa fa-calendar-week"></i>
                </div>
                <div class="wrk_caption">
                    <h4>Fair Priced Ordering System</h4>
                    <p>Our company is focused on keeping the prices as low as possible while maintaining the highest quality standards.</p>
                </div>
            </div>
        </div>
        
        <!-- Single Location -->
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="wrk_grid">
                <div class="wrk_grid_ico">
                    <i class="fa fa-lock"></i>
                </div>
                <div class="wrk_caption">
                    <h4>Completely Safe and Secure</h4>
                    <p>Your personal information is safely encrypted. Purchases are made through authority payment systems.</p>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
</section>
<div class="clearfix"></div>
<!-- ============================ How It Works End ================================== -->

<!-- ============================ Latest Cources Start ================================== -->
<section class="min">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-8">
            <div class="sec-heading center">
                <h2>Get Featured <span class="theme-cl">Cources</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center">
    
        <!-- Single Grid -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="crs_grid">
                <div class="crs_grid_thumb">
                    <a href="course-detail.html" class="crs_detail_link">
                        <img src="https://via.placeholder.com/1200x800" class="img-fluid rounded" alt="" />
                    </a>
                    <div class="crs_video_ico">
                        <i class="fa fa-play"></i>
                    </div>
                    <div class="crs_locked_ico">
                        <i class="fa fa-lock"></i>
                    </div>
                </div>
                <div class="crs_grid_caption">
                    <div class="crs_tutor_thumb overl_top"><a href="instructor-detail.html"><img src="https://via.placeholder.com/500x500" class="img-fluid circle" alt="" /></a></div>
                    <div class="crs_cates cl_1"><span>Design</span></div>
                    <div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">UI/UX Design pattern for succesfull software Applications</a></h4></div>
                    <div class="crs_info_detail">
                        <ul>
                            <li><i class="fa fa-video"></i><span>24 Videos</span></li>
                            <li><i class="fa fa-user"></i><span>10k User</span></li>
                            <li><i class="fa fa-eye"></i><span>92k Views</span></li>
                        </ul>
                    </div>
                    <div class="preview_crs_info">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="crs_grid_foot">
                    <div class="crs_flex">
                        <div class="crs_fl_first">
                            <div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">199</span></h2></div>
                        </div>
                        <div class="crs_fl_last">
                            <div class="crs_linkview"><a href="course-detail.html" class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Single Grid -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="crs_grid">
                <div class="crs_grid_thumb">
                    <a href="course-detail.html" class="crs_detail_link">
                        <img src="https://via.placeholder.com/1200x800" class="img-fluid rounded" alt="" />
                    </a>
                    <div class="crs_video_ico">
                        <i class="fa fa-play"></i>
                    </div>
                    <div class="crs_locked_ico">
                        <i class="fa fa-lock"></i>
                    </div>
                </div>
                <div class="crs_grid_caption">
                    <div class="crs_tutor_thumb overl_top"><a href="instructor-detail.html"><img src="https://via.placeholder.com/500x500" class="img-fluid circle" alt="" /></a></div>
                    <div class="crs_cates cl_2"><span>Development</span></div>
                    <div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">Advance PHP knowledge with laravel to make smart web</a></h4></div>
                    <div class="crs_info_detail">
                        <ul>
                            <li><i class="fa fa-video"></i><span>24 Videos</span></li>
                            <li><i class="fa fa-user"></i><span>10k User</span></li>
                            <li><i class="fa fa-eye"></i><span>92k Views</span></li>
                        </ul>
                    </div>
                    <div class="preview_crs_info">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="crs_grid_foot">
                    <div class="crs_flex">
                        <div class="crs_fl_first">
                            <div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">139</span></h2></div>
                        </div>
                        <div class="crs_fl_last">
                            <div class="crs_linkview"><a href="course-detail.html" class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Single Grid -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="crs_grid">
                <div class="crs_grid_thumb">
                    <a href="course-detail.html" class="crs_detail_link">
                        <img src="https://via.placeholder.com/1200x800" class="img-fluid rounded" alt="" />
                    </a>
                    <div class="crs_video_ico">
                        <i class="fa fa-play"></i>
                    </div>
                    <div class="crs_locked_ico">
                        <i class="fa fa-lock"></i>
                    </div>
                </div>
                <div class="crs_grid_caption">
                    <div class="crs_tutor_thumb overl_top"><a href="instructor-detail.html"><img src="https://via.placeholder.com/500x500" class="img-fluid circle" alt="" /></a></div>
                    <div class="crs_cates cl_3"><span>Banking</span></div>
                    <div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">The complete accounting & bank financial course 2021</a></h4></div>
                    <div class="crs_info_detail">
                        <ul>
                            <li><i class="fa fa-video"></i><span>24 Videos</span></li>
                            <li><i class="fa fa-user"></i><span>10k User</span></li>
                            <li><i class="fa fa-eye"></i><span>92k Views</span></li>
                        </ul>
                    </div>
                    <div class="preview_crs_info">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="crs_grid_foot">
                    <div class="crs_flex">
                        <div class="crs_fl_first">
                            <div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">79</span></h2></div>
                        </div>
                        <div class="crs_fl_last">
                            <div class="crs_linkview"><a href="course-detail.html" class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Single Grid -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="crs_grid">
                <div class="crs_grid_thumb">
                    <a href="course-detail.html" class="crs_detail_link">
                        <img src="https://via.placeholder.com/1200x800" class="img-fluid rounded" alt="" />
                    </a>
                    <div class="crs_video_ico">
                        <i class="fa fa-play"></i>
                    </div>
                    <div class="crs_locked_ico">
                        <i class="fa fa-lock"></i>
                    </div>
                </div>
                <div class="crs_grid_caption">
                    <div class="crs_tutor_thumb overl_top"><a href="instructor-detail.html"><img src="https://via.placeholder.com/500x500" class="img-fluid circle" alt="" /></a></div>
                    <div class="crs_cates cl_4"><span>Business</span></div>
                    <div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">The complete business plan course includes 50 templates</a></h4></div>
                    <div class="crs_info_detail">
                        <ul>
                            <li><i class="fa fa-video"></i><span>24 Videos</span></li>
                            <li><i class="fa fa-user"></i><span>10k User</span></li>
                            <li><i class="fa fa-eye"></i><span>92k Views</span></li>
                        </ul>
                    </div>
                    <div class="preview_crs_info">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="crs_grid_foot">
                    <div class="crs_flex">
                        <div class="crs_fl_first">
                            <div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">129</span></h2></div>
                        </div>
                        <div class="crs_fl_last">
                            <div class="crs_linkview"><a href="course-detail.html" class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Single Grid -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="crs_grid">
                <div class="crs_grid_thumb">
                    <a href="course-detail.html" class="crs_detail_link">
                        <img src="https://via.placeholder.com/1200x800" class="img-fluid rounded" alt="" />
                    </a>
                    <div class="crs_video_ico">
                        <i class="fa fa-play"></i>
                    </div>
                    <div class="crs_locked_ico">
                        <i class="fa fa-lock"></i>
                    </div>
                </div>
                <div class="crs_grid_caption">
                    <div class="crs_tutor_thumb overl_top"><a href="instructor-detail.html"><img src="https://via.placeholder.com/500x500" class="img-fluid circle" alt="" /></a></div>
                    <div class="crs_cates cl_5"><span>Software</span></div>
                    <div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">Full web designing course with 20 web template designing</a></h4></div>
                    <div class="crs_info_detail">
                        <ul>
                            <li><i class="fa fa-video"></i><span>24 Videos</span></li>
                            <li><i class="fa fa-user"></i><span>10k User</span></li>
                            <li><i class="fa fa-eye"></i><span>92k Views</span></li>
                        </ul>
                    </div>
                    <div class="preview_crs_info">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="crs_grid_foot">
                    <div class="crs_flex">
                        <div class="crs_fl_first">
                            <div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">99</span></h2></div>
                        </div>
                        <div class="crs_fl_last">
                            <div class="crs_linkview"><a href="course-detail.html" class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Single Grid -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="crs_grid">
                <div class="crs_grid_thumb">
                    <a href="course-detail.html" class="crs_detail_link">
                        <img src="https://via.placeholder.com/1200x800" class="img-fluid rounded" alt="" />
                    </a>
                    <div class="crs_video_ico">
                        <i class="fa fa-play"></i>
                    </div>
                    <div class="crs_locked_ico">
                        <i class="fa fa-lock"></i>
                    </div>
                </div>
                <div class="crs_grid_caption">
                    <div class="crs_tutor_thumb overl_top"><a href="instructor-detail.html"><img src="https://via.placeholder.com/500x500" class="img-fluid circle" alt="" /></a></div>
                    <div class="crs_cates cl_1"><span>Design</span></div>
                    <div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">Sociology Optional: Test Series for UPSC CSE Mains (2021 & 2022)</a></h4></div>
                    <div class="crs_info_detail">
                        <ul>
                            <li><i class="fa fa-video"></i><span>24 Videos</span></li>
                            <li><i class="fa fa-user"></i><span>10k User</span></li>
                            <li><i class="fa fa-eye"></i><span>92k Views</span></li>
                        </ul>
                    </div>
                    <div class="preview_crs_info">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="crs_grid_foot">
                    <div class="crs_flex">
                        <div class="crs_fl_first">
                            <div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">149</span></h2></div>
                        </div>
                        <div class="crs_fl_last">
                            <div class="crs_linkview"><a href="course-detail.html" class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
</section>
<!-- ============================ Latest Cources End ================================== -->

<!-- ============================ Students Reviews ================================== -->
<section class="gray">
<div class="container">

    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-8">
            <div class="sec-heading center">
                <h2>Our Students <span class="theme-cl">Reviews</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            
            <div class="reviews-slide space">
                
                <!-- Single Item -->
                <div class="single_items lios_item">
                    <div class="_testimonial_wrios shadow_none">
                        <div class="_testimonial_flex">
                            <div class="_testimonial_flex_first">
                                <div class="_tsl_flex_thumb">
                                    <img src="https://via.placeholder.com/500x500" class="img-fluid" alt="">
                                </div>
                                <div class="_tsl_flex_capst">
                                    <h5>Susan D. Murphy</h5>
                                    <div class="_ovr_posts"><span>CEO, Leader</span></div>
                                    <div class="_ovr_rates"><span><i class="fa fa-star"></i></span>4.7</div>
                                </div>
                            </div>
                            <div class="_testimonial_flex_first_last">
                                <div class="_tsl_flex_thumb">
                                    <img src="https://via.placeholder.com/300x300" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="facts-detail">
                            <p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Single Item -->
                <div class="single_items lios_item">
                    <div class="_testimonial_wrios shadow_none">
                        <div class="_testimonial_flex">
                            <div class="_testimonial_flex_first">
                                <div class="_tsl_flex_thumb">
                                    <img src="https://via.placeholder.com/500x500" class="img-fluid" alt="">
                                </div>
                                <div class="_tsl_flex_capst">
                                    <h5>Maxine E. Gagliardi</h5>
                                    <div class="_ovr_posts"><span>Apple CEO</span></div>
                                    <div class="_ovr_rates"><span><i class="fa fa-star"></i></span>4.5</div>
                                </div>
                            </div>
                            <div class="_testimonial_flex_first_last">
                                <div class="_tsl_flex_thumb">
                                    <img src="https://via.placeholder.com/300x300" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="facts-detail">
                            <p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Single Item -->
                <div class="single_items lios_item">
                    <div class="_testimonial_wrios shadow_none">
                        <div class="_testimonial_flex">
                            <div class="_testimonial_flex_first">
                                <div class="_tsl_flex_thumb">
                                    <img src="https://via.placeholder.com/500x500" class="img-fluid" alt="">
                                </div>
                                <div class="_tsl_flex_capst">
                                    <h5>Roy M. Cardona</h5>
                                    <div class="_ovr_posts"><span>Google Founder</span></div>
                                    <div class="_ovr_rates"><span><i class="fa fa-star"></i></span>4.9</div>
                                </div>
                            </div>
                            <div class="_testimonial_flex_first_last">
                                <div class="_tsl_flex_thumb">
                                    <img src="https://via.placeholder.com/300x300" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="facts-detail">
                            <p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Single Item -->
                <div class="single_items lios_item">
                    <div class="_testimonial_wrios shadow_none">
                        <div class="_testimonial_flex">
                            <div class="_testimonial_flex_first">
                                <div class="_tsl_flex_thumb">
                                    <img src="https://via.placeholder.com/500x500" class="img-fluid" alt="">
                                </div>
                                <div class="_tsl_flex_capst">
                                    <h5>Dorothy K. Shipton</h5>
                                    <div class="_ovr_posts"><span>Linkedin Leader</span></div>
                                    <div class="_ovr_rates"><span><i class="fa fa-star"></i></span>4.7</div>
                                </div>
                            </div>
                            <div class="_testimonial_flex_first_last">
                                <div class="_tsl_flex_thumb">
                                    <img src="https://via.placeholder.com/300x300" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="facts-detail">
                            <p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Single Item -->
                <div class="single_items lios_item">
                    <div class="_testimonial_wrios shadow_none">
                        <div class="_testimonial_flex">
                            <div class="_testimonial_flex_first">
                                <div class="_tsl_flex_thumb">
                                    <img src="https://via.placeholder.com/500x500" class="img-fluid" alt="">
                                </div>
                                <div class="_tsl_flex_capst">
                                    <h5>Robert P. McKissack</h5>
                                    <div class="_ovr_posts"><span>CEO, Leader</span></div>
                                    <div class="_ovr_rates"><span><i class="fa fa-star"></i></span>4.7</div>
                                </div>
                            </div>
                            <div class="_testimonial_flex_first_last">
                                <div class="_tsl_flex_thumb">
                                    <img src="https://via.placeholder.com/300x300" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="facts-detail">
                            <p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
                        </div>
                    </div>
                </div>
            
            </div>
        
        </div>
    </div>
    
</div>
</section>
<!-- ============================ Students Reviews End ================================== -->

<!-- ============================ article Start ================================== -->
<section class="min">
<div class="container">

    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-8">
            <div class="sec-heading center">
                <h2>Latest News & <span class="theme-cl">Articles</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center">
        
        <!-- Single Item -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="blg_grid_box">
                <div class="blg_grid_thumb">
                    <a href="blog-detail.html"><img src="https://via.placeholder.com/1200x800" class="img-fluid" alt="" /></a>
                </div>
                <div class="blg_grid_caption">
                    <div class="blg_tag"><span>Marketing</span></div>
                    <div class="blg_title"><h4><a href="blog-detail.html">How To Register & Enrolled on SkillUp Step by Step?</a></h4></div>
                    <div class="blg_desc"><p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p></div>
                </div>
                <div class="crs_grid_foot">
                    <div class="crs_flex">
                        <div class="crs_fl_first">
                            <div class="crs_tutor">
                                <div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="https://via.placeholder.com/500x500" class="img-fluid circle" alt="" /></a></div>
                            </div>
                        </div>
                        <div class="crs_fl_last">
                            <div class="foot_list_info">
                                <ul>
                                    <li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">10k Views</div></li>
                                    <li><div class="elsio_ic"><i class="fa fa-clock text-warning"></i></div><div class="elsio_tx">10 July 2021</div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Single Item -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="blg_grid_box">
                <div class="blg_grid_thumb">
                    <a href="blog-detail.html"><img src="https://via.placeholder.com/1200x800" class="img-fluid" alt="" /></a>
                </div>
                <div class="blg_grid_caption">
                    <div class="blg_tag"><span>Business</span></div>
                    <div class="blg_title"><h4><a href="blog-detail.html">Let's Know How Skillup Work Fast and Secure?</a></h4></div>
                    <div class="blg_desc"><p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p></div>
                </div>
                <div class="crs_grid_foot">
                    <div class="crs_flex">
                        <div class="crs_fl_first">
                            <div class="crs_tutor">
                                <div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="https://via.placeholder.com/500x500" class="img-fluid circle" alt="" /></a></div>
                            </div>
                        </div>
                        <div class="crs_fl_last">
                            <div class="foot_list_info">
                                <ul>
                                    <li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">10k Views</div></li>
                                    <li><div class="elsio_ic"><i class="fa fa-clock text-warning"></i></div><div class="elsio_tx">10 July 2021</div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Single Item -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="blg_grid_box">
                <div class="blg_grid_thumb">
                    <a href="blog-detail.html"><img src="https://via.placeholder.com/1200x800" class="img-fluid" alt="" /></a>
                </div>
                <div class="blg_grid_caption">
                    <div class="blg_tag"><span>Accounting</span></div>
                    <div class="blg_title"><h4><a href="blog-detail.html">How To Improove Digital Marketing for Fast SEO</a></h4></div>
                    <div class="blg_desc"><p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p></div>
                </div>
                <div class="crs_grid_foot">
                    <div class="crs_flex">
                        <div class="crs_fl_first">
                            <div class="crs_tutor">
                                <div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="https://via.placeholder.com/500x500" class="img-fluid circle" alt="" /></a></div>
                            </div>
                        </div>
                        <div class="crs_fl_last">
                            <div class="foot_list_info">
                                <ul>
                                    <li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">10k Views</div></li>
                                    <li><div class="elsio_ic"><i class="fa fa-clock text-warning"></i></div><div class="elsio_tx">10 July 2021</div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
</section>
<div class="clearfix"></div>
<!-- ============================ article End ================================== -->

<!-- ============================ Call To Action ================================== -->
<section class="theme-bg call_action_wrap-wrap">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            
            <div class="call_action_wrap">
                <div class="call_action_wrap-head">
                    <h3>Do You Have Questions ?</h3>
                    <span>We'll help you to grow your career and growth.</span>
                </div>
                <a href="#" class="btn btn-call_action_wrap">Contact Us Today</a>
            </div>
            
        </div>
    </div>
</div>
</section>
    <div class="text-center mb-100">
    	<a href="{{ route('instant_quote') }}" class="boxed_btn">{!! homepage('order_page_link_text') !!}</a>
    </div>
@endsection
