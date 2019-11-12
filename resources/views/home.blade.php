@extends('layouts.app')

@section('content')
    @component('components.range')
    @endcomponent()

    @for($i = 0; $i < 5; $i++)
        @component('components.record')
        @endcomponent()
    @endfor()

@endsection
