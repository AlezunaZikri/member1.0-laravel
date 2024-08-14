<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Members;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    // nampilin index
    public function index()
    {
        $member = Member::all();
        return view('index', compact('member'));
    }

    // nampilin form
    public function input()
    {
        return view('input');
    }

    // create data
    public function store(Request $request)
    {
       // dd($request->except(['_token']));

        $member = Member::create($request->except(['_token']));
        return redirect('/');
    }

    // nampilin data edit
    public function edit($id)
    {
        $member = Member::find($id);
        return view('/update/edit',compact(['member']));
    }

    // edit
    public function update($id, Request $request)
    {
       $member = Member::find($id);
       $member->update($request->all());
       return redirect('/');
    }

    // delete
    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect('/');
    }
}
