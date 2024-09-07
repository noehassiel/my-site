<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Quote;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Exception;

class FrontController extends Controller
{

    public function index()
    {
        return view('front.index');
    }

    public function quoteAuth()
    {
        return view('front.quote-aut');
    }

    public function quoteLogin(Request $request)
    {

        $password = $request->input('password');

        $quote = Quote::where('password', $password)->first();

        // Check if the quote exists
        if (!$quote) {

            return redirect()->back()->withErrors(['password' => 'Invalid password.']);
        }

        $slug = $quote->slug;

        return redirect()->route('quote.show', ['slug' => $slug]);
    }

    public function quote($slug)
    {

        $quote = Quote::where('slug', $slug)->first();

        if (!$quote) {
            return redirect()->back();
        }


        return view('front.quote')
            ->with('quote', $quote);
    }


    public function email(Request $request)
    {
        $password = $request->password;
        $email = $request->email;
        $name = $request->name;

        if ($password == 'WxjuZ2bqLTY9') {
            //Correo
            $data = array(
                'name' => $name,
                'email' => $email,
            );

            $files = [
                public_path('attachments/cot-derch.pdf'),
            ];

            try {
                Mail::send('mail.proposal', $data, function ($message) use ($data, $files, $email, $name) {
                    $message->to($email, $name)->subject('Hey! Tu cotización llego.');

                    $message->from('hassiel.monterrosas@gmail.com', 'noehassiel');

                    foreach ($files as $file) {
                        $message->attach($file);
                    }
                });

                return redirect()->back();
            } catch (Exception $e) {

                Session::flash('error', 'No se ha identificado servidor SMTP en la plataforma. Configuralo correctamente para enviar correos desde tu sistema.');
                return response()->json(['mensaje' => 'No se ha identificado servidor SMTP en la plataforma. Configuralo correctamente para enviar correos desde tu sistema.'], 200);

                return redirect()->back();
            }
        } else {
        }

        return redirect()->back();
    }
}
