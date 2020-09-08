@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Weather') }}</div>

                <div class="card-body">
                {!! Form::open(['url' => '/currentWeather','method' => 'POST']) !!}
                    <div class="form-group">
                        <label>City:</label>
                        <input type="text" class="form-control" name="city" placeholder="Enter city name..."/>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" />
                    </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
