@extends('layout')
@section('title', 'Home page')
@section('content')


    <div class="jumbotron jumbotron-fluid text-center mt-5">
        <div class="container">
            <h1 class="display-4">Welcome to Hotel Booking</h1>
            <p class="lead">Book your dream vacation with us</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://demo.qloapps.com/113-172-225-253/1-large_default/super-delux-rooms.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hotel Name</h5>
                        <p class="card-text">Description of the hotel. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">Starting from $100</small>
                            <button type="button" class="btn btn-sm btn-outline-primary">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://demo.qloapps.com/113-172-225-253/13-large_default/super-delux-rooms.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hotel Name</h5>
                        <p class="card-text">Description of the hotel. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">Starting from $120</small>
                            <button type="button" class="btn btn-sm btn-outline-primary">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://demo.qloapps.com/113-172-225-253/9-large_default/super-delux-rooms.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hotel Name</h5>
                        <p class="card-text">Description of the hotel. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">Starting from $150</small>
                            <button type="button" class="btn btn-sm btn-outline-primary">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
