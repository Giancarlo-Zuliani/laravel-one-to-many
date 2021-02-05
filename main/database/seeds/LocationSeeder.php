<?php

use Illuminate\Database\Seeder;
use App\Location;
use App\Employee;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Location::class , 25) -> create()
        -> each(function($loc){
            $emps = Employee::inRandomOrder()
            -> limit(5) -> get();
            $loc -> employees() -> attach($emps);

        });
    }
}
