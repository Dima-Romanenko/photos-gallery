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
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="row">
                        @foreach($photos as $photo)
                                <div class="col-md-4 p-0">
                                    <div>
                                        <img src="{{$photo->url}}" class="photo" alt="Lights" style="width:100%">
{{--                                       <div class="caption">--}}
{{--                                          <h5>{{$photo->name}}</h5>--}}
{{--                                           <p>{{$photo->description}}</p>--}}
{{--                                        </div>--}}
{{--                                        <form method="get" action="{{route('photos.show', $photo->id)}}">--}}
{{--                                            {{csrf_field()}}--}}
{{--                                            <button class="btn btn-success btn-sm">Show</button>--}}
{{--                                        </form>--}}
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
