@extends('layouts.default')

@section('content')

@section('logo', 'Euston Station Hotels')



<x-content-layout class="station-home">

  <h2>Euston Station Hotel Guide</h2>

  <p>There are several hotels conveniently located near London Euston Station catering to both transit passengers and visitors to the London Euston Area.</p>

  <div class="row">
    
    <div class="col-6">
      <article>
        <h3>Passengers Visiting London Euston</h3>

        <h4>
          <a href="{{ route('euston.euston-square-hotel') }}">
            Euston Square Hotel
          </a>
        </h4>

        <div class="image">
          <img src="{{ URL('storage/euston-square-hotel.jpg') }}" alt="Euston Square Hotel" class="img-fluid">
        </div>

        <p>Euston Square Hotel is a boutique hotel located in central London's Euston neighbourhood, offering stylish and modern rooms at competitive rates. Situated less than 1,150 feet from London Euston Station, the hotel provides easy access to attractions such as the British Museum, Regent's Park, the British Library, Oxford Street, and the theatres of the West End.</p>

        <p>The location is convenient for both business and leisure travellers, also offering close proximity to King's Cross and St Pancras International stations. Guests can enjoy amenities like free Wi-Fi, 24-hour front desk service, and air-conditioned rooms equipped with digital flat-screen TVs featuring built-in entertainment systems.</p>

        <button type="button" class="btn btn-primary" href="{{ route('euston.euston-square-hotel') }}">
          Check room rates
        </button>

      </article>
    </div>


    <div class="col-6">
      <article>
        <h3>Passengers Transiting via London Euston</h3>
    
        <h4>
          <a href="{{ route('euston.the-wesley') }}">
            The Wesley Euston    
          </a>
        </h4>
    
        <div class="image">
          <img src="{{ URL('storage/the-wesley-euston.jpg') }}" alt="The Wesley Euston" class="img-fluid">
        </div>

        <p>
          The Wesley Euston is a four-star hotel located at 81-103 Euston Street, just a short walk from Euston Station.  It offers 100 modern rooms, including Standard Single, Standard & Superior Double, as well as Executive Suites. All rooms are equipped with amenities like en-suite bathrooms, flat-screen TVs, and free Wi-Fi. 
        </p>

        <p>
          The hotel features The Wesley Bar & Kitchen, serving breakfast, lunch, and dinner with a focus on locally sourced, sustainable ingredients. There are also over 20 flexible meeting rooms available, accommodating up to 120 people, suitable for conferences and business events.                      
        </p>

        <p>                     
          The Wesley Euston was the first UK hotel to receive a social enterprise mark and has been recognized as a carbon champion by the local authority. 
        </p>                     
    
        <button type="button" class="btn btn-primary" href="{{ route('euston.the-wesley') }}">
          Check room rates
        </button>
      </article>



    </div>

  </div>              
  <!--/.row -->


</x-content-layout>


@endsection