<div class="imagebutton"><a href="{{ $link }}">{{ $buttontext }}</a>
  
  <div style="background-image: url('{{ $img }}');">
    @if(!empty($color))<p class="imagebutton-title" style="color: {{$color}}"> @else <p class="imagebutton-title">  @endif   
      {{ $buttontext }}
    </p>
  </div>
</div> 