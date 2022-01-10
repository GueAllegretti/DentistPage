<x-layout>
  <x-slot name="title">Services</x-slot>
    <section class="section">
      <div class="container-fluid">
        <div class="row">
          <h2 class="text-card-h2 mt-5">I nostri servizi</h2>
          @foreach($services as $service)
            <div class="col-12 col-md-6 d-flex justify-content-center">
              <div class="card card-section">
                <div class="card-body">
                  <h4 class="text-card-h4">{{$service['name']}}</h4>
                  <p class="text-card">{{$service['description']}}</p>
                  <h5 class="text-card-h5">Costo del trattamento: {{$service['price']}}€</h5>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a href="{{route('info')}}">
                  <button type="button" class="card-btn btn btn-success">Richiedi informazioni</button></a>
                </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>  
</x-layout>