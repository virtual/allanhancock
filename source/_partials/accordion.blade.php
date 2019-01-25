<!-- see shoreline.edu for random id & snippet implementation -->
<div class="accordion" id="uniqueID">
    <div class="accordion-card">
      <div class="accordion-header" id="headingOne">
        <h3>
          <button class="btn btn-toggle more-arrow" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            1. Complete a FREE Online Admission Application
          </button>
        </h3>
      </div>
  
      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="accordion-body">
            @include('_partials.nav-tab1')
        </div>
      </div>
    </div>
    <div class="accordion-card">
      <div class="accordion-header" id="headingTwo">
        <h3>
          <button class="btn btn-toggle more-arrow collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            2. Apply for Financial Aid
          </button>
        </h3>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="accordion-body">
          @include('_partials.nav-tab2')
        </div>
      </div>
    </div>
    <div class="accordion-card">
      <div class="accordion-header" id="headingThree">
        <h3>
          <button class="btn btn-toggle more-arrow collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            3. Complete the Online Orientation
          </button>
        </h3>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="accordion-body">
          @include('_partials.nav-tab3')
        </div>
      </div>
    </div>
  </div>