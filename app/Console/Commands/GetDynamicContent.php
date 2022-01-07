<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\City;

class GetDynamicContent extends Command
{
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:content';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get content dynamically';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try{
            $cityList = City::select('wikipedia_city_name','id')->whereNull('city_discription')->orWhere('city_discription', '')->get();
          
            $htmlcontent = "";
            if(!empty($cityList))
            {
                foreach($cityList as $key=>$val){
                    
                    $city = urlencode(trim($val->wikipedia_city_name));
                    $curl_handle=curl_init();
                    $url = 'https://de.wikipedia.org/w/api.php?action=query&prop=extracts&format=json&exintro=&titles='.$city;
                     
                    curl_setopt($curl_handle, CURLOPT_URL, $url);
                    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
                    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'laravel');
                    $result = curl_exec($curl_handle);
                      
                    $data = json_decode($result, true);
                              

                    $content = '';
                    if(!empty($data['query']['pages'])){
                        $data = current(array_values($data['query']['pages']));
                        $content = $data['extract'];
                    }
                   
                    
                    if(!empty($content)){                   
                        $add_content = City::find($val->id);
                        $add_content->city_discription = trim($content); 
                        $add_content->save(); 
                    }

                    curl_close($curl_handle);
                }
            }
          
        } catch(Exception $e){
            Log:error($e);
        }
     
    }
}
