@extends('layouts.app')

@section('content')
    <style>
        .p-0 {
            padding: 0;
        }
        .photo {
            width: 100%;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Welcome to our gallery</div>

                    <div class="panel-body p-0">
                        @foreach($photos as $i=>$photo)
                            @if($i <= 11)
                            <div class="col-md-4 p-0">
                                    <img src="{{$photo->url}}" alt="Lights" class="photo">
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection