@if(Route::currentRouteName() == 'doctor')

<div class="col-12 col-md-6 justify-content-center align-items-center"> 
  <div class="container mt-5">
    <img src="{{$img}}" class="card-img-top img-card img-fluid rounded-circle" alt="foto dottore">
  </div>
  <div class="mt-5">
    <h4 class="text-card-h4">{{$name}}</h4>
  </div>
</div>
<div class="col-12 col-md-6"> 
  <div class="container mt-5">
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Specializzazione
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body text-card">{{$specializzazione}}</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Studi
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-bodytext-card">
            <ul>
              <li>
                {{$studi}}
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Attestati
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <ul>
              <li>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              </li>
              <li>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              </li>
              <li>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              </li>
            </ul>
            </div>
        </div>
      </div>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end m-5">
      <a href="{{route('about us')}}">
        <button type="button" class="doctor-btn btn btn-success">
          Torna indietro
        </button>
      </a>
    </div>
  </div>
</div>

@else   

<div class="col-12 col-md-4 d-flex justify-content-center">
  <div class="card card-section">
    <img src="{{$img}}" class="card-img-top img-card" alt="foto dottore">
      <div class="card-body">
        <h4 class="text-card-h4">{{$name}}</h4>
          <h6>Specializzato in:</h6>
            <p class="text-card">{{$specializzazione}}</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{route('doctor', ['id' => $id])}}">
                  <button type="button" class="doctor-btn btn btn-success">
                    Scopri di più
                  </button>
                </a>
              </div>
      </div>
  </div>
</div>

@endif