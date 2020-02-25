@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card" style="">
            <div class="card-header">
                Group List
                <a href="{{ route('group.create') }}" class="float-right btn btn-primary btn-sm">Create new Group</a>
            </div>
            <div class="card-body">
                <table class="table table-sm table-bordered table-condensed">
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td width="10%" class="text-right">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($groups as $group) 
                            <tr>
                                <td>{{ $group->name }}</td>
                                <td class="text-right">
                                    <a href="{{ route('group.show', $group->id) }}" class="btn btn-sm btn-danger">Show</a>
                                    <a href="{{ route('group.edit', $group->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">No group found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>     
                <div class="float-right">
                    {{ $groups->links() }}
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection