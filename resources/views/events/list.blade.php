@extends('layouts.main')
@section('title', 'Events Listing')
@section('content')
    <div class="container-fluid" style="display:inline-block;">
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <table class="table table-responsive">
            <thead>
                <th>Event Name</th>
                <th>Venue</th>
                <th>Description</th>
                <th>Start</th>
                <th>End</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($listing as $item)
                    <tr>
                        <td>{{$item->EventName}}</td>
                        <td>{{$item->Venue}}</td>
                        <td>{{$item->Description}}</td>
                        <td>{{$item->Startdate}}</td>
                        <td>{{$item->Enddate}}</td>
                        <td class="row">
                            <a href="{{route('event_edit', $item->EventsID)}}" class="btn btn-sm btn-info">
                                <i class="fa fa-edit"></i>
                                Edit
                            </a>
                            <form method="post" action="{{route('event_delete', $item->EventsID)}}">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Delete Event?');">
                            <i class="fa fa-trash"></i>
                            </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        
        </table>
    </div>
@endsection