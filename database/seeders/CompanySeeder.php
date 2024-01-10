<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
// Seed companies with associated contacts
Company::factory()->count(10)->create();
}
}