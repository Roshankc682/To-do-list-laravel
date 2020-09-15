@extends('layout.header_footer')



@section('index_page_content')



	<form action="update-final" method="POST">
		@csrf

  <div class="form-group">
  	<input type="hidden" name="id_to_edit" value="{{$todo_edit->id}}">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name" value="{{$todo_edit->name}}">
  </div>

 
 <!-- todo_edit -->
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" placeholder="Description" value="{{$todo_edit->description}}">{{$todo_edit->description}}</textarea>
  </div>
  <center><button type="submit" name="button_name" value="button_name_undefined" class="btn btn-dark">Submit Edit</button>
  </center>

</form>
@if($errors->any())
  <div class="alert alert-danger">
   <ul class="list-group">
    @foreach($errors->all() as $error)
      <li class="list-group-item">
        {{$error}}
      </li>
    @endforeach
   </ul>
  </div>
@endif
@endsection