<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminFrontPagesController extends Controller
{
    public function getAdminLoginPage(){
        return view('admin.adminLogin');
    }
    public function getTeacherEditForm(){
        return view('admin.teacherEditForm')->with('category','Գլխավոր')->with('section','Ուսուցիչներ');
    }

    public function getSliderEditForm(){
        return view('admin.slider')->with('category','Գլխավոր')->with('section','Սլայդեր');
    }

    public function getGeneralSection(){
        return view('admin.generalSection')->with('category','Գլխավոր')->with('section','Ընդհանուր սեկցիա');
    }

    public function getCurses(){
        return view('admin.curses')->with('category','Գլխավոր')->with('section','Կուրսեր');
    }

    public function getEvents(){
        return view('admin.events')->with('category','Գլխավոր')->with('section','Իրադարձություններ');
    }

    public function getStudentsOpinion(){
        return view('admin.studentsOpinion')->with('category','Գլխավոր')->with('section','Ուսանողների կարծիքը');
    }

//    public function getEvents(){
//        return view('admin.events')->with('category','Գլխավոր')->with('section','Իրադարձություններ');
//    }

}
