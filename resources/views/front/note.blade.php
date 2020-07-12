@include('front.layouts.head')

<body id="top" style="background-color: #F2F2F2">

    <!-- pageheader
    ================================================== -->
    <div class="s-pageheader">

        @include('front.layouts.navbar')

    </div> <!-- end s-pageheader -->


    <!-- styles
    ================================================== -->
    <section id="styles" class="s-styles">
        <div class="row narrow section-intro add-bottom text-center">

            <div class="col-twelve tab-full">

                <h1>Notlar</h1>

                <p class="lead">
                    Beğendiğim, sevdiğim, saydığım, cuk diye oturan sözler ve sürüm notlarım.
                </p>

            </div>

        </div>
        <div class="row">

            <div class="col-six tab-full">
                @foreach($notes as $note)
                @if($note->note_type == "note")
                    <h3>{{$note->note_value}}</h3>

                    <p class="drop-cap"> {{$note->note_description}} </p>
                @endif
                @endforeach
            </div>
            
            <div class="col-six tab-full">
                <h3>Sözler</h3>
                @foreach($notes as $note)
                @if($note->note_type == "promise")
                    <blockquote cite="http://where-i-got-my-info-from.com">
                        <p>
                            {{$note->note_description}}
                        </p>
                        <cite>
                            <a href="#">{{$note->note_value}}</a>
                        </cite>
                    </blockquote>
                @endif
                @endforeach
            </div>

        </div> <!-- end row -->


        {{-- <div class="row half-bottom">

            <div class="col-twelve">

                    <h3>Stats Tabs</h3>

                <ul class="stats-tabs">
                    <li><a href="#">1,234 <em>Sasuke</em></a></li>
                    <li><a href="#">567 <em>Hinata</em></a></li>
                    <li><a href="#">23,456 <em>Naruto</em></a></li>
                    <li><a href="#">3,456 <em>Kiba</em></a></li>
                    <li><a href="#">456 <em>Shikamaru</em></a></li>
                    <li><a href="#">26 <em>Sakura</em></a></li>
                    </ul>

            </div>

        </div> <!-- end row --> --}}

    </section> <!-- end styles -->


    <!-- s-extra
    ================================================== -->
    <section class="s-extra">

        <div class="row top">

            <div class="col-eight md-six tab-full popular">
                <h3>Popular Posts</h3>

                <div class="block-1-2 block-m-full popular__posts">
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/wheel-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">Visiting Theme Parks Improves Your Health.</a></h5>
                        <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-19">Dec 19, 2017</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/shutterbug-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">Key Benefits Of Family Photography.</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-18">Dec 18, 2017</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/cookies-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">Absolutely No Sugar Oatmeal Cookies.</a></h5>
                        <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-16">Dec 16, 2017</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/beetle-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">Throwback To The Good Old Days.</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-16">Dec 16, 2017</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/tulips-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">10 Interesting Facts About Caffeine.</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-14">Dec 14, 2017</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/salad-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">Healthy Mediterranean Salad Recipes</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-12">Dec 12, 2017</time></span>
                        </section>
                    </article>
                </div> <!-- end popular_posts -->
            </div> <!-- end popular -->
            
            <div class="col-four md-six tab-full about">
                <h3>About Philosophy</h3>

                <p>
                Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                </p>

                <ul class="about__social">
                    <li>
                        <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    </li>
                </ul> <!-- end header__social -->
            </div> <!-- end about -->

        </div> <!-- end row -->


    </section> <!-- end s-extra -->


    <!-- s-footer
    ================================================== -->
