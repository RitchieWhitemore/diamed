<?php


namespace App\Http\Controllers;


use App\Mail\ReviewMail;
use App\Mail\SignupMail;
use App\Models\Review;
use App\models\Slider;
use App\models\Specialist;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $reviews = Review::notHidden()->paginate(15);
        return view('public.review', compact('reviews'));
    }

    public function sendReview(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'title' => 'required|string|max:255',
            'text' => 'required|string',
            'rating' => 'required|integer|between:1,5',
        ]);

        $review = new Review($request->all());
        $review->hidden = Review::HIDDEN_YES;
        if ($review->save()) {

            Mail::to(getenv('MAIL_DIRECTOR'))->send(new ReviewMail($review));

            return ['success' => true];
        }

        return ['success' => false];

    }

    public function article()
    {
        return view('public.article');
    }

    public function sterilization()
    {
        return view('public.sterilization');
    }

    public function vacancy()
    {
        return view('public.vacancy');
    }

    public function signup(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'phone' => 'required|string',
        ]);

        Mail::to(getenv('MAIL_MANAGER'))->send(new SignupMail($request->get('name'), $request->get('phone')));

        return ['success' => true];
    }
}