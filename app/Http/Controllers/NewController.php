<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DTOs\ServerInfoDTO;
use App\DTOs\ClientInfoDTO;
use App\DTOs\DBInfoDTO;

class InfoController extends Controller
{
    public function serverInfo()
    {
        $data = new ServerInfoDTO(phpversion(), phpinfo());
        return response()->json($data);
    }

    public function clientInfo(Request $request)
    {
        $data = new ClientInfoDTO($request->ip(), $request->userAgent());
        return response()->json($data);
    }

    public function databaseInfo()
    {
        $dbConnection = config('database.default');
        $dbHost = config('database.connections.' . $dbConnection . '.host');
        $data = new DBInfoDTO($dbConnection, $dbHost);
        return response()->json($data);
    }
}
