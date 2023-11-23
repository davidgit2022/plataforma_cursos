<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    public $pageName = '';
    public $componentName = 'CURSOS';

    public $pagination = 10;
    public function index():View
    {
        $courses = Course::latest()->paginate($this->pagination);
        return view('admin.course.index', [
            'courses' => $courses,
            'pageName' => $this->pageName = 'LISTADO',
            'componentName' => $this->componentName,
        ]);
    }

    public function create(Course $course):View
    {
        return view('admin.course.create',[
            'course' => $course,
            'pageName' => $this->pageName = 'CREAR',
            'componentName' => $this->componentName
        ]);
    }

    public function store(CourseRequest $request):RedirectResponse
    {

        $course = Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        if ($request->image) {
            $fileName = uniqid() . '_.' . $request->image->extension();
            $request->image->move(public_path('images/courses'), $fileName);
            $course->image = 'images/courses/' . $fileName;
            $course->save();
        }
        

        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course):View
    {
        return view('admin.course.show',[
            'course' => $course,
            'pageName' => $this->pageName = 'DETALLES',
            'componentName' => $this->componentName
        ]);
    }


    public function edit(Course $course):View
    {
        return view('admin.course.edit',[
            'course' => $course,
            'pageName' => $this->pageName = 'EDITAR',
            'componentName' => $this->componentName
        ]);
    }

    public function update(Request $request, Course $course):RedirectResponse
    {
        $course->update([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        if ($request->image) 
        {
            $fileName = uniqid() . '_.' . $request->image->extension();
            $request->image->move(public_path('images/courses'), $fileName);
            $imageName = $course->image;

            $course->image = 'images/courses/' . $fileName;
            $course->save();

            if ($imageName != null) {
                if (file_exists('images/courses' . $imageName)) 
                {
                    unlink('images/courses' . $imageName);
                }
            }
        }

        return redirect()->route('courses.index');


    }

    public function destroy(Course $course)
    {
        $course->delete();
        return back();
    }
}
