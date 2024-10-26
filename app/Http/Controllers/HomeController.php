<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Award;
use App\Models\Career;
use App\Models\Country;
use App\Models\Partner;
use App\Models\Category;
use App\Models\Training;
use App\Models\ContactUs;
use App\Models\Structure;
use App\Models\Testimony;
use App\Models\HomeBanner;
use App\Models\Leadership;
use App\Models\Consultance;
use Illuminate\Http\Request;
use App\Models\Accreditation;

class HomeController extends Controller
{
    //index
    public function index()
    {
        $about = About::first();
        $banners = HomeBanner::orderByDesc('id')->get();

        $categories = Category::orderByDesc('id')->limit(8)->get();
        $trainings = Training::orderBy('title')->limit(12)->get();
        $partners = Partner::orderByDesc('id')->get();
        $testimonies = Testimony::orderByDesc('id')->get();


        return view('home.index', compact('about', 'banners', 'categories', 'trainings', 'partners', 'testimonies'));
    }

    public function training($id)
    {
        $training = Training::findorfail(decrypt($id));
        $countries = Country::orderBy('name')->get();
        $related_courses = Training::whereNot('id', decrypt($id))->where('category_id', $training->category_id)->limit(3)->orderByDesc('id')->get();

        return view('home.show-training', compact('training', 'countries', 'related_courses'));
    }
    public function admission($id)
    {
        $training = Training::findorfail($id);
        $countries = Country::orderBy('name')->get();
        return view('home.admission', compact('countries', 'training'));
    }

    public function filter(Request $request, $id)
    {
        $training = Training::findorfail(decrypt($id));
        // courses
        $q = Training::where('category_id', decrypt($id))
            ->where('title', 'like', '%' . $request->title . '%');

        if ($request->price == 'free') {
            $q->where('price', 0);
        } elseif ($request->price == 'paid') {
            $q->where('price', '>', 0);
        }

        $trainings = $q->paginate(6);
        $trainingsCount = Training::where('category_id', decrypt($id));

        return view('home.show-trainings', compact('training', 'trainings', 'trainingsCount'));
    }
    public function show($id)
    {
        $training = Training::findorfail(decrypt($id));
        return view('home.detail-training', compact('training'));
    }
    public function show_school($id)
    {
        $category = Category::findorfail(decrypt($id));
        $trainings = Training::where('category_id', $category->id)->get();
        return view('home.show-school', compact('category', 'trainings'));
    }
    public function about()
    {
        $about = About::first();
        $structures = Structure::orderByDesc('id')->get();
        return view('home.about', compact('about', 'structures'));
    }
    public function trainings()
    {
        $trainings = Training::orderByDesc('id')->paginate(8);
        $categories = Category::orderByDesc('id')->get();

        return view('home.trainings', compact('trainings', 'categories'));
    }
    public function contact()
    {
        $contact = ContactUs::first();

        return view('home.contact', compact('contact'));
    }
    public function accreditations()
    {
        $accreditations = Accreditation::orderByDesc('id')->get();

        return view('home.accreditations', compact('accreditations'));
    }
    public function show_accreditation($id)
    {
        $accreditation = Accreditation::findorfail(decrypt($id));

        return view('home.show-accredit', compact('accreditation'));
    }
    public function Programs()
    {
        $categories = Category::orderByDesc('id')->get();
        return view('home.programs.index', compact('categories'));
    }
    public function awards()
    {
        $awards = Award::orderByDesc('id')->get();
        return view('home.programs.awards', compact('awards'));
    }
    public function news()
    {
        return view('home.programs.news');
    }
    public function careers()
    {
        $collection = Career::orderByDesc('id')->get();
        return view('home.consultancy.careers', compact('collection'));
    }
    public function consultancy($career)
    {
        $career = Career::findOrFail($career);
        $consultances = Consultance::where('career_id', $career->id)->orderBy('title')->paginate(6);
        return view('home.consultancy', compact('consultances','career'));
    }

    public function consultancyShow($id)
    {
        $consultancy = Consultance::findorfail($id);
        return view('home.show-consultancy', compact('consultancy'));
    }

    public function testimonies()
    {
        $testimonies = Testimony::orderByDesc('id')->get();
        return view('home.consultancy.testimonies', compact('testimonies'));
    }
    public function publications()
    {
        return view('home.programs.publications');
    }
}
