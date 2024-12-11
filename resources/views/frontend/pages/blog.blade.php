@extends('frontend.layouts')
@section('content')
    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title">
                    <h1>Blog Classic</h1>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li> > Blog Classic</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->

    <!-- START BLOG -->
    <section class="blog-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12 col-xs-12">
                    <div class="post-slide-blog">
                        <div class="blog-img">
                            <img src="assets/images/blog/1.png" class="img-fluid" alt="image" />
                            <a href="#">07 April</a>
                        </div>
                        <span><i class="fa-regular fa-user"></i> By admin</span>
                        <span><i class="fa-regular fa-comment"></i> Comment (05)</span>
                        <h2><a href="blog-details.html">Unlocking The Potential Of Solar Energy For your Home</a></h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using is that it has a more-or-less normal distribution
                            of letters, as opposed to using here making it look like readable English. Many desktop
                            publishing packages.</p>
                        <a href="./blog-details.html" class="srex-btn srex-btn--outline">
                            Read More<i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="post-slide-blog">
                        <div class="blog-img">
                            <img src="assets/images/blog/2.png" class="img-fluid" alt="image" />
                            <a href="#">07 April</a>
                        </div>
                        <span><i class="fa-regular fa-user"></i> By admin</span>
                        <span><i class="fa-regular fa-comment"></i> Comment (05)</span>
                        <h2><a href="blog-single.html">Exploring the Benefit of solar Energy</a></h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using is that it has a more-or-less normal distribution
                            of letters, as opposed to using here making it look like readable English. Many desktop
                            publishing packages.</p>
                        <a href="./blog-details.html" class="srex-btn srex-btn--outline">
                            Read More<i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="post-slide-blog">
                        <div class="blog-img">
                            <img src="assets/images/blog/3.png" class="img-fluid" alt="image" />
                            <a href="#">07 April</a>
                        </div>
                        <span><i class="fa-regular fa-user"></i> By admin</span>
                        <span><i class="fa-regular fa-comment"></i> Comment (05)</span>
                        <h2><a href="blog-single.html">Harnessing the power of the sun: A guide to solar Energy</a></h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using is that it has a more-or-less normal distribution
                            of letters, as opposed to using here making it look like readable English. Many desktop
                            publishing packages.</p>
                        <a href="./blog-details.html" class="srex-btn srex-btn--outline">
                            Read More<i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <!--- START PAGINATION -->
                    <div id="pagination">
                        <nav>
                            <ul class="pagination blog_pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div><!--- END PAGINATION -->
                </div><!-- END COL-->
                <div class="col-lg-4 col-sm-12 col-xs-12">
                    <div class="blog_search">
                        <h4 class="blog_sidebar_title">. Search</h4>
                        <input type="text" class="form-control" placeholder="Type & Press Enter">
                    </div>
                    <div class="categories">
                        <h4 class="blog_sidebar_title">. Categories</h4>
                        <ul>
                            <li><a href="#"><i class="fa-solid fa-arrow-down"></i> Power of the sun
                                    <span>(02)</span></a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-down"></i> A Bright Future
                                    <span>(05)</span></a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-down"></i> Sun's Potential
                                    <span>(10)</span></a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-down"></i> Video promotion
                                    <span>(03)</span></a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-down"></i> Reabervede <span>(10)</span></a>
                            </li>
                            <li><a href="#"><i class="fa-solid fa-arrow-down"></i> Harnessing the power
                                    <span>(03)</span></a></li>
                        </ul>
                    </div>
                    <div class="latest_blog wow fadeInRight">
                        <h4 class="blog_sidebar_title">. Latest Blog</h4>
                        <div class="single_latest_blog">
                            <img src="assets/images/blog/blog-small-1.png" alt="" />
                            <span><i class="fa-regular fa-calendar-days"></i> Jan 10, 2024</span>
                            <a href="#">Unlocking The Potential Of Solar Energy For your Home.</a>
                        </div>
                        <div class="single_latest_blog">
                            <img src="assets/images/blog/blog-small-2.png" alt="" />
                            <span><i class="fa-regular fa-calendar-days"></i> Jan 10, 2024</span>
                            <a href="#">Exploring the Benefit of solar Energy.</a>
                        </div>
                        <div class="single_latest_blog">
                            <img src="assets/images/blog/blog-small-3.png" alt="" />
                            <span><i class="fa-regular fa-calendar-days"></i> Jan 10, 2024</span>
                            <a href="#">Harnessing the power of the sun: A guide to solar Energy.</a>
                        </div>
                    </div>
                    <div class="categories">
                        <h4 class="blog_sidebar_title">. Archive</h4>
                        <ul>
                            <li><a href="#"><i class="fa-solid fa-arrow-down"></i> January 2022</a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-down"></i> July 2021</a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-down"></i> February 2022</a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-down"></i> January 2022</a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-down"></i> September 2023</a></li>
                        </ul>
                    </div>
                </div><!--- END COL -->
            </div><!-- END ROW-->
        </div><!-- END CONTAINER-->
    </section>
    <!-- END BLOG -->
@endsection
