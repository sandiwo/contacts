@extends('layouts.group')

@section('group-content')
<table class="table table-bordered table-sm table-hover">
    <thead>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th class="text-right">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($contacts as $contact)
            <tr>
                <td>{{ $contact->first_name . " " . $contact->last_name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td class="text-right">
                    <a href="{{ route('contact.show', $contact->id) }}" class="btn btn-success btn-sm">Detail</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Contact not found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
<div class="float-right">
    {{ $contacts->links() }}
</div>
@endsection