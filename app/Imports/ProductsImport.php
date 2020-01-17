<?php

namespace App\Imports;

use App\model\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\model\Brand;
use App\model\Category;

class ProductsImport implements ToModel, WithValidation, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $brand = Brand::where('name', 'like', '%' . $row['thuong_hieu'] . '%')->get();
        $brand_not_exist = $brand->isEmpty();
        $brand_id = ($brand_not_exist ? 1 : $brand->first()->id);

        $category = Category::where('name', 'like', '%' . $row['danh_muc'] . '%')->get();
        $category_not_exist = $category->isEmpty();
        $category_id = ($category_not_exist ? 1 : $category->first()->id);

        return new Product([
            'name' => $row['ten'],
            'desc' => $row['mo_ta'],
            'brand_id' => $brand_id,
            'category_id' => $category_id,
            'specification' => $row['thong_so'],
            'price' => $row['gia_tien'],
            'slug' => $row['ten_duong_dan'],
            'quantity' => $row['so_luong'],
            'code'     => rand(1000000000, 9999999999)
        ]);
    }

    public function rules(): array
    {
        return [
            'ten'               =>  'required',
            'mo_ta'             =>  'required',
            'thuong_hieu'       =>  'required',
            'danh_muc'          =>  'required',
            'so_luong'          =>  'required',
            'gia_tien'          =>  'required',
            'thong_so'          =>  'required',
            'ten_duong_dan'     =>  'required',
        ];
    }
}
