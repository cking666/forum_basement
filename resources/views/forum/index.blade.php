@extends('layouts.app')
@section('title','Forum')
@section('content')
<div class="container">
  <div class="jumbotron" id="tc_jumbotron" style="background-color: rgb(1 51 233);">
    <div class="card-body" id="xx" style="color: #fff; border:1px solid #fff;">
        <div class="text-center"> 
            <h1 style="    font-size: 3.5rem;">FORUM</h1> 
        <p>Forum tanya jawab. Membantu, Mencari Solusi Selesaikan Masalah Coding Mu. </p>  
        </div>
    </div> 
  </div> 
</div>  
<div class="container"> 
  <div class="row">
    <div class="col-md-12" id="tc_container_wrap">
      <div class="card" id="tc_paneldefault"> 
        <div class="card-body" id="tc_panelbody"  style="background: #f9f9f9;">  
          <div class="card">
            <div class="card-header" style="background-color: rgb(1 51 233);padding: 6px 11px 6px 23px;">
              <div class="menu_a" style="float: left;">
                <a href="{{route('populars')}}">Populer</a> 
                <a href="{{route('tag.index')}}">Tag</a> 
              </div>
              <div class="search" style="margin: 3px;">
                <div class="col-md-4 float-right" style="padding-right: 0;">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." style=" margin-right: 3px;background: #f5f8fa;">
                    <span class="input-group-btn">
                    <button class="btn btn-warning" type="button" style="color: #fff;background: rgb(14 14 14)" >Go!</button>
                    </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8" style="    padding-right: 0;"><br>
            <table class="table table-bordered">
            <thead id="tc_thead" style="background: rgb(1 51 233)">
            <tr>
            <th scope="col">Thread</th>
            <th scope="col">Comments</th>
            <th scope="col">Views</th>
            <th scope="col"></th>
            </tr>
            </thead>
            <tbody style="background: #f9f9f9;"> 
            @foreach($forums as $forum)
            <tr> 
            <td width="453">
            <div class="forum_title">
            <h4> <a href="{{route('forumslug', $forum->slug)}}" style="color: rgb(1 51 233)">{{str_limit($forum->title, 40)}}</a></h4>
            <p> {!! strip_tags(str_limit($forum->description, 60) ) !!}</p> 
            @foreach($forum->tags as $tag)
            <a href="#" class="badge badge-success tag_label" style="background: rgb(1 51 233)">#{{$tag->name}}</a>
                @endforeach
                @if(empty($forum->image))
                @else
            <div class="badge badge-success tag_label_image" style="background: rgb(1 51 233)"><i class="fa fa-image"></i></div> 
                @endif
          </div> 
              </td>
              <td  style="text-align: center"><small> {{$forum->comments->count()}}</small></td>
              <td  style="text-align: center"><small> {{$forum->getPageViews()}}</small></td>
              <td>
          <div class="forum_by">
            <small style="margin-bottom: 0; color: #666">{{$forum->created_at->diffForHumans()}}</small>
            <small>by <a href="#" style="color: rgb(1 51 233)">{{$forum->user->name}}</a></small>
                
          </div>
            </td>
            </tr> 
            @endforeach
              </tbody>
            </table>
            <div class="row justify-content-center">
                <!-- pagination -->
                {!!$forums->links()!!}
            </div>
          </div>
          <div class="col-md-4"> <br>
                <a href="{{route('forum.create')}}" class="btn btn-success btn-block" style="background: rgb(1 51 233)">Buat Pertanyaan</a><br>
                @include('layouts.popular')
          </div>
        </div>
        <hr style="margin-top: 0;"> 
        <div class="card">
        <div class="card-header" ></div>
        <div class="card-body" style="background: rgb(1 51 233)"></div>
        <div class="card-header" ></div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div><br><br>
@endsection