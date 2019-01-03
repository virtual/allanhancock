@if(!empty($img)) <div class="card image-card"> @elseif(!empty($callout)) <div class="card callout"> @else <div class="card">  @endif
  @if(!empty($img))<div class="card-image-container"><a href="{{ $link }}"><img class="card-img-top" src="{{ $page->baseUrl }}{{ $img }}" alt="{{ $iconalt }}" /></a></div>@endif
  <div class="card-body">
    @if(!empty($icon))<span class="{{ $icon }}" aria-hidden="true"></span>@endif
    <h3 class="card-title">
        @if((!empty($img)) || (!empty($buttontext)))
          {{ $heading }}
        @else
        <a class="more-arrow" href="{{ $link }}">{{ $heading }}</a>
        @endif
    </h3>
    <p class="card-text"><?php echo $desc; ?></p>
    @if(!empty($buttontext))<p><a class="more-arrow" href="{{ $link }}"><span class="sr-only">{{ $heading }} </span>{{ $buttontext }}</a></p>@endif
  </div>
</div>