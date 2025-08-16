@extends('layouts.default')

@section('content')

@section('logo', 'Manchester Piccadilly Station Hotels')


<x-content-layout class="station-home">

  <h2>Manchester Piccadilly Station Hotel Guide</h2>

  <p>There are several hotels conveniently located near Manchester Piccadilly station, catering to both transit passengers and visitors to the Manchester Piccadilly Area.</p>


  <div class="row">
    <div class="col-6">
      <article>
        <h3>Passengers Visiting Manchester Piccadilly</h3>
    
        <h4>
          <a href="{{ route('manchester-piccadilly.native-manchester') }}">
            Native Manchester Hotel
          </a>
        </h4>
    
        <div class="image">
          <img src="{{ asset('images/native-manchester-hotel.jpg') }}" alt="Native Manchester Hotel" class="img-fluid">
        </div>

        <p>Native Manchester is a standout aparthotel set within a beautifully restored Grade II-listed Victorian cotton warehouse in the city’s Northern Quarter. Spanning over eight floors, it houses stylish serviced apartments—from compact studios to expansive penthouses with terraces—furnished with high-end pieces and infused with industrial charm.</p>

        <p>The ground level features Cultureplex, a buzzing social hub offering a restaurant, bar, deli, mini-cinema, and fitness studio, making it more than just a place to stay.</p>

        <p>Awarded the title of Best Hotel in the North of England in 2019, Native Manchester blends heritage architecture, thoughtful design, and an unbeatable central location—just steps from Piccadilly station—into a uniquely immersive hospitality experience.</p>

        <a  
          class="btn btn-primary" 
          href="{{ route('manchester-piccadilly.native-manchester') }}"
        >
          More Info
        </a>
      </article>
    </div>
    <!--/.col -->

    
    <div class="col-6">
      <article>
        <h3>Passengers Transiting via Manchester Piccadilly</h3>

        <h4>
          <a href="{{ route('manchester-piccadilly.mercure') }}">
            Mercure Manchester Piccadilly
          </a>
        </h4>

        <div class="image">
          <img src="{{ asset('images/mercure-manchester-piccadilly.jpg') }}" alt="Mercure Manchester Piccadilly" class="img-fluid">
        </div>

        <p>Mercure Manchester Piccadilly is a stylish 4-star hotel centrally located on Portland Street, overlooking Piccadilly Gardens and just a five-minute walk from Manchester Piccadilly Station. It offers 280 modern, air-conditioned rooms, all with en-suite bathrooms, HD Smart TVs, free high-speed Wi-Fi, and tea and coffee facilities. Upgraded Privilege and Superior rooms include extras such as Nespresso machines, robes, and premium toiletries.</p>

        <p>Guests can dine at the panoramic Level 3 Bar & Brasserie, which serves city-view breakfasts and a globally inspired menu, or take advantage of 24-hour room service. For business and events, the hotel boasts 11 flexible meeting rooms and a grand ballroom accommodating up to 800 guests, making it a popular choice for both leisure and corporate stays.</p>


        <a 
          class="btn btn-primary" 
          href="{{ route('manchester-piccadilly.mercure') }}"
        >
          More Info
        </a>

      </article>
    </div>
    <!--/.col -->

  </div>              
  <!--/.row -->


</x-content-layout>


@endsection