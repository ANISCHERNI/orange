<?php

use App\CustomCollection;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
//use collect helpe
use App\User;
use Exporter;





class ExportExcelController extends Controller
{
    //

 

public function exportExcel(){
    $user=new User();

    $columns=$user->getTableColumns();
    $users=$user->getAll();

   $data= new collection();
   

   foreach($columns as $column){
       $data[0]=(object)$column;
   }
$data=$data->merge($users);

$fileName='formulaire.xlsx';
$saveFile=public_path('/download/'.$fileName);   

$excel=Exporter::make('Excel');
$excel->load($data);
$excel->save($saveFile);
$url=url('/download/'.$fileName);

$html='<a href="'.$url.'" id="download" hidden></a>';
$html.="<script>document.getElementById('download').click</script>";
return 
back() ;

}

}
