<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;
use App\Models\City;

class Sitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
            $filename = 'sitemap.xml';
            $this->path =  public_path().'/sitemaps/';
            $this->public_path = public_path('/');
			$domain = config('constant.site_url');
     
            ini_set('memory_limit',-1);
            set_time_limit(0);
            ini_set('max_execution_time', 0);
            ignore_user_abort(value(true));

            if(file_exists($this->public_path . $filename)){
                rename($this->public_path.$filename , $this->path.'sitemap-old-'.time().'.xml');
			}

            $cityList =City::select('city_name')->pluck('city_name');
            $sitemap = SitemapGenerator::create($domain)->getSitemap();
              
            foreach($cityList as $key=>$val){
                $baseurl = $sitemap->add($domain.trim($val));
            }

            $baseurl->writeToFile($this->public_path . $filename);   
            $sitemapUrl = $domain.$filename;
            
            // site map for google
            $url ="http://www.google.com/webmasters/sitemap/ping?sitemap=".$sitemapUrl;
            $returnCode = $this->myCurl($url);
            echo '<p>google sitemap has been pinged(return code:'.$returnCode.').</p>';

        } catch(Exception $e){
            Log:error($e);
        }
    }

    private function myCurl($url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, 8);
        curl_exec($ch);
        $httpCode = curl_getinfo($ch,CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $httpCode;
    }
}