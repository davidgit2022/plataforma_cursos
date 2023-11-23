<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public $pageName = '';
    public $componentName = 'USUARIOS';

    public $pagination = 10;

    public function index():View
    {
        $users = User::latest()->paginate($this->pagination);
        return view('admin.user.index', [
            'users' => $users,
            'pageName' => $this->pageName = 'LISTADO',
            'componentName' => $this->componentName,
        ]);
    }


    public function create(User $user):View
    {
        return view('admin.user.create',[
            'user' => $user,
            'pageName' => $this->pageName = 'CREAR',
            'componentName' => $this->componentName,
        ]);
    }

    public function store(UserRequest $request):RedirectResponse
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'USER'
        ]);


        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    public function edit(User $user):View
    {
        return view('admin.user.edit',[
            'user' => $user,
            'pageName' => $this->pageName = 'EDITAR',
            'componentName' => $this->componentName,
        ]);
    }


    public function update(Request $request, User $user):RedirectResponse
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'USER'
        ]);

        return redirect()->route('users.index');
    }


    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
