@extends('layouts.app')

@section('main')

{{-- <jumbotron>
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
</jumbotron> --}}
<div class="sfondo">
    <div class="container">
        <div class="titolo">current series</div>
        <div class="row">
                @foreach ($fumetti as $fumetto)
                <div class="col-2">
                <img src="{{ $fumetto['thumb'] }}" alt="">
                {{ $fumetto['title'] }}
                </div>
                @endforeach
            
        </div>
    </div>
</div>
     
@endsection


<style lang="scss">


.sfondo {
  background-color: #1c1c1c;
}
.container {
  color: white;
  text-transform: uppercase;
  padding-bottom: 20px;

  .titolo {
  background-color: #0282f9;
  display: inline-block;
  position: relative;
  top: -10px;
  padding: 15px 30px;
  font-size: 16px;
}
  .btn {
    text-align: center;
    span {
      background-color: #0282f9;
      padding: 15px 30px;
      display: inline-block;
    }
  }
   img {
      display: block;
      max-width: 100%;
    }
}





</style>
