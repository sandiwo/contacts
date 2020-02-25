@extends('layouts.app')

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-2">
        <div class="card">
            <div class="card-body">
                <div class="card-title">Avatar</div>
                <div class="card-text">
                    @php $avatar = $contact->avatar ?: 'default.jpg'; @endphp
                    <img src="{{ asset('contacts/' . $avatar) }}" width="100%" alt="{{ $contact->first_name . ' ' . $contact->last_name }} ">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <form action="{{ route('contact.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
                <div class="card-header">
                    Edit Contact
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label class="control-label">Group:</label>
                                <select name="group_id" class="form-control">
                                    @foreach($groups as $key => $group)
                                        <option value="{{ $key }}" {{ $key == old('group_id', $contact->group_id) ? 'selected' : '' }}>
                                            {{ $group }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="row">
                                <div class="col form-group">
                                    <label class="control-label">First Name:</label>
                                    <input type="text" name="first_name" class="form-control" value="{{ old('first_name', $contact->first_name) }}">
                                </div>
                                <div class="col form-group">
                                    <label class="control-label">Last Name:</label>
                                    <input type="text" name="last_name" class="form-control" value="{{ old('last_name', $contact->last_name) }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Avatar:</label>
                                <input type="file" name="avatar" class="form-control">
                            </div>

                            <div class="row">
                                <div class="col form-group">
                                    <label class="control-label">Email:</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email', $contact->email) }}">
                                </div>
                                <div class="col form-group">
                                    <label class="control-label">Phone:</label>
                                    <input type="text" name="phone" class="form-control" value="{{ old('phone', $contact->phone) }}">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Address:</label>
                                <textarea name="address" class="form-control">{{ old('address', $contact->address) }}</textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-5 form-group">
                                    <label class="control-label">City:</label>
                                    <input type="text" name="city" class="form-control" value="{{ old('city', $contact->city) }}">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label class="control-label">Zip:</label>
                                    <input type="text" name="zip" class="form-control"  value="{{ old('zip', $contact->zip) }}">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label class="control-label">Country:</label>
                                    <input type="text" name="country" class="form-control" value="{{ old('country', $contact->country) }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Note:</label>
                                <textarea name="note" class="form-control">{{ old('note', $contact->note) }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="control-label">Description</label>
                                <textarea name="description" rows="25" class="form-control">{{ old('description', $contact->contactDescription->description) }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-primary">Update Contact</button>
                    <a href="{{ route('contact.index') }}" class="btn btn-sm btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection