@extends('layouts.app')
@section('title','Buat Tag Baru')
@section('content')
<div class="container">
     <div class="jumbotron" id="tc_jumbotron">
        <div class="col-md-8 offset-md-2">
          <div class="text-center"><h3 style="color: #fff;">Buat Tag Baru</h3></div><hr style="background: #fff"> 
        </div>
      <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card"> 
                <div class="card-body">
                   <form action="{{route('tag.store')}}" method="post">
                      {{csrf_field()}}
                    <div class="form-group">
                      <input type="text" id="tc_input" class="form-control" name="name" placeholder="Name.."> 
                    </div>
                    
             <button type="submit" class="btn btn-success btn-block">Submit</button>
               </form>
              </div>
              </div>
                <br>
              <div class="card"> 
                <div class="card-body">
              <table class="table table-bordered"> 
            <tbody>   
            @foreach($tags as $tag)
               <tr>
                <td>{{$tag->name}}</td>
                <td width="10"><a href="{{route('tag.edit', $tag->id)}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a></td>
                <td width="10"> 
                <form action="{{route('tag.destroy', $tag->id)}}" method="post" style="margin: 0;">
                 {{csrf_field()}}
                  {{method_field('DELETE')}}
                  <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                 </form> 
                </td> 
            </tr> 
            @endforeach
              </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
