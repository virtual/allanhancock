<div class="imagebutton"><a href="{{ $link }}">{{ $buttontext }}</a>
  
  <div class="imagebutton-bgcolor" style="background-image: url('{{ $img }}');">
    @if(!empty($color))<p class="imagebutton-title"> @else <p class="imagebutton-title">  @endif   
      {{ $buttontext }}
    </p>
  </div>
</div> 