@extends('layouts.app')
@section('title','Edit Tag: {{$tag->name}}')
@section('content')
<div class="container">
    <div class="jumbotron" id="tc_jumbotron">
        <div class="col-md-8 offset-md-2">
            <div class="text-center">
                <h3 style="color: #fff;">Edit Tag: {{$tag->name}}</h3>
            </div>
            <hr style="background: #fff">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('tag.update', $tag->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <input type="text" id="tc_input" class="form-control" name="name"
                                    value="{{$tag->name}}">
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Submit</button>
                        </form>
                    </div>
                </div>
                <br>

            </div>
        </div>
    </div>
</div>
@endsection