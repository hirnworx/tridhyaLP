<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;
use File;
use App\Models\city;

class sitemap extends Command
{
    public $data =[];
    public $path = '';
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'genrate site  map';

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
            $this->path =  public_path().'\sitemaps'.'\\';
            $this->public_path = public_path().'\\';

            ini_set('memory_limit',-1);
            set_time_limit(0);
            ini_set('max_execution_time', 0);
            ignore_user_abort(value(true));
            
            if(file_exists($this->public_path . $filename)){
                chmod($this->public_path,0777);
                chmod($this->public_path . $filename ,0777);
                rename($this->public_path . $filename ,$this->path .'sitemap-old-'.date('D-d-M-Y h-s'.'.xml'));
            }
           
            $cityList =city::select('city_name')->pluck('city_name');
            $sitemap_link = config('constant.site_url');
            $sitemap = SitemapGenerator::create($sitemap_link)
            ->getSitemap();
               
            foreach($cityList as $key=>$val)
            {
                $baseurl = $sitemap->add($sitemap_link.$val);
            }

            $baseurl->writeToFile($this->public_path . $filename);   
            $sitemapUrl = $sitemap_link.$filename;
            function myCurl($url)
            {
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HEADER, 8);
            curl_exec($ch);
            $httpCode = curl_getinfo($ch,CURLINFO_HTTP_CODE);
            curl_close($ch);
            return $httpCode;
             }

          //site map for google

            $url ="http://www.google.com/webmasters/sitemap/ping?sitemap=".$sitemapUrl;
            $returnCode = myCurl($url);
            echo '<p>google sitemap has been pinged(return code:$returncode).</p>';
        }
        catch(Exception $e){
            Log:error($e);
        }
      
    }
}
