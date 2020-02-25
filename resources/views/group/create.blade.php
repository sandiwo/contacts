@extends('layouts.app')

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <form action="{{ route('group.store') }}" method="POST">
            @csrf
            <div class="card" style="">
                <div class="card-header">
                    Create Group
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label><b>Name:</b></label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label><b>Description:</b></label>
                        <textarea name="description" class="form-control">{{ old('description') }}</textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-primary">Save new Group</button>
                    <a href="{{ route('group.index') }}" class="btn btn-sm btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection