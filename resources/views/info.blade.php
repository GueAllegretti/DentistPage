<x-layout>
  <x-slot name="title">Infomation</x-slot>
    <div class="container my-5">
      <div class="row-align-items-center justify-content-center">
        <div class="col-12 col-md-8">
          <form method="POST" action="{{route('info-submit')}}">
            @csrf
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nome</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Cognome</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="surname">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Massaggio</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Scrivi qui" name="message"></textarea>
              <button type="submit" class="masthead-btn btn btn-success mt-3">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</x-layout>