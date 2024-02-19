<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use App\Models\Route as RouteModel;
use App\Models\Role;
use App\Models\permission;
class add_permission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:add_permission';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $routes = Route::getRoutes();
        // dd($routes);
        // RouteModel::truncate();
        foreach($routes as $route){
            $uri = $route->uri();
            if(strstr($uri, '_')) continue;
            if(strstr($uri, 'api')) continue;
            if(strstr($uri, 'csrf')) continue;
            $routeModel =  new RouteModel();
            $routeModel->name = $uri;
            $routeModel->save();
        }
        // permission::truncate();
        // $modelRoutes = RouteModel::all();
        // foreach ($modelRoutes as $route) {
        //     permission::create([
        //         "route_id" => $route->id,
        //         "role_id" =>1
        //     ]);
        // }
    }
}
