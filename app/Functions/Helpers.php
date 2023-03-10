<?php
namespace App\Functions;

class Helpers{
    public static function getDataFromCsv(string $path){
        $data = [];
        $file_stream = fopen($path, 'r');
        if($file_stream === false){
            exit("Can not open file in $path");
        }
        while(($row = fgetcsv($file_stream)) !== false){
            $data[] = $row;
        }
        fclose($file_stream);
        return $data;
    }
}