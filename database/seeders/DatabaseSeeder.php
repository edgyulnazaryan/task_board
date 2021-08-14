<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'password' => Hash::make('password'),
            ],
        ]);
        Task::insert([
            [
                'name' => 'Josh Admin',
                'rate' => '4',
                'check' => 'check',
                'descript' => 'statement,deal_type,option_type',
                'dead_line' => '2021.07.15',
                'user_id' => '1',
                'created_at'=> '2021.07.12',
            ],
            [
                'name' => 'Statement Laravel',
                'rate' => '4',
                'check' => 'check',
                'descript' => 'region,statement,prop_type ',
                'dead_line' => '2021.07.19',
                'user_id' => '1',
                'created_at'=> '2021.07.15',
            ],
            [
                'name' => 'Հայտարարությունների էջ',
                'rate' => '5',
                'check' => 'check',
                'descript' => 'statement, company,employer,skills,region,categories, ',
                'dead_line' => '2021.07.24',
                'user_id' => '1',
                'created_at'=> '2021.07.19',
            ],
            [
                'name' => 'JQuery validation',
                'rate' => '5',
                'check' => 'check',
                'descript' => 'JQuery ',
                'dead_line' => '2021.07.26',
                'user_id' => '1',
                'created_at'=> '2021.07.24',
            ],
            [
                'name' => 'PHP DB_CONNECTION',
                'rate' => '5',
                'check' => 'check',
                'descript' => 'PHP ',
                'dead_line' => '2021.07.24',
                'user_id' => '1',
                'created_at'=> '2021.07.24',
            ],
            [
                'name' => 'Job_Company_User',
                'rate' => '5',
                'check' => 'check',
                'descript' => 'User, Company,Reviews, ',
                'dead_line' => '2021.07.24',
                'user_id' => '1',
                'created_at'=> '2021.07.24',
            ],
            [
                'name' => 'Real Estate + Filters',
                'rate' => '5',
                'check' => 'check',
                'descript' => 'Apartment ',
                'dead_line' => '2021.07.24',
                'user_id' => '1',
                'created_at'=> '2021.07.24',
            ],
            [
                'name' => 'AbaPharm',
                'rate' => '5',
                'check' => 'check',
                'descript' => 'Pharm, Drug, Material, Producer, EXCEL, ',
                'dead_line' => '2021.07.24',
                'user_id' => '1',
                'created_at'=> '2021.07.24',
            ],
            [
                'name' => 'Hospital',
                'rate' => '4',
                'check' => 'check',
                'descript' => 'Doctor, Patient, Event, Fullcalendar ',
                'dead_line' => '2021.08.09',
                'user_id' => '1',
                'created_at'=> '2021.08.09',
            ],
        ]);



    }
}
