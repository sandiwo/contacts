@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card" style="">
            <div class="card-header">
                <div class="float-right">
                    <form action="{{ route('group.destroy', $group->id) }}" style="display:inline" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" onclick="return confirm('Are you sure to delete group {{ $group->name }}?')" class="btn btn-sm btn-danger">Delete Group</button>
                    </form>
                    <a href="{{ route('group.index') }}" class="btn btn-sm btn-secondary">Back</a>
                </div>
                <div class="float-left">
                    <div>
                        <b style="font-size:28px">{{ $group->name }}</b>
                        <small>Detail Group</small>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @include('group.partials.nav')
                @yield('group-content')
            </div> 
        </div>
    </div>
</div>
@endsection