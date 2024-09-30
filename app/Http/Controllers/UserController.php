<?php
namespace App\Http\Controllers;
use App\Http\Requests\UserStoreRequest;use App\Http\Requests\UserUpdateRequest;
use App\Models\Admin;use App\Models\User;
use Illuminate\Http\Request;use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{    /**
 * Display a listing of the resource.     */
    public function index()    {
        $users = Admin::all();
        return view('admin.users.index', compact('users'));
    }
    /**
     * Show the form for creating a new resource.     */
    public function create()    {
        return view('admin.users.create');    }
    /**
     * Store a newly created resource in storage.     */
    public function store(UserStoreRequest $request)    {
        $user = new Admin();        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();
        return redirect()->route('admin.users.index')->with('success', 'User created successfully');    }
    /**
     * Display the specified resource.     */
    public function show(string $id)    {
        $user = Admin::find($id);
        return view('admin.users.show', compact('user'));
    }
    /**     * Show the form for editing the specified resource.
     */
    public function edit(string $id)    {
        $user = Admin::find($id);
        return view('admin.users.edit', compact('user'));    }
    /**
     * Update the specified resource in storage.     */
    public function update(UserUpdateRequest $request, string $id)    {
        Admin::find($id)->update($request->validated());
        return redirect()->route('admin.users.index')->with('success', 'User updated successfully');
    }
    /**     * Remove the specified resource from storage.
     */    public function destroy(string $id)
{        $user = Admin::findOrFail($id);
         $user->delete();
         return redirect()->route('admin.users.index')->with('success', 'User deleted successfully');
}}
