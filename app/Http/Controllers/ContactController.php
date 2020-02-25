<?php

namespace App\Http\Controllers;

use App\Group;
use App\Contact;
use App\Http\Requests\Contact\StoreRequest;
use App\Http\Requests\Contact\UpdateRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::paginate(10);

        return view('contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::pluck('name', 'id');

        return view('contact.create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        $validated['avatar'] = $this->uploadAvatar($validated['avatar']);

        Contact::create($validated)
            ->contactDescription()->create($validated);

        flash("Success create a contact $request->first_name.")->success();

        return redirect()->route('contact.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $groups = Group::pluck('name', 'id');
        return view('contact.edit', compact('contact', 'groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Contact $contact)
    {
        $validated = $request->validated();
        $validated['avatar'] = $request->hasFile('avatar') ?
            $this->uploadAvatar($request->avatar) : $contact->avatar;

        tap($contact)->update($validated)
            ->contactDescription->update($validated);

        flash("Success update contact $request->first_name.")->success();

        return redirect()->route('contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->contactDescription->delete();
        $contact->delete();

        flash("Success delete contact $contact->first_name.")->success();

        return redirect()->route('contact.index');
    }

    protected function uploadAvatar($file) {
        $filename = $file->getClientOriginalName();
        $file->move(public_path('contacts'), $filename);

        return $filename;
    }
}
