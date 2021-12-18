<?php

namespace Database\Seeders;

use App\Models\HoKhau;
use Illuminate\Database\Seeder;

class HoKhauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'mahk' => 'hk001',
                'tench' => 'Phan Như Phương',
                'diachi' => 'Thái Nguyên',
            ],
            [
                'mahk' => 'hk002',
                'tench' => 'Phan Như A',
                'diachi' => 'Thái Nguyên',
            ],
            [
                'mahk' => 'hk003',
                'tench' => 'Trần Văn A',
                'diachi' => 'Hà Nội',
            ],
            [
                'mahk' => 'hk004',
                'tench' => 'Nguyễn Văn A',
                'diachi' => 'Thái Nguyên',
            ],
        ];
        foreach ($data as $value){
            HoKhau::create($value);
        }
    }
}
