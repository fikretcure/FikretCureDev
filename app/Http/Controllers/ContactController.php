<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactAdminInfoShipped;
use App\Mail\ContactShipped;
use Illuminate\Support\Facades\Mail;

/**
 *
 */
class ContactController extends Controller
{
    /**
     * @param ContactRequest $request
     * @return string
     */
    public function __invoke(ContactRequest $request): string
    {
        Mail::to($request->input("email"))->send(new ContactShipped($request->validated()));
        Mail::to("fikretcure@gmail.com")->send(new ContactAdminInfoShipped($request->validated()));
        return "OK";
    }

}
