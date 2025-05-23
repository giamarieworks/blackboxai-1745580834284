<?php
/*
Template Name: Release Notes page
*/
get_header();
?>
<main class="page-wrapper rbt-dashboard-page">
    <div class="rbt-panel-wrapper">

        <?php get_template_part('template-parts/header'); ?>
        <?php get_template_part('template-parts/pop_mobile'); ?>
        <?php get_template_part('template-parts/preloader'); ?>
        <?php get_template_part('template-parts/Start_Left_panel'); ?>

        <!-- Your main content starts here -->

        <!--..:: Start Slider Area  ::..-->
        <div class="slider-area slider-style-1 variation-default slider-bg-image bg-banner1 slider-bg-shape" data-black-overlay="1">
            <!--..:: <div class="bg-blend-top bg_dot-mask"></div> ::..-->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="inner text-center mt--140">
                            <h1 class="title display-one">Examine the Potential of
                                <br> <span class="header-caption">
                                    <span class="cd-headline rotate-1">
                                        <span class="cd-words-wrapper" style="width: 221px;">
                                            <b class="theme-gradient is-visible">AI Chat</b>
                                            <b class="theme-gradient is-hidden">AI Writer</b>
                                            <b class="theme-gradient is-hidden">AI Chat</b>
                                        </span>
                                </span>
                                </span> AI Hack
                            </h1>
                            <p class="description">Unleash Brainwave's AI potential. Use the open AI <br> conversation app Pixcels Themes</p>
                            <div class="form-group">
                                <textarea name="text" id="slider-text-area" cols="30" rows="2" placeholder="Enter a prompt, for example: a fundraising deck to a mobile finance app called Intuitive"></textarea>
                                <a class="btn-default @@btnClass" href="text-generator.php">Start with AI</a>
                            </div>
                            <div class="inner-shape">
                                <img src="assets/images/bg/icon-shape/icon-shape-one.png" alt="Icon Shape" class="iconshape iconshape-one">
                                <img src="assets/images/bg/icon-shape/icon-shape-two.png" alt="Icon Shape" class="iconshape iconshape-two">
                                <img src="assets/images/bg/icon-shape/icon-shape-three.png" alt="Icon Shape" class="iconshape iconshape-three">
                                <img src="assets/images/bg/icon-shape/icon-shape-four.png" alt="Icon Shape" class="iconshape iconshape-four">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-11 col-xl-11 justify-content-center">
                        <div class="slider-frame">
                            <img class="slider-image-effect" src="assets/images/bg/slider-main-image.png" alt="Banner Images">
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-shape">
                <img class="bg-shape-one" src="assets/images/bg/bg-shape-four.png" alt="Bg Shape">
                <img class="bg-shape-two" src="assets/images/bg/bg-shape-five.png" alt="Bg Shape">
            </div>
        </div>
        <!--..:: End Slider Area  ::..-->

        <!--..:: Start Brand Area ::..-->
        <div class="rainbow-brand-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title rating-title text-center sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <p class="b1 mb--0 small-title">truest 800,000+ HIGHLY PRODUCTIVE Company</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt--10">

                    </div>
                </div>
            </div>
        </div>

        <!--..:: Start Tab__Style--one Area  ::..-->
        <div class="rainbow-service-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center pb--60" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle">
                                <span class="theme-gradient">RAINBOW UNLOCKS THE POTENTIAL ai</span>
                            </h4>
                            <h2 class="title mb--0">Generative AI made for <br> creators.</h2>
                        </div>
                    </div>
                </div>

                <div class="row row--30 align-items-center">
                    <div class="col-lg-12">
                        <div class="rainbow-default-tab style-three generator-tab-defalt">
                            <ul class="nav nav-tabs tab-button" role="tablist">
                                <li class="nav-item tabs__tab " role="presentation">
                                    <button class="nav-link rainbow-gradient-btn without-shape-circle" id="video-generator-tab" data-bs-toggle="tab" data-bs-target="#video-generate" type="button" role="tab" aria-controls="video-generate" aria-selected="false"><span class="generator-icon"><img src="assets/images/icons/video-g.png" alt="Video Generator Icon">Video Generator</span><span class="border-bottom-style"></span></button>
                                </li>
                                <li class="nav-item tabs__tab" role="presentation">
                                    <button class="nav-link rainbow-gradient-btn without-shape-circle active" id="audio-generator-tab" data-bs-toggle="tab" data-bs-target="#audio-generate" type="button" role="tab" aria-controls="audio-generate" aria-selected="true"><span class="generator-icon"><img src="assets/images/icons/audio-g.png" alt="Video Generator Icon">Audio Generator</span><span class="border-bottom-style"></span></button>
                                </li>
                                <li class="nav-item tabs__tab " role="presentation">
                                    <button class="nav-link rainbow-gradient-btn without-shape-circle" id="photo-generator-tab" data-bs-toggle="tab" data-bs-target="#photo-generate" type="button" role="tab" aria-controls="photo-generate" aria-selected="false"><span class="generator-icon"><img src="assets/images/icons/photo-g.png" alt="Video Generator Icon">Photo Generator</span><span class="border-bottom-style"></span></button>
                                </li>
                                <li class="nav-item tabs__tab " role="presentation">
                                    <button class="nav-link rainbow-gradient-btn without-shape-circle" id="text-generator-tab" data-bs-toggle="tab" data-bs-target="#text-generate" type="button" role="tab" aria-controls="text-generate" aria-selected="false"><span class="generator-icon"><img src="assets/images/icons/text-g.png" alt="Video Generator Icon">Text Generator</span><span class="border-bottom-style"></span></button>
                                </li>
                                <li class="nav-item tabs__tab " role="presentation">
                                    <button class="nav-link rainbow-gradient-btn without-shape-circle" id="code-generator-tab" data-bs-toggle="tab" data-bs-target="#code-generate" type="button" role="tab" aria-controls="code-generate" aria-selected="false"><span class="generator-icon"><img src="assets/images/icons/code-g.png" alt="Video Generator Icon">Code Generator</span><span class="border-bottom-style"></span></button>
                                </li>
                            </ul>

                            <div class="rainbow-tab-content tab-content">
                                <div class="tab-pane fade" id="video-generate" role="tabpanel" aria-labelledby="video-generator-tab">
                                    <div class="inner">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="section-title">
                                                    <h2 class="title">Video generating AI refers to artificial intelligence.</h2>
                                                    <div class="features-section">
                                                        <ul class="list-style--1">
                                                            <li><i class="fa-regular fa-circle-check"></i>Transformer Models</li>
                                                            <li><i class="fa-regular fa-circle-check"></i>Conditional Generative Models</li>
                                                            <li><i class="fa-regular fa-circle-check"></i>Pre-trained Models</li>
                                                            <li><i class="fa-regular fa-circle-check"></i>Variational Autoencoders</li>
                                                        </ul>
                                                    </div>
                                                    <div class="read-more"><a class="btn-default color-blacked" href="#">Start Exploring Now <i class="fa-sharp fa-solid fa-arrow-right"></i></a></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt_md--30 mt_sm--30">
                                                <div class="export-img">
                                                    <div class="inner-without-padding">
                                                        <div class="export-img img-bg-shape">
                                                            <img src="assets/images/generator-img/chat-export-video.png" alt="Chat example Image">
                                                            <div class="image-shape"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade show active" id="audio-generate" role="tabpanel" aria-labelledby="audio-generator-tab">
                                    <div class="inner">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="section-title">
                                                    <h2 class="title">Audio generating AI refers to artificial intelligence.</h2>
                                                    <div class="features-section">
                                                        <ul class="list-style--1">
                                                            <li><i class="fa-regular fa-circle-check"></i>Transformer Models</li>
                                                            <li><i class="fa-regular fa-circle-check"></i>Conditional Generative Models</li>
                                                            <li><i class="fa-regular fa-circle-check"></i>Pre-trained Models</li>
                                                            <li><i class="fa-regular fa-circle-check"></i>Variational Autoencoders</li>
                                                        </ul>
                                                    </div>
                                                    <div class="read-more"><a class="btn-default color-blacked" href="#">Start Exploring Now <i class="fa-sharp fa-solid fa-arrow-right"></i></a></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt_md--30 mt_sm--30">
                                                <div class="export-img">
                                                    <div class="inner-without-padding">
                                                        <div class="export-img img-bg-shape">
                                                            <img src="assets/images/generator-img/chat-export-audio.png" alt="Chat example Image">
                                                            <div class="image-shape"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="photo-generate" role="tabpanel" aria-labelledby="photo-generator-tab">
                                    <div class="inner">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="section-title">
                                                    <h2 class="title">Photo generating AI refers to artificial intelligence.</h2>
                                                    <div class="features-section">
                                                        <ul class="list-style--1">
                                                            <li><i class="fa-regular fa-circle-check"></i>Transformer Models</li>
                                                            <li><i class="fa-regular fa-circle-check"></i>Conditional Generative Models</li>
                                                            <li><i class="fa-regular fa-circle-check"></i>Pre-trained Models</li>
                                                            <li><i class="fa-regular fa-circle-check"></i>Variational Autoencoders</li>
                                                        </ul>
                                                    </div>
                                                    <div class="read-more"><a class="btn-default color-blacked" href="#">Start Exploring Now <i class="fa-sharp fa-solid fa-arrow-right"></i></a></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt_md--30 mt_sm--30">
                                                <div class="export-img">
                                                    <div class="inner-without-padding">
                                                        <div class="export-img img-bg-shape">
                                                            <img src="assets/images/generator-img/chat-export-photo.png" alt="Chat example Image">
                                                            <div class="image-shape"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="text-generate" role="tabpanel" aria-labelledby="text-generator-tab">
                                    <div class="inner">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="section-title">
                                                    <h2 class="title">Text generating AI refers to artificial intelligence.</h2>
                                                    <div class="features-section">
                                                        <ul class="list-style--1">
                                                            <li><i class="fa-regular fa-circle-check"></i>Transformer Models</li>
                                                            <li><i class="fa-regular fa-circle-check"></i>Conditional Generative Models</li>
                                                            <li><i class="fa-regular fa-circle-check"></i>Pre-trained Models</li>
                                                            <li><i class="fa-regular fa-circle-check"></i>Variational Autoencoders</li>
                                                        </ul>
                                                    </div>
                                                    <div class="read-more"><a class="btn-default color-blacked" href="#">Start Exploring Now <i class="fa-sharp fa-solid fa-arrow-right"></i></a></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt_md--30 mt_sm--30">
                                                <div class="export-img">
                                                    <div class="inner-without-padding">
                                                        <div class="export-img img-bg-shape">
                                                            <img src="assets/images/generator-img/chat-export.png" alt="Chat example Image">
                                                            <div class="image-shape"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="code-generate" role="tabpanel" aria-labelledby="code-generator-tab">
                                    <div class="inner">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="section-title">
                                                    <h2 class="title">Code generating AI refers to artificial intelligence.</h2>
                                                    <div class="features-section">
                                                        <ul class="list-style--1">
                                                            <li><i class="fa-regular fa-circle-check"></i>Transformer Models</li>
                                                            <li><i class="fa-regular fa-circle-check"></i>Conditional Generative Models</li>
                                                            <li><i class="fa-regular fa-circle-check"></i>Pre-trained Models</li>
                                                            <li><i class="fa-regular fa-circle-check"></i>Variational Autoencoders</li>
                                                        </ul>
                                                    </div>
                                                    <div class="read-more"><a class="btn-default color-blacked" href="#">Start Exploring Now <i class="fa-sharp fa-solid fa-arrow-right"></i></a></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt_md--30 mt_sm--30">
                                                <div class="export-img">
                                                    <div class="inner-without-padding">
                                                        <div class="export-img img-bg-shape">
                                                            <img src="assets/images/generator-img/chat-export-code.png" alt="Chat example Image">
                                                            <div class="image-shape"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--..:: End Tab__Style--one Area  ::..-->


        <!--..:: Start Service__Style--one Area  ::..-->
        <div class="rainbow-service-area rainbow-section-gap rainbow-section-gapBottom-big">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-left" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                            <h4 class="subtitle">
                                <span class="theme-gradient">Assisting individuals</span>
                            </h4>
                            <h2 class="title mb--60">
                                Chat Smarter, Not <br> Harder with
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="service-wrapper rainbow-service-slider-actvation slick-grid-15 rainbow-slick-dot rainbow-gradient-arrows">
                            <div class="slide-single-layout">
                                <div class="rainbow-box-card card-style-default qodyai-service-default has-bg-shaped">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="assets/images/icons/service-icon-01.svg" alt="Servece Icon">
                                        </div>
                                        <div class="description centered-shape">
                                            <h5 class="title">Ask anything</h5>
                                            <p class="desc">Lets users quickly find answers to their questions without having to search through multiple sources.</p>
                                            <a class="read-more-btn" href="#">Explore More <span><i class="fa-sharp fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="bg-shaped">
                                        <img src="assets/images/service/bg.png" alt="" class="bg">
                                        <img src="assets/images/service/bg-hover.png" alt="" class="bg-hover">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-single-layout">
                                <div class="rainbow-box-card card-style-default qodyai-service-default has-bg-shaped">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="assets/images/icons/service-icon-02.svg" alt="Servece Icon">
                                        </div>
                                        <div class="description centered-shape">
                                            <h5 class="title">Connect everywhere</h5>
                                            <p class="desc">Lets users quickly find answers to their questions without having to search through multiple sources.</p>
                                            <a class="read-more-btn" href="#">Explore More <span><i class="fa-sharp fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="bg-shaped">
                                        <img src="assets/images/service/bg.png" alt="" class="bg">
                                        <img src="assets/images/service/bg-hover.png" alt="" class="bg-hover">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-single-layout">
                                <div class="rainbow-box-card card-style-default qodyai-service-default has-bg-shaped">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="assets/images/icons/service-icon-03.svg" alt="Servece Icon">
                                        </div>
                                        <div class="description centered-shape">
                                            <h5 class="title">Fast responding</h5>
                                            <p class="desc">Lets users quickly find answers to their questions without having to search through multiple sources.</p>
                                            <a class="read-more-btn" href="#">Explore More <span><i class="fa-sharp fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="bg-shaped">
                                        <img src="assets/images/service/bg.png" alt="" class="bg">
                                        <img src="assets/images/service/bg-hover.png" alt="" class="bg-hover">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-single-layout">
                                <div class="rainbow-box-card card-style-default qodyai-service-default has-bg-shaped">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="assets/images/icons/service-icon-01.svg" alt="Servece Icon">
                                        </div>
                                        <div class="description centered-shape">
                                            <h5 class="title">Ask anything</h5>
                                            <p class="desc">Lets users quickly find answers to their questions without having to search through multiple sources.</p>
                                            <a class="read-more-btn" href="#">Explore More <span><i class="fa-sharp fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="bg-shaped">
                                        <img src="assets/images/service/bg.png" alt="" class="bg">
                                        <img src="assets/images/service/bg-hover.png" alt="" class="bg-hover">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-single-layout">
                                <div class="rainbow-box-card card-style-default qodyai-service-default has-bg-shaped">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="assets/images/icons/service-icon-02.svg" alt="Servece Icon">
                                        </div>
                                        <div class="description centered-shape">
                                            <h5 class="title">Connect everywhere</h5>
                                            <p class="desc">Lets users quickly find answers to their questions without having to search through multiple sources.</p>
                                            <a class="read-more-btn" href="#">Explore More <span><i class="fa-sharp fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="bg-shaped">
                                        <img src="assets/images/service/bg.png" alt="" class="bg">
                                        <img src="assets/images/service/bg-hover.png" alt="" class="bg-hover">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-single-layout">
                                <div class="rainbow-box-card card-style-default qodyai-service-default has-bg-shaped">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="assets/images/icons/service-icon-03.svg" alt="Servece Icon">
                                        </div>
                                        <div class="description centered-shape">
                                            <h5 class="title">Fast responding</h5>
                                            <p class="desc">Lets users quickly find answers to their questions without having to search through multiple sources.</p>
                                            <a class="read-more-btn" href="#">Explore More <span><i class="fa-sharp fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="bg-shaped">
                                        <img src="assets/images/service/bg.png" alt="" class="bg">
                                        <img src="assets/images/service/bg-hover.png" alt="" class="bg-hover">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--..:: End Service__Style--one Area  ::..-->

        <!--..:: Start Advanced Tab area ::..-->
        <div class="rainbow-advance-tab-area qodyai-bg-gradient rainbow-section-gap-big">
            <div class="container">
                <div class="html-tabs" data-tabs="true">
                    <div class="row row--30">
                        <div class="col-lg-12">
                            <div class="tab-content">
                                <div class="tab-pane fade show active advance-tab-content-1 right-top" id="home-3" role="tabpanel" aria-labelledby="home-tab-3">
                                    <div class="rainbow-splite-style">
                                        <div class="split-wrapper">
                                            <div class="row g-0 radius-10 align-items-center">
                                                <div class="col-lg-12 col-xl-5 col-12">
                                                    <div class="thumbnail">
                                                        <img class="radius" src="assets/images/split/split-1.png" alt="split Images">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-xl-7 col-12">
                                                    <div class="split-inner">
                                                        <div class="subtitle">
                                                            <span class="theme-gradient">How it work</span>
                                                        </div>
                                                        <h2 class="title sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="200">Connect with Al chatbot</h2>
                                                        <p class="description sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">Dentify the platform or interface through which you can access the chatbot. This could be a website, a messaging app, or a dedicated application.</p>
                                                        <div class="view-more-button mt--35 sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="400">
                                                            <a class="btn-default color-blacked" href="contact.php">Try It Now <i class="fa-sharp fa-light fa-arrow-right ml--5"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade advance-tab-content-1" id="profile-3" role="tabpanel" aria-labelledby="profile-tab-3">
                                    <div class="rainbow-splite-style">
                                        <div class="split-wrapper">
                                            <div class="row g-0 radius-10 align-items-center">
                                                <div class="col-lg-12 col-xl-5 col-12">
                                                    <div class="thumbnail">
                                                        <img class="radius" src="assets/images/split/split-4.png" alt="split Images">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-xl-7 col-12">
                                                    <div class="split-inner">
                                                        <div class="subtitle">
                                                            <span class="theme-gradient">Exploring Efficiency</span>
                                                        </div>
                                                        <h2 class="title sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="200">Streamline Your Workflow</h2>
                                                        <p class="description sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">Discover tools and techniques to optimize your workflow, making your tasks more efficient and manageable.</p>
                                                        <div class="view-more-button mt--35 sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="400">
                                                            <a class="btn-default color-blacked" href="contact.php">Try It Now <i class="fa-sharp fa-light fa-arrow-right ml--5"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade advance-tab-content-1" id="contact-3" role="tabpanel" aria-labelledby="contact-tab-3">
                                    <div class="rainbow-splite-style">
                                        <div class="split-wrapper">
                                            <div class="row g-0 radius-10 align-items-center">
                                                <div class="col-lg-12 col-xl-5 col-12">
                                                    <div class="thumbnail">
                                                        <img class="radius" src="assets/images/split/split-3.png" alt="split Images">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-xl-7 col-12">
                                                    <div class="split-inner">
                                                        <div class="subtitle">
                                                            <span class="theme-gradient">Navigating Cybersecurity</span>
                                                        </div>
                                                        <h2 class="title sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="200">Protecting Your Digital Presence</h2>
                                                        <p class="description sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">Gain insights into cybersecurity measures and strategies to safeguard your online identity and sensitive information.</p>
                                                        <div class="view-more-button mt--35 sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="400">
                                                            <a class="btn-default color-blacked" href="contact.php">Try It Now <i class="fa-sharp fa-light fa-arrow-right ml--5"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade advance-tab-content-1" id="explore-3" role="tabpanel" aria-labelledby="explore-tab-3">
                                    <div class="rainbow-splite-style">
                                        <div class="split-wrapper">
                                            <div class="row g-0 radius-10 align-items-center">
                                                <div class="col-lg-12 col-xl-5 col-12">
                                                    <div class="thumbnail">
                                                        <img class="radius" src="assets/images/split/split-5.png" alt="split Images">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-xl-7 col-12">
                                                    <div class="split-inner">
                                                        <div class="subtitle">
                                                            <span class="theme-gradient">Mastering Data Analysis</span>
                                                        </div>
                                                        <h2 class="title sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="200">Demystifying Data Analytics</h2>
                                                        <p class="description sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">Learn the fundamentals of data analysis, including tools and methodologies, to extract meaningful insights from raw data.</p>
                                                        <div class="view-more-button mt--35 sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="400">
                                                            <a class="btn-default color-blacked" href="contact.php">Try It Now <i class="fa-sharp fa-light fa-arrow-right ml--5"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt--60">
                            <div class="advance-tab-button advance-tab-button-1 right-top">
                                <ul class="nav nav-tabs tab-button-list" id="myTab-3" role="tablist">

                                    <li class="col-lg-3 nav-item" role="presentation">
                                        <a href="#" class="nav-link tab-button active" id="home-tab-3" data-bs-toggle="tab" data-bs-target="#home-3" role="tab" aria-controls="home-3" aria-selected="true">
                                            <div class="tab">
                                                <div class="count-text">
                                                    <span class="theme-gradient">01</span>
                                                </div>
                                                <h4 class="title">Connect with AI </h4>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="col-lg-3 nav-item" role="presentation">
                                        <a href="#" class="nav-link tab-button" id="profile-tab-3" data-bs-toggle="tab" data-bs-target="#profile-3" role="tab" aria-controls="profile-3" aria-selected="false">
                                            <div class="tab">
                                                <div class="count-text">
                                                    <span class="theme-gradient">02</span>
                                                </div>
                                                <h4 class="title">Streamline Workflow</h4>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="col-lg-3 nav-item" role="presentation">
                                        <a href="#" class="nav-link tab-button" id="contact-tab-3" data-bs-toggle="tab" data-bs-target="#contact-3" role="tab" aria-controls="contact-3" aria-selected="false">
                                            <div class="tab">
                                                <div class="count-text">
                                                    <span class="theme-gradient">03</span>
                                                </div>
                                                <h4 class="title">Cybersecurity</h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-lg-3 nav-item" role="presentation">
                                        <a href="#" class="nav-link tab-button" id="explore-tab-3" data-bs-toggle="tab" data-bs-target="#explore-3" role="tab" aria-controls="explore-3" aria-selected="false">
                                            <div class="tab">
                                                <div class="count-text">
                                                    <span class="theme-gradient">04</span>
                                                </div>
                                                <h4 class="title">Data Analysis</h4>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-shape">
                <img src="assets/images/bg/split-bg-shape.png" alt="Bg Shape">
            </div>
        </div>
        <!--..:: End Advanced Tab Area ::..-->


        <!--..:: Start Collabration-Style-One  ::..-->
        <div class="rainbow-collobration-area rainbow-section-gap-big">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle ">
                                <span class="theme-gradient">AI Collaboration</span>
                            </h4>
                            <h2 class="title mb--20">AI Chat app for seamless<br> collaboration</h2>
                            <a class="btn-default btn-large color-blacked" href="contact.php">Try It Now <i class="fa-sharp fa-light fa-arrow-right ml--5"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt--60">
                        <div class="collabration-image-section">
                            <img src="assets/images/split/split-2.png" alt="collabration-image">
                            <div class="logo-section">
                                <div class="center-logo">
                                    <img src="assets/images/split/split-2-logo.png" alt="Small Logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--..:: End Collabration-Style-One  ::..-->


        <!--..:: Start CTA Style-one Area  ::..-->
        <div class="rainbow-rn-cta">
            <div class="container">
                <div class="row row--0 align-items-center content-wrapper">
                    <div class="col-lg-8">
                        <div class="inner">
                            <div class="content text-left">
                                <h4 class="title sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="200">Join our aI Experts community</h4>
                                <p class="sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">Meet and learn from 80+ creators & companies who share how thay use AI to create better content at lightning speed.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="right-content">
                            <div class="call-to-btn text-start text-lg-end sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="400">
                                <div class="team-image">
                                    <img src="assets/images/cta-img/team-01.png" alt="Group Image">
                                </div>
                                <a class="btn-default" href="#">Join Now Today Free</a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-shape">
                        <img src="assets/images/cta-img/bg-shape-01.png" alt="BG Shape">
                    </div>
                </div>
            </div>
        </div>
        <!--..:: End CTA Style-one Area  ::..-->

        <!--..:: Pricing Part ::..-->
        <div class="qodyai-pricing-area wrapper rainbow-section-gap-big">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                            <h4 class="subtitle">
                                <span class="theme-gradient">Pricing</span>
                            </h4>
                            <h2 class="title w-600 mb--40">
                                Pricing plans for everyone
                            </h2>
                        </div>

                        <nav class="qodyai-tab">
                            <div class="tab-btn-grp nav nav-tabs text-center justify-content-center" id="nav-tab" role="tablist">
                                <button class="nav-link" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="false">
                                    Monthly
                                </button>
                                <button class="nav-link with-badge active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="true">
                                    Yearly
                                    <span class="rainbow-badge-card badge-border"
                            >-10%</span>
                                </button>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="tab-content p-0 bg-transparent border-0 border bg-light" id="nav-tabContent">
                    <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row row--15 mt_dec--40">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 mt--40">
                                <div class="rainbow-pricing style-qodyai">
                                    <div class="pricing-table-inner">
                                        <div class="pricing-top">
                                            <div class="pricing-header">
                                                <div class="icon">
                                                    <i class="fa-regular fa-circle-radiation"></i>
                                                </div>
                                                <h4 class="title color-var-one">Basic</h4>
                                                <p class="subtitle">For large teams & corportaions</p>
                                                <div class="pricing">
                                                    <span class="price-text">Free</span>
                                                </div>
                                            </div>
                                            <div class="pricing-body">
                                                <div class="features-section">
                                                    <h6>Features</h6>
                                                    <ul class="list-style--1">
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 7,700
                                                            3-5 day turnarouord
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 6+
                                                            Naive development
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 5+
                                                            Task delivered one-by-one
                                                        </li>
                                                        <li>
                                                            <i class="fa-sharp fa-regular fa-minus-circle"></i> AI Blog
                                                            Updates via dashboard & slack
                                                        </li>
                                                        <li>
                                                            <i class="fa-sharp fa-regular fa-minus-circle"></i> Advance
                                                            Updates via dashboard & slack
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a class="btn-default btn-border" href="#">Get Started</a>
                                            <p class="bottom-text">Limited Offer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 mt--40">
                                <div class="rainbow-pricing style-qodyai active">
                                    <div class="pricing-table-inner">
                                        <div class="pricing-top">
                                            <div class="pricing-header">
                                                <div class="icon">
                                                    <i class="fa-sharp fa-regular fa-flower"></i>
                                                </div>
                                                <h4 class="title color-var-two">Premium</h4>
                                                <p class="subtitle">For large teams & corportaions</p>
                                                <div class="pricing">
                                                    <span class="price-text">$60.50</span>
                                                    <span class="text">/Per Month</span>

                                                </div>
                                            </div>
                                            <div class="pricing-body">
                                                <div class="features-section has-show-more">
                                                    <h6>Features</h6>
                                                    <ul class="list-style--1 has-show-more-inner-content">
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 12,700
                                                            7-9 day turnarouord
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 6+
                                                            Naive development
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 5+
                                                            Task delivered one-by-one
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 7,700
                                                            3-5 day turnarouord
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 6+
                                                            Naive development
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 5+
                                                            Task delivered one-by-one
                                                        </li>
                                                        <li>
                                                            <i class="fa-sharp fa-regular fa-minus-circle"></i> AI Blog
                                                            Updates via dashboard & slack
                                                        </li>
                                                        <li>
                                                            <i class="fa-sharp fa-regular fa-minus-circle"></i> Advance
                                                            Updates via dashboard & slack
                                                        </li>
                                                    </ul>
                                                    <div class="rbt-show-more-btn">Show More</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a class="btn-default color-blacked" href="#">Get Started</a>
                                            <p class="bottom-text">Limited Offer</p>
                                        </div>
                                    </div>
                                    <div class="feature-badge">Best Offer</div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 mt--40">
                                <div class="rainbow-pricing style-qodyai">
                                    <div class="pricing-table-inner">
                                        <div class="pricing-top">
                                            <div class="pricing-header">
                                                <div class="icon">
                                                    <i class="fa-sharp fa-regular fa-waveform-lines"></i>
                                                </div>
                                                <h4 class="title color-var-three">Enterprise</h4>
                                                <p class="subtitle">For large teams & corportaions</p>
                                                <div class="pricing">
                                                    <span class="price-text">$80.50</span>
                                                    <span class="text">/Per Month</span>
                                                </div>
                                            </div>
                                            <div class="pricing-body">
                                                <div class="features-section has-show-more">
                                                    <h6>Features</h6>
                                                    <ul class="list-style--1 has-show-more-inner-content">
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 15,700
                                                            15-30 day turnarouord
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 6+
                                                            Naive development
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 5+
                                                            Task delivered one-by-one
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 7,700
                                                            3-5 day turnarouord
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 6+
                                                            Naive development
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 5+
                                                            Task delivered one-by-one
                                                        </li>
                                                        <li>
                                                            <i class="fa-sharp fa-regular fa-minus-circle"></i> AI Blog
                                                            Updates via dashboard & slack
                                                        </li>
                                                        <li>
                                                            <i class="fa-sharp fa-regular fa-minus-circle"></i> Advance
                                                            Updates via dashboard & slack
                                                        </li>
                                                    </ul>
                                                    <div class="rbt-show-more-btn">Show More</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a class="btn-default btn-border" href="#">Get Started</a>
                                            <p class="bottom-text">Limited Offer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade active show" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row row--15 mt_dec--40">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 mt--40">
                                <div class="rainbow-pricing style-qodyai">
                                    <div class="pricing-table-inner">
                                        <div class="pricing-top">
                                            <div class="pricing-header">
                                                <div class="icon">
                                                    <i class="fa-regular fa-circle-radiation"></i>
                                                </div>
                                                <h4 class="title color-var-one">Basic</h4>
                                                <p class="subtitle">For large teams & corportaions</p>
                                                <div class="pricing">
                                                    <span class="price-text">Free</span>
                                                </div>
                                            </div>
                                            <div class="pricing-body">
                                                <div class="features-section">
                                                    <h6>Features</h6>
                                                    <ul class="list-style--1">
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 7,700
                                                            3-5 day turnarouord
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 6+
                                                            Naive development
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 5+
                                                            Task delivered one-by-one
                                                        </li>
                                                        <li>
                                                            <i class="fa-sharp fa-regular fa-minus-circle"></i> AI Blog
                                                            Updates via dashboard & slack
                                                        </li>
                                                        <li>
                                                            <i class="fa-sharp fa-regular fa-minus-circle"></i> Advance
                                                            Updates via dashboard & slack
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a class="btn-default btn-border" href="#">Get Started</a>
                                            <p class="bottom-text">Limited Offer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 mt--40">
                                <div class="rainbow-pricing style-qodyai active">
                                    <div class="pricing-table-inner">
                                        <div class="pricing-top">
                                            <div class="pricing-header">
                                                <div class="icon">
                                                    <i class="fa-sharp fa-regular fa-flower"></i>
                                                </div>
                                                <h4 class="title color-var-two">Premium</h4>
                                                <p class="subtitle">For large teams & corportaions</p>
                                                <div class="pricing">
                                                    <span class="price-text">$499.00</span>
                                                    <span class="text">/Per Year</span>

                                                </div>
                                            </div>
                                            <div class="pricing-body">
                                                <div class="features-section has-show-more">
                                                    <h6>Features</h6>
                                                    <ul class="list-style--1 has-show-more-inner-content">
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 12,700
                                                            7-9 day turnarouord
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 6+
                                                            Naive development
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 5+
                                                            Task delivered one-by-one
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 7,700
                                                            3-5 day turnarouord
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 6+
                                                            Naive development
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 5+
                                                            Task delivered one-by-one
                                                        </li>
                                                        <li>
                                                            <i class="fa-sharp fa-regular fa-minus-circle"></i> AI Blog
                                                            Updates via dashboard & slack
                                                        </li>
                                                        <li>
                                                            <i class="fa-sharp fa-regular fa-minus-circle"></i> Advance
                                                            Updates via dashboard & slack
                                                        </li>
                                                    </ul>
                                                    <div class="rbt-show-more-btn">Show More</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a class="btn-default color-blacked" href="#">Get Started</a>
                                            <p class="bottom-text">Limited Offer</p>
                                        </div>
                                    </div>
                                    <div class="feature-badge">Best Offer</div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 mt--40">
                                <div class="rainbow-pricing style-qodyai">
                                    <div class="pricing-table-inner">
                                        <div class="pricing-top">
                                            <div class="pricing-header">
                                                <div class="icon">
                                                    <i class="fa-sharp fa-regular fa-waveform-lines"></i>
                                                </div>
                                                <h4 class="title color-var-three">Enterprise</h4>
                                                <p class="subtitle">For large teams & corportaions</p>
                                                <div class="pricing">
                                                    <span class="price-text">$599.00</span>
                                                    <span class="text">/Per Year</span>
                                                </div>
                                            </div>
                                            <div class="pricing-body">
                                                <div class="features-section has-show-more">
                                                    <h6>Features</h6>
                                                    <ul class="list-style--1 has-show-more-inner-content">
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 15,700
                                                            15-30 day turnarouord
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 6+
                                                            Naive development
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 5+
                                                            Task delivered one-by-one
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 7,700
                                                            3-5 day turnarouord
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 6+
                                                            Naive development
                                                        </li>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i> 5+
                                                            Task delivered one-by-one
                                                        </li>
                                                        <li>
                                                            <i class="fa-sharp fa-regular fa-minus-circle"></i> AI Blog
                                                            Updates via dashboard & slack
                                                        </li>
                                                        <li>
                                                            <i class="fa-sharp fa-regular fa-minus-circle"></i> Advance
                                                            Updates via dashboard & slack
                                                        </li>
                                                    </ul>
                                                    <div class="rbt-show-more-btn">Show More</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a class="btn-default btn-border" href="#">Get Started</a>
                                            <p class="bottom-text">Limited Offer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--..:: Service Area ::..-->
        <div class="qodyai-service-area rainbow-section-gap">
            <div class="container">
                <div class="row row--15 service-wrapper">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-duration="700">
                        <div class="service service__style--1 qodyai-style text-center">
                            <div class="icon">
                                <img src="assets/images/service/service-icon-01.png" alt="Servece Image">
                            </div>
                            <div class="content">
                                <h4 class="title w-600">100% No-Risk, Money Back Guarantee!</h4>
                                <p class="description b1 mb--0">Refunds will be issued within period of 14 days from the purchase date</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <div class="service service__style--1 qodyai-style text-center">
                            <div class="icon">
                                <img src="assets/images/service/service-icon-02.png" alt="Servece Image">
                            </div>
                            <div class="content">
                                <h4 class="title w-600">Upgrade or Cancel Anytime</h4>
                                <p class="description b1 mb--0">Passages there are many variations variations of of Lorem Ipsum available.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                        <div class="service service__style--1 qodyai-style text-center">
                            <div class="icon">
                                <img src="assets/images/service/service-icon-03.png" alt="Servece Image">
                            </div>
                            <div class="content">
                                <h4 class="title w-600">Not sure yet, try the free version</h4>
                                <p class="description b1 mb--0">Refunds will be issued within period of 14 days from the purchase date</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--..:: Start Testimonial Area  ::..-->
        <div class="rainbow-testimonial-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-left" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                            <h4 class="subtitle">
                                <span class="theme-gradient">Assisting individuals</span>
                            </h4>
                            <h2 class="title mb--60">
                                The opinions of the community
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="service-wrapper rainbow-service-slider-actvation slick-grid-15 rainbow-slick-dot rainbow-gradient-arrows">
                            <div class="slide-single-layout">
                                <div class="rainbow-box-card active card-style-default testimonial-style-defalt has-bg-shaped">
                                    <div class="inner">
                                        <div class="rating">
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <p class="description">GYNTEKBUSINESS has become such an integral part of our work! By putting our</p>
                                            <div class="bottom-content">
                                                <div class="meta-info-section">
                                                    <p class="title-text">Guy Hawkins</p>
                                                    <p class="desc">Nursing Assistant</p>
                                                    <div class="desc-img">
                                                        <img src="assets/images/brand/brand-t.png" alt="Brand Image">
                                                    </div>
                                                </div>
                                                <div class="meta-img-section">
                                                    <a class="btn-default rounded-player style-two xs-size popup-video" href="https://www.youtube.com/watch?v=ikEdN260zRg">
                                                        <span><i class="fa-duotone fa-play"></i></span>
                                                    </a>
                                                    <a class="image" href="#">
                                                        <img src="assets/images/team/team-02sm.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-shape">
                                        <img src="assets/images/service/bg-testimonial.png" alt="" class="bg">
                                        <img src="assets/images/service/bg-testimonial-hover.png" alt="" class="bg-hover">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-single-layout">
                                <div class="rainbow-box-card card-style-default testimonial-style-defalt has-bg-shaped">
                                    <div class="inner">
                                        <div class="rating">
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <p class="description">GYNTEKBUSINESS has become such an integral part of our work! By putting our</p>
                                            <div class="bottom-content">
                                                <div class="meta-info-section">
                                                    <p class="title-text">Guy Hawkins</p>
                                                    <p class="desc">Nursing Assistant</p>
                                                    <div class="desc-img">
                                                        <img src="assets/images/brand/brand-t.png" alt="Brand Image">
                                                    </div>
                                                </div>
                                                <div class="meta-img-section">
                                                    <a class="btn-default rounded-player style-two xs-size popup-video" href="https://www.youtube.com/watch?v=ikEdN260zRg">
                                                        <span><i class="fa-duotone fa-play"></i></span>
                                                    </a>
                                                    <a class="image" href="#">
                                                        <img src="assets/images/team/team-02sm.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-shape">
                                        <img src="assets/images/service/bg-testimonial.png" alt="" class="bg">
                                        <img src="assets/images/service/bg-testimonial-hover.png" alt="" class="bg-hover">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-single-layout">
                                <div class="rainbow-box-card card-style-default testimonial-style-defalt has-bg-shaped">
                                    <div class="inner">
                                        <div class="rating">
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <p class="description">GYNTEKBUSINESS has become such an integral part of our work! By putting our</p>
                                            <div class="bottom-content">
                                                <div class="meta-info-section">
                                                    <p class="title-text">Guy Hawkins</p>
                                                    <p class="desc">Nursing Assistant</p>
                                                    <div class="desc-img">
                                                        <img src="assets/images/brand/brand-t.png" alt="Brand Image">
                                                    </div>
                                                </div>
                                                <div class="meta-img-section">
                                                    <a class="btn-default rounded-player style-two xs-size small-size popup-video" href="https://www.youtube.com/watch?v=ikEdN260zRg">
                                                        <span><i class="fa-duotone fa-play"></i></span>
                                                    </a>
                                                    <a class="image" href="#">
                                                        <img src="assets/images/team/team-02sm.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-shape">
                                        <img src="assets/images/service/bg-testimonial.png" alt="" class="bg">
                                        <img src="assets/images/service/bg-testimonial-hover.png" alt="" class="bg-hover">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-single-layout">
                                <div class="rainbow-box-card active card-style-default testimonial-style-defalt has-bg-shaped">
                                    <div class="inner">
                                        <div class="rating">
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <p class="description">GYNTEKBUSINESS has become such an integral part of our work! By putting our</p>
                                            <div class="bottom-content">
                                                <div class="meta-info-section">
                                                    <p class="title-text">Guy Hawkins</p>
                                                    <p class="desc">Nursing Assistant</p>
                                                    <div class="desc-img">
                                                        <img src="assets/images/brand/brand-t.png" alt="Brand Image">
                                                    </div>
                                                </div>
                                                <div class="meta-img-section">
                                                    <a class="btn-default rounded-player style-two xs-size popup-video" href="https://www.youtube.com/watch?v=ikEdN260zRg">
                                                        <span><i class="fa-duotone fa-play"></i></span>
                                                    </a>
                                                    <a class="image" href="#">
                                                        <img src="assets/images/team/team-02sm.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-shape">
                                        <img src="assets/images/service/bg-testimonial.png" alt="" class="bg">
                                        <img src="assets/images/service/bg-testimonial-hover.png" alt="" class="bg-hover">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-single-layout">
                                <div class="rainbow-box-card card-style-default testimonial-style-defalt has-bg-shaped">
                                    <div class="inner">
                                        <div class="rating">
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <p class="description">GYNTEKBUSINESS has become such an integral part of our work! By putting our</p>
                                            <div class="bottom-content">
                                                <div class="meta-info-section">
                                                    <p class="title-text">Guy Hawkins</p>
                                                    <p class="desc">Nursing Assistant</p>
                                                    <div class="desc-img">
                                                        <img src="assets/images/brand/brand-t.png" alt="Brand Image">
                                                    </div>
                                                </div>
                                                <div class="meta-img-section">
                                                    <a class="btn-default rounded-player style-two xs-size popup-video" href="https://www.youtube.com/watch?v=ikEdN260zRg">
                                                        <span><i class="fa-duotone fa-play"></i></span>
                                                    </a>
                                                    <a class="image" href="#">
                                                        <img src="assets/images/team/team-02sm.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-shape">
                                        <img src="assets/images/service/bg-testimonial.png" alt="" class="bg">
                                        <img src="assets/images/service/bg-testimonial-hover.png" alt="" class="bg-hover">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-single-layout">
                                <div class="rainbow-box-card card-style-default testimonial-style-defalt has-bg-shaped">
                                    <div class="inner">
                                        <div class="rating">
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                            <a href="#rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <p class="description">GYNTEKBUSINESS has become such an integral part of our work! By putting our</p>
                                            <div class="bottom-content">
                                                <div class="meta-info-section">
                                                    <p class="title-text">Guy Hawkins</p>
                                                    <p class="desc">Nursing Assistant</p>
                                                    <div class="desc-img">
                                                        <img src="assets/images/brand/brand-t.png" alt="Brand Image">
                                                    </div>
                                                </div>
                                                <div class="meta-img-section">
                                                    <a class="btn-default rounded-player style-two xs-size small-size popup-video" href="https://www.youtube.com/watch?v=ikEdN260zRg">
                                                        <span><i class="fa-duotone fa-play"></i></span>
                                                    </a>
                                                    <a class="image" href="#">
                                                        <img src="assets/images/team/team-02sm.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-shape">
                                        <img src="assets/images/service/bg-testimonial.png" alt="" class="bg">
                                        <img src="assets/images/service/bg-testimonial-hover.png" alt="" class="bg-hover">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--..:: End Testimonial Area  ::..-->

        <!--..:: Start Brand Area ::..-->
        <div class="rainbow-brand-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title rating-title text-center sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <div class="rating">
                                <a href="#rating">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                </a>
                                <a href="#rating">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                </a>
                                <a href="#rating">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                </a>
                                <a href="#rating">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                </a>
                                <a href="#rating">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                </a>
                            </div>
                            <p class="subtitle mb--0">Based on 20,000+ reviews on</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt--10">
                        <ul class="brand-list brand-style-2">
                            <li><a href="#"><img src="assets/images/brand/brand-01.png" alt="Brand Image"></a></li>
                            <li><a href="#"><img src="assets/images/brand/brand-02.png" alt="Brand Image"></a></li>
                            <li><a href="#"><img src="assets/images/brand/brand-03.png" alt="Brand Image"></a></li>
                            <li><a href="#"><img src="assets/images/brand/brand-04.png" alt="Brand Image"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bg-shape-left">
                <img src="assets/images/bg/bg-shape-two.png" alt="Bg shape">
            </div>
        </div>

        <!--..:: Start CTA Area ::..-->
        <div class="rainbow-cta-area rainbow-section-gap rainbow-section-gapBottom-big">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="qodyai-cta">
                            <div class="inner">
                                <div class="content-left">
                                    <div class="section-title text-left" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                                        <h4 class="subtitle">
                                            <span class="theme-gradient">Get Started with Pixcels</span>
                                        </h4>
                                        <h2 class="title w-600 mb--20">
                                            Experience Products in AI
                                        </h2>
                                        <p class="description b1">
                                            Based on the conversation with the AI chatbot, you will receive <br> personalized recommendations.
                                        </p>
                                    </div>
            <!-- Needs Assessment Prompt -->
                    <div class="needs-assessment">
                    <p>Want more for your business? Complete an assessment to get everything you need to save money and scale your business.</p>
                    <a href="<?php echo site_url('/needs-assessment-access'); ?>" class="btn-primary">
                    Start Assessment
                    </a>
                   </div>

                </div>

            </div>
        </div>

    </div>

<!--..::New Chat Section model HTML ::..-->
<?php get_template_part('template-parts/newchat-model'); ?>

<!--..::Like Section model HTML ::..-->
<?php get_template_part('template-parts/like_section'); ?>

<!--..::DisLike Section model HTML ::..-->
<?php get_template_part('template-parts/dislike'); ?>

<!--..::Share Section model HTML ::..-->
<?php get_template_part('template-parts/share'); ?>

</main>

<?php get_footer(); ?>

