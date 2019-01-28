@extends('template.master')
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div style="margin-top: 100px">
<form  action="update" method="post" >
    {{csrf_field()}}
    Enter Title:<input
            class="form-control"
            type="text"
            placeholder="Enter title"
            style="width: 50%"
            name="title"
            value="{{$id->title}}"
    ><br>
    Enter content:<input
            class="form-control"
            type="text"
            placeholder="Enter content"
            style="width: 50%"
            name="Content"
            value="{{$id->content}}"
    ><br>
    Enter writer name:<input
            class="form-control"
            type="text"
            placeholder="Enter writer name"
            style="width: 50%"
            name="writer_name"
            value="{{$id->writer_name}}"
    ><br>
    uploade image:<input
            class="form-control"
            type="file"
            name="post_image"
    ><br>
    <input class="btn btn-success" type="submit" value="update">

</form>
    </div>
@endsection