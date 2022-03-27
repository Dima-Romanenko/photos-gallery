@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">All tasks</div>

                    <div class="panel-body">
                        <!-- Текущие задачи -->
                            <div class="row">
                                @foreach($photos as $photo)
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <a href="/w3images/lights.jpg">
                                                <img src="{{$photo->url}}" alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <h5>{{$photo->name}}</h5>
                                                    <p>{{$photo->description}}</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                    </div>
                        <div>
                            <a href="{{route('photos.create')}}"class="btn btn-success"><i class="fa fa-plus">Добавить фото</i></a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection