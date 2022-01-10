<x-layout>
  <x-slot name="title">Home</x-slot>
  <section class="section">
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 col-lg-6">
          <img src="./img/masthead.png" alt="" class="img-fluid">
        </div>
          <div class="col-12 col-lg-6 d-flex flex-wrap align-items-center justify-content-center">
            <h1>Family Dentist</h1>
              <p class="text-masthead">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum vitae repellat quo laboriosam quasi eum, laborum fugit reiciendis exercitationem repellendus ut, est qui deserunt ex. Modi expedita rerum eos ex.
              </p>
              <a href="{{route('contact')}}">
              <button type="button" class="masthead-btn btn btn-success">Prenota la tua visita</button></a>
          </div>
      </div>
    </div>    
  </section>  
</x-layout>