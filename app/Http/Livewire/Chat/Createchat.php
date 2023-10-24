<?php

namespace App\Http\Livewire\Chat;

use App\Models\Doctor;
use App\Models\Message;
use App\Models\Patient;
use Livewire\Component;
use App\Models\Conversation;
use Illuminate\Support\Facades\DB;

class Createchat extends Component
{
public $users;
public $auth_email;
public function mount(){
    $this->$auth_email = auth()->user()->email;
}
public function createConversation($receiver_email){
    $chek_Conversation = Conversation::chekConversation($this->auth_email,$receiver_email)->get();
    if ($chek_Conversation->isEmpty()) {
        DB::beginTranssoction();
        try{
            $createConversation = Conversation::create([
                'sender_email' =>$this->auth_email,
                'receiver_email'=>$receiver_email,
                'last_time_message'=>null,
            ]);
            Message::create([
                'conversation_id'=>$createConversation->id,
                'sender_email' => $this->auth_email,
                'receiver_email'=> $receiver_email,
                'body'=>null,
            ]);
            DB::commit();
        }
        catch (\Exception $e) {
            DB::rollBack();
        }
    } else {
        dd('Conversation yes');
    }


}

    public function render()
    {
        if (Auth::guard('patient')->check()) {
            $this->users->Doctor::all();
        } else {
            $this->users->Patient::all();
        }

        return view('livewire.chat.createchat')->exists('Dashboard.layouts.master');
    }
}
