<?php

use Illuminate\Database\Seeder;

class MailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $form_data = array(
            'driver'            =>   'smtp',
            'host'              =>   'smtp.gmail.com',
            'port'              =>   587,
            'from_address'      =>   'bepmesushi.info@gmail.com',
            'from_name'         =>   'Bepmesushi',
            'encryption'        =>   'tls',
            'username'          =>   'bepmesushi.info@gmail.com',
            'password'          =>   'oloauigmpbopiewg'
        );
        DB::table('mails')->insert($form_data);
    }
}
