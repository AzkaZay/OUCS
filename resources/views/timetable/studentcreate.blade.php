@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-table">
                    <div class="card-body">
                    <h2>Create New Student Schedule</h2>
                    <form method="POST" action="{{ route('student-schedules.store', ['student_id' => Session::get('user_id')]) }}">
                            @csrf
                            <div class="form-group">
                                <label for="module_name">Module Name:</label>
                                <input type="text" class="form-control" id="module_name" name="module_name">
                            </div>
                            <div class="form-group">
                                <label for="class">Class:</label>
                                <input type="text" class="form-control" id="class" name="class">
                            </div>
                            <div class="form-group">
                                <label for="datetime">Date/Time:</label>
                                <input type="datetime-local" class="form-control" id="datetime" name="datetime">
                            </div>
                            <div class="form-group">
                                <label for="number_of_classes">Number of Classes:</label>
                                <input type="number" class="form-control" id="number_of_classes" name="number_of_classes">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
