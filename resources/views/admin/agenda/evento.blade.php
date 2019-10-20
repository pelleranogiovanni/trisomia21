@extends('admin.layouts.app')

@section('main-content')

<div class="content-wrapper">
<!-- general form elements -->

  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Nuevo Evento</h3>
          </div>
                <!-- /.card-header -->
                <!-- form start -->
          <form role="form" action="{{ route('admin.evento.store') }}" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Título</label>
                <input type="text" class="form-control" id="inputTitulo" placeholder="Ingrese el título" name="titulo">
              </div>
            
              <div class="form-group">
                <label for="contenido">Contenido</label>
                <textarea type="textarea" class="form-control textarea" id="textareaContenido" placeholder="Ingrese la descripción del Evento" name="contenido" rows="10" ></textarea>
                <script>
                  $('#textareaContenido').wysihtml5({
                          "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
                            "emphasis": true, //Italics, bold, etc. Default true
                            "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
                            "html": false, //Button which allows you to edit the generated HTML. Default false
                            "link": true, //Button to insert a link. Default true
                            "image": false, //Button to insert an image. Default true,
                            "color": false, //Button to change color of font  
                            "blockquote": true //Blockquote
                          });
                </script>
              </div>
            
              <div class="row">					  
                <!-- Date dd/mm/yyyy -->
                <div class="form-group col-md-4">
                  <label>Fecha de inicio</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="fechaInicio">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
                
                <div class="form-group col-md-4">
                  <label>Fecha de cierre</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" im-insert="true" name="fechaFin">
                  </div>
                </div>
            
                <div class="bootstrap-timepicker col-md-4">
                  <div class="form-group">
                    <label>Horario</label>
                    <div class="input-group date" id="timepicker" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#timepicker" name="horario">
                      <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                      </div>
                    </div>
              <!-- /.input group -->
                  </div>
              <!-- /.form group -->
                </div>
              </div>
            
              <div class="form-group">
                <label for="exampleInputEmail1">Organizador</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese el nombre del ente que organiza" name="enteOrganizador">
              </div>

              <div class="row form-group">
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Ubicación</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese la ubicación del evento" name="ubicacion">
                </div>

                <div class="form-group col-md-6" hidden>
                  <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&height=600&hl=es&q=Les%20Rambles%2C%201%20Barcelona%2C%20Spain+(Mi%20nombre%20de%20egocios)&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/calcular-ruta.html">Calcular Ruta</a></iframe></div>
                </div>
            
                <div class="form-group">
                  <label for="exampleInputFile">Imagen</label>
                  <div class="input-group">
                    <div class="file-loading">
                      <input type="file" class="custom-file-input" id="exampleInputFile" name="imagenUrl" accept="image/jpg|png">
                      <label class="custom-file-label" for="exampleInputFile">Seleccione un archivo de imagen</label>
                    </div>

                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.row form-group -->
            </div>         
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Crear</button>
            </div>
          </form>
        </div>
              <!-- /.card -->
      </div>
    </div>
  </div>
</div>
@endsection