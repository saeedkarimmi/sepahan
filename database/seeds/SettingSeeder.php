<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::query()->truncate();
       \App\Setting::query()->insert([
           ['id' => 1, 'name' => 'اینستاگرام', 'type' => 'banner', 'value' => 'http://instasdcsdc', 'img' => ''],
           ['id' => 2, 'name' => 'تویتر', 'type' => 'banner', 'value' => '', 'img' => ''],
           ['id' => 3, 'name' => 'فیسبوک', 'type' => 'banner', 'value' => '', 'img' => ''],
           ['id' => 4, 'name' => 'لینکدین', 'type' => 'banner', 'value' => '', 'img' => ''],
           ['id' => 5, 'name' => 'تلگرام', 'type' => 'banner', 'value' => '', 'img' => ''],

           ['id' => 6, 'name' => 'فوتر1', 'type' => 'footer', 'value' => '', 'img' => ''],
           ['id' => 7, 'name' => 'فوتر2', 'type' => 'footer', 'value' => '', 'img' => ''],
           ['id' => 8, 'name' => 'فوتر3', 'type' => 'footer', 'value' => '', 'img' => ''],
           ['id' => 9, 'name' => 'فوتر4', 'type' => 'footer', 'value' => '', 'img' => ''],

           ['id' => 10, 'name' => 'لگو (۱۰۰ طول * ۱۰۰ عرض)', 'type' => 'banner', 'value' => '', 'img' => 'storage/file/Xh3bx5ux7bJ2BqboXF8XMvDM3gGsGjSYro4B6YtF.png'],
           ['id' => 11, 'name' => 'بنر بزرگ (۸۶۵ طول * ۴۳۴ عرض)', 'type' => 'banner', 'value' => 'بنر شماره 1', 'img' => 'storage/file/ZaEQAmVR92ox2JY6oHXJGBmG1MoZHiXAr4BKjUiR.jpeg'],
           ['id' => 12, 'name' => 'بنر کوچک بالا (۲۷۰ طول * ۲۱۲ عرض)', 'type' => 'banner', 'value' => '<p>بسمت فروشگاه آنلاین سپاهان الکتریک</p>', 'img' => 'storage/file/9mAq36f49W7i7GooZj7rHIC4bJFOOSZf5VLCnIU5.jpeg'],
           ['id' => 13, 'name' => 'بنر کوچک پایین (۲۷۰ طول * ۲۱۲ عرض)', 'type' => 'banner', 'value' => '', 'img' => 'storage/file/kHM8ZvWWPPEL9gGi9JSIWxSqGJPOLtPTTgrP7jaI.jpeg'],

           ['id' => 14, 'name' => 'اسلایدر 1', 'type' => 'slider', 'value' => '', 'img' => ''],
           ['id' => 15, 'name' => 'اسلایدر 2', 'type' => 'slider', 'value' => '', 'img' => ''],
           ['id' => 16, 'name' => 'اسلایدر 3', 'type' => 'slider', 'value' => '', 'img' => ''],

       ]);
    }
}
