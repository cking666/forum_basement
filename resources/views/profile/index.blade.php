@extends('layouts.app')
@section('title',"user: $user->name")
@section('content')
<div class="container">
    <div class="jumbotron" id="tc_jumbotron_profile">
        <div class="card-body">
            <div class="text-center">
                <div class="profile_img">
                    <img src="{{asset('images/profile.jpg')}}" style="background: #fff;">
                </div>
                <div id="user_name">
                    <h3>{{$user->name}}</h3>
                    <br>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="card" style="border: none; text-align: center;">
                    <div class="card-header" style="background: #f5f8fa; padding: 0;">
                        <div class="footer_sosial_profile">
                            <a href=""> <i class="fa fa-edit"></i></a>
                            <a href=""><i class="fa fa-list"></i></a>
                            <a href=""><i class="fa fa-search"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12" id="tc_container_wrap">
            <div class="card" id="tc_paneldefault">
                <div class="card-body" id="tc_panelbody" style="background: #f9f9f9;">
                    <div class="card">
                        <div class="card-header" style="background-color: rgb(1 51 233)">
                            <div class="menu_a" style="float: left;">
                                <a href="#">{{$user->name}} Threads</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <tbody>
                                    @forelse($forums as $forum)
                                    <tr>
                                        <td>{{$forum->title}}<i style="font-size: 10px; color: #999;">
                                                {{$forum->created_at->diffForHumans()}}, {{$forum->comments->count()}}
                                                Comments, {{$forum->getPageViews()}} Views</i>
                                        </td>
                                        @if(auth()->user()->id == $forum->user_id)
                                        <td width="10"><a href="{{route('forum.edit', $forum->slug)}}"
                                                class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a></td>
                                        <td width="10">
                                            <form action="{{route('forum.destroy', $forum->id)}}" method="post"
                                                style="margin: 0;">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <button type="submit" class="btn btn-sm btn-danger"><i
                                                        class="fa fa-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                        @endif
                                        <td width="10"><a href="{{route('forumslug', $forum->slug)}}"
                                                class="btn btn-sm btn-info"><i class="fa fa-eye"></i> View</a></td>
                                    </tr>

                                    @empty
                                    <br>
                                    <div class="text-center">No Thread</div>


                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card" style="border: none;">
                        <div class="card-header"></div>
                        <div class="card-body" style="background: rgb(1 51 233)"></div>
                        <div class="card-header"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection