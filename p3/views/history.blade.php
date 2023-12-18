@extends('templates/master')

@section('title')
    [Game History] Project 3: 20-Sided Dice Game (by Alex Costa)
@endsection

@section('content')
<div class="container mt-5">
    <h2 class="display-4">Game History</h2>
    <a href='/' class="btn btn-primary">
        <i class="fas fa-arrow-left"></i> Go Back
    </a>
    <ul>
        <!-- Display All Games Recorded in 'rounds' Table -->
        @foreach($rounds as $round)
        <div class="mt-4 p-3 border rounded">
            
            Round #{{ $round['id'] }}: 
            <a href='/round?id={{ $round['id'] }}'>View Details ({{ $round['timestamp'] }})</a>
            
        </div>
        @endforeach
    </ul>
</div>
@endsection
