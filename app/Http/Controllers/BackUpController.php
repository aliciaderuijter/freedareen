<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class BackUpController extends Controller
{
    public function dump(){

        \Spatie\DbDumper\Databases\MySql::create()
            ->setDbName(env('DB_DATABASE'))
            ->setUserName(env('DB_USERNAME'))
            ->setPassword(env('DB_PASSWORD'))
            ->dumpToFile(storage_path('app/public/dareen.sql'));
        $timestamp = Carbon::now()->format('d-m-y-h-i');
        return response()->download(storage_path('app/public/dareen.sql'),"dareen_{$timestamp}.sql", [
            'Content-Type' => 'application/octet-stream']);
    }


}
