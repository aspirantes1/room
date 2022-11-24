<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class RoomController extends Controller
{
    
    public function store()
    {
        return view("room");
    }

    
    public function upload(Request $request)
    {        
            // загрузим и получим ссылку на файл
            $file_path = $request->file('file')->store('public');
            dd($file_path);

           /* дополнительно */

           // полный url файла
           // Storage::url($csv)

           // удаление файла
           // Storage::delete($csv);

          // более подробнее читайте тут: 
          // https://laravel.com/docs/5.7/filesystem

        } catch (\Exception $e) {
            echo 'Произошла ошибка! ' . $e->getMessage();           
        }       
    }
}