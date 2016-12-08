<?php


use App\contact;

define("CSVPath","../storage/app/contacts.csv");

function saveToCSV($info){

    $file = fopen(constant("CSVPath"),"a+");
    fputcsv($file,explode(',',$info));
    fclose($file);

}


function importToDB(){


    try {

        //open file and transfer date to db
        if (($handle = fopen(constant("CSVPath"), 'r')) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
                $contact = new contact();
                $contact->name = $data[0];
                $contact->email = $data[1];
                $contact->subject = $data[2];
                $contact->content = $data[3];
                $contact->save();
            }
            fclose($handle);

            //clear file
            $fh = fopen( constant("CSVPath"), 'w' );
            fclose($fh);

            return "Success";
        } else {
            return "Something went wrong ";
        }
    }catch (Exception $e) {
        return "Something went wrong ";
    }





}