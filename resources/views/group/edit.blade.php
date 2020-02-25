@extends('layouts.app')

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-4">
        <form action="{{ route('group.update', $group->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="card" style="">
                <div class="card-header">
                    Edit Group
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col form-group">
                            <label class="control-label">Name:</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name', $group->name) }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <label class="control-label">Description:</label>
                            <textarea name="description" class="form-control">{{ old('description', $group->description) }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-primary">Update Group</button>
                    <a href="{{ route('group.index') }}" class="btn btn-sm btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection