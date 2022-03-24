@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Добавить фото</div>

                    <div class="panel-body">
{{--                        @include('errors.errors')--}}
                        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Имя задачи -->
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Название</label>
                                <div class="col-sm-6">
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description" class="col-sm-3 control-label">Описание</label>
                                <div class="col-sm-6">
                                    <input type="text" name="description" id="name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="photo" class="col-sm-3 control-label">Описание</label>
                                <div class="col-sm-6">
                                    <input type="file" name="photo" id="name" class="form-control">
                                </div>
                            </div>



                            <!-- Кнопка добавления задачи -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-plus"></i> Добавить
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



