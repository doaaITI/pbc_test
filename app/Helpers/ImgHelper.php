<?php

namespace App\Helpers;

use File;

class ImgHelper
{

    public static function upload_image($img)
    {
        $file_name = time();
        $file_name .= rand();
        $file_name = sha1($file_name);
        if ($img) {
            $ext = $img->getClientOriginalExtension();

            $img->move(public_path() . "/uploads", $file_name . "." . $ext);
            $local_url = $file_name . "." . $ext;

            $s3_url = 'uploads/'.$local_url;

            return $s3_url;
        }
        return "";
    }


    public static function delete_image($img) {
        File::delete( public_path() . "/public/uploads/" . basename($img));
        return true;
    }

    public function sumPrice($item){
        $price=[];$vats=[];$count=[];
        foreach($item as $itemInfo){
            array_push($price,$item->price);
            array_push($vats,$item->vats);
            array_push($vats,$item->vats);
        }
    }


}
