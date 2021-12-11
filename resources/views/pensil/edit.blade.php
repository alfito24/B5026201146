    @extends('layouts.home')
    @section('content')
    @section('crumb', 'Pensil')
  @foreach ($pensil as $p)
  <form action="/pensil/update" method="post">
      @csrf
     <div class="row mx-5">
         <div class="col-md-10">
          <input type="hidden" name="id" value="{{ $p ->kodepensil }}">
          <div class="mb-3">
              <label for="merk" class="form-label">Merk Pensil</label>
              <input value="{{ $p->merkpensil }}" name="merk"  type="text" class="form-control" id="merk">
          </div>
          <div class="mb-3">
                <label for="stock" class="form-label">Stock Pensil</label>
                <input value="{{ $p->stockpensil }}" name="stock" type="number" class="form-control" id="stock">
              </div>
              <div class="mb-3">
                Status
                <input type="radio" id="tersedia" name="tersedia" value="T" @if ($p->tersedia === "T") checked="checked" @endif>
                <label for="tersedia">Tersedia</label>
                <input type="radio" id="kosong" name="tersedia" value="K" @if ($p->tersedia === "K") checked="checked" @endif>
                <label for="kosong">Kosong</label><br>
              </div> <br>
              <button type="submit" class="btn btn-primary mt-5">Submit</button>
         </div>
     </div>
    </form>
  @endforeach
  @endsection

