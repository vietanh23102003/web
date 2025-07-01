<?php

namespace App\Http\Controllers;
use App\Models\messages;
use App\Models\User;
use App\Models\Profile;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function getOldMessage(Request $request){
        $updateFriendMessages = messages::where('from', Auth::user()->id)->where('to',$request->toUserId)->update(['read_date' => Carbon::parse($request->date)]);
        $updateYourMessages = messages::where('from', $request->toUserId)->where('to',Auth::user()->id)->update(['read_date' => Carbon::parse($request->date)]);
        $yourMessages = messages::where('from', Auth::user()->id)->where('to',$request->toUserId)->get();
        $friendMessages = messages::where('from',$request->toUserId)->where('to',Auth::user()->id)->get();
        $yourProfile = Profile::whereId(Auth::user()->id)->first();
        $friendProfile = User::whereId($request->toUserId)->first();

        return response()->json([
            'yourMessages' => $yourMessages,
            'friendMessages' => $friendMessages,
            'yourProfile' => $yourProfile,
            'friendName' => $friendProfile->first_name." ".$friendProfile->last_name
        ]);
    }

    protected function createNewMessages(array $data){
        return messages::create([
            'from' => Auth::user()->id,
            'to' => $data['toUserId'],
            'content' => $data['messages'],
            'send_date' => Carbon::parse($data['date']),
            // 'read_date' => Carbon::parse('00-00-0000 00:00')->format('Y-m-d')
        ]);
    }

    public function sendMessage(Request $request){
        $messages = $this->createNewMessages($request->all());
        return response()->json([
            'Success' => true
        ]);
    }
    public function index(){

    }
}
