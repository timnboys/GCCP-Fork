<?php

use Illuminate\Database\Seeder;

class Setting extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $settings = \App\Setting::create(
            [
                "module_key" => "core_applications",
                "key" => "require_applications_approval",
                "value" => true,
                "is_core" => true
            ]
        );

    }
}
