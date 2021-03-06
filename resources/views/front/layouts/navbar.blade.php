
        <header class="header">
            <div class="header__content row">

                <div class="header__logo">
                    <a class="logo" href="{{route('homepage')}}">
                        <img src="{{asset($settings->logo)}}" alt="Homepage">
                    </a>
                </div> <!-- end header__logo -->

                <ul class="header__social">
                    <li>
                        <a href="{{url($settings->facebook)}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="{{url($settings->twitter)}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="{{url($settings->instagram)}}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="{{url($settings->twitch)}}" target="_blank"><i class="fa fa-twitch" aria-hidden="true"></i></a>
                    </li>
                </ul> <!-- end header__social -->

                <a class="header__search-trigger" href="#0"></a>

                <div class="header__search">

                    <form role="search" method="get" class="header__search-form" action="#">
                        <label>
                            <span class="hide-content">Ara:</span>
                            <input type="search" class="search-field" placeholder="Ne Arıyorsun?" value="" name="s" title="Search for:" autocomplete="off">
                        </label>
                        <input type="submit" class="search-submit" value="Search">
                    </form>
        
                    <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

                </div>  <!-- end header__search -->


                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                <nav class="header__nav-wrap">

                    <h2 class="header__nav-heading h6">Site Navigation</h2>

                    <ul class="header__nav">
                        <li class="current"><a href="{{route('homepage')}}" title="">Anasayfa</a></li>
                        {{-- <li class="current">
                            <a>Çalışmalar</a>
                            <ul class="sub-menu">
                                <li><a>CMS</a></li>
                            </ul>
                        </li> --}}
                        <li class="current"><a href="{{route('about')}}" title="">Ben Kimim?</a></li>
                        <li class="current"><a href="{{route('contact')}}" title="">Bana Ulaş</a></li>
                    </ul> <!-- end header__nav -->

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->