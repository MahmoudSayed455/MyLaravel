@extends('master')
@section('content')

    <span class="content title"> All Members</span>
   <table class="table table-hover table-bordered">



@foreach($members as $member)
    <tr>
        <th>
            Name:
        </th>
        <td>
     {{$member->member_name}}
        </td>
        <td>
            <button class="btn btn-danger"> <a class="content" style="color: white; font-weight: bold" href="/members/{{$member->id}}/delete">Delete</a></button>
            <button class="btn btn-info   "> <a class="content" style="color: white; font-weight: bold" href="/members/{{$member->id}}/edit">Edit</a></button>
        </td>
    </tr>
    @endforeach
   </table>
@endsection