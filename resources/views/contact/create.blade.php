@extends('layouts.app')

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-9">
        <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card" style="">
                <div class="card-header">
                    Create Contact
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label class="control-label">Group:</label>
                                <select name="group_id" class="form-control">
                                    @foreach($groups as $key => $group)
                                        <option value="{{ $key }}" {{ $key == old('group_id') ? 'selected' : '' }}>
                                            {{ $group }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="row">
                                <div class="col form-group">
                                    <label class="control-label">First Name:</label>
                                    <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}">
                                </div>
                                <div class="col form-group">
                                    <label class="control-label">Last Name:</label>
                                    <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Avatar:</label>
                                <input type="file" name="avatar" class="form-control">
                            </div>

                            <div class="row">
                                <div class="col form-group">
                                    <label class="control-label">Email:</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                                </div>
                                <div class="col form-group">
                                    <label class="control-label">Phone:</label>
                                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Address:</label>
                                <textarea name="address" class="form-control">{{ old('address') }}</textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-5 form-group">
                                    <label class="control-label">City:</label>
                                    <input type="text" name="city" class="form-control" value="{{ old('city') }}">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label class="control-label">Zip:</label>
                                    <input type="text" name="zip" class="form-control"  value="{{ old('zip') }}">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label class="control-label">Country:</label>
                                    <input type="text" name="country" class="form-control" value="{{ old('country') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Note:</label>
                                <textarea name="note" class="form-control">{{ old('note') }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="control-label">Description</label>
                                <textarea name="description" rows="25" class="form-control">{{ old('description') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-primary">Save new Contact</button>
                    <a href="{{ route('contact.index') }}" class="btn btn-sm btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection