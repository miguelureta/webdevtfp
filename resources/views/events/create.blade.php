@extends('layouts.main')
@section('title', 'Add Event')
@section('content')
<div class="card col-lg-4 container">
    @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div> 
        @endforeach
    @endif
    <form class="border border-light p-5" action="{{route('event_create')}}" method="post">
    {{csrf_field()}}
    <p class="h4 mb-4 text-center">Add Event</p>

    <div class="form-group row">
        <input class="form-control" id="eventname" name="eventname" type="text" placeholder="Event Name">
    </div>

    <div class="form-group row">
        <input class="form-control" id="venue" name="venue" type="text" placeholder="Venue">
    </div>

    <div class="form-group row">
        <label for="startdate">Start Date</label>
        <input class="form-control" id="startdate" name="sdate" type="date">
    </div>

    <div class="form-group row">
        <label for="enddate">End Date</label>
            <input class="form-control" id="enddate" name="edate" type="date">
    </div>

    <div class="form-group row">
        <textarea class="form-control rounded-0" id="desc" name="description" placeholder="Event Description"></textarea>
    </div>

    <div class="form-group row">
        <div class="input-group mb-4">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="fileInput" name="eimage" aria-describedby="fileInput">
                <label class="custom-file-label" for="fileInput">Event Image</label>
            </div>
        </div>
    </div>
        

        

        

        

        

        

        <button class="btn btn-info btn-block" type="submit">Save</button>
    </form>
</div>
@endsection