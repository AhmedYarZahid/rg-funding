@extends('layouts.app')

@section('title', 'Landing Page')

@section('content')
    <div class="jumbotron">
        <h1>Welcome to Our Website</h1>
        <p>This is a beautiful landing page for our website.</p>
        <a href="/about" class="btn btn-primary">About Us</a>
        <a href="/contact" class="btn btn-secondary">Contact Us</a>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h2>Our Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis viverra convallis augue, vitae scelerisque est mollis vel.</p>
        </div>
        <div class="col-md-6">
            <h2>Latest News</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis viverra convallis augue, vitae scelerisque est mollis vel.</p>
        </div>
    </div>
@endsection
