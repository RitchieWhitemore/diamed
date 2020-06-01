<?php


namespace App\Http\Controllers;


use App\Mail\ReviewMail;
use App\Mail\SignupMail;
use App\Models\Page;
use App\Models\Review;
use App\Models\Slider;
use App\Models\Specialist;
use Artesaos\SEOTools\Facades\SEOMeta;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('Главная');
        SEOMeta::setDescription('Стоматология для всей семьи. Все виды услуг от специалистов высшей квалфикации');

        $sliders = Slider::ordered()
            ->notHidden()
            ->where(function (Builder $query) {
                $query->where('end_show', '>', Carbon::now())
                    ->orWhere('end_show', null);
            })
            ->limit(10)->get();

        $specialists = Specialist::ordered()->notHidden()->limit(4)->get();

        $articles = Page::isArticles()->notHidden()->orderBy('created_at', 'desc')->limit(3)->get();

        $reviews = Review::notHidden()->orderByDesc('created_at')->limit(3)->get();

        return view('public.index', compact('sliders', 'specialists', 'articles', 'reviews'));
    }

    public function promotion()
    {
        SEOMeta::setTitle('Акции и Скидки');

        $promotions = Page::isPromotions()->orderByDesc('created_at')->notHidden()->paginate(15);
        return view('public.promotion', compact('promotions'));
    }

    public function team()
    {
        SEOMeta::setTitle('Специалисты');

        $specialists = Specialist::ordered()->notHidden()->get();

        return view('public.team', compact('specialists'));
    }

    public function contact()
    {
        SEOMeta::setTitle('Контакты');
        return view('public.contact');
    }

    public function license()
    {
        SEOMeta::setTitle('Лицензия');
        return view('public.license');
    }

    public function review()
    {
        SEOMeta::setTitle('Отзывы');

        $reviews = Review::notHidden()->orderByDesc('created_at')->paginate(15);
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

    public function sterilization()
    {
        SEOMeta::setTitle('Стерилизация');

        return view('public.sterilization');
    }

    public function vacancy()
    {
        SEOMeta::setTitle('Вакансии');

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
