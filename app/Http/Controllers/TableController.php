<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $path = public_path('files/Table_Input.csv');

        if(!file_exists($path)) {
            abort(404, 'File not found.');
        }

        $rows = [];
        if (($handle = fopen($path, 'r')) !== false) {

            // read and will skip header
            fgetcsv($handle);

            while (($data = fgetcsv($handle)) !== false) {
                $index = trim($data[0] ?? '');
                $value = isset($data[1]) ? (int)$data[1] : 0;
                $rows[] = ['index' => $index, 'value' => $value];
            }
            fclose($handle);
        }

        $map = [];
            foreach ($rows as $row) {
                $map[$row['index']] = $row['value'];
            }

        $alpha = ($map['A5'] ?? 0) + ($map['A20'] ?? 0);
        
        $beta = 0;
        $a7 = $map['A7'] ?? 0;
        $a15 = $map['A15'] ?? 0;

        if ($a7 != 0) {
            $beta = intdiv($a15, $a7);
        } else {
            $beta = 0;
        }

        $charlie = ($map['A13'] ?? 0) * ($map['A12'] ?? 0);

        return view('table', compact('rows', 'alpha', 'beta', 'charlie'));
    }
}