<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\User;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function index(Request $request)
    {
        $buscar = $request->get('buscarpor');
        $tipo = $request->get('type');
        $variablesurl = $request->all();
        $users = User::buscarpor($tipo,Str::upper($buscar))->paginate(5)->appends($variablesurl);
        return view('usuarios.index',compact('users'));
    }

    public function edit(User $user,$id)
    {
        $roles = Role::all();
        $users = User::WHERE('id',$id)->get();
        $user;
        foreach($users as $use){
            $user=$use;
        }
        return view('usuarios.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, User $user)
    {
        {


            $request->validate(
                [

                'name' => 'required|regex:/^[\pL\s\-]+$/u', 
                'apellidoPaterno' => 'required|regex:/^[\pL\s\-]+$/u', 
                'apellidoMaterno' => 'required|regex:/^[\pL\s\-]+$/u', 
                'conf_password',
                'email',
                'telefono' => 'required|regex:/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/u',
                'username',
                'idRol' ,
    
                ]
            );
            $idRol=3;
    
            $name =Str::upper($request->input('name'));
            $apellidoPaterno =Str::upper($request->input('apellidoPaterno'));
            $apellidoMaterno =Str::upper($request->input('apellidoMaterno'));
            $email =Str::upper($request->input('email'));
            $telefono =Str::upper($request->input('telefono'));
            $username =Str::upper($request->input('username'));
            $idRol = 2;

            User::WHERE('id',$id)->update(['name'=>$name,'apellidoPaterno'=>$apellidoPaterno,'apellidoMaterno'=>$apellidoMaterno,'email'=>$email , 'idRol'=>$idRol ,'username'=>$username,'telefono'=>$telefono]);
            $user->roles()->sync($request->roles);
        Session::flash('message_save', '¡Sus datos se actualizaron con éxtio!');
            
            return redirect()->route("user.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy(User $user)
    // {
    // $user->delete();
    // Session::flash('message_delete', '¡Usuario borrado con éxito!');
    // return redirect()->route("user.index");
    // }
    public function profile()
    {

        $user = User::findOrFail(auth()->user()->id);

        return view('profile.index', compact('user'));
    }

    public function show()
    {
        $user = User::findOrFail(auth()->user()->id);
        return view('profile.profile_show',  compact('user'));
    }

    public function userUpdate(Request $request, $id)
    {


        $request->validate(
            [
                'name',
                'apellidoPaterno',
                'apellidoMaterno',
                'password', // regex Solo: incluye algunos carcateres
                'email',
                'telefono' ,
                'username',
                'idRol' ,

            ]
        );

        Session::flash('message_save', '¡Sus datos se actualizaron con éxtio!');
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('apellidoPaterno');
        $user->email = $request->input('apellidoMaterno');
        $user->email = $request->input('password');
        $user->email = $request->input('telefono');
        $user->email = $request->input('idRol');
        $user->email = $request->input('email');

        if ($request->check == 'on') {

            $request->validate(
                [
                    'photo' => 'required|image|max:2048'
                ]
            );


            $name_photo= $request->id;

            $uploadedFileUrl = $request->file('photo')->storeOnCloudinaryAs('perfil',$name_photo);

             $user-> photo =$uploadedFileUrl->getPath();
        }
        $user->saveOrFail();
        return redirect()->route("user.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('usuarios.create', compact('roles'));
        
    }

    public function store(Request $request){

        $fields = $request->validate([
            'name' => 'required|regex:/^[\pL\s\-]+$/u', 
            'apellidoPaterno' => 'required|regex:/^[\pL\s\-]+$/u', 
            'apellidoMaterno' => 'required|regex:/^[\pL\s\-]+$/u', 
            'password' => ['required', Password::min(8)
                            ->letters()
                            ->numbers()
                            ->symbols()
        ],
            'conf_password'=> 'required',
            'email'=> 'required',
            'telefono' => 'required|regex:/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/u',
            'username'=> 'required',
            
    ]);
        $a = $fields['password'];
        $b = $fields['conf_password'];

        if (strcmp($a, $b) === 0) {
            Session::flash('message_save', '¡Empleado guardado con éxito!');

            //$user = User::create($request->all());
            $idRol=3;
            $id = "USER-".
            strtoupper($fields['username']).
            strtoupper("-".$fields['name']);
    
            $user = User::create([
                'name' => $fields['name'],
                'email' => $fields['email'],
                'username' => $fields['username'],
                'password' => bcrypt($fields['password']),
                'apellidoPaterno' => $fields['apellidoPaterno'],
                'apellidoMaterno' => $fields['apellidoMaterno'],
                'telefono' => $fields['telefono'],
                'id' => $id,
                'idRol' => $idRol
                
    
            ]);
    
            $user->roles()->sync($request->roles);
            $user->saveOrFail();
            return redirect()->route("user.index");

        } else {
            Session::flash('message_save', '¡Las contraseñas no coinciden!');
            return redirect()->route("user.create");
        }

        

       
    }

    public function destroy($id)
    {
        Session::flash('message_delete', 'Empleado borrado con éxito!');
        $user = User::WHERE('id',$id)->delete();
        return redirect()->route("user.index");
    }

}
