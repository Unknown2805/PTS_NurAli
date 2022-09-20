<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Payment;
use App\Models\Transfer;
use App\Models\WithDraws;
use App\Models\Money;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user
        User::create([
            'name'=> 'Ali',
            'email' => 'ali@atm',
            'password'=> 'aliatm'
            
        ]);
        User::create([
            'name'=> 'Liyy',
            'email' => 'liyy@atm',
            'password'=> 'liyyatm'
            
        ]);
        User::create([
            'name'=> 'Nurr',
            'email' => 'nurr@atm',
            'password'=> 'nurratm'
            
        ]);

        //payment
        Payment::create([
            'status'=> 'berhasil',
            'money' => 10000,
            'money_id'=> 1
            
        ]);
       
        Payment::create([
            'status'=> 'berhasil',
            'money' => 20000,
            'money_id'=> 2
            
        ]);

        Payment::create([
            'status'=> 'berhasil',
            'money' => 30000,
            'money_id'=> 3
            
        ]);

        //transfer
        Transfer::create([
            'status'=> 'berhasil',
            'money' => 50000,
            'user_id'=> 1
            
        ]);
        Transfer::create([
            'status'=> 'berhasil',
            'money' => 300000,
            'user_id'=> 2
            
        ]);
        Transfer::create([
            'status'=> 'berhasil',
            'money' => 300000,
            'user_id'=> 3
            
        ]);

        //money
        Money::create([
            'qty' => '50000',
            'transfer_id' => 1
            
        ]);
        Money::create([
            'qty' => '300000',
            'transfer_id'=> 2
            
        ]);
        Money::create([
            'qty' => '300000',
            'transfer_id'=> 3
            
        ]);

        //withdraw
        WithDraws::create([
            'qty' => '20000',
            'transfer_id'=> 1
            
        ]);WithDraws::create([
            'qty' => '100000',
            'transfer_id'=> 2
            
        ]);WithDraws::create([
            'qty' => '200000',
            'transfer_id'=> 3
            
        ]);

    }
}
