<?php

namespace App\Imports;

use App\Models\LawaehShateb;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\RemembersRowNumber;

// ini_set('max_execution_time', 600); 

ini_set('max_execution_time', 10000);
ini_set('memory_limit', '2048M');

class LawaehShatebImport implements ToModel, WithChunkReading
{

    public function model(array $row)
    {

        // return new LawaehShateb([
        //     'name'     => $row[0],
        //     'last_name'    => $row[1],
        //     'father_name'    => $row[2],
        //     'mother_name'    => $row[3],
        //     'birthdate'    => $row[4],
        //     'gender'    => $row[5],
        //     'mazhab'    => $row[6],
        //     'kayd_number'    => $row[7],
        //     'muhafaza'    => $row[8],
        //     'kadae'    => $row[9],
        //     'mulahazat'    => $row[10],
        // ]);


        if (!LawaehShateb::where(['mother_name', '=', $row[3]], ['name', '=', $row[0]])->exists()) {

            return new LawaehShateb([
                'name'     => $row[0],
                'last_name'    => $row[1],
                'father_name'    => $row[2],
                'mother_name'    => $row[3],
                'birthdate'    => $row[4],
                'gender'    => $row[5],
                'mazhab'    => $row[6],
                'kayd_number'    => $row[7],
                'muhafaza'    => $row[8],
                'kadae'    => $row[9],
                'mulahazat'    => $row[10],
            ]);
        }
    }

    public function chunkSize(): int
    {
        return 5000;
    }
}
