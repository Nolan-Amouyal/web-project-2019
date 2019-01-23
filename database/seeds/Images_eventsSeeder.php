<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Images_eventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear our images_events table
        DB::table('image_events')->delete();

        try{
            // Seed our events table
            DB::table('image_events')->insert([
                'title' => 'Piscine',
                'ext' => 'webp',
                'is_presentation' => true
            ]);

            DB::table('image_events')->insert([
                'title' => 'Caca',
                'ext' => 'jpg',
                'is_presentation' => true
            ]);

            DB::table('image_events')->insert([
                'title' => 'Paul',
                'ext' => 'jpg',
                'is_presentation' => true
            ]);
        } catch (Exception $e) {
            echo $e;
        }
    }
}
