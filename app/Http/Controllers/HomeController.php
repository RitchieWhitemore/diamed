<?php


namespace App\Http\Controllers;


use App\models\Slider;
use App\models\Specialist;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::ordered()
            ->notHidden()
            ->where(function (Builder $query) {
                $query->where('end_show', '>', Carbon::now())
                    ->orWhere('end_show', null);
            })
            ->limit(10)->get();

        $specialists = Specialist::ordered()->notHidden()->limit(4)->get();

        return view('public.index', compact('sliders', 'specialists'));
    }

    public function stock()
    {
        return view('public.stock');
    }

    public function info()
    {
        return view('public.info');
    }

    public function team()
    {
        $specialists = Specialist::ordered()->notHidden()->get();

        return view('public.team', compact('specialists'));
    }

    public function contact()
    {
        return view('public.contact');
    }

    public function license()
    {
        return view('public.license');
    }

    public function review()
    {
        return view('public.review');
    }

    public function article()
    {
        return view('public.article');
    }

    public function sterilization()
    {
        return view('public.sterilization');
    }

    public function services()
    {
        return view('public.services');
    }

    public function service()
    {
        return view('public.service');
    }

    public function price()
    {
        return view('public.price');
    }

    public function vacancy()
    {
        return view('public.vacancy');
    }
}