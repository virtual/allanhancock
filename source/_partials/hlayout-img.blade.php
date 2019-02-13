<div class="hlayout-img">
  <div class="row">
    <div class="col-offset-2 col-8 col-sm-offset-0 col-sm-4 col-md-3">
      @if(!empty($img))
      <a href="{{ $link }}"><img class="card-img-top" src="{{ $img }}" alt="{{ $alt }}" /></a>
      @endif
    </div>
    <div class="col-12 col-sm-8 col-md-9">
      <h3><a href="{{ $link }}">{{ $heading }}</a></h3>
      {{ $desc }}
    </div>
  </div>
</div>