<section class="s-content">
        
    <div class="row masonry-wrap">
        <div class="masonry">

            <div class="grid-sizer"></div>
            @foreach($contents as $content)
                @if(count($contents)>0)
                    @foreach($contents as $content)
                        <article class="masonry__brick entry format-standard" data-aos="fade-up">
                                
                            <div class="entry__thumb">
                                <a href="{{route('contentDetail', $content->content_slug)}}" class="entry__thumb-link">
                                    <img src="{{asset('img/content_img').'/'.$content->content_file_banner}}"  alt="">
                                </a>
                            </div>

                            <div class="entry__text">
                                <div class="entry__header">
                                    
                                    <div class="entry__date">
                                        <a>{{$content->created_at->diffForHumans()}}</a>
                                    </div>
                                    <h1 class="entry__title"><a href="{{route('contentDetail', $content->content_slug)}}">{{$content->content_title}}</a></h1>
                                    
                                </div>
                                <div class="entry__excerpt">
                                    <p>
                                    {!!$content->content_description!!}
                                    </p>
                                </div>
                                <div class="entry__meta">
                                    <span class="entry__meta-links">
                                        <a href="">{{$content->getCategory['category_name']}}</a> 
                                    </span>
                                </div>
                            </div>

                        </article> <!-- end article -->
                    @endforeach
                    @else
                    <div class="alert alert danger">Bu Kategoriye Yazı Yazmamışım :(</div>
                @endif
            @endforeach
            
            {{-- <article class="masonry__brick entry format-quote" data-aos="fade-up">
                    
                <div class="entry__thumb">
                    <blockquote>
                            <p>Good design is making something intelligible and memorable. Great design is making something memorable and meaningful.</p>

                            <cite>Dieter Rams</cite>
                    </blockquote>
                </div>   

            </article>  --}}

          

        </div> <!-- end masonry -->
    </div> <!-- end masonry-wrap -->

    <div class="row">
        <div class="col-full">
            <nav class="pgn">
                <ul>
                    <li><a class="pgn__prev" href="{{$contents->previousPageUrl()}}">Prev</a></li>
                    @if (is_array($contents))
                        @foreach ($contents as $page => $slug)
                            @if ($page == $contents->currentPage())
                                <li><a class="pgn__num current"> {{$page}} </a></li>
                            @else
                                <li><a class="pgn__num" href="{{$url}}"> {{$page}} </a></li>
                            @endif
                        @endforeach
                    @endif
                    <li><a class="pgn__next" href="{{$contents->nextPageUrl()}}">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>

</section> <!-- s-content -->