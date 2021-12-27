<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inquiry;
use App\Models\City;
use Mail;
use alert;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function anfrage($city=null)
    {
        if(empty($city)){
            $city_url = '';
            $city = "Nürnberg";
            $citymeta = 'Melkin, Booking and Reservation form Wizard by Ansonika.';
        }else{
            $findcity = City::where('city_name',$city)->first();

            if(empty($findcity))
            {
                alert()->error('Url not available');
                return redirect('/');       
            }
            $city_url = $findcity->city_name;
            $city =$findcity->city_name;
            $citymeta = $findcity->meta_description;
        }
       
        return view('inquiry.index',compact('city_url','city','citymeta'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $inquiry = new Inquiry(); 
        $inquiry->time = $request->time;
        $inquiry->app  = $request->treatments;
        $inquiry->app_category = implode(',', $request->options);
        $inquiry->first_name = $request->first_name;
        $inquiry->last_name = $request->last_name;
        $inquiry->email = $request->email; 
        $inquiry->phone = $request->telephone;
        $save=$inquiry->save();

        $data = array();
        $data['time'] = $request->time;
        $data['treatments'] = $request->treatments;
        $data['options'] = implode(',', $request->options);
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name; 
        $data['email'] = $request->email; 
        $data['telephone'] = $request->telephone; 
        $data['terms'] = $request->terms; 
        $admin_subject = "Eine App Anfrage für Tridhya";
        $admin_email = config('constant.MAIL_TO');
        $from_name = config('constant.MAIL_FROM_NAME');
        $from_email = config('constant.MAIL_FROM_EMAIL');
        $user['details'] = $data;
    
        Mail::send('inquiry.inquiry_admin_email', $user, function($message)use($admin_subject,$admin_email,$from_email,$from_name) {
            $message->from($from_email,$from_name)->to($admin_email)->subject($admin_subject);
        });
        if($request->city=='Nürnberg')
        {
          $city='';
        }
        else
        {
            $city = $request->city;
        }         
        if($save)
        {
            return redirect()->route('inquiry.confirm',$city);
            
        } 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($city=null)
    {
        if(empty($city)){
            $city = "Nürnberg";
            $citymeta = 'Melkin, Booking and Reservation form Wizard by Ansonika.';
        }else{
            $findcity = City::where('city_name',$city)->first();

            if(empty($findcity))
            {
                alert()->error('Url not available');
                return redirect('/');       
            }
            $city =$findcity->city_name;
            $citymeta = $findcity->meta_description;
        }
        return view('inquiry.Confirmation',compact('city','citymeta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
