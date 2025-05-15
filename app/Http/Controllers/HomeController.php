<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Blog;


class HomeController extends Controller
{
    //


    // public function home(){
    //     $home = Home::all();
    //     return view('home.index', compact('home'));

    // }

    public function homePage(){
        $home = Home::all();
        return view('home', compact('home'));

    }

    public function contactus(){
        $home = Home::all();
        return view('contact', compact('home'));

    }

    public function studentRegister(){
        $home = Home::all();
        return view('student_register', compact('home'));

    }
    public function studentLogin(){
        $home = Home::all();
        return view('student_login', compact('home'));

    }
    public function student(){
        $home = Home::all();
        return view('student', compact('home'));

    }
    public function explrSchoolPrograms(){
        $home = Home::all();
        return view('explr_School_programs', compact('home'));

    }
    public function partner(){
        $home = Home::all();
        return view('partner', compact('home'));

    }

    public function institutions(){
            $institutions = Home::all();

            return view('Institutions', compact('institutions'));
    }

    public function events(){
    $events = Home::all();
        return view('events', compact('events'));
    }

    // public function blogs(){
    //     $blogs = Home::all();
    //         return view('blog', compact('blogs'));
    //     }
    public function search(){
        $search = Home::all();
            return view('search', compact('search'));
        }
    public function web(){
        $web = Home::all();
            return view('web', compact('web'));
        }
    public function webinar(){
        $webinar = Home::all();
            return view('webinar', compact('webinar'));
        }
    public function webinarLearnmore(){
        $webinar_learnmore = Home::all();
            return view('webinar_learnmore', compact('webinar_learnmore'));
        }
    public function webinarReadmore(){
        $webinar_readmore = Home::all();
            return view('webinar_readmore', compact('webinar_readmore'));
        }
    public function privacyPolicy(){
        $privacy_policy = Home::all();
            return view('privacy_policy', compact('privacy_policy'));
        }
    public function eduxFees(){
        $Edux_fees = Home::all();
            return view('edux_fees', compact('Edux_fees'));
        }

    public function termAndCondition(){
        $terms_and_condition = Home::all();
            return view('terms_and _condition', compact('terms_and_condition'));
        }


        public function blogs()
        {
            $blogs = Blog::where('status', 'Published')
                         ->orderBy('published_date', 'desc')
                         ->get();

            return view('blog', compact('blogs')); // assuming your blade is resources/views/blog.blade.php
        }

}
