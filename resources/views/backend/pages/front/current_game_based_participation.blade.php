@extends('backend.layouts.app')

@section('pageName')
    Perticipations Users
@endsection

@section('styles')
    <!-- Footable CSS -->
    <link href="{{ asset('/assets/backend/plugins/footable/css/footable.core.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('tournament.game.index') }}" class="btn btn-sm btn-primary mb-3">back</a>
                    <h4 class="card-title">Game Name : {{ $game->game_name }} <span class="text-primary">(Total Participation : {{ $participation_count }})</span></h4>
                    <h6 class="card-subtitle text-danger">Total Amount : {{ $total_amount }} Tk</h6>
                    <div class="table-responsive"> 
                        <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Number</th>
                                    <th>Game</th>
                                    <th>Fee</th>
                                    <th>Country</th>
                                    <th>Created Date</th>
                                    <th>Created Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($participations as $user)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $user->Subscriber->name ?? 'NULL' }}</td>
                                        <td>{{ $user->Subscriber->phone_num }}</td>
                                        <td>{{ $user->TournamentGame->game_name }}</td>
                                        <td>{{ $user->amount }}</td>
                                        <td>{{ $user->Subscriber->country }}</td>
                                        <td>{{ $user->created_at->format('Y-m-d') }}</td>
                                        <td>{{ $user->created_at->format('h:i A') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
