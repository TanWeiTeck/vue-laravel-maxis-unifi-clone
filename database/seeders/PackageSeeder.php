<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('telco_packages')->insert(
            [
                [
                    "id" => 3,
                    "service_provider" => "maxis",
                    "package_id" => "mx030089",
                    "internet_speed" => "30",
                    "description" => "Light browsing & streaming video",
                    "price" => 89,
                    "discount" => 0,
                    "discounted_price" => 89,
                    "created_at" => "2022-05-30 21:59:13",
                    "updated_at" => "2022-06-02 19:55:47",
                    "is_active" => 1
                ],
                [
                    "id" => 4,
                    "service_provider" => "maxis",
                    "package_id" => "mx100129",
                    "internet_speed" => "100",
                    "description" => "Full HD streaming & browsing",
                    "price" => 129,
                    "discount" => 0,
                    "discounted_price" => 129,
                    "created_at" => "2022-05-30 21:59:37",
                    "updated_at" => "2022-05-30 21:59:37",
                    "is_active" => 1
                ],
                [
                    "id" => 5,
                    "service_provider" => "maxis",
                    "package_id" => "mx300149",
                    "internet_speed" => "300",
                    "description" => "4K streaming & gaming",
                    "price" => 149,
                    "discount" => 0,
                    "discounted_price" => 149,
                    "created_at" => "2022-05-30 22:00:05",
                    "updated_at" => "2022-05-30 22:00:05",
                    "is_active" => 1
                ],
                [
                    "id" => 6,
                    "service_provider" => "maxis",
                    "package_id" => "mx500219",
                    "internet_speed" => "500",
                    "description" => "4K streaming, gaming, video conferencing",
                    "price" => 219,
                    "discount" => 0,
                    "discounted_price" => 219,
                    "created_at" => "2022-05-30 22:00:38",
                    "updated_at" => "2022-05-30 22:00:38",
                    "is_active" => 1
                ],
                [
                    "id" => 7,
                    "service_provider" => "maxis",
                    "package_id" => "mx800299",
                    "internet_speed" => "800",
                    "description" => "Ultimate high-paced internet experience",
                    "price" => 299,
                    "discount" => 0,
                    "discounted_price" => 299,
                    "created_at" => "2022-05-30 22:01:03",
                    "updated_at" => "2022-05-31 07:09:53",
                    "is_active" => 1
                ],
                [
                    "id" => 8,
                    "service_provider" => "unifi",
                    "package_id" => "uf030089",
                    "internet_speed" => "30",
                    "description" => "Bundle with unifi TV Ultimate Pack\nFREE unifi Plus Box.\nFree MESH WIFI.",
                    "price" => 89,
                    "discount" => 0,
                    "discounted_price" => 89,
                    "created_at" => "2022-05-30 22:01:03",
                    "updated_at" => "2022-05-31 07:09:53",
                    "is_active" => 1
                ],
                [
                    "id" => 9,
                    "service_provider" => "unifi",
                    "package_id" => "uf100129",
                    "internet_speed" => "100",
                    "description" => "Bundle with unifi TV Ultimate Pack\nFREE unifi Plus Box.\nFree MESH WIFI.",
                    "price" => 129,
                    "discount" => 0,
                    "discounted_price" => 129,
                    "created_at" => "2022-05-30 22:01:03",
                    "updated_at" => "2022-05-31 07:09:53",
                    "is_active" => 1
                ],
                [
                    "id" => 10,
                    "service_provider" => "unifi",
                    "package_id" => "uf300199",
                    "internet_speed" => "300",
                    "description" => "Bundle with unifi TV Ultimate Pack\nFREE unifi Plus Box.\nFree MESH WIFI.",
                    "price" => 199,
                    "discount" => 0,
                    "discounted_price" => 199,
                    "created_at" => "2022-05-30 22:01:03",
                    "updated_at" => "2022-05-31 07:09:53",
                    "is_active" => 1
                ],
            ]
        );
    }
}
