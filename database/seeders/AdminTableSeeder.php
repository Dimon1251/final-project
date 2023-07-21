<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;



class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'name' => 'Dima',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('secret123')
            ]
        ];

        foreach ($admins as $item) {
            /** @var Admin $admin */
            Admin::query()->create($item);
        }
    }
}
