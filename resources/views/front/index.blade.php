@extends('front.layout')

@section('main')
<section class="slewedBox">
    <div class="container1" style="margin-top:200px;">
        <div class="box" style="height:400px;width:100%;margin:0px auto;padding:0px;background-color:transparent;">
            <center><img src="{{asset('front/img/cc.gif')}}" height="400px" width="330px" class="img-fluid wow fadeIn" data-wow-duration="2000ms" data-wow-delay="0.3"></center>
        </div>
    </div>
</section>


<section id="get-started" class="padd-section text-center wow fadeInUp page-scroll">
    <div class="container" style="margin-top:-80px;">
        <div class="section-title text-center">

            <h2 style="letter-spacing:4px;color: #7f0964;font-weight:bold;">SIRIVISA CREATIVE</h2>
            <hr style="width:120px;border:1px solid black;margin-top:5px;">

        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-6 col-lg-4">
                <div class="feature-block">

                    <img src="{{asset('front/img/a.png')}}" alt="img" class="img-fluid" style="height:80px;">
                    <h4 style="margin-top:10px;color: #7f0964;">Social Media Management</h4>
                    <p> Expert help with your social media at a fraction of the cost.</p>
                    <a href="content.html">read more</a>

                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-block">

                    <img src="{{asset('front/img/b.png')}}" alt="img" class="img-fluid" style="height:80px;">
                    <h4 style="margin-top:10px;color: #7f0964;">Content Creation</h4>
                    <p> Let us lend a hand with our creative services and develop engaging content that will elevate your brand.
                    </p>
                    <a href="creative.html">read more</a>

                </div>
            </div>

            <div class="col-md-6 col-lg-4" style="margin:0px auto;padding:0px;">
                <div class="feature-block">

                    <img src="{{asset('front/img/c.png')}}" alt="img" class="img-fluid" style="height:80px;">
                    <h4 style="margin-top:10px;color: #7f0964;">Creative Consulting</h4>
                    <p>Get the help you need with your marketing efforts from a friendly team of specialists!
                    </p>
                    <a href="Consulting.html">read more</a>

                </div>
            </div>
        </div>
    </div>
    <hr>
    <section class="padd-section text-center wow fadeInUp">
        <div class="container">

            <h2 id="mu" class="wow pulse" data-wow-iteration="infinite" data-wow-duration="800ms">Unsure where to start?</h2>
            <hr style="width:120px;border:1px solid black;margin-bottom:40px">
            <p class="separator" style="text-transform:none;"> Let us help narrow in what you truly need to
                <br> grow your brand. <a href="contact.html" style="text-decoration:none;"><Span style="color:#7f0964;font-weight:bold">Contact
              Us</Span></a> today to speak directly to us.</p>
        </div>
        </div>
    </section>
</section>

<div class="box2" style="height:auto;width:100%;background-color:#f8f9f9;">
    <section id="testimonials" class="padd-section text-center wow fadeInUp">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-8 col-lg-6">

                    <div class="testimonials-content" style="background-color:white;">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">

                                <div class="carousel-item  active">
                                    <div class="top-top">

                                        <h2>What our customers are saying</h2>
                                        <p>Working with the creative team was really easy and fun! They were able to give me a really competitive rate and captured my brand and products perfectly. Really happy to be able to depend on them to help create content for me consistently.</p>
                                        <h4>Jessica T.<span>Owner</span></h4>

                                    </div>
                                </div>

                                <div class="carousel-item ">
                                    <div class="top-top">

                                        <h2>What our customers are saying</h2>
                                        <p>Siri helped build a campaign that was effective in reaching our goals while Andie and the creative team executed on our vision within the short timeframe we provided. A wonderful overall experience!</p>
                                        <h4>Kenneth Y.<span>Director, V3 Electric</span></h4>

                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="top-top">

                                        <h2>What our customers are saying</h2>
                                        <p>It's been a pleasure working with Siri and her team. They have been an integral part in helping me get my business off the ground. Their communication is spot on, have an extremely creative eye and are super collaborative. Your brand is in good hands with Siri!</p>
                                        <h4>Nitasha S.<span>Founder, Unboxd</span></h4>

                                    </div>
                                </div>

                            </div>

                            <div class="btm-btm">

                                <ul class="list-unstyled carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>
@endsection
