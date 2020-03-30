@extends('layouts.main')
@section('title', 'Update Event')
@section('content')
<div class="card col-lg-4 container">
    @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div> 
        @endforeach
    @endif
    <form class="border border-light p-5" action="{{route('event_update', $listing->EventsID)}}" method="post">
    {{csrf_field()}}
    <p class="h4 mb-4 text-center">Update Event Details</p>

    <div class="form-group row">
        <input class="form-control" id="eventname" name="eventname" type="text" placeholder="Event Name" value="{{$listing->EventName}}">
    </div>

    <div class="form-group row">
        <input class="form-control" id="venue" name="venue" type="text" placeholder="Venue" value="{{$listing->Venue}}">
    </div>

    <div class="form-group row">
        <label for="startdate">Start Date</label>
        <input class="form-control" id="startdate" name="sdate" type="date" value="{{$listing->Startdate}}">
    </div>

    <div class="form-group row">
        <label for="enddate">End Date</label>
            <input class="form-control" id="enddate" name="edate" type="date" value="{{$listing->Enddate}}">
    </div>

    <div class="form-group row">
        <textarea class="form-control rounded-0" id="desc" name="description" placeholder="Event Description" >{{$listing->Description}}</textarea>
    </div>

    <div class="form-group row">
        <div class="input-group mb-4">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="fileInput" name="eimage" aria-describedby="fileInput">
                <label class="custom-file-label" for="fileInput">Event Image</label>
            </div>
        </div>
    </div>
        
        <button class="btn btn-info btn-block" type="submit">Update</button>
    </form>
</div>
@endsection