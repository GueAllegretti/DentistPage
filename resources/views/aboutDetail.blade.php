<x-layout>
    <x-slot name="title">Doctor</x-slot>
    <section class="section">
      <div class="container-fluid">
        <div class="row">
    <x-card
              id="{{$person['id']}}"
              name="{{$person['name']}}"
              img="{{$person['img']}}"
              specializzazione="{{$person['specializzazione']}}"
              studi="{{$person['studi']}}"
            />
          </div>
        </div>
      </section> 
</x-layout>