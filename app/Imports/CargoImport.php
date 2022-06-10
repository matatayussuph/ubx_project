<?php
namespace App\Imports;

use App\User;
use App\Models\Cargo;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class CargoImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // sample data with headings
//         "cargo_no" => "CXDU2001497"
//   "cargo_type" => "FULL"
//   "cargo_size" => 40
//   "weight_kg" => 0
//   "remarks" => null
//   "wharfage_usd" => 0
//   "penalty_days" => 57
//   "storage_usd" => "=G2*20"
//   "electricity_usd" => 0
//   "destuffingusd" => 20
//   "lifting_usd" => 150

 
       DB::transaction( function () use ($row){
        
                $cargo =
            [
                   'cargo_no' => $row['cargo_no'],
                   'cargo_type' => $row['cargo_type'],
                   'cargo_size' => $row['cargo_size'],
                   'weight' => $row['weight_kg'],
                   'remarks' => $row['remarks'],
                    'wharfage' => $row['wharfage_usd'],
                    'penalty' => $row['penalty_days'],
                    'storage' => ($row['penalty_days'] * 20),
                    'electricity' => $row['electricity_usd'],
                    'destuffing' => $row['destuffingusd'],
                    'lifting' => $row['lifting_usd']
            ];
            return  Cargo::create($cargo);
        });

        // return $cargo;
    }
}