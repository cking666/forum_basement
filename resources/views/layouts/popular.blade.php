<div class="card">
    <div class="card-header" style="background: rgb(1 51 233); color: #fff; padding: 8px 1.25rem;">Popular</div>
    <div class="list-group">
        @foreach($populars as $popular)
        <a href="{{route('forumslug', $popular->slug)}}" class="list-group-item" id="index_hover" >{{$popular->title}}</a>
        @endforeach
    </div>
</div>