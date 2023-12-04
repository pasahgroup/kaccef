<?php

namespace App\Http\Controllers;

use App\Models\message;
use App\Http\Requests\StoremessageRequest;
use App\Http\Requests\UpdatemessageRequest;
use Mail;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Http\Request;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }




public function emailSendF()
{
       // include_once(app_path().'/jrf/sample/setting.php');
       // $jasper = new PHPJasperXML();
           // $jasper = new PHPJasper;

// //dd('bvncx');
// $input =app_path().'/reports/pieChart.jrxml';
//  //$input =app_path().'/reports/department.jrxml';
// $output =app_path().'/reports';

// $options = [
//     'format' => ['pdf'],
//     'locale' => 'en',
//     'params' => [
//  'property_id'=>1,
//     ],
//     'db_connection' => [
//          'driver' => 'mysql', //mysql, ....
//          'username' => 'root',
//         //'password' => '',
//         'host' => '127.0.0.1',
//         'database' => 'horesydb',
//         'port' => '3306'
//     ]   
// ];

 dd('zz');
//dd('zzkx');
// $jasper = new PHPJasper;
//dd($jasper);

// $jasper->process(
//         $input,
//         $output,
//         $options
// )->execute();

//dd('zzkx back');
//Send report



$date=date('d-M-Y');
$data["email"] = "buruwawa@gmail.com";

$data["title"] = "Daily General Inspection Hotel Report (DGIR)";
$data["body"] = "Manyara Best View Hotel: Daily General Inspection Report held on $date";
$data["date"] = "Date: $date";
//dd(app_path());

$files = [
app_path('reports/pieChart.pdf'),
// app_path().'/reports/itinerayReportf.pdf',
// public_path('files/reports.png'),
];
  //SendMailJobf::dispatch($data);

Mail::send('email.email', $data, function($message)use($data, $files) {
$message->to($data["email"], $data["email"])
        ->subject($data["title"]);
foreach ($files as $file){
    $message->attach($file);
}
});

dd('Mail sent successfully');
}






    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremessageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
    $message = message::Create([
  // 'property_id'=>$property_id,
  'full_name'=>request('full_name'),
  'email'=>request('email'),
  'phone'=>request('phone'),
  'subject'=>request('subject'),
  'message'=>request('message')
]);

    return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemessageRequest  $request
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemessageRequest $request, message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(message $message)
    {
        //
    }
}
