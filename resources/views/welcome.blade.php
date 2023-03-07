@extends('layouts.home')
@section('title', '')
@section('content')

<div id="search-container" class="col-md-12">
    
    {{-- Formulario de Login--}}
<div class="row">
    <div class="test">   
     <div class="  col-md-4 col-md-offset-4" style="position:relative; width:900px;
     left:200px; top:90px">
           {{--erros validação--}}
            
        
        <form method="POST" action="usuario_executar_login">
            {{csrf_field()}}
            {{--usuario--}}
            <div class="mb-3">
              <label id="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            {{--senha--}}
    
            <div class="mb-3">
              <label id="password">Senha</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
            </div>
            {{--submit--}}
               <div class="text-center"> 
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
    
          </form>
         
    
    
     </div>
    </div>
    </div>

</div>
@endsection