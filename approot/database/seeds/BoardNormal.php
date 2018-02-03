<?php

use Illuminate\Database\Seeder;

class BoardNormal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emails = ['foo@example.com','bar@example.com','baz@example.com'];
        foreach ($emails as $mail) {
            DB::table('email')->insert('mail')
        }
        
        die("hoge");
    }
}
