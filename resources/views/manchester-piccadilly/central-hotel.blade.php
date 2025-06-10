@extends('layouts.default')

@section('content')

@section('logo', 'Manchester Piccadilly Station Hotels')


<x-content-layout class="hotel">

    <h1>Piccadilly Central Pub and Hotel</h1>

    <p>The Wesley Euston Hotel is a contemporary and stylish hotel located in the heart of London. It offers a perfect blend of comfort, convenience, and modern amenities, making it an ideal choice for both business and leisure travelers. The hotel's location provides easy access to major attractions, transport links, and local eateries, ensuring a memorable stay in this vibrant city.</p>

    <x-listing-img 
        file="the-wesley-euston-exterior.jpg" 
        alt="Exterior"
    />

    <p>The hotel features a range of accommodation options that cater to various preferences and budgets. Each room is designed with elegance and functionality in mind, providing a cozy retreat after a long day of exploring or meetings. Guests can expect a harmonious balance of modern design and welcoming atmosphere throughout their stay.</p>

    <x-listing-img 
        file="the-wesley-euston-room.jpg" 
        alt="Room"
    />


    <x-listing-img 
        file="the-wesley-euston-room-2.jpg" 
        alt="Room 2"
    />
    
    <p>In addition to the standard amenities, the Wesley Euston Hotel offers further room details that enhance the guest experience. All rooms are equipped with essential features that ensure comfort and convenience, making it a favorite among visitors to London.</p>


    <x-listing-img 
        file="the-wesley-euston-bathroom.jpg" 
        alt="Bathroom"
    />

    <p>Room Amenities Include:</p>

    <ul>
        <li>Free Wi-Fi</li>
        <li>Flat-screen TV</li>
        <li>Tea and coffee making facilities</li>
        <li>Work desk</li>
        <li>Air conditioning</li>
        <li>Private bathroom with complimentary toiletries</li>
        <li>Hairdryer</li>
        <li>Iron and ironing board</li>
    </ul>


    <x-listing-img 
        file="the-wesley-euston-facilities.jpg" 
        alt="Gym"
    />
    
    <x-listing-img 
        file="the-wesley-euston-facilities-2.jpg" 
        alt="Reception"
    />

    <p>In summary, the Wesley Euston Hotel stands out as a top choice for travelers seeking comfort and convenience in London. With its modern accommodations and strategic location, it provides an excellent base from which to explore the city's many attractions. Whether you're in town for business or leisure, the Wesley Euston Hotel is dedicated to ensuring a memorable stay.</p>

    <a 
        class="btn btn-primary" 
        href="#"
    >
        Check room rates
    </a>    


</x-content-layout>





@endsection