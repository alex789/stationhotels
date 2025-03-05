@extends('layouts.default')

@section('content')

@section('logo', 'StationHotels.co.uk')

<section class="landing">
  <div class="container">
    <div class="row">
      
      <div class="col-4">
        <div class="home-station">
            <a href="{{ route('euston.station') }}">
              London Euston
            </a>  
        </div>
      </div>

      <div class="col-4">
        <div class="home-station">
          Manchester Piccadilly
        </div>
      </div>

      <div class="col-4">
        <div class="home-station">
          Birmingham New Street
        </div>
      </div>
   
    </div>
    <!--/.row -->        
  </div>
  <!--/.container -->
</section>



@endsection