@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form action="{{ route('profile.postCreate') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="date">Date</label>
                        <input class="form-control" type="text" name="date" id="date">
                    </div>

                    <div class="form-group row">
                        <label for="headacheduration">Duration in minutes</label>
                        <input type="number" name="headacheduration" id="headacheduration">
                    </div>
                    
                    <div class="form-group row">
                        <label for="sleepduration">Sleep Duration in minutes</label>
                        <input type="number" name="sleepduration" id="sleepduration">
                    </div>

                    <div class="form-group row">
                        <label for="painregion">Pain area/ region on head</label>
                        <input type="text" name="painregion" id="painregion">
                    </div>

                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary">Create Entry</button>
                    </div>
                </form>

<!-- add another form for update and delete? -->

            </div>
            <div class="col-4"></div>
        </div>
    </div>
@endsection

