<div class="imagebutton" style="background-image: url('{{ $img }}');"><a href="{{ $link }}">{{ $buttontext }}</a>
  @if(!empty($color))
  <div class="imagebutton-bgcolor" style="background-color: {{ $color }}">@else <div class="imagebutton-bgcolor" > @endif
    <p class="imagebutton-title">
      {{ $buttontext }}
    </p>
  </div>
</div> 