@extends('layouts.app')

@section('content')
    
    <
    <!--Section-->
    <section>
        <div class="sptb-2 bannerimg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white py-7">
                        <h1 class="">Contact Us</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Contact Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Section-->
</div>
</div>

<!-- Shape Start -->
<div class="relative">
<div class="shape overflow-hidden text-white">
    <svg viewBox="0 0 2880 48" fill="none" xmsns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="#fff"></path>
    </svg>
</div>
</div>
<!--Shape End-->

<!--Contact-->
<div class="sptb bg-white contacts">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row text-white">
                <div class="col-lg-3 col-md-12">
                    <div class="card border-0 mb-lg-0">
                        <div class="support-service mb-0  text-center bg-primary">
                            <i class="fa fa-phone"></i>
                            <h5>+91 900-424-1563</h5>
                            <P>Free Support!</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="card border-0 mb-lg-0">
                        <div class="support-service mb-0 text-center bg-secondary">
                            <i class="fa fa-clock-o"></i>
                            <h5>Mon-Sat(10:00-19:00)</h5>
                            <p>Working Hours!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="card border-0 mb-lg-0">
                        <div class="support-service mb-0 text-center bg-success">
                            <i class="fa fa-map-marker"></i>
                            <h5>Bangalore</h5>
                            <p> mumbai, IND</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="card border-0 mb-0">
                        <div class="support-service mb-0 text-center bg-orange">
                            <i class="fa fa-envelope-o"></i>
                            <h5>adnanvasta@gmail.com</h5>
                            <p>Support us!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--Contact-->

<!--Contact-->
<div class="sptb">
<div class="container">
    <div class="row">
        <div class="col-lg-7 col-xl-7 col-md-12 mx-auto">
            <div class="card mb-0 single-page customerpage contact">
                <div class="card-body wrapper wrapper2 box-shadow-0">
                    <div class="mb-6 text-dark">
                        <h5 class="fs-25 font-weight-semibold">Contact Us</h5>
                        <p class="fs-16">If you are going to use a passage of Lorem Ipsum</p>
                    </div>
                    @if(Session::has('message_sent'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('message_sent')}}
                    </div>
                    @endif
                    <form method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data" class="" tabindex="500">
                        @csrf
                        <div class="name">
                            <label>Name</label>
                            <input type="text" name="name">
                        </div>
                        <div class="mail">
                            <label>Mail or Username</label>
                            <input type="email" name="mail">
                        </div>
                        <div class="Message">
                            <label>Message</label>
                            <textarea name="msg" rows="6" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit
                           
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--/Contact-->

<!--Section-->
<section class="cover-image sptb bg-background-1" data-bs-image-src="assets/images/banners/banner5.jpg">
<div class="content-text mb-0">
    <div class="container">
        <div class="text-white">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mt-0">
                        <h1 class="mb-2 font-weight-semibold">Subscribe</h1>
                        <p class="fs-18 mb-0">Many desktop publishing packages and web page editors.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt-4">
                        <div class="input-group sub-input mt-1">
                            <input type="text" class="form-control input-lg  br-ts-7  br-bs-7" placeholder="Enter your Email">
                            <div class="input-group-text ">
                                <button type="button" class="btn btn-secondary btn-lg br-te-7  br-be-7">
                                    Subscribe
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--/Section-->

<!--Section-->
<div class="position-relative">
<div class="shape overflow-hidden bottom-footer-shape">
    <svg viewBox="0 0 2880 48" fill="none" xmsns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
    </svg>
</div>
</div>
@endsection