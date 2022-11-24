<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\Csv\Reader;
use Illuminate\Support\Facades\DB;


class UploadController extends Controller
{
    
    public function upload(Request $request)
    {        
        try {
            // загрузим и получим ссылку на файл
            $file_path = $request->file('file');
            $csv = Reader::createFromPath($file_path)->setHeaderOffset(0);

            foreach ($csv as $record) {
                    DB::table('rooms')
                    ->updateOrInsert(
                                    [
                                        'Name' => $record['Name']
                                    ],
                                    [
                                        'Price' => $record['Price'],
                                        'Bedrooms' => $record['Bedrooms'],
                                        'Bathrooms' => $record['Bathrooms'],
                                        'Storeys' => $record['Storeys'],
                                        'Garages' => $record['Garages']
                                    ]
                         );
            
                        }
            return redirect('/room');

        } catch (\Exception $e) {
            echo 'Произошла ошибка! ' . $e->getMessage();           
        }       
    }
}