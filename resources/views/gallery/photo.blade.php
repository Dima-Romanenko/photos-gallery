@extends('layouts.app')

@section('content')
<style>
    form {
        margin: 10px;
    }
    .justify-end {
        display:flex;
        justify-content: space-between;
    }
    .heart {
        position: relative;
    }
    .checkbox-label {
        cursor: pointer;
    }
    .checkbox {
        position: absolute;
        display:none;
    }
    i {
        position: absolute;
    }
    .active {
        display: block;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">All tasks</div>

                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="thumbnail">
                            <img src="{{$photos->url}}" alt="Lights" style="width:100%">
                            <div class="caption">
                                <h5>{{$photos->name}}</h5>
                                <p>{{$photos->description}}</p>
                            </div>
                            <div class="justify-end">
                                <form action="#">
                                    <button>
                                        <i class="fa fa-heart-o"></i>
                                    </button>
                                </form>
                                <form method="post" action="">
                                    {{csrf_field()}}
                                    <button class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
