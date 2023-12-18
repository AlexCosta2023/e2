@extends('templates/master')

@section('title')
    [Round Details] Project 3: 20-Sided Dice Game (by Alex Costa)
@endsection

@section('content')
<div class="container mt-5">
    <h2 class="display-4">Round Details</h2>
    <p>
    <a href='/' class="btn btn-primary">
        <i class="fas fa-home"></i> Go Back Home
    </a></p>
    <p>
    <a href='/history' class="btn btn-secondary">
        <i class="fas fa-history"></i> Go Back to History
    </a></p>
    <!-- Display Round Details -->
    @if(isset($roundDetails))
        <p>Round #<span test="roundId">{{ $roundDetails['id'] }}</span></p>
        <p>Player A Rolls: <span test="playerARolls">{{ $roundDetails['player_a_rolls'] }}</span></p>
        <p>Player A Points: <span test="playerAPoints">{{ $roundDetails['player_a_points'] }}</span></p>
        <p>Player B Rolls: <span test="playerBRolls">{{ $roundDetails['player_b_rolls'] }}</span></p>
        <p>Player B Points: <span test="playerBPoints">{{ $roundDetails['player_b_points'] }}</span></p>
        <p>Winner: <span test="winner">{{ $roundDetails['winner'] }}</span></p>
        <p>Timestamp: <span test="timestamp">{{ $roundDetails['timestamp'] }}</span></p>
    @else
        <p>Details not found.</p>
    @endif
</div>
@endsection
