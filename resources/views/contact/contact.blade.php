@extends('layouts.group')

@section('group-content')
<table class="table table-bordered table-sm table-hover">
    <thead>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone Number</th>
        </tr>
    </thead>
    <tbody>
        @forelse($contacts as $contact)
            <tr>
                <td>{{ $contact->first_name . " " . $contact->first_name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Contact not found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
{{ $contacts->links() }}
@endsection