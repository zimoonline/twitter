@extends('master')

@section('content')

            <h1 class="text-center">Pojam pretraživanja: {{ $query }}</h1><br>
            @foreach($tweets['statuses'] as $tweet)
                <ul class="list-group">
                    <li class="list-group-item">{{ TwitterThu::linkify($tweet['text']) }}
                        <span class="badge"> {{ TwitterThu::ago($tweet['created_at']) }}</span>
                    </li>
                </ul>
            @endforeach

@stop