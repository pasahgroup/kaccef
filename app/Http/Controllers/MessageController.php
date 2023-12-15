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

use JasperPHP\JasperPHP as JasperPHP;
use PHPJasper\PHPJasper;

 require base_path().'/vendor/autoload.php';
 //require base_path().'/vendor/autoload.php';
include_once(app_path().'/jrf/PHPJasperXML.inc.php');
 include_once(app_path().'/jrf/tcpdf/tcpdf.php');
  //include_once(app_path().'/fpdf184/mysql_table.php');
  //include_once(app_path().'/fpdf184/pdfg.php');
 use PHPJasperXML;

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





public function emailSendF()
{

       include_once(app_path().'/jrf/sample/setting.php');
       $jasper = new PHPJasperXML();
           // $jasper = new PHPJasper;

//dd('bvncx');
$input =app_path().'/reports/pieChart.jrxml';
 //$input =app_path().'/reports/department.jrxml';
$output =app_path().'/reports';

$options = [
    'format' => ['pdf'],
    'locale' => 'en',
    'params' => [
 'property_id'=>1,
    ],
    'db_connection' => [
         'driver' => 'mysql', //mysql, ....
         'username' => 'root',
        //'password' => '',
        'host' => '127.0.0.1',
        'database' => 'horesydb',
        'port' => '3306'
    ]

    // \Config::get('database.connections.mysql')

];

// Get Itininery

//dd('print ff');


$date=date('d-M-Y');
// $data["email"] = "palatialtours@gmail.com";
$data["email"] = "buruwawa@gmail.com";

$data["title"] = "ITINERARY";
$data["body"] = "Manyara Best View Hotel: Daily General Inspection Report held on $date";
$data["date"] = "Date: $date";

// $arrayName =$socialmedia;
// $data['socialmedia'] =$socialmedia;
// $data['datas'] =$datas; 
// $data['programs'] =$tour_addons; 
//dd($data);

$files = [
//app_path('reports/pieChart.pdf'),

// app_path().'/reports/itinerayReportf.pdf',
// public_path('files/reports.png'),
];
  //SendMailJobf::dispatch($data);
 //dd('try34');
Mail::send('emailsend.email_send',$data, function($message)use($data, $files) {
$message->to($data["email"], $data["email"])
        ->subject($data["title"]);
foreach ($files as $file){
    $message->attach($file);
}
});

dd('Mail sent successfully');
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
