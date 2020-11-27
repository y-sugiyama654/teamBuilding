<?php

use App\Customer;
use App\Member;
use App\Report;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // customersテーブルに登録するレコードを配列で定義する。
//        DB::table('customers')->insert([
//            [
//                'name'           => '太郎くん',
//                'created_at'     => now(),
//                'updated_at'     => now(),
//            ],
//            [
//                'name'           => '次郎くん',
//                'created_at'     => now(),
//                'updated_at'     => now(),
//            ],
//        ]);

        // factoryを用いてcustomersにレコードを２件、
        // さらにcustomer_idに紐づくreportsをそれぞれ登録する。
        factory(Member::class, 2)
            ->create()
            ->each(function ($member) {
                $member->save(factory(Report::class)->make());
            });
    }
}
