<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\City;

class UpdateWikiCityDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = City::all();
        foreach ($cities as $key => $value) {
            DB::table('city')->where("id",$value->id)->update([
                'wikipedia_city_name' => $value->city_name
            ]);
        }
      

    }
}
