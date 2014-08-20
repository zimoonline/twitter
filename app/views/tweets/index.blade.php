@extends('master')

@section('content')


            <h3 class="text-center">Tags: {{ link_to('/hiring%20developer', 'Hiring developer') }} | {{ link_to('/seeking%20developer', 'Seeking developer') }}</h3>

           @foreach($tweets['statuses'] as $tweet)
                <ul class="list-group">
                    <li class="list-group-item">{{ TwitterThu::linkify($tweet['text']) }}
                        <span class="badge"> {{ TwitterThu::ago($tweet['created_at']) }}</span>
                    </li>
                </ul>
            @endforeach

@stop