@extends('layouts.app')

@section('content')
<style>
    .card {
        cursor: pointer;
    }
    .card:hover {
        transform: scale(1.2);
        transition: 500ms;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="row">
                        @foreach($photos as $photo)

                                <div class="col-md-4 card">
                                    <div class="thumbnail">
                                        <img src="{{$photo->url}}" alt="Lights" style="width:100%">
                                        <div class="caption">
                                            <h5>{{$photo->name}}</h5>
                                            <p>{{$photo->description}}</p>
                                        </div>
                                    </div>
                                </div>

                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
