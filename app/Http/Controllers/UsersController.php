<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUpdateUserFormRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
   {
    $users = User::get();
    //dd($users); 
    return view ('users.index', compact('users'));
   }

   public function show($id)
   {
    //dd('users.show', $id);
    if (!$user = User::find($id))
     return redirect()->route('users.index'); 

     return view ('users.show',compact('user'));
   }
   public function create(){
     return view ('users.create');
   }
   public function store(StoreUpdateUserFormRequest $request)
   {
     //User::create($request->all());

     //$user = new User;
     //$user->name = $request->name;
     //$user->email = $request->email;
     //$user->password = $request->password;
     //$user->save();

     $data = $request->all();
     $data['password'] = bcrypt($request->password);
     $user = User::create($data);
     return redirect()->route('users.index');
   }

   public function edit($id)
   {
    if (!$user = User::find($id))
     return redirect()->route('users.index'); 
     return view ('users.edit',compact('user'));
   }


   public function update(StoreUpdateUserFormRequest $request, $id)
   {
    if (!$user = User::find($id))
     return redirect()->route('users.index'); 
  $data = $request->only('name','email');
  if($request->password)
     $data['password'] = bcrypt($request->password);

     $user->update($data);
     return redirect()->route('users.index'); 
   }

   public function destroy($id)
   {
    if (!$user = User::find($id))
     return redirect()->route('users.index');
     $user->delete();
     return redirect()->route('users.index');
   }
   
}

 
