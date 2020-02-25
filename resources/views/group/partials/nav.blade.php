<ul class="nav nav-tabs">
    <li class="nav-item">
        <a href="{{ route('group.show', $group->id) }}" class="nav-link {{ Request::segment(3) == null ? 'active' : ''  }}">Group Detail</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('group.contact', $group->id) }}" class="nav-link {{ Request::segment(3) == 'contact' ? 'active' : ''  }}">Contact List ({{ $group->contacts->count() }})</a>
    </li>
</ul>
<div class="pb-2"></div>