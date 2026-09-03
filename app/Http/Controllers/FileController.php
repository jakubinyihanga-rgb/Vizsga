<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use File;
use Image;
use Response;


class FileController extends Controller
{
    public function index()
    {
        $files_info = [];

        foreach (File::allFiles(public_path('images\SubCategories')) as $file) {
            $files_info[] = array(
                "filedir" => substr($file ->getPath(),strrpos($file ->getPath(),'\\')+1),
                "filename" => substr($file->getfilename(),0,strrpos($file->getfilename(),".")),
                "filesize" => $file->getSize(), // returns size in bytes
                "fileext" => $file->getExtension()
            );
            $image = Image::make($file->getPath() . '\\' .$file->getFilename());
            Response::make($image->encode('jpeg'));
            $form_data = array(
            'category_name'          => substr($file ->getPath(),strrpos($file ->getPath(),'\\')+1),
            'subcategory'            =>  substr($file->getfilename(),0,strrpos($file->getfilename(),".")),
            'subcat_image'           => $image,
           );
           category::create($form_data);

        }
        return view('file-details', ["files_info" => $files_info]);
    }
}