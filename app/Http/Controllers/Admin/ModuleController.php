<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ModuleController extends Controller
{
    public $pageName = '';
    public $componentName = 'MÓDULOS';

    public $pagination = 10;

    public function index():View
    {
        $modules = Module::latest()->paginate($this->pagination);
        return view('admin.module.index',[
            'modules' => $modules,
            'pageName' => $this->pageName = 'LISTADO',
            'componentName' => $this->componentName
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Module $module, $course):View
    {
        return view('admin.module.create',[
            'module' => $module,
            'course' => $course,
            'pageName' => $this->pageName = 'CREAR',
            'componentName' => $this->componentName
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $course)
    {
        $module = new Module();
        $module->name = $request->name;
        $module->course_id  = $course;
        $module->save();

        return redirect()->route('courses.show', compact('course'));
    }


    public function show(Module $module)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Module $module)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Module $module)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Module $module)
    {
        //
    }
}
