@extends('master')
@section('content')
    <div class="content title">Edit members</div>
    <form  action="update" method="post">
        {{csrf_field()}}
        <label style="font-weight: bold">Enter Member Name:</label><input
                class="form-control"
                type="text"
                placeholder="Enter member name"
                style="width: 30%"
                name="member_name"
                value="{{$id->member_name}}"
        >
        <input class="btn btn-success" type="submit" value="update">

    </form>


@endsection