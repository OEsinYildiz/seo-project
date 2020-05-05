@extends('frontend.layout.master')
@section('content')
    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap pt-0">

            <!-- Client Carousel
            ============================================= -->
            <div class="section nobg m-0 border-bottom py-5">
                <div class="container">

                </div>
            </div>

            <!-- Features
            ============================================= -->
            <div class="section nobg mt-4 mb-0 pb-0">
                <div class="container">
                    <div class="heading-block nobottomborder center divcenter mb-0 clearfix" style="max-width: 550px">
                        <div class="badge badge-pill badge-default">Services</div>
                        <h3 class="nott ls0 mb-3">What We Do</h3>
                        <p>Dynamically provide access to resource-leveling mindshare vis-a-vis bricks-and-clicks ideas authoritatively.</p>
                    </div>
                    <div class="row justify-content-between align-items-center clearfix">

                        <div class="col-lg-4 col-sm-6">

                            <div class="feature-box fbox-right noborder">
                                <div class="fbox-icon">
                                    <a href="#"><img src="frontend/images/icons/seo.svg" alt="Feature Icon" class="nobg noradius"></a>
                                </div>
                                <h3 class="nott ls0">SEO optimization</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, dolore, voluptates!</p>
                            </div>

                            <div class="feature-box fbox-right noborder mt-5">
                                <div class="fbox-icon">
                                    <a href="#"><img src="frontend/images/icons/adword.svg" alt="Feature Icon" class="nobg noradius"></a>
                                </div>
                                <h3 class="nott ls0">Adwords Campaign</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, provident.</p>
                            </div>

                            <div class="feature-box fbox-right noborder mt-5">
                                <div class="fbox-icon">
                                    <a href="#"><img src="frontend/images/icons/analysis.svg" alt="Feature Icon" class="nobg noradius"></a>
                                </div>
                                <h3 class="nott ls0">Digital Analysis</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
                            </div>

                        </div>

                        <div class="col-lg-3 col-7 offset-3 offset-sm-0 d-sm-none d-lg-block center my-5">
                            <img src="frontend/images/sections/2.png" alt="iphone" class="rounded  parallax" data-bottom-top="transform: translateY(-30px)" data-top-bottom="transform: translateY(30px)">
                        </div>

                        <div class="col-lg-4 col-sm-6">

                            <div class="feature-box noborder">
                                <div class="fbox-icon">
                                    <a href="#"><img src="frontend/images/icons/social.svg" alt="Feature Icon" class="nobg noradius"></a>
                                </div>
                                <h3 class="nott ls0">Social Media Marketing</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, dolore, voluptates!</p>
                            </div>

                            <div class="feature-box noborder mt-5">
                                <div class="fbox-icon">
                                    <a href="#"><img src="frontend/images/icons/experience.svg" alt="Feature Icon" class="nobg noradius"></a>
                                </div>
                                <h3 class="nott ls0">Customer Experience</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
                            </div>

                            <div class="feature-box noborder mt-5">
                                <div class="fbox-icon">
                                    <a href="#"><img src="frontend/images/icons/content_marketing.svg" alt="Feature Icon" class="nobg noradius"></a>
                                </div>
                                <h3 class="nott ls0">Content Marketing</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, provident.</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- Pricing
            ============================================= -->
            <div class="section m-0" style="background: url('{{asset('frontend/frontend/images/sections/4.png')}}') no-repeat center top; background-size: cover; padding: 140px 0 0;">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-4 mt-4">
                            <div class="heading-block nobottomborder bottommargin-sm">
                                <div class="badge badge-pill badge-default">Pricing Table</div>
                                <h3 class="nott ls0">No Hidden Charges. <br>Choose Your Best Plan.</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolore voluptatem assumenda quae possimus sunt dignissimos tempora officia.</p>
                            <div class="pricing-tenure-switcher" data-container="#pricing-switch">
                                <span class="pts-left">Monthly</span>
                                <div class="pts-switcher">
                                    <div class="switch">
                                        <input id="switch-toggle-pricing-tenure" class="switch-toggle switch-toggle-round" type="checkbox">
                                        <label for="switch-toggle-pricing-tenure"></label>
                                    </div>
                                </div>
                                <span class="pts-right">Yearly</span>
                                <div class="price-discount"></div>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-8">
                            <div id="section-pricing" class="page-section nopadding nomargin">

                                <div id="pricing-switch" class="pricing row align-items-end bottommargin-lg clearfix">

                                    <div class="col-md-6">

                                        <div class="pricing-box">
                                            <div class="pricing-title">
                                                <img class="mb-2 nobg noradius" src="frontend/images/icons/man.svg" alt="Pricing Icon" width="50">
                                                <h3>Single User Plan</h3>
                                                <span>Most Popular</span>
                                            </div>
                                            <div class="pricing-price">
                                                <div class="pts-switch-content-left"><span class="price-unit">&dollar;</span>5<span class="price-tenure">Per Month</span></div>
                                                <div class="pts-switch-content-right"><span class="price-unit">&dollar;</span>48<span class="price-tenure">Per Year</span></div>
                                            </div>
                                            <div class="pricing-features border-bottom-0">
                                                <ul>
                                                    <li><i class="icon-check-circle color mr-2"></i><strong>Limited</strong> Support</li>
                                                    <li class="pts-switch-content-left text-black-50"><i class="icon-minus-circle mr-2"></i><del style="opacity: .5"><strong>1</strong> Free Optimization</del></li>
                                                    <li class="pts-switch-content-right"><i class="icon-check-circle color mr-2"></i><strong>1</strong> Free Optimization</li>
                                                    <li><i class="icon-check-circle color mr-2"></i><strong>100+</strong> Pages</li>
                                                    <li><i class="icon-check-circle color mr-2"></i><strong>Single</strong> User License</li>
                                                    <li><i class="icon-check-circle color mr-2"></i>Phone &amp; Email Support</li>
                                                </ul>
                                            </div>
                                            <div class="pricing-action">
                                                <div class="pts-switch-content-left"><a href="#" class="button button-large button-rounded btn-block capitalize m-0 ls0">Get Started</a></div>
                                                <div class="pts-switch-content-right"><a href="#" class="button button-large button-rounded btn-block capitalize m-0 ls0">Get Started</a></div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="pricing-box">
                                            <div class="pricing-title">
                                                <img class="mb-2 nobg noradius" src="frontend/images/icons/group.svg" alt="Pricing Icon" width="60">
                                                <h3>Multiple User Plan</h3>
                                            </div>
                                            <div class="pricing-price">
                                                <div class="pts-switch-content-left"><span class="price-unit">&dollar;</span>12<span class="price-tenure">Per Month</span></div>
                                                <div class="pts-switch-content-right"><span class="price-unit">&dollar;</span>115<span class="price-tenure">Per Year</span></div>
                                            </div>
                                            <div class="pricing-features border-bottom-0">
                                                <ul>
                                                    <li><i class="icon-check-circle color mr-2"></i><strong>24*7</strong> Support</li>
                                                    <li><i class="icon-check-circle color mr-2"></i><strong>10</strong> Free Optimization</li>
                                                    <li><i class="icon-check-circle color mr-2"></i><strong>1000+</strong> Pages</li>
                                                    <li><i class="icon-check-circle color mr-2"></i><strong>Unlimited</strong> User License</li>
                                                    <li><i class="icon-check-circle color mr-2"></i>Phone &amp; Email Support</li>
                                                </ul>
                                            </div>
                                            <div class="pricing-action">
                                                <div class="pts-switch-content-left"><a href="#" class="button button-rounded button-large button-light text-dark bg-white border btn-block nott m-0 ls0">Get Started</a></div>
                                                <div class="pts-switch-content-right"><a href="#" class="button button-rounded button-large button-light text-dark bg-white border btn-block nott m-0 ls0">Get Started</a></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Form Section
            ============================================= -->
            <div class="section m-0" style="background: url('{{asset('frontend/frontend/images/sections/1.jpg')}}') no-repeat center center; background-size: cover; padding: 100px 0;">
                <div class="container">
                    <div class="row justify-content-between align-items-center">

                        <div class="col-md-4">
                            <div class="heading-block nobottomborder bottommargin-sm">
                                <div class="badge badge-pill badge-default">Careers</div>
                                <h3 class="nott ls0">Get your free Quote today</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolore voluptatem assumenda quae possimus sunt dignissimos tempora officia.</p>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h4 class="mb-3">Apply Now</h4>
                                    <div class="form-widget">
                                        <div class="form-result"></div>
                                        <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/form.php" method="post">
                                            <div class="col_full mb-3">
                                                <label for="template-contactform-name">Name:*</label>
                                                <input type="text" id="template-contactform-name" name="template-contactform-name" class="form-control input-sm required" value="">
                                            </div>
                                            <div class="col_full mb-3">
                                                <label for="template-contactform-email">Email Address:*</label>
                                                <input type="email" id="template-contactform-email" name="template-contactform-email" class="form-control input-sm required" value="">
                                            </div>
                                            <div class="col_full mb-4">
                                                <label for="template-contactform-website">Website:*</label>
                                                <input type="text" id="template-contactform-website" name="template-contactform-website" class="form-control input-sm required" value="">
                                            </div>
                                            <div class="col_full nobottommargin">
                                                <button class="button button-rounded btn-block nott ls0 m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Apply Now</button>
                                            </div>

                                            <input type="hidden" name="prefix" value="template-contactform-">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-5 mt-md-0 center">
                            <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe" class="play-icon shadow"><i class="icon-play"></i></a>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Works/Projects
            ============================================= -->
            <div class="section m-0" style="background: url('{{asset('frontend/images/sections/5.jpg')}}') no-repeat center center; background-size: cover;padding: 80px 0;">
                <div class="container">
                    <div class="heading-block nobottomborder center">
                        <div class="badge badge-pill badge-default">Completed Projects</div>
                        <h3 class="nott ls0">Our Works</h3>
                    </div>

                    <div id="portfolio" class="portfolio portfolio-3 grid-container clearfix">

                        <article class="portfolio-item pf-media pf-icons">
                            <div class="portfolio-image">
                                <img src="frontend/images/works//1.jpg" alt="The Atmosphere">
                                <div class="portfolio-overlay">
                                    <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">The Atmosphere</a></h3>
                                <span>Digital Marketing</span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-illustrations">
                            <div class="portfolio-image">
                                <img src="frontend/images/works//2.jpg" alt="Wavelength Structure">
                                <div class="portfolio-overlay">
                                    <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Wavelength Structure</h3>
                                <span>SEO</span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-graphics pf-uielements">
                            <div class="portfolio-image">
                                <img src="frontend/images/works//3.jpg" alt="Greenhouse Garden">
                                <div class="portfolio-overlay">
                                    <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Simplicity Pages</h3>
                                <span>Analytics</span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-icons pf-illustrations">
                            <div class="portfolio-image">
                                <img src="frontend/images/works//4.jpg" alt="Industrial Hub">
                                <div class="portfolio-overlay">
                                    <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>SEO Analysis</h3>
                                <span>SEO</span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-uielements pf-media">
                            <div class="portfolio-image">
                                <img src="frontend/images/works//5.jpg" alt="Corporate Headquarters">
                                <div class="portfolio-overlay">
                                    <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Marketing Strategy</h3>
                                <span>Digital Marketing</span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-graphics pf-illustrations">
                            <div class="portfolio-image">
                                <img src="frontend/images/works//6.jpg" alt="Space Station">
                                <div class="portfolio-overlay" data-lightbox="gallery">
                                    <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Space Station</h3>
                                <span>Social Media</span>
                            </div>
                        </article>

                    </div>

                    <div class="center">
                        <a href="#" class="button button-large button-rounded capitalize ml-0 mt-5 ls0">View All Works</a>
                    </div>

                </div>
            </div>

            <!-- Features
            ============================================= -->
            <div class="container clearfix py-5">
                <div class="row">
                    <div class="col-md-4 mt-5">
                        <div class="feature-box fbox-center noborder">
                            <div class="fbox-icon">
                                <a href="#"><img src="images/icons/research.svg" alt="Feature Icon" class="nobg noradius"></a>
                            </div>
                            <h3 class="nott ls0">1. Planning &amp; Research</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, dolore, voluptates!</p>
                        </div>
                    </div>

                    <div class="col-md-4 mt-5">
                        <div class="feature-box fbox-center noborder">
                            <div class="fbox-icon">
                                <a href="#"><img src="images/icons/optimizing.svg" alt="Feature Icon" class="nobg noradius"></a>
                            </div>
                            <h3 class="nott ls0">2. Optimizing</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, provident.</p>
                        </div>
                    </div>

                    <div class="col-md-4 mt-5">
                        <div class="feature-box fbox-center noborder">
                            <div class="fbox-icon">
                                <a href="#"><img src="{{asset('frontend/images/icons/result.svg')}}" alt="Feature Icon" class="nobg noradius"></a>
                            </div>
                            <h3 class="nott ls0">3. Result</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonials
            ============================================= -->
            <div class="section mt-0" style="background: url('{{asset('frontend/images/sections/3.jpg')}}') no-repeat top center; background-size: cover; padding: 80px 0 70px;">
                <div class="container">
                    <div class="heading-block nobottomborder center">
                        <div class="badge badge-pill badge-default">Testimonials</div>
                        <h3 class="nott ls0">What Clients Says</h3>
                    </div>

                    <div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget clearfix" data-margin="0" data-pagi="true" data-loop="true" data-center="true" data-autoplay="5000" data-items-sm="1" data-items-md="2" data-items-xl="3">

                        <div class="oc-item">
                            <div class="testimonial">
                                <div class="testi-image">
                                    <a href="#"><img src="{{asset('frontend/images/testimonials/1.jpg')}}" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
                                    <div class="testi-meta">
                                        John Doe
                                        <span>XYZ Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="oc-item">
                            <div class="testimonial">
                                <div class="testi-image">
                                    <a href="#"><img src="demos/pet/images/testimonials/2.jpg" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                    <div class="testi-meta">
                                        Collis Ta'eed
                                        <span>Envato Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="oc-item">
                            <div class="testimonial">
                                <div class="testi-image">
                                    <a href="#"><img src="demos/pet/images/testimonials/3.jpg" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                    <div class="testi-meta">
                                        Collis Ta'eed
                                        <span>Envato Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="oc-item">
                            <div class="testimonial">
                                <div class="testi-image">
                                    <a href="#"><img src="demos/pet/images/testimonials/4.jpg" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                    <div class="testi-meta">
                                        Mary Jane
                                        <span>Google Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="oc-item">
                            <div class="testimonial">
                                <div class="testi-image">
                                    <a href="#"><img src="images/testimonials/5.jpg" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                    <div class="testi-meta">
                                        Steve Jobs
                                        <span>Apple Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blogs
            ============================================= -->
            <div class="container py-4">
                <div class="heading-block nobottomborder center">
                    <div class="badge badge-pill badge-default">Latest Articles</div>
                    <h3 class="nott ls0">Recently From the Blog</h3>
                </div>

                <div class="row mt-5 clearfix">
                    <div class="col-md-4">
                        <article class="entry">
                            <div class="entry-image mb-3">
                                <a href="#"><img src="images/blog/1.jpg" alt="Image 3"></a>
                            </div>
                            <div class="entry-title">
                                <h3><a href="#">Top Most SEO Optizied Websites</a></h3>
                            </div>
                            <ul class="entry-meta m-0 d-flex align-items-center clearfix">
                                <li><i class="icon-line2-user"></i><a href="#"> John Doe</a></li>
                                <li><i class="icon-calendar-times1"></i><a href="#"> 11 Mar 2018</a></li>
                            </ul>
                            <div class="entry-content clearfix">
                                <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem progressive technology through pariatur quibusdam veritatis quisquam. Efficiently communicate alternative.</p>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="entry">
                            <div class="entry-image mb-3">
                                <a href="#"><img src="images/blog/2.jpg" alt="Image 3"></a>
                            </div>
                            <div class="entry-title">
                                <h3><a href="#">10 Recent SEO Tips for Startups</a></h3>
                            </div>
                            <ul class="entry-meta m-0 clearfix">
                                <li><i class="icon-line2-user"></i><a href="#"> Semicolonweb</a></li>
                                <li><i class="icon-calendar-times1"></i><a href="#"> 18 Apr 2018</a></li>
                            </ul>
                            <div class="entry-content clearfix">
                                <p>Interactively predominate progressive technology through distinctive materials. Progressively benchmark extensible intellectual. Exercitationem progressive technology through pariatur.</p>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="entry">
                            <div class="entry-image mb-3">
                                <a href="#"><img src="images/blog/3.jpg" alt="Image 3"></a>
                            </div>
                            <div class="entry-title">
                                <h3><a href="#">3 Ways to Transform Your Site Into a SEO</a></h3>
                            </div>
                            <ul class="entry-meta m-0 clearfix">
                                <li><i class="icon-line2-user"></i><a href="#"> John Doe</a></li>
                                <li><i class="icon-calendar-times1"></i><a href="#"> 06 Aug 2018</a></li>
                            </ul>
                            <div class="entry-content clearfix">
                                <p>Globally synergize premium metrics with holistic e-markets. Professionally morph interoperable networks vis-a-vis value-added methods.</p>
                            </div>
                        </article>
                    </div>
                </div>

            </div>

            <!-- Promo/Contact
            ============================================= -->
            <div class="section mt-5 footer-stick promo-section nobg" style="padding: 100px 0; overflow: visible">
                <div class="container">
                    <div class="heading-block nobottomborder center">
                        <h5 class="uppercase ls1 mb-1">Grab your Free Trail and Explore the Options</h5>
                        <h2 class="nott ls0">Try Keyword Search 30 Days Free With Canvas<span>SEO</span></h2>
                        <a href="#" class="button button-large button-rounded nott ml-0 ls0 mt-4">Contact Us Now</a>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- #content end -->
@endsection

@push('CustomJs')

    <!-- External JavaScripts
============================================= -->
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/plugins.js')}}"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script src="{{asset('frontend/js/functions.js')}}"></script>

    <script>
        //Pricing Table Script
        jQuery(document).ready( function($){
            function pricingSwitcher( elementCheck, elementParent, elementPricing ) {
                elementParent.find('.pts-left,.pts-right').removeClass('pts-switch-active');
                elementPricing.find('.pts-switch-content-left,.pts-switch-content-right').addClass('hidden');

                if( elementCheck.filter(':checked').length > 0 ) {
                    elementParent.find('.pts-right').addClass('pts-switch-active');
                    elementPricing.find('.pts-switch-content-right').removeClass('hidden');
                } else {
                    elementParent.find('.pts-left').addClass('pts-switch-active');
                    elementPricing.find('.pts-switch-content-left').removeClass('hidden');
                }
            }

            $('.pts-switcher').each( function(){
                var element = $(this),
                    elementCheck = element.find(':checkbox'),
                    elementParent = $(this).parents('.pricing-tenure-switcher'),
                    elementPricing = $( elementParent.attr('data-container') );

                pricingSwitcher( elementCheck, elementParent, elementPricing );

                elementCheck.on( 'change', function(){
                    pricingSwitcher( elementCheck, elementParent, elementPricing );
                });
            });
        });

    </script>

@endpush

@push('CustomCss')

@endpush
