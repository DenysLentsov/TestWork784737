<?php
namespace App\Repositories\Interfaces;
use App\Models\Tutor;

interface TutorRepositoryInterface
{
    public function all();
    public function tutors($request);
    public function getStudentsByTutor($name);
}