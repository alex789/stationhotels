@extends('layouts.default')

@section('content')

@section('logo', 'Euston Station Hotels')


<x-content-layout class="hotel">

    <h1>Euston Square Hotel</h1>

    <p>The Euston Square Hotel is a modern establishment conveniently located in the heart of London, just steps away from Euston Station and a short distance from major attractions such as the British Museum and King's Cross. This hotel blends comfort with contemporary style, offering a perfect base for both leisure and business travelers. With its prime location and array of amenities, Euston Square Hotel ensures a pleasant stay in the bustling capital.</p>


    <x-listing-img 
        file="euston-square-hotel-exterior.jpg" 
        alt="Exterior"
    />

    <p>The hotel features a variety of room options designed to suit the needs of different guests. Each room is equipped with comfortable bedding and modern furnishings, ensuring a restful experience. The decor reflects a contemporary aesthetic while providing a welcoming and functional space.</p>

    <x-listing-img 
        file="euston-square-hotel-room.jpg" 
        alt="Room"
    />

    <x-listing-img 
        file="euston-square-hotel-room-2.jpg" 
        alt="Room 2"
    />

    <p>Further room details include an assortment of accommodations, ranging from standard rooms to executive suites, catering to solo travelers and families alike. Guests can expect to find well-maintained interiors with thoughtful design elements that enhance the overall atmosphere of comfort and tranquility during their stay.</p>
 
    <x-listing-img 
        file="euston-square-hotel-bathroom.jpg" 
        alt="Bathroom"
    />
    
    <p>Room Amenities Include:</p>

    <ul>
        <li>Free Wi-Fi access</li>
        <li>Air conditioning</li>
        <li>Flat-screen TV with satellite channels</li>
        <li>Tea and coffee making facilities</li>
        <li>Work desk and chair</li>
        <li>Safe deposit box</li>
        <li>Private bathroom with complimentary toiletries</li>
        <li>Hairdryer</li>
      </ul>

    <x-listing-img 
        file="euston-square-hotel-facilities.jpg" 
        alt="Reception"
    />      

    <x-listing-img 
        file="euston-square-hotel-facilities-2.jpg" 
        alt="Restaurant"
    />      

    <p>In conclusion, Euston Square Hotel offers an excellent combination of location, comfort, and modern amenities, making it an ideal choice for travelers looking to explore London. Whether visiting for business or pleasure, guests will find a welcoming atmosphere and a plethora of services designed to enhance their stay.</p>
    
    <a 
        class="btn btn-primary" 
        href="#"
    >
        Check room rates
    </a>    

</x-content-layout>


@endsection