<div class="py-5 bg-secondary">
  <div class="container">
    <section class="sectional sectional-padded" aria-labelledby="subfooterheading">
        <h2 id="subfooterheading" class="h3">Campus Locations</h2>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              @include('_partials.location', [
              'img' => '/resources/img/locations/santa-maria.jpg',
              'heading' => 'Santa Maria Campus',
              'iconalt' => 'Santa Maria Campus', 
              'desc' => '800 South College Drive<br/>Santa Maria, CA 93454<br/><a href="tel:+1-805-922-6966">1-805-922-6966</a>',
              'buttontext' => 'Map',
              'link' => '#'
              ])
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              @include('_partials.location', [
              'img' => '/resources/img/locations/lompoc.jpg',
              'heading' => 'Lompoc Valley Center',
              'iconalt' => 'Lompoc Valley Center', 
              'desc' => 'One Hancock Drive<br/>Lompoc, CA 93436<br/><a href="tel:+1-805-735-3366">1-805-735-3366</a>',
              'buttontext' => 'Map',
              'link' => '#'
              ])
            </div>
     <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              @include('_partials.location', [
              'img' => '/resources/img/locations/vanderberg.jpg',
              'heading' => 'Vandenberg Air Force Base Center',
              'iconalt' => 'Vandenberg Air Force Base Center', 
              'desc' => '641 Utah Ave, Bldg. 13640, Rm. 216<br/>Vandenberg AFB, CA 93437<br/><a href="tel:+1-805-734-3500">1-805-734-3500</a><br/><a href="tel:+1-805-735-3366">1-805-735-3366 ext. 3250</a>',
              'buttontext' => 'Map',
              'link' => '#'
              ])
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              @include('_partials.location', [
              'img' => '/resources/img/locations/santa-ynez.jpg',
              'heading' => 'Santa Ynez Valley Center',
              'iconalt' => 'Santa Ynez Valley Center', 
              'desc' => 'Santa Ynez Valley Union High School<br/>2975 East Hwy 246<br/>Santa Ynez, CA 93460<br/><a href="tel:+1-805-922-6966">1-805-922-6966 ext. 3355</a>',
              'buttontext' => 'Map',
              'link' => '#'
              ])
            </div>
        </div>
    </section>
  </div>
</div>