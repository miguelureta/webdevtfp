@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <form class="border border-light p-4">
        <h1 class="text-center">Add a Record</h1>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Student #</label>
                    <input name="no" type="number" class="form-control" maxlength="8" />
                </div>
                <div class="form-group">
                    <label>First Name</label>
                    <input name="fn" type="text" class="form-control" maxlength="50" />
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input name="ln" type="text" class="form-control" maxlength="20" />
                </div>
                <div class="form-group">
                    <label>Course</label>
                    <select name="course" class="form-control">
                        <option value="">Select one...</option>
                        <option>BS-IS</option>
                        <option>BSBA-CA</option>
                        <option>BS-IT</option>
                        <option>AB-MMA</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Email Address</label>
                    <input name="email" type="email" class="form-control" maxlength="100" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input name="pw" type="password" class="form-control" maxlength="20" />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success float-right">
                        Add
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection