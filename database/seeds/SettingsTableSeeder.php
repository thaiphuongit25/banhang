<?php

use Illuminate\Database\Seeder;
use App\Enums\SettingType;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('settings')->get()->count() > 0)
        {
            return;
        }
        $settings = [
            [
                'id' => 1,
                'type' => SettingType::Tel,
                'value' => '(28)3896.8699 | 0972924961',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'type' => SettingType::OpenTime,
                'value' => '<a href="">Giờ mở cửa: Thứ 2~7: 7:30~18:00 | CN: 8:00~16:30 (Bán thông trưa)</a>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'type' => SettingType::Address,
                'value' => '
                    <ul>
                        <li class="title">
                            © THEGIOIIC.COM
            
                        </li>
                        <li>
                            <p>939/1A Kha Vạn Cân, Linh Tây, Thủ Đức, HCM</p>
                        </li>
                        <li>
                            <p>Điện thoại: (28)3896.8699</p>
                        </li>
                        <li>
                            <p>Email: info@thegioiic.com. Skype ID: giaolo, thegioiic</p>
                        </li>
                    </ul>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'type' => SettingType::OnlineSupport,
                'value' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        DB::table('settings')->insert($settings);
    }
}
