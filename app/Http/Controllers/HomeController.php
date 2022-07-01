<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // public function home()
    // je suis revenu à la méthode index pour le debug de bad method appelé pour rendre dynamique home et controller
    public function home()
    {
        return view('home');
    }
     
    // cette méthode est à décommenter et commenter la home ci-dessus pour faire marcher les vestiges après l'auth
    //  public function home()
    // {
    //     $vestiges = Vestige::all()
    //     return view('home',[
    //         'vestiges' => $vestiges
    //     ]);
    // }


    public function contact() {
        return view('contact');
    }


     // j'ai mis en commentaire shop et vestige ci-dessous car j'ai créé ShopController.php

    public function shop() {
        return view('shop');
    }

    public function vestige() {
        return view('vestige');
    }

    public function reservation() {
        return view('reservation');
    }

    public function checkout() {
        return view('checkout');
    }

    public function success() {
        return view('success');
    }

    public function visites() {
        return view('visites');
    }
}
