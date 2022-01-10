<x-layout>
  <x-slot name="title">About Us</x-slot>
    <section class="section">
      <div class="container-fluid">
        <div class="row justify-content-around">
          <h2 class="text-card-h2 mt-5">Il nostro team</h2>
          
          @foreach($persons as $person)

            <x-card
              id="{{$person['id']}}"
              name="{{$person['name']}}"
              img="{{$person['img']}}"
              specializzazione="{{$person['specializzazione']}}"
            />

          @endforeach
        </div>
      </div>
    </section>  
</x-layout>