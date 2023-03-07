<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

//use App\Models\Usuarios;



class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

   
    public function executarlogin(Request $request){
       if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
          return dd('logado');
        }else{ 
            return dd('não está logado');
        
        }
      }
    
      
    

     public function executarCriarNovaConta(Request $request){
    // executar os procedimentos e verificação para criação de uma conta

         if(!empty($request->all())){
           $user= new User;
           $user->name=$request->name;
           $user->email=$request->email;
           $user->password=bcrypt($request->password);

            $user->save();
            return redirect('/usuarios_login');
        }else{         
          dd('não');
        }        
    }



public function executarRecuperarSenha(Request $request){

     // validação
     $this->validate($request,[
        
        'id_emai'=>'required|email'
        
     ]);
     return 'OK';
 
    
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

