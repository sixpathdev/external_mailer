<?php

namespace App\Http\Controllers;

use App\Mail\Brokeragemail;
use App\Mail\Divingmail;
use App\Mail\Financemail;
use App\Mail\Haloutsmail;
use App\Mail\Insurancemail;
use App\Mail\Mooragemail;
use App\Mail\PartAcquisitionmail;
use App\Mail\Transportmail;
use App\Mail\Wintermail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendHaloutMail(Request $request)
    {
        $name =  $request->name;
        $phone =  $request->phone;
        $email =  $request->email;
        $boatmodel =  $request->boatmodel;
        $dryweight =  $request->dryweight;
        $loa =  $request->loa;
        $beam =  $request->beam;
        $height =  $request->height;

        Mail::to($request->email)->send(new Haloutsmail($name, $phone, $email, $boatmodel, $dryweight, $loa, $beam, $height));

        return response()->json(['status'=>'success'],200);
    }

    public function sendWinterMail(Request $request)
    {
        $name =  $request->name;
        $phone =  $request->phone;
        $email =  $request->email;
        $locationOfVessel =  $request->locationOfVessel;

        Mail::to($request->email)->send(new Wintermail($name, $phone, $email, $locationOfVessel));

        return response()->json(['status' => 'success'], 200);
    }

    public function sendMoorageMail(Request $request)
    {
        $name =  $request->name;
        $phone =  $request->phone;
        $email =  $request->email;
        $loa =  $request->loa;
        $location =  $request->location;
        // $type =  $request->type;
        $basic =  $request->basic;
        $transient =  $request->transient;
        $live_abroad =  $request->live_abroad;
        $commercial =  $request->commercial;

        Mail::to($request->email)->send(new Mooragemail($name, $phone, $email, $loa, $location, $basic, $transient, $live_abroad, $commercial));

        return response()->json(['status' => 'success'], 200);
    }

    public function sendInsuranceMail(Request $request)
    {
        $name =  $request->name;
        $phone =  $request->phone;
        $email =  $request->email;
        $summary =  $request->summary;

        Mail::to($request->email)->send(new Insurancemail($name, $phone, $email, $summary));

        return response()->json(['status' => 'success'], 200);
    }

    public function sendFinanceMail(Request $request)
    {
        $name =  $request->name;
        $phone =  $request->phone;
        $email =  $request->email;
        $amount =  $request->amount;
        $spec =  $request->spec;

        Mail::to($request->email)->send(new Financemail($name, $phone, $email, $amount, $spec));

        return response()->json(['status' => 'success'], 200);
    }

    public function sendDivingMail(Request $request)
    {
        $name =  $request->name;
        $phone =  $request->phone;
        $email =  $request->email;
        $bs =  $request->bottom_scrape;
        $bi =  $request->basic_inspection;
        $ac =  $request->anode_change;
        $mr =  $request->minor_repair;

        Mail::to($request->email)->send(new Divingmail($name, $phone, $email, $bs, $bi, $ac, $mr));

        return response()->json(['status' => 'success'], 200);
    }

    public function partAcquisition(Request $request)
    {
        $name =  $request->name;
        $phone =  $request->phone;
        $email =  $request->email;
        $detail =  $request->detail;

        Mail::to($request->email)->send(new PartAcquisitionmail($name, $phone, $email, $detail));

        return response()->json(['status' => 'success'], 200);
    }

    public function sendTransportMail(Request $request)
    {
        $name =  $request->name;
        $phone =  $request->phone;
        $email =  $request->email;
        $start_location =  $request->start_location;
        $end_location =  $request->end_location;
        $dry_weight =  $request->dry_weight;
        $loa =  $request->loa;
        $beam =  $request->beam;
        $height =  $request->height;

        Mail::to($request->email)->send(new Transportmail($name, $phone, $email, $start_location, $end_location, $dry_weight, $loa, $beam, $height));

        return response()->json(['status' => 'success'], 200);
    }

    public function brokerageMail(Request $request)
    {
        $firm_name =  $request->firm_name;
        $name =  $request->name;
        $email =  $request->email;
        $title =  $request->title;
        $message =  $request->message;
        $price_range =  $request->price_range;

        

        Mail::to($request->email)->send(new Brokeragemail($firm_name, $name, $email, $email, $title, $message, $price_range));

        return response()->json(['status' => 'success'], 200);
    }
}
