@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card" style="">
            <div class="card-header">
                Contact List
                <a href="{{ route('contact.create') }}" class="float-right btn btn-primary btn-sm">Create new Contact</a>
            </div>
            <div class="card-body">
                <table class="table table-sm table-bordered table-condensed">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Full Name</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Group</td>
                            <td width="10%" class="text-right">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($contacts as $key => $contact) 
                            <tr>
                                <td>{{ $contacts->firstItem() + $key }}</td>
                                <td>{{ $contact->first_name . ' ' . $contact->last_name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->group->name }}</td>
                                <td class="text-right">
                                    <a href="{{ route('contact.show', $contact->id) }}" class="btn btn-sm btn-danger">Show</a>
                                    <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">No Contact found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>     
                <div class="float-right">
                    {{ $contacts->appends(['group' => request()->group])->links() }}
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection