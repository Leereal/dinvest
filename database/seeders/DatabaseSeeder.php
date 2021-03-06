<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App\Models\Auction;
// use App\Models\BankDetail;
use App\Models\Deposit;
use App\Models\Bonus;
use App\Models\Investment;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([     
            BankSeeder::class,
            PlanSeeder::class  
        ]); 
        //User::factory(20)->create();
        //Investment::factory(60)->create(); 
        //Deposit::factory(50)->create();
        //Bonus::factory(50)->create();
    }
}
