<?php $uniqueID = substr(md5(rand()), 0, 3); ?>
<ul role="tablist" class="nav nav-tabs more-arrow" id="navtab{{$uniqueID}}">
  <li>
    <a class="nav-link active" id="tab{{$uniqueID}}1" role="tab" data-toggle="tab" href="#tab{{$uniqueID}}1-content" aria-controls="tab{{$uniqueID}}1-content" aria-selected="true">Transfer Overview</a>
  </li>
  <li>
    <a class="nav-link" id="tab{{$uniqueID}}2" role="tab" data-toggle="tab" href="#tab{{$uniqueID}}2-content" aria-controls="tab{{$uniqueID}}2-content" aria-selected="false">Degree Options</a>
  </li>
  <li>
    <a class="nav-link" id="tab{{$uniqueID}}3" role="tab" data-toggle="tab" href="#tab{{$uniqueID}}3-content" aria-controls="tab{{$uniqueID}}3-content" aria-selected="false">Location</a>
  </li>

</ul>
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade show active" id="tab{{$uniqueID}}1-content" aria-labelledby="tab{{$uniqueID}}1">
     @include('_partials.nav-tab1')

  </div>

  <div role="tabpanel" class="tab-pane fade" id="tab{{$uniqueID}}2-content" aria-labelledby="tab{{$uniqueID}}2">
    @include('_partials.nav-tab2')
  </div>


  <div role="tabpanel" class="tab-pane fade" id="tab{{$uniqueID}}3-content" aria-labelledby="tab{{$uniqueID}}3">
    @include('_partials.nav-tab3')
  </div>

</div>