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
            'host'              =>   'smtp.mailtrap.io',
            'port'              =>   2525,
            'from_address'      =>   'from@example.com',
            'from_name'         =>   'linhkieniot',
            'encryption'        =>   null,
            'username'          =>   '5df4e62bdca51f',
            'password'          =>   '40d62d4addcc65'
        );
        DB::table('mails')->insert($form_data);
    }
}
