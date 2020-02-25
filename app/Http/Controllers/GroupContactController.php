<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupContactController extends Controller
{
    public function index(Group $group)
    {
        $contacts = $group->contacts()->paginate(10);
        return view('group.contact', compact('group', 'contacts'));
    }
}
