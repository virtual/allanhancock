<div class="slide">
  <div class="carousel-feature-img">     
    @if((!empty($title)) || ((!empty($caption))))
    <img src="{{ $page->baseUrl }}{{ $img }}" alt="{{ $description }}" />
    <div class="carousel-feature-text">
        <p><a href="{{$link}}" >
      @if(!empty($title))<span class="carousel-feature-title"><strong>{{ $title }}</strong></span>@endif
      @if(!empty($caption))<span class="carousel-feature-caption"><strong>{{ $caption }}</strong></span>@endif
      </a></p>
    </div>
    @else 
      <a href="{{$link}}" ><img src="{{ $page->baseUrl }}{{ $img }}" alt="{{ $description }}" /></a>
    @endif
  </div>
</div>
