@extends('layouts.default')

@section('content')

@section('logo', 'StationHotels.co.uk')

<section class="landing">
  <div class="container">
    <div class="row">
      
      <div class="col-6">
        <div class="home-station">
            <a href="{{ route('euston.station') }}">
              London Euston
            </a>  
        </div>
      </div>

      <div class="col-6">
        <div class="home-station">
          <a href="{{ route('manchester-piccadilly.station') }}">
            Manchester Piccadilly Station
          </a>  
        </div>
      </div>
   
      
    </div>
    <!--/.row -->        
  </div>
  <!--/.container -->
</section>



@endsection