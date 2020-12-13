@include('front.layouts.head');

<body id="top">

    <!-- pageheader
    ================================================== -->
    <div class="s-pageheader">

        @include('front.layouts.navbar');

    </div> <!-- end s-pageheader -->
  
    <?php
    foreach ($contacts as $key => $value) {
            $contactVal[$value['contact_key']]=$value['contact_value'];
	        $contactDes[$value['contact_key']]=$value['contact_description'];
        }
    ?>
    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow">

        <div class="row">

            <div class="s-content__header col-full">
                <h1 class="s-content__header-title"> {{$contactVal['banaulas']}} </h1><br>
                <p style="font-size: 25px"> {{$contactDes['banaulas']}} </p>
            </div> <!-- end s-content__header -->
    
            <div class="s-content__media col-full">
               <img src="{{asset("front/images/user/beratiletisim.jpg")}}" alt="">
            </div> <!-- end s-content__media -->

            <div class="col-full s-content__main">

                <p class="lead"> {!!$contactVal['biselamver']!!} </p>
                
                <p> {!!$contactDes['biselamver']!!}</p>

                <div class="row">
                    <div class="col-six tab-full">
                        <h3>{!!$contactVal['neredeyim']!!}</h3>

                        <p>{!!$contactDes['neredeyim']!!}</p>

                    </div>

                    <div class="col-six tab-full">
                        <h3>{!!$contactVal['iletisimbilgilerim']!!}</h3>

                        <p>{!!$contactDes['iletisimbilgilerim']!!}</p>

                    </div>
                </div> <!-- end row -->

                {{-- <h3>Say Hello.</h3>

                <form name="cForm" id="cForm" method="post" action="">
                    <fieldset>

                        <div class="form-field">
                            <input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
                        </div>

                        <div class="form-field">
                            <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Your Email" value="">
                        </div>

                        <div class="form-field">
                            <input name="cWebsite" type="text" id="cWebsite" class="full-width" placeholder="Website"  value="">
                        </div>

                        <div class="message form-field">
                        <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message" ></textarea>
                        </div>

                        <button type="submit" class="submit btn btn--primary full-width">Submit</button>

                    </fieldset>
                </form>  --}}


            </div> <!-- end s-content__main -->

        </div> <!-- end row -->

    </section> <!-- s-content -->
   

    <!-- s-extra
    ================================================== -->
 

    @include('front.layouts.footer');