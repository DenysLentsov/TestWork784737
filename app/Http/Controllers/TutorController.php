<?php

namespace App\Http\Controllers;
use App\Repositories\Interfaces\TutorRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Tutor;

class TutorController extends Controller
{
    private $tutorRepository;

    public function __construct(TutorRepositoryInterface $tutorRepository)
    {
        $this->tutorRepository = $tutorRepository;
    }

    public function tutors(Request $request){
        return $this->tutorRepository->tutors($request);
    }

    public function students(Request $request)
    {
        return $this->tutorRepository->getStudentsByTutor($request);;
    }
}
