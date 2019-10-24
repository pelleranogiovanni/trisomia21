@extends('admin.layouts.app')

@section('main-content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <h2 class="text-center">Administración de Publicaciones</h2>
    <br />
    <div class="card card-default">
        <div class="panel-heading">
            <ul>
                <li><i class="fas fa-file-text"></i> All the current Posts</li>
                <a href="#" class="add-modal"><li>Agregar una publicación</li></a>
            </ul>
        </div>

        <div class="card-body">
                <table class="table" id="postTable" style="">
                    <thead>
                        <tr>
                            <th valign="middle">ID</th>
                            <th>Título</th>
                            <th>Contenido</th>
                            <th>Publicado?</th>
                            <th>Última actualización</th>
                            <th>Acciones</th>
                        </tr>
                        {{ csrf_field() }}
                    </thead>
                    <tbody>
                        @foreach($publicaciones as $post)
                            <tr class="item{{$post->id}} @if($post->estado) warning @endif">
                                <td>{{$post->id}}</td>
                                <td>{{$post->titulo}}</td>
                                <td>
                                    {{-- {{App\Model\Admin\Post::getExcerpt($post->contenido)}} --}}
                                    {!! $post->contenido !!}
                                </td>
                                <td class="text-center"><input type="checkbox" class="published" data-id="{{$post->id}}" @if ($post->estado == 'PUBLISHED') checked @endif></td>
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->updated_at)->diffForHumans() }}</td>
                                <td>
                                    <button class="show-modal btn btn-success" data-id="{{$post->id}}" data-title="{{$post->titulo}}" data-content="{{$post->contenido}}">
                                    <span class="fa fa-eye"></span> Mostrar</button>
                                    <button class="edit-modal btn btn-info" data-id="{{$post->id}}" data-title="{{$post->titulo}}" data-content="{{$post->contenido}}">
                                    <span class="fa fa-edit"></span> Editar</button>
                                    <button class="delete-modal btn btn-danger" data-id="{{$post->id}}" data-title="{{$post->titulo}}" data-content="{{$post->contenido}}">
                                    <span class="fa fa-trash"></span> Eliminar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div><!-- /.panel-body -->
    </div><!-- /.panel panel-default -->
</div>

<!-- Modal form to add a post -->
<div id="addModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="title">Titulo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title_add" autofocus>
                            <small>Min: 2, Max: 32, solo texto</small>
                            <p class="errorTitle text-center alert alert-danger hidden"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="content">Contenido:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="content_add" cols="40" rows="5"></textarea>
                            <small>Min: 2, Max: 128, solo texto</small>
                            <p class="errorContent text-center alert alert-danger hidden"></p>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success add" data-dismiss="modal">
                        <span id="" class='glyphicon glyphicon-check'></span> Agregar
                    </button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">
                        <span class='glyphicon glyphicon-remove'></span> Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal form to show a post -->
<div id="showModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id">ID:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_show" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="title">Título:</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="title_show" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="content">Contenido:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="content_show" cols="40" rows="5" disabled></textarea>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">
                        <span class='glyphicon glyphicon-remove'></span> Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal form to edit a form -->
<div id="editModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id">ID:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_edit" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="title">Título:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title_edit" autofocus>
                            <p class="errorTitle text-center alert alert-danger hidden"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="content">Contenido:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="content_edit" cols="40" rows="5"></textarea>
                            <p class="errorContent text-center alert alert-danger hidden"></p>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary edit" data-dismiss="modal">
                        <span class='glyphicon glyphicon-check'></span> Editar
                    </button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">
                        <span class='glyphicon glyphicon-remove'></span> Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal form to delete a form -->
<div id="deleteModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <h3 class="text-center">¿Estás seguro que quieres eliminar la siguiente publicación?</h3>
                <br />
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id">ID:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_delete" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="title">Título:</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="title_delete" disabled>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger delete" data-dismiss="modal">
                        <span id="" class='glyphicon glyphicon-trash'></span> Eliminar
                    </button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">
                        <span class='glyphicon glyphicon-remove'></span> Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
  </div>
  <!-- /.content-wrapper -->
@endsection