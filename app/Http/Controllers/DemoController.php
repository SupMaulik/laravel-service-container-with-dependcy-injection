<?php

namespace App\Http\Controllers;
use App\Services\MessageService;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function show(MessageService $MessageService)
    {
        return $MessageService->getMessage();
    }
}
