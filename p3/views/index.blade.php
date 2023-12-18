@extends('templates/master')

@section('title')
    Project 3: 20-Sided Dice Game (by Alex Costa)
@endsection

@section('content')
<div class="container mt-5 text-center">
    <div class="border rounded p-4">
        <!-- Game Title -->
        <h2 class="display-4 mb-4">20-Sided Dice Game</h2>

        <!-- Game Intro / Instructions -->
        <p>Welcome to the 20-Sided Dice Game! Here's how it works:</p>
        <ol>
            Click the "Roll Dice" button to start a new round.<br>
            Two players, Player A and Player B, will each roll a 20-sided dice.<br>
            Their rolls will be added to calculate their points.<br>
            The player with the highest points wins the round.<br>
            Check the results below to see who won!<br>
        </ol>

        <!-- Roll Dice Button -->
        <form method='POST' action='/process' style="display: inline-block;">
            <button test="submit-button" type="submit" class="btn btn-primary btn-lg">
                <i class="fas fa-dice"></i> Roll Dice
            </button>
        </form>

        <!-- Game History Button -->
        <a href="/history" class="btn btn-secondary btn-lg ml-3">
            <i class="fas fa-history"></i> Game History
        </a>

        <!-- Game Result Display on Index -->
        @if(isset($result))
            @php
                $roundID = $rounds[0]['id'];
            @endphp
            <div test="results-div" class="mt-4 p-3 border rounded">
                <h3 class="mb-3">Result:</h3>
                <p><strong>Round ID:</strong> <span test="roundID">{{ $roundID }}</span></p>
                <p><strong>Player A Rolls:</strong> <span test="playerArolls">{{ $result['Player A Rolls'] }}</span></p>
                <p><strong>Player A Points:</strong> <span test="playerApoints">{{ $result['Player A Points'] }}</span></p>
                <p><strong>Player B Rolls:</strong> <span test="playerBrolls">{{ $result['Player B Rolls'] }}</span></p>
                <p><strong>Player B Points:</strong> <span test="playerBpoints">{{ $result['Player B Points'] }}</span></p>
                <p><strong>Winner:</strong> <span test="winner">{{ $result['Winner'] }}</span></p>
            </div>
        @endif
    </div>
</div>
@endsection
