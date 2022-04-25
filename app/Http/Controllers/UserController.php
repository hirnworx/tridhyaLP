<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use alert;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($city=null)
    {
        $title = 'App Entwicklung in Nürnberg';
        if(empty($city)){
            $default_city = City::where('city_name','Nürnberg')->first();
            $city_url = '';
            $city = $default_city->city_name;
            $citymeta = $default_city->meta_description;
            $city_discription = $default_city->city_discription;
        }else{
            $findcity = City::where('city_name',$city)->first();

            if(empty($findcity))
            {
                alert()->error('Url not available');
                return redirect('/');       
            }
            $city_url = $findcity->city_name;
            $city =$findcity->city_name;
            $title = 'App Entwicklung in '.$city;
            $citymeta = $findcity->meta_description;
            $city_discription = $findcity->city_discription;
        }
        return view('index',compact('title','city_url','city','citymeta','city_discription'));
    }

    public function datenschutz($city=null)
    {
        $title = 'Datenschutz';
        if($city==null)
        {
            $city_url = '';
            $city = "Nürnberg";
            $citymeta = 'Wir Entwikeln Mobile Apps. An unserem Standort in Nürnberg erhalten Sie Android, iOS, Hybrid- und Progressive Web Apps';  
           
        }
       else
        {
            $findcity = City::where('city_name',$city)->first();

            if(empty($findcity))
            {
                alert()->error('Url not available');
                return redirect('/');       
            }
            $city_url = $city;
            $city =$city;
            $citymeta = $findcity->meta_description;
        }
        return view('datenschutz',compact('title','city_url','city','citymeta'));
    }
    public function impressum($city=null)
    {
      $title = 'impressum';
      if($city==null)
       {
            $city_url = '';
            $city = "Nürnberg";
            $citymeta = 'Wir Entwikeln Mobile Apps. An unserem Standort in Nürnberg erhalten Sie Android, iOS, Hybrid- und Progressive Web Apps';     
        }
     else
       {
            $findcity = City::where('city_name',$city)->first();

            if(empty($findcity))
            {
                alert()->error('Url not available');
                return redirect('/');       
            }
            $city_url = $city;
            $city =$city;
            $citymeta = $findcity->meta_description;
        }
      return view('impressum',compact('title','city_url','city','citymeta'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
        
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
