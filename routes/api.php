<?php

use App\Http\Controllers\MailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/send-halout-mail', [MailController::class,'sendHaloutMail']);
Route::post('/send-winterizing-mail', [MailController::class, 'sendWinterMail']);
Route::post('/send-taxdeduction-mail', [MailController::class,'sendTaxdeductMail']);
Route::post('/send-moorage-mail', [MailController::class,'sendMoorageMail']);
Route::post('/send-insurance-mail', [MailController::class, 'sendInsuranceMail']);
Route::post('/send-finance-mail', [MailController::class, 'sendFinanceMail']);
Route::post('/send-diving-mail', [MailController::class, 'sendDivingMail']);
Route::post('/send-partacquisition-mail', [MailController::class, 'partAcquisition']);
Route::post('/send-transport-mail', [MailController::class, 'sendTransportMail']);
Route::post('/send-brokerage-mail', [MailController::class, 'brokerageMail']);
