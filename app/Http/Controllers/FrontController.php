<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppointmentRequest;
use App\Models\Appointment;
use App\Models\CompanyAbout;
use App\Models\HeroSection;
use App\Models\OurTeam;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index(){
        $products = Product::all();
        $teams = OurTeam::take(7)->get();
        $testimonials = Testimonial::take(5)->get();
        $hero_section = HeroSection::orderByDesc('id')->take(1)->get();
        return view('front.index', compact('products', 'teams', 'testimonials', 'hero_section'));
    }

    public function team(){
        $teams = OurTeam::all();
        return view('front.team', compact('teams'));
    }

    public function about(){
        $abouts = CompanyAbout::take(2)->get();
        return view('front.about', compact('abouts'));
    }

    public function appointment(){
        $testimonials = Testimonial::take(5)->get();
        $products = Product::take(3)->get();
        return view('front.appointment', compact('testimonials', 'products'));
    }

    public function appointment_store(StoreAppointmentRequest $request){
        DB::transaction(function() use ($request) {
            $validated = $request->validated();
            $newAppointment = Appointment::create($validated);
        });
        return redirect()->route('front.index');
    }
}
