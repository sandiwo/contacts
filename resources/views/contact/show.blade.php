@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card" style="">
            <div class="card-header">
                <div class="float-right">
                    <form  action="{{ route('contact.destroy', $contact->id) }}" style="display:inline" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" onclick="return confirm('Are you sure to delete contact {{ $contact->first_name }}?')" class="btn btn-sm btn-danger">Delete Contact</button>
                    </form>
                    <a href="{{ route('contact.index') }}" class="btn btn-sm btn-secondary">Back</a>
                </div>
                <div class="float-left">
                    <div>
                        <b style="font-size:28px">{{ $contact->first_name . ' ' . $contact->last_name }}</b>
                        <small>Detail Contact</small>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <ul class="list-group col-md-2">
                        <li class="list-group-item d-flex justify-content-between align-items-center active">
                            Avatar
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            @php $avatar = $contact->avatar ?: 'default.jpg'; @endphp
                            <img src="{{ asset('contacts/' . $avatar) }}" width="100%" alt="{{ $contact->first_name . ' ' . $contact->last_name }} ">
                        </li>
                    </ul>
                    <ul class="list-group col-md-6">
                        <li class="list-group-item d-flex justify-content-between align-items-center active">
                            Group Name
                            <span>{{ $contact->group->name }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            First Name
                            <span>{{ $contact->first_name }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Last Name
                            <span>{{ $contact->last_name }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Email
                            <span>{{ $contact->email }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Phone
                            <span>{{ $contact->phone }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Address
                            <span>{{ $contact->address }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            City
                            <span>{{ $contact->city }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Zip
                            <span>{{ $contact->zip }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Country
                            <span>{{ $contact->country }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="row">
                                <div class="col-md-2">Note</div>
                                <span class="col-md-10">{{ $contact->note }}</span>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-group col-md-4">
                        <li class="list-group-item d-flex justify-content-between align-items-center active">
                            Description
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $contact->contactDescription->description }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection