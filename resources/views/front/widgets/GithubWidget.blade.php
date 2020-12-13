<section class="s-content">
    <div class="row masonry-wrap">

        <div class="entry__thumb">
            <blockquote>
                <p>Bazı Açık Kaynak Github Repo'larım:</p>
            </blockquote>
        </div>
        
        <div class="github-card" data-github="berataras" data-width="400" data-height="" data-theme="default"></div>
        <script src="//cdn.jsdelivr.net/github-cards/latest/widget.js"></script>
        <br><br>
        @foreach($github as $github)
        <a href="{{url($github->repo_link)}}">
            <img src="{{url($github->repo_svg)}}">
        </a>
        @endforeach
    </div>
</section>