<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Message;
use App\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index($id)
    {
        $user_details = User::findOrFail($id);
        $user_msg = User::with('notifyUser')->findOrFail($id);
        return view('admin.user-message', compact('user_details', 'user_msg'));
    }

    public function create($id)
    {
        $user_details = User::findOrFail($id);
        return view('admin.create-msg', compact('user_details'));
    }

    public function store(Request $request)
    {
        $id = $request->user_id;
        $data = $this->getDate($request);
        $data['user_id'] = $id;
        Message::create($data);
        return redirect()->route('admin.user_message', $id)->with('success', "Message Created");
    }

    public function show($id)
    {
        $msg_details = Message::findOrFail($id);
        $user_details = User::findOrFail($msg_details->user_id);
        return view('admin.msg-details', compact('user_details', 'msg_details'));
    }

    protected function getDate(Request $request)
    {
        $rule = [
            'title' => 'required',
            'message'  => 'nullable'
        ];

        return $request->validate($rule);
    }
}
