<?php

namespace App\Imports;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ProductImport implements ToModel, WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        echo '<pre>';
        print_r($row);
        DB::select("INSERT INTO `products`
                        (
                                    `name`,
                                    `category_id`,
                                    `subcategory_id`,
                                    `manufacture_id`,
                                    `unit_id`,
                                    `purchase_rate`,
                                    `purchase_discount`,
                                    `actual_rate`,
                                    `description`
                        )
                        
                            SELECT '?',
                                    `categories`.`id` 'cat',
                                    `sub_categories`.`id` 'subcat',
                                    `manufactures`.`id` 'man',
                                    `units`.`id` 'unit',
                                    '?',
                                    '?',
                                    '?',
                                    '?'
                            FROM   `categories`,
                                    `sub_categories`,
                                    `manufactures`,
                                    `units`
                            WHERE  `categories`.`NAME` = '?'
                            AND    `sub_categories`.`NAME` = '?'
                            AND    `manufactures`.`NAME` = '?'
                            AND    `units`.`NAME` = 'MTR' ON DUPLICATE KEY UPDATE `purchase_rate` = '?',
                `purchase_discount` = '?',
                `actual_rate` = '?';", [1]);

            return null;
    }

    public function startRow(): int
    {
        return 2;
    }
}
