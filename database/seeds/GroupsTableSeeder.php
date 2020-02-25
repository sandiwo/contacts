<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Group', 100)->create()->each(function($group) {
            $group->contacts()->saveMany(
                factory('App\Contact', 100)->create()->each(function($contact) {
                    $contact->contactDescription()->save(
                        factory('App\ContactDescription')->create()
                    );
                })
            );
        });
    }
}
