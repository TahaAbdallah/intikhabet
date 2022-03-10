<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Sentinel;
use Reminder;
use Mail;
use App\Models\Admin;

class ForgetPassword extends Controller
{
    // public function forget()
    // {
    //     return view('admin.auth.forgetPage');
    // }

    // public function forgetProccess(Request $request)
    // {
    //     $admins = Admin::whereEmail($request->email)->first();

    //     if ($admins == null) {
    //         return redirect()->back()->with(['error' => 'الايميل غير موجود']);
    //     }

    //     $admins = Sentinel::findById($admins->id);
    //     $reminder = Reminder::exists($admins) ?: Reminder::create($admins);
    //     $this->sendEmail($admins, $reminder->code);

    //     return redirect()->back()->with(['success' => 'لقد تم ارسال رسالة الى الايميل لاعادة تعيين كلمة مرور جديدة']);
    // }


    // public function sendEmail($admins, $code)
    // {
    //     Mail::send(

    //         'admin.forgetEmail',
    //         ['Admin' => $admins, 'code' => $code],
    //         function ($message) use ($admins) {
    //             $message->to($admins->email);
    //             $message->subject("$admins->name, اعادة تعيين كلمة مرور جديدة");
    //         }


    //     );
    // }
}
