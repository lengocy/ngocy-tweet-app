<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Tweet;


class TweetsSeeder extends Seeder
{
    public function run()
    {
        Tweet::factory()->count(10)->create();
    }
}