<article class="news-article"> 
  <div class="image-container">@if(!empty($img)) <a href="{{ $link }}"><img src="{{$img}}" alt="{{$alt}}"></a>@endif</div>  
  <div class="article-info-container">
    <header>
      <h4><a href="{{ $link }}">{{ $heading }}</a></h4>
      @if(!empty($datetime))<p class="datetime"><time datetime="{{$datetime}}"><?php echo date("F j, Y", strtotime($datetime)) ?> </time></p>@endif
    </header>
      <p class="description">{{ $desc }} </p>
    </div>
</article>
 