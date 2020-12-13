<section class="s-extra">

    <div class="row top">

        
        <div class="col-eight md-six tab-full about">
            @foreach($abouts as $about)
                @if($about->about_key == "kim")
                    <h3>{{$about->about_value}}</h3>
                    <p>
                    {{$about->about_description}}
                    </p>
                @endif
            @endforeach

            <ul class="about__social">
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
            </ul> 
        </div> 

        
        <div class="col-four md-six tab-full popular">
            <h3>Twitter</h3>

            <div class="block-1-2 block-m-full popular__posts">
                <a href="#0" class="popular__thumb">
                    <blockquote class="twitter-tweet"><p lang="tr" dir="ltr">fotojenik insan yoktur arkadaşlar, burnu güzel insan vardır.</p>&mdash; Berat Aras (@berataras61) 
                        <a href="https://twitter.com/berataras61/status/1329477181249101827?ref_src=twsrc%5Etfw">November 19, 2020</a></blockquote> 
                </a>
            </div> <!-- end popular_posts -->
        </div> <!-- end popular -->

    </div>

    <div class="s-footer__bottom">
        <div class="row">
            <div class="col-full">
                <div class="s-footer__copyright">
                    <span>© Copyright Berat Aras <?php echo date('Y') ?></span> 
                    <span>Site Template by <a href="https://www.instagram.com/berataras61/">Berat Aras</a></span>
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"></a>
                </div>
            </div>
        </div>
    </div> <!-- end s-footer__bottom -->

</section> 
   
   
   {{-- <!-- s-footer
    ================================================== -->
    <footer class="s-footer">

        <div class="s-footer__main">
            <div class="row">
                
                <div class="col-two md-four mob-full s-footer__sitelinks">
                        
                    <h4>Quick Links</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="#0">Home</a></li>
                        <li><a href="#0">Blog</a></li>
                        <li><a href="#0">Styles</a></li>
                        <li><a href="#0">About</a></li>
                        <li><a href="#0">Contact</a></li>
                        <li><a href="#0">Privacy Policy</a></li>
                    </ul>

                </div> <!-- end s-footer__sitelinks -->

                <div class="col-two md-four mob-full s-footer__archives">
                        
                    <h4>Archives</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="#0">January 2018</a></li>
                        <li><a href="#0">December 2017</a></li>
                        <li><a href="#0">November 2017</a></li>
                        <li><a href="#0">October 2017</a></li>
                        <li><a href="#0">September 2017</a></li>
                        <li><a href="#0">August 2017</a></li>
                    </ul>

                </div> <!-- end s-footer__archives -->

                <div class="col-two md-four mob-full s-footer__social">
                        
                    <h4>Social</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="#0">Facebook</a></li>
                        <li><a href="#0">Instagram</a></li>
                        <li><a href="#0">Twitter</a></li>
                        <li><a href="#0">Pinterest</a></li>
                        <li><a href="#0">Google+</a></li>
                        <li><a href="#0">LinkedIn</a></li>
                    </ul>

                </div> <!-- end s-footer__social -->

                <div class="col-five md-full end s-footer__subscribe">
                        
                    <h4>Our Newsletter</h4>

                    <p>Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa consequatur occaecati.</p>

                    <div class="subscribe-form">
                        <form id="mc-form" class="group" novalidate="true">

                            <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                
                            <input type="submit" name="subscribe" value="Send">
                
                            <label for="mc-email" class="subscribe-message"></label>
                
                        </form>
                    </div>

                </div> <!-- end s-footer__subscribe -->

            </div>
        </div> <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">
                <div class="col-full">
                    <div class="s-footer__copyright">
                        <span>© Copyright Philosophy 2018</span> 
                        <span>Site Template by <a href="https://colorlib.com/">Colorlib</a></span>
                    </div>

                    <div class="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"></a>
                    </div>
                </div>
            </div>
        </div> <!-- end s-footer__bottom -->

    </footer> <!-- end s-footer -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div> --}}


    <!-- Java Script
    ================================================== -->
    <script src="{{asset("front/js/jquery-3.2.1.min.js")}}"></script>
    <script src="{{asset("front/js/plugins.js")}}"></script>
    <script src="{{asset("front/js/main.js")}}"></script>

    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

</body>

</html>