@extends('layouts.main')
@section('title', 'Image Gallery')
@section('content')
<div class="container">


    <h3>Image Gallery</h3>

    <form action="{{ route('upload') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">

        {!! csrf_field() !!}
        @if (count($errors) > 0)

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif

        <div class="row">
            <div class="col-md-5">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col-md-5">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="col-md-2">
                <br/>
                <button type="submit" class="btn btn-success">Upload</button>
            </div>
        </div>

    </form> 


    <div class="row">

    <div class='list-group gallery'>


            @if($images->count())

                @foreach($images as $image)

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3' style="border-style:solid;">

                    <a class="thumbnail fancybox" rel="ligthbox" href="/images/{{ $image->image }}">

                        <img class="img-responsive" src="{{asset('/images/'.$image->image)}}" />

                        <div class='text-center'>

                            <small class='text-muted'>{{ $image->title }}</small>

                        </div> <!-- text-center / end -->

                    </a>


                </div> <!-- col-6 / end -->

                @endforeach

            @endif


        </div> <!-- list-group / end -->

    </div> <!-- row / end -->

</div> <!-- container / end -->

@endsection