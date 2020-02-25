@extends('layouts.group')

@section('group-content')
    <ul class="list-group col-md-6">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <b>Group Name</b>
            <span>{{ $group->name }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="row">
                <div class="col-md-2"><b>Description</b></div>
                <span class="col-md-10">{{ $group->description }}</span>
            </div>
        </li>
    </ul>
@endsection