<div class="panel-group" id="acordion">

  <div class="panel panel-info">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#acordion" href="#filtro0">
          Filtro por id
        </a>
      </h4>
    </div>{{-- ./panel-heading --}}
    <div id="filtro0" class="panel-collapse collapse in">
      <div class="panel-body">
        {{ Form::open(array('url' => 'cotizaciones/filtro-por-id', 'method' => 'get')) }}

          <div class="col-xs-4">
            <div class="input-group">

              <span class="input-group-addon">Id de la cotización: </span>
              {{ Form::input('number', 'idCotizacion', '1', array('class' => 'numero form-control', 'min' => '1', 'step' => '1', 'title' => 'Id', 'required')) }}

              <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">
                  <span class="glyphicon glyphicon-search"></span>
                  Filtrar
                </button>
              </span>

            </div>{{-- /input-group --}}
          </div>{{-- /.col-xs-4 --}}

        {{ Form::close() }}
      </div>{{-- /.panel-body --}}
    </div>{{-- /#filtro0 --}}
  </div>{{-- /.panel --}}

  <div class="panel panel-info">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#acordion" href="#filtro1">
          Filtro por rango de fechas de creación
        </a>
      </h4>
    </div>{{-- ./panel-heading --}}
    <div id="filtro1" class="panel-collapse collapse">
      <div class="panel-body">
        {{ Form::open(array('url' => 'cotizaciones/filtro-por-fechas-de-creacion', 'method' => 'get')) }}

        <div class="input-group">

            <span class="input-group-addon">Fecha inicio:</span>
            <input type="date" name="fecha1" class="form-control", title="Fecha inicio" required />

            <span class="input-group-addon">Fecha fin:</span>
            <input type="date" name="fecha2" class="form-control", title="Fecha fin" required />

            <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">Filtrar</button>
            </span>

        </div><!-- /input-group -->

        {{ Form::close() }}
      </div>{{-- /.panel-body --}}
    </div>{{-- /#filtro1 --}}
  </div>{{-- /.panel --}}

  <div class="panel panel-info">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#acordion" href="#filtro3">
          Filtro por cliente y rango de fechas de creación
        </a>
      </h4>
    </div>{{-- ./panel-heading --}}
    <div id="filtro3" class="panel-collapse collapse">
      <div class="panel-body">
        {{ Form::open(array('url' => 'cotizaciones/filtro-por-fechas-de-creacion-con-cliente', 'method' => 'get')) }}

          <div class="input-group">
            <span class="input-group-addon">Cliente: </span>
            {{ Form::text('nombre', (Session::has('cliente')) ? Session::get('cliente')->nombre : '', array('class' => 'form-control', 'placeholder' => 'Nombre completo o razón social', 'required', 'maxlength' => '255', 'disabled')) }}
            <span class="input-group-addon">
              <a href="{{ url('clientes/listado?url=cotizaciones/listado') }}">
                <span class="glyphicon glyphicon-search"></span>
                Examinar
              </a>
            </span>
          </div><!-- /input-group -->

          <div class="input-group">

            <span class="input-group-addon">Fecha inicio:</span>
            <input type="date" name="fecha1" class="form-control", title="Fecha inicio" required />

            <span class="input-group-addon">Fecha fin:</span>
            <input type="date" name="fecha2" class="form-control", title="Fecha fin" required />

            <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">Filtrar</button>
            </span>

          </div><!-- /input-group -->

        {{ Form::close() }}
      </div>{{-- /.panel-body --}}
    </div>{{-- /#filtro3 --}}
  </div>{{-- /.panel --}}

<div class="panel panel-info">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#acordion" href="#filtro5">
          Filtro por notas de cotización
        </a>
      </h4>
    </div>{{-- ./panel-heading --}}
    <div id="filtro5" class="panel-collapse collapse">
      <div class="panel-body">
        {{ Form::open(array('url' => 'cotizaciones/filtro-por-notas', 'method' => 'get')) }}

          <div class="input-group">

            <span class="input-group-addon">Notas: </span>
            {{ Form::text('notas', '', array('class' => 'form-control', 'placeholder' => 'Datos adicionales', 'required', 'maxlength' => '255')) }}

            <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">Filtrar</button>
            </span>

          </div><!-- /input-group -->

        {{ Form::close() }}
      </div>{{-- /.panel-body --}}
    </div>{{-- /#filtro5 --}}
  </div>{{-- /.panel --}}

</div> {{-- /#acordion --}}