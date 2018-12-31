<header id="header">
  <div class="container-fluid">
    <div class="row">
      <div class="header-logo d-none d-lg-block">

        @if (trim($__env->yieldContent('homepage')))
        <!-- H1 on homepage only -->
        <h1>
            @include ('_partials.logo')
        </h1>
        @else
          @include ('_partials.logo')
        @endif

      </div>
    </div>

  </div>
  @include ('_partials.menu')
  @include('_partials.alert')
</header>