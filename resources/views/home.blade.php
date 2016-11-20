@extends('layouts.app')

@section('content')

    <img src="{{asset(App\Division::where('title', 'shaman')->first()->heroes()->where('name', 'Thrall')->first()->image)}}">

@endsection
