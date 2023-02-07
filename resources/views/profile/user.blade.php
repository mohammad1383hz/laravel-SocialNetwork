@extends('layouts.master')
@section('content')
<form action="{{route('edit.profile.user',['user'=>$user->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="name" value="{{$user->name}}">
      </div>
      <div class="form-groupe">
        <label for="email">email</label>
        <input type="email" class="form-control" id="email" value="{{$user->email}}" name="email">
      </div>
      <div class="form-group">
        <label for="image">image</label>
        <input type="file" name="image" class="form-control" id="image" aria-describedby="image" placeholder="image" value="{{$user->name}}">
      </div>
      <button class="btn btn primary" type="submit">submit</button>
</form>




@endsection

