<?php
namespace App\Http\Controllers;

use App\DTOs\UserDTO;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private UserService $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $users = $this->service->getAll();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUserRequest $request)
    {
        $this->service->create($request->validated());

        return redirect()->route('users.index')
            ->with('success', 'Usuario creado');
    }

    public function edit($id)
    {
        $user = $this->service->find($id);
        return view('users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $data = $request->validated();

        if (empty($data['password'])) {
            unset($data['password']);
        }

        $this->service->update($id, $data);

        return redirect()->route('users.index')
            ->with('success', 'Usuario actualizado');
    }

    public function destroy($id)
    {
        $this->service->delete($id);

        return redirect()->route('users.index')
            ->with('success', 'Usuario eliminado');
    }
}
