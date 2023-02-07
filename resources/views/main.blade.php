@extends('layouts.master')
@section('content')
<div class="jumbotron text-center">
    <h1>social network</h1>
    <p>socialnetwork by laravel</p>
    <div class="btn-group">
        <a href="{{route('login')}}" type="button" class="btn btn-primary">login</a>
        <a href="{{route('register')}}" type="button" class="btn btn-primary">register</a>
      </div>
  </div>

  <div>
    <button type="button" class="btn btn-primary col-sm-12" data-toggle="modal" data-target="#exampleModal">
        make post
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">make post</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{route('create.post')}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputtitle">title</label>
                      <input type="text" name="title" class="form-control" id="exampleInputtitle" aria-describedby="title" placeholder="title">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputtitle">body</label>
                        <input type="text" name="body" class="form-control" id="exampleInputbody" aria-describedby="body" placeholder="body">
                    </div>
                    <div class="form-group">
                        <label for="myfile">Select a file:</label>
                    <input type="file" name="image" id="myfile" name="myfile">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                  </form>
            </div>

          </div>
        </div>
      </div>



  </div>
  <div class="container">
    <h3 class="text-center mb-5">posts</h3>

    <div class="row justify-content-center">
        @foreach ($posts as $post)
        <div class="card col-sm-6 mt-1 mb-1">
            <div class="card-header">{{$post->user->name}}</div>
            <div class="card-body">
                <h3>{{$post->title}}</h3>
                <img src="{{asset($post->image)}}" alt="" style="width:200px;height:400px;">
                <p>{{$post->body}}</p>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="float right">
                            
                        </div>
                    </div>
                </div>
               </div>
        </div>

    @endforeach
</div>
  </div>






@endsection
