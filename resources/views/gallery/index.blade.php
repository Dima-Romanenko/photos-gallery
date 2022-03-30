@extends('layouts.app')

@section('content')
    <style>
        .p-0 {
            padding: 0;
        }
        .justify-center {
            display: flex;
            justify-content: center;
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
                        @foreach($photos as $photo)
                            <div class="col-md-4 p-0">
                                    <img src="{{$photo->url}}" alt="Lights" class="photo">
                            </div>
                        @endforeach
                    </div>
                    <div class="justify-center">{{$photos->links()}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection