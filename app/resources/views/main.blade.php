@extends('base')

@section('title' , 'My site')

@sectin ('about', 'About us')

@section('content');
<!-- page container -->
<div class="container page-container">
        <div class="col-md-10 col-lg-8 m-auto">
            <h6 class="title mb-4">Explore The World</h6>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
        </div>  

        <!-- row -->
        <div class="row mb-4">
            <div class="col-md-4">
                <a href="javascript:void(0)" class="overlay-img">
                    <img src="assets/imgs/img-1.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, weber Landing page">  
                    <div class="overlay"></div> 
                    <div class="des">
                        <h1 class="title">Excepteur sint</h1>
                        <h6 class="subtitle">magna aliqua</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>          
                </a>
            </div>
            <div class="col-md-4">
                <a href="javascript:void(0)" class="overlay-img">
                    <img src="assets/imgs/img-2.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, weber Landing page">  
                    <div class="overlay"></div> 
                    <div class="des">
                        <h1 class="title">Nostrud exercitation </h1>
                        <h6 class="subtitle">nulla pariatur</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>          
                </a>
            </div>
            <div class="col-md-4">
                <a href="javascript:void(0)" class="overlay-img">
                    <img src="assets/imgs/img-3.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, weber Landing page">  
                    <div class="overlay"></div> 
                    <div class="des">
                        <h1 class="title">Excepteur sint</h1>
                        <h6 class="subtitle">magna aliqua</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>          
                </a>
            </div>          
        </div><!-- end of row -->

        <a href="#">Load More <i class="ti-angle-double-right angle"></i></a>


        <div class="col-md-10 col-lg-8 m-auto">
            <h6 class="title mb-4 mt-5 pt-5">The Journal</h6>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
        </div>

        <!-- row -->
        <div class="row mb-5">
            <div class="col-md-6">
                <a href="javascript:void(0)" class="card">
                    <img src="assets/imgs/blog-1.jpg" class="card-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, weber Landing page">
                    <div class="card-body">
                        <h6 class="card-subtitle">30 June, 2018</h6>
                        <h3 class="card-title">Eiusmod
                        tempor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>                  
                </a>
            </div>  
            <div class="col-md-6">
                <a href="javascript:void(0)" class="card">
                    <img src="assets/imgs/blog-2.jpg" class="card-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, weber Landing page">
                    <div class="card-body">
                        <h6 class="card-subtitle">29 June, 2018</h6>
                        <h3 class="card-title">Ut minim veniam</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>                  
                </a>
            </div>  
        </div><!-- end of row -->

        <a href="#">All Posts <i class="ti-angle-double-right angle"></i></a>

    </div> <!-- end of page container -->

@endsection;