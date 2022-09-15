@extends('layouts.plantillabase');
@extends('layouts.app', ['activePage' => 'posts', 'titlePage' => __('Crud Post')])

@section('content')
 
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
                             
        <div class="card">
 <div class="card-header">
                       

                            

                            
                      
                 


          <div class="card-header card-header-primary">
            <h4 class="card-title ">Simple Table</h4>
            
          </div>
          <div class="row">
                              <div class="col-12 text-left">
                                <a href="{{ route('posts.create') }}" class="btn btn-info">Crear Post </a>
                              </div>
                              </div>
          <div class="card-body">
            <div class="table-responsive">
            <div>
    
              <table class="table">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th>TITULO</th>
                  <th>CONTENIDO</th>
                  <th>ACCIONES</th>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                <tr>
                <td>{{$post->id}} </td>
                <td>{{$post->titulo}} </td>
                <td>{{$post->contenido}} </td>
                <td>
                                                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-warning " href="{{ route('posts.edit',$post->id) }}"><i class="fa fa-fw fa-eye"></i> Editar</a>
                                                    
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>



                </tr>  
                @endforeach
               
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
@endsection