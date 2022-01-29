<?php
namespace Vynhart\SlowQueryLog\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Vynhart\SlowQueryLog\Logger;

class DashboardController extends BaseController
{
    public function index()
    {
        $filePath = app()->make(Logger::class)->getFilePath();
        $data = [];
        if (file_exists($filePath)) {
            $data = collect(explode(
                Logger::Separator,
                file_get_contents($filePath)
            ))->map(function($row) {
                return json_decode($row);
            });
        }
        foreach ($data as $row) {
            echo $row->time;
        }
        return view('slow-query-log::dashboard', ['data' => $data]);
    }
}