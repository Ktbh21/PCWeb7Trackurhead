@extends('layouts.app')

@section('title')
    Display Entries
@endsection

@section('content')

    <div class="card text-center mt-5">
        <div class="card-header">
            <b>Headache Details</b>
        </div>
        <div class="card-body">
            <h5 class="card-title">Date: {{ $entry->date }}</h5>
            <p class="card-text"> Duration: {{ $entry->headacheduration }}.</p>
            <p class="card-text"> Sleep duration: {{ $entry->sleepduration }}.</p>
            <p class="card-text"> Pain region: {{$entry->painregion}}.</p>

            <a href="/entry/edit"><span class="btn btn-primary">Edit</span></a>
            <a href="/entry{{ $entry->id }}/delete"><span class="btn btn-danger">Delete</span></a>
        </div>
    </div>

@endsection