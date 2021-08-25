<?php

namespace App\Http\Controllers;

use App\Example;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;

class PagesController extends Controller
{
    public function home(Filesystem $file)
    {
        Cache::remember('foo', 60, fn() => 'foobar');

        return Cache::get('foo');
        // return $file->get(public_path('index.php'));
        // return File::get(public_path('index.php'));
        // return Request::input('name');
        // return View::make('welcome');
    }
}
