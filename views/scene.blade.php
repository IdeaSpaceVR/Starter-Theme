@extends('theme::index')

@section('title', $space_title)

@section('scene')

    <a-scene>

        @include('theme::assets')

        <a-entity layout="type: line; margin: 1.4" position="-2.4 -1 0" rotation="-60 0 90">

        @foreach ($content['messages'] as $message)

            <a-text position="0 0 0" rotation="0 0 -90" color="#ffd536" value="{{ $message['message-text']['#value'] }}"></a-text>
  
        @endforeach

            <a-animation attribute="position" to="-2.4 50 -100" dur="700000" easing="linear"></a-animation>

        </a-entity>

        <a-sky color="#000000"></a-sky>

    </a-scene>

@endsection
