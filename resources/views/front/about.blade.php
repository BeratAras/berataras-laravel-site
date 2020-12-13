@include('front.layouts.head');
<body id="top">

    <!-- pageheader
    ================================================== -->
    <div class="s-pageheader">

        @include('front.layouts.navbar');

    </div> <!-- end s-pageheader -->

    <?php
    foreach ($abouts as $key => $value) {
            $aboutTitle[$value['about_key']]=$value['about_value'];
	        $aboutDes[$value['about_key']]=$value['about_description'];
        }
    ?>

    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow">

        <div class="row">

            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    {{$aboutTitle['kim']}}
                </h1>
                <p>
                    {!!$aboutDes['kim']!!}
                </p>
            </div> <!-- end s-content__header -->

            <div class="s-content__media col-full">
                <div class="s-content__post-thumb">
                    <img src="{{asset("front/images/user/beratabout.JPG")}}" alt="">
                </div>
            </div> <!-- end s-content__media -->

            <div class="col-full s-content__main">

                <p class="lead">
                    {{$aboutTitle['benimhikayem']}}
                </p>
                
                <p>
                    {!!$aboutDes['benimhikayem']!!}
                </p>

                {{-- <div class="row block-1-2 block-tab-full">
                    <div class="col-block">
                        <h3 class="quarter-top-margin">{{$aboutTitle['neleryapiyorum']}}</h3>
                        <p>{!!$aboutDes['neleryapiyorum']!!}</p>
                    </div>

                    <div class="col-block">
                        <h3 class="quarter-top-margin">{{$aboutTitle['calismalar']}}</h3>
                        <p>{{$aboutDes['calismalar']}}</p>
                    </div>

                </div> --}}


            </div> <!-- end s-content__main -->

        </div> <!-- end row -->

    </section> <!-- s-content -->


    <!-- s-extra
    ================================================== -->

    <!-- s-footer
    ================================================== -->
    @include('front.layouts.footer');