<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class TestUpdateOrCreateCommand extends Command
{
    protected $signature = 'test:update-or-create';

    protected $description = 'Command description';

    public function handle()
    {
        $data = [
            "name" => "Foo",
            "non_existing_column" => 123,
        ];

        User::updateOrCreate(["name" => $data["name"]], $data);
    }
}
