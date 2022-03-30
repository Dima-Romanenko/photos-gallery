@extends('layouts.app')

@section('content')
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">All tasks</div>

                    <div class="panel-body">
                        <!-- Текущие задачи -->
                            <div class="row">
                                @foreach($photos as $photo)
                                    <div class="col-md-12">

                                        <div class="thumbnail">
                                            <img src="{{$photo->url}}" alt="Lights" style="width:100%">
                                            <div class="caption">
                                                <h5>{{$photo->name}}</h5>
                                                <p>{{$photo->description}}</p>
                                                <div class="row">
                                                    <form method="POST" action="{{route('photos.destroy', $photo->id)}}">
                                                        {{csrf_field()}}
                                                        {{method_field('DELETE')}}
                                                        <button class="btn btn-danger btn-sm end-block" style="margin:10px">Удалить</button>
                                                    </form>
                                                </div>
                                            </div>
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