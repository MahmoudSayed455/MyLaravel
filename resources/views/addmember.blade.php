@extends('master')
@section('content')
    <div class="content title">Add New members</div>
    <div class="container-fluid " class="bg-dark" >
<form  action="/add" method="post"  >
    {{csrf_field()}}
    <label style="font-weight: bold; color: black">Enter Member Name:</label><input
                             class="form-control "
                             type="text"
                             placeholder="Enter member name"
                             style="width: 30%"
                             name="member_name"
                        >
    <input class="btn btn-success" type="submit" value="Add">

</form>

    </div>

@endsection