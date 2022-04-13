<?php

namespace App\Repositories;

use App\Models\Tutor;
use App\Repositories\Interfaces\TutorRepositoryInterface;

class TutorRepository implements TutorRepositoryInterface
{

    public function all()
    {
        return Tutor::all();
    }

    public function tutors($request){
        $collection = $request->collect();
        if($collection->has('name','orderby')){
            return Tutor::where('name', $request->input('name'))
                ->orderBy($request->input('orderby'))
                ->get();
        }elseif($collection->has('name')){            
            return Tutor::where('name', $request->input('name'))
                ->get();
        }elseif($collection->has('subject','orderby')){
            return Tutor::where('subject', $request->input('subject'))
                ->orderBy($request->input('orderby'))
                ->get();
        }elseif($collection->has('subject')){
            return Tutor::where('subject', $request->input('subject'))
                ->get();
        }else{
            return Tutor::all();
        }
    }

    public function getStudentsByTutor($request)
    {
        if(!empty($request->query('name'))){
            $students = array();
            $tutors = Tutor::where('name', $request->query('name'))->get();
            foreach($tutors as $tutor){
                $students[] = $tutor->students;
            }
        }else{
            $students = 'Please enter the tutor Name';
        }
        return $students;
    }
}