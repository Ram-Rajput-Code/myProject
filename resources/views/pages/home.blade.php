@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Banner Section -->
    <div class="container-fluid p-0" style="position: relative; text-align: center; color: white;">
        <img src="{{ asset('images/homebanner.jpg') }}" alt="Banner" style="width: 100%; height: auto;">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <h1>Welcome to Our Website</h1>
            <p>Explore our services and offerings</p>
        </div>
    </div>

    <!-- Cards Section -->
    <div class="container mt-4">
        <div class="row">
            @foreach($cards as $card)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="{{ $card['icon'] }} fa-3x mb-3"></i>
                            <h5 class="card-title">{{ $card['title'] }}</h5>
                            <p class="card-text">{{ $card['content'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
