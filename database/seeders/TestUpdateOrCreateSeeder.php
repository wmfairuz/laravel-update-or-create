<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class TestUpdateOrCreateSeeder extends Seeder
{
    public function run()
    {
        $data = [
            "name" => "Foo",
            "non_existing_column" => 123,
        ];

        User::updateOrCreate(["name" => $data["name"]], $data);
    }
}
