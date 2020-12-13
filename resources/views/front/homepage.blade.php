@include('front.layouts.head');
<body id="top">

    <!-- pageheader
    ================================================== -->
    <section class="s-pageheader s-pageheader--home">

        @include('front.layouts.navbar');

        <div class="pageheader-content row">
            <div class="col-full">

                <div class="featured">
                    <div class="featured__column featured__column--big">
                        <div class="entry" style="background-image:url('{{$bannerBig->banner_file}}');">
                            
                            <div class="entry__content">

                                <h1><a href="#0" title="">{{$bannerBig->banner_text}}</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="front/images/user/berat.jpg" alt="" height="50">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">Berat Aras</a></li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->
                    </div> <!-- end featured__big -->

                    <div class="featured__column featured__column--small">
                        @foreach($banner as $banner)
                        @if($banner->banner_type == "small")
                        <div class="entry" style="background-image:url('{{$banner->banner_file}}');">
                            
                            <div class="entry__content">

                                <h1><a href="#0" title="">{{$banner->banner_text}}</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="front/images/user/berat.jpg" alt="" height="50">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">Berat Aras</a></li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                          
                        </div> <!-- end entry -->
                        @endif
                        @endforeach

                    </div> <!-- end featured__small -->
                </div> <!-- end featured -->

            </div> <!-- end col-full -->
        </div> <!-- end pageheader-content row -->

    </section> <!-- end s-pageheader -->


    <!-- s-content
    ================================================== -->
    @include('front.widgets.GithubWidget')

    @include('front.widgets.BionlukCommentWidget')


    <!-- s-extra
    ================================================== -->
    


    @include('front.layouts.footer');