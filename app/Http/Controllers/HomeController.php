<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Storage;

/**
 *
 */
class HomeController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function __invoke(): View|Factory|Application
    {
        $hero_bg = Storage::allFiles("public/hero_bg");
        $hero_bg = str()->afterLast(collect($hero_bg)->random(), "public/");

        $about_bg = Storage::allFiles("public/about");
        $about_bg = str()->afterLast(collect($about_bg)->random(), "public/");

        $about = " Yazılım dünyasına meslek lisesi dönemimde C ile embeded yazarak girdim.Ardından önlisans dönemimde C# ve Java kullanmaya çalışarak deskop üzerine karalamalarda bulundum.
        Iot projelerinin cloud 'unu ayağa kaldırmak için Php 'yi tercih ettim o zamanlar daha popülerdi tabi.Rakiplerimiz artmakla beraber teknolojiler de gelişiyor, bizde hamle yapmaya çalışıyoruz.
        Okuduğun ve geldiğin için saol dostum bu arada bana ulaşmaktan çekinme :)";

        $repos = Http::get('https://api.github.com/users/fikretcure/repos')->collect();

        return view("welcome", [
            "hero_bg" => $hero_bg,
            "about" => $about,
            "about_bg" => $about_bg,
            "repos" => $repos,
        ]);
    }
}
