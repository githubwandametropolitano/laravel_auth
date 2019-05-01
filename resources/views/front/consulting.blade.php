@extends('front.layout')

@section('main')
    <section class="slewedBox">
        <div class="container1" style="margin-top:200px;">
            <div class="box" style="height:400px;width:100%;margin:0px auto;padding:0px;background-color:transparent;">
                <center><img src="front/img/mm.png" height="400px"  width="800px" class="img-fluid wow fadeIn" data-wow-duration="2000ms" data-wow-delay="0.3"></center>
            </div>

        </div>
    </section>
  

    <section id="get-started" class="padd-section text-center wow fadeInUp">
        <div class="container" style="margin-top:-120px;">
            <div class="section-title text-center">

                <h2 style="letter-spacing:4px;color: #7f0964;font-weight:bold;">CONSULTING</h2>
                <hr style="width:120px;border:1px solid black;margin-top:5px;">

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cir" style="height:300px;width:300px;border-radius:50%;margin:0px auto;padding:0px;background-image:url('front/img/f.jpg');background-size:cover;">
                        <div class="smcir" style="height:120px;width:120px;border-radius:100%;position:absolute;top:230px;background-image:url('front/img/c.png');background-size:cover;">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" id="jj">                

                    <p>Have a team but need a blue print? Let us help guide the way only when you need it and support your growth with the latest concepts, trends and strategies. Consulting services include:</p><br>
                    <ul style="float:left;">
                        <li style="text-align:left;">landing page design and implementation</li>
                        <li style="text-align:left;">webdesign </li>
                        <li style="text-align:left;">social media ad consulting</li><br>
                        <h4 style="line-height:30px;text-align:left;">Consulting services start at<span style="font-size:30px;color:#7f0964;"> $75 </span>per hour.</h4>
                    </ul>
                </div>
            </div>
        </div>
      
    </section>

<div class="box2" style="height:auto;width:100%;background-color:#f8f9f9;">


    <section id="testimonials" class="padd-section text-center wow fadeInUp">
        <div class="container">
            <div class="row justify-content-center" >

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