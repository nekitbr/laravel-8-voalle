<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    protected $type = 'admin';
    
    public function index(User $user) {
        $this->authorize('view', User::class);
        
        $admins = $user->paginate(1000);
        $type = $this->type;

        return view('table', compact('admins', 'type'));
    }

    public function create() {
        $this->authorize('view', User::class);

        $type = $this->type;

        return view('register-form', compact('type'));
    }

    public function store(Request $request) {
        $this->authorize('store', User::class);

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'role' => 'required',
        ]);
        
        User::create($data);

        return redirect('/admins')->with('success', "Usuario {$data['name']} criado com sucesso!");
    }

    public function edit(User $user) {
        $this->authorize('view', User::class);

        $type = $this->type;

        return view('register-form', compact('user', 'type'));
    }

    public function update(User $user, Request $request)
    {
        $this->authorize('update', User::class);

        $data = $request->validate([
            'name' => 'sometimes',
            'email' => ['sometimes', 'email', Rule::unique('users')->ignore($user->id)],
            'password' => 'sometimes',
            'role' => 'sometimes',
        ]);

        if (!$data['password']) {
            unset($data['password']);
        }

        $user->update($data);

        return redirect("/admins/edit/{$user->id}")->with('success', 'Update successful');
    }

    public function destroy(User $user) {
        $this->authorize('destroy', User::class);

        $user->delete();
        
        return redirect('/admins')->with('success', 'Deleted successfully!');
    }
}
