<x-layout>
  <x-slot name="title">Contacts</x-slot>
    <div class="container m-5">
      <div class="row">
        <div class="col-12 col-md-6">
          <form method="POST" action="{{route('contact-submit')}}">
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
              <label for="start" class="form-label">Data appuntamento</label>
              <input class="form-control" type="date" id="date" name="day">
              </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Massaggio</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Scrivi qui" name="message"></textarea>
              <button type="submit" class="masthead-btn btn btn-success mt-3">Submit</button>
            </div>
          </form>
        </div>
        <div class="d-none d-lg-block col-md-6 mt-5">
          <img src="/img/logo.png" alt="" class="img-fluid">
        </div>
      </div>
    </div>
</x-layout>