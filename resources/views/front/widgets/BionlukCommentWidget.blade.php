<section class="s-content">
    <div class="row masonry-wrap">


        <div class="entry__thumb">
            <blockquote>
                <p>Bionluk Freelancer platformuna 2014'te katılmış olup, o günden bugüne, çalıştığım müşteriler tarafından profilime girilen güzel yorumlar:</p>
            </blockquote>
        </div>
        <div class="masonry">
            <div class="grid-sizer"></div>
                @foreach ($comments as $comment)
                    <article class="masonry__brick entry format-standard" data-aos="fade-up">

                        <div class="entry__thumb">
                            <a class="entry__thumb-link">
                                <img src="{{ url($comment->user_photo) }}" alt="" height="500" width="500">
                            </a>
                        </div>

                        <div class="entry__text">
                            {{-- <div class="entry__header">

                                <div class="entry__date">
                                    <a></a>
                                </div>
                                <h1 class="entry__title"><a>{{ $comment->comment }}</a></h1>

                            </div> --}}
                            <div class="entry__excerpt">
                                <p>
                                    {!! $comment->comment !!}
                                </p>
                            </div>
                            <div class="entry__meta">
                                <span class="entry__meta-links">
                                    <a href="">{{ $comment->username }}</a>
                                </span>
                            </div>
                        </div>

                    </article> <!-- end article -->
                @endforeach

        </div> <!-- end masonry -->
        <div class="text-center">
                <p>Daha Fazlası İçin: <span><a target="_blank" href="https://bionluk.com/berataras61">Bionluk</a></span></p>
        </div>
    </div> <!-- end masonry-wrap -->


</section> <!-- s-content -->
