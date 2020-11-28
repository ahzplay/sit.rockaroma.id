<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert(
            array(
                [
                    'name' => 'Product RockAroma one',
                    'price' => 2222,
                    'tokopedia_url' => 'https://www.tokopedia.com',
                    'shopee_url' => 'https://www.shopee.com',
                    'image_path' => 'img/img.articlePreview1.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Product RockAroma two',
                    'price' => 222222,
                    'tokopedia_url' => 'https://www.tokopedia.com',
                    'shopee_url' => 'https://www.shopee.com',
                    'image_path' => 'img/img.articlePreview2.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Product RockAroma three',
                    'price' => 33333,
                    'tokopedia_url' => 'https://www.tokopedia.com',
                    'shopee_url' => 'https://www.shopee.com',
                    'image_path' => 'img/img.articlePreview3.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Product RockAroma four',
                    'price' => 4444444,
                    'tokopedia_url' => 'https://www.tokopedia.com',
                    'shopee_url' => 'https://www.shopee.com',
                    'image_path' => 'img/img.articlePreview1.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Product RockAroma five',
                    'price' => 555555,
                    'tokopedia_url' => 'https://www.tokopedia.com',
                    'shopee_url' => 'https://www.shopee.com',
                    'image_path' => 'img/img.articlePreview2.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Product RockAroma six',
                    'price' => 666,
                    'tokopedia_url' => 'https://www.tokopedia.com',
                    'shopee_url' => 'https://www.shopee.com',
                    'image_path' => 'img/img.articlePreview3.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Product RockAroma seven',
                    'price' => 777777,
                    'tokopedia_url' => 'https://www.tokopedia.com',
                    'shopee_url' => 'https://www.shopee.com',
                    'image_path' => 'img/img.articlePreview1.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Product RockAroma eight',
                    'price' => 888,
                    'tokopedia_url' => 'https://www.tokopedia.com',
                    'shopee_url' => 'https://www.shopee.com',
                    'image_path' => 'img/img.articlePreview2.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Product RockAroma nine',
                    'price' => 9999,
                    'tokopedia_url' => 'https://www.tokopedia.com',
                    'shopee_url' => 'https://www.shopee.com',
                    'image_path' => 'img/img.articlePreview3.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Product RockAroma ten',
                    'price' => 10000,
                    'tokopedia_url' => 'https://www.tokopedia.com',
                    'shopee_url' => 'https://www.shopee.com',
                    'image_path' => 'img/img.articlePreview1.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Product RockAroma eleven',
                    'price' => 1111,
                    'tokopedia_url' => 'https://www.tokopedia.com',
                    'shopee_url' => 'https://www.shopee.com',
                    'image_path' => 'img/img.articlePreview2.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Product RockAroma twelve',
                    'price' => 22222,
                    'tokopedia_url' => 'https://www.tokopedia.com',
                    'shopee_url' => 'https://www.shopee.com',
                    'image_path' => 'img/img.articlePreview3.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Product RockAroma thirteen',
                    'price' => 3333333,
                    'tokopedia_url' => 'https://www.tokopedia.com',
                    'shopee_url' => 'https://www.shopee.com',
                    'image_path' => 'img/img.articlePreview1.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Product RockAroma fourteen',
                    'price' => 44444444,
                    'tokopedia_url' => 'https://www.tokopedia.com',
                    'shopee_url' => 'https://www.shopee.com',
                    'image_path' => 'img/img.articlePreview2.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Product RockAroma fiveteen',
                    'price' => 55555,
                    'tokopedia_url' => 'https://www.tokopedia.com',
                    'shopee_url' => 'https://www.shopee.com',
                    'image_path' => 'img/img.articlePreview3.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Product RockAroma nineteen',
                    'price' => 666666,
                    'tokopedia_url' => 'https://www.tokopedia.com',
                    'shopee_url' => 'https://www.shopee.com',
                    'image_path' => 'img/img.articlePreview2.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Product RockAroma seventeen',
                    'price' => 7777,
                    'tokopedia_url' => 'https://www.tokopedia.com',
                    'shopee_url' => 'https://www.shopee.com',
                    'image_path' => 'img/img.articlePreview3.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Product RockAroma eighteen',
                    'price' => 8888888,
                    'tokopedia_url' => 'https://www.tokopedia.com',
                    'shopee_url' => 'https://www.shopee.com',
                    'image_path' => 'img/img.articlePreview1.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Product RockAroma nineteen',
                    'price' => 9999,
                    'tokopedia_url' => 'https://www.tokopedia.com',
                    'shopee_url' => 'https://www.shopee.com',
                    'image_path' => 'img/img.articlePreview2.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Product RockAroma twenty',
                    'price' => 2000000,
                    'tokopedia_url' => 'https://www.tokopedia.com',
                    'shopee_url' => 'https://www.shopee.com',
                    'image_path' => 'img/img.articlePreview3.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
            )
        );
    }
}
