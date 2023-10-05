<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jamayat;


use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Auth;
use PDF;
use Mail;



class JamayatsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
            $jamayats = Jamayat::all();
            return view('jamayats.index',['jamayats'=>$jamayats]);
        
    }
    




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            
        return view('jamayats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tasmia'=>'required',
            'rakm-itimad'=> 'required',
            'tarikh-tassiss'=> 'required',
            'halat-elmilef'=> 'required',
            'tabaa'=> 'required',
            'kitaa'=> 'required',
            'rakm-itimad'=> 'required',
            'nom-president'=> 'required',
            'prenom-president'=> 'required',
            'email'=> 'required',
            'nachta'=> 'required',
            'adresse'=> 'required',
            'phone'=> 'required',
            'baladia'=> 'required',
            'description'=> 'required',
            'tarikh-tajdid1'=> 'required',
            'tarikh-tajdid2'=> 'required',
            'tarikh-tajdid3'=> 'required',
            'tarikh-tajdid4'=> 'required',
            'tarikh-tajdid5'=> 'required',
            
        ]);

        Jamayat::create([
            'tasmia'=>$request->input('tasmia'),
            'rakm-itimad'=>$request->input('rakm-itimad'),
            'tarikh-tassiss'=>$request->input('tarikh-tassiss'),
            'halat-elmilef'=>$request->input('halat-elmilef'),
            'tabaa'=>$request->input('tabaa'),
            'kitaa'=>$request->input('kitaa'),
            'rakm-itimad'=>$request->input('rakm-itimad'),
            'nom-president'=>$request->input('nom-president'),
            'prenom-president'=>$request->input('prenom-president'),
            'email'=>$request->input('email'),
            'nachta'=>$request->input('nachta'),
            'adresse'=>$request->input('adresse'),
            'phone'=>$request->input('phone'),
            'baladia'=>$request->input('baladia'),
            'description'=>$request->input('description'),
            'tarikh-tajdid1'=>$request->input('tarikh-tajdid1'),
            'tarikh-tajdid2'=>$request->input('tarikh-tajdid2'),
            'tarikh-tajdid3'=>$request->input('tarikh-tajdid3'),
            'tarikh-tajdid4'=>$request->input('tarikh-tajdid4'),
            'tarikh-tajdid5'=>$request->input('tarikh-tajdid5'),
            'user_id'=>  auth()->user()->id 
               
        ]);
        return redirect('/jamayats');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jamaya = Jamayat::where('id',$id)->first();
        return view('jamayats.show-jamaya',['jamaya'=>$jamaya]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
    public function jamayyats_pdf()
    {
        $jamayats = Jamayat::all();
        
      
        return view('jamayats.jamayyatspdf',['jamayats'=>$jamayats]);
        
        
        
    }


    public function send_email_pdf()
    {
      
        $data["email"] = "etp.achihocine@gmail.com";
        $data["title"] = "about mail and pdf";
        $data["body"] = "Hello I am nassima toureche";
  
        $pdf = PDF::loadView('test', $data);
  
        Mail::send('test', $data, function($message)use($data, $pdf) {
            $message->to($data["email"])
                    ->subject($data["title"])
                    ->attachData($pdf->output(), "test.pdf");
        });
  
        dd('Mail sent successfully');
    }

    /**
     * فلترة حسب البلدية.
     */
    public function filtreapcs(Request $request)
    {
        if ($request->tabe3 === 'alltabe3' && $request->apcs === 'allapcs' ) {
            $jamayats = Jamayat::all();
        }

        if ($request->tabe3 === 'alltabe3' && $request->apcs != 'allapcs' ) {
            $jamayats = Jamayat::where('baladia',$request->apcs)->get();
        }

        if ($request->tabe3 != 'alltabe3' && $request->apcs === 'allapcs' ) {
            $jamayats = Jamayat::where('tabaa',$request->tabe3)->get();
        }

        if ($request->tabe3 != 'alltabe3' && $request->apcs != 'allapcs' ) {
            $jamayats = Jamayat::where([['tabaa',$request->tabe3],['baladia',$request->apcs]])->get();
        }
    
        return view('jamayats.index ',['jamayats'=>$jamayats]);
    }

        
    
    
}
