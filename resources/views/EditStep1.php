<div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="row">
        <div class="col-12">
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
        </div>
    </div>

    <form action="{{ route('projects') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mt-3">
            <div class="col-12">
               
                <h3>SOLICITUD DE COTIZACIÓN</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="input-group mb-12">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">No. de Cotización:</span>
                    </div>
                    <input type="text" class="form-control inp_folio" name="folio" aria-label="Sizing example input" readonly>
                </div>
            </div>
           
            <div class="col-6">
                <select class="custom-select" id="inputGroupSelect01" name="coti">
                    <option disabled selected>Selecciona Cotizacion...</option>
                    @foreach ($quotations as $quotation)
                        <option value="{{ $quotation->folio }}">{{ $quotation->folio}}</option>
                    @endforeach
                </select>
            </div>
            {!! $errors->first('coti', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="row">
            <div class="col-5 offset-1">
                <div class="form-group {{ $errors->has('cliente') ? 'has-danger' : '' }}">
                    <label>Cliente</label>
                    <input class="form-control cliente" type="text" name="cliente" placeholder="Nombre del cliente" >
                   {!! $errors->first('cliente', '<span class="help-block">:message</span>') !!}
                </div>
              
                <div class="form-group {{ $errors->has('contacto') ? 'has-danger' : '' }}">
                    <label>contacto</label>
                    <input class="form-control contacto" type="contacto" name="contacto" placeholder="contacto">
                    {!! $errors->first('contacto', '<span class="help-block">:message</span>') !!}
                </div>
            </div>
           <div class="col-5">
                <div class="form-group {{ $errors->has('anticipo') ? 'has-danger' : '' }}">
                    <label>Pago Anticipo:</label>
                    <input class="form-control anticipo" type="anticipo" name="anticipo" placeholder="Anticipo">
                    {!! $errors->first('anticipo', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group  {{ $errors->has('encargado') ? 'has-danger' : '' }}">
                        <div class="input-group ">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Enviado por:</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="encargado">
                                <option disabled selected>Selecciona Encargado...</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->nombre }}">{{ $user->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        {!! $errors->first('encargado', '<span class="help-block">:message</span>') !!}
                    </div>
            </div>
            
            <div class="col-5 offset-1">
                <div class="form-group mt-3 {{ $errors->has('nombreArchivo') ? 'has-danger' : '' }}">
                    <label>Nombre del archivo:</label>
                    <input class="form-control" type="text" name="nombreArchivo" placeholder="Archivo">
                    {!! $errors->first('nombreArchivo', '<span class="help-block">:message</span>') !!}
                </div>
            </div>
            <div class="col-5 {{ $errors->has('archivo') ? 'has-danger' : '' }}">
                <label>Archivo:</label>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="archivo" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Elegir archivo</label>
                    </div>
                </div>
                {!! $errors->first('archivo', '<span class="help-block">:message</span>') !!}
            </div>
            <div class="col-12">
                <button class="btn btn-block btn-outline-primary mt-4">
                    Guardar y avanzar
                </button>
            </div>
        </div>

        <div class="row">
                <div class="col">
                    @foreach ($quotations as $item)
                        {{-- <a href="{{ route('download', $item->archivo ) }}">{{ asset('cotizaciones/' . $item->archivo) }}</a> --}}
                        <h4>{{ $item->archivo }}</h4>
                         {{-- -<a href="{{ route('download', '1549643113CodeIgniter_Guia_Usuario_2.1.0.pdf' ) }}"> --}}
                        </a>
                        <a href="{{ route('download', $item->archivo ) }}">Descargar </a>
                    @endforeach
                </div>
            </div>
     </form>

     {{-- Se pasa el conteo de cotizaciones a javascript --}}
     <form action="">
            <input type="hidden" id="folio" data-folio="{{ $totalQuotations }}">
        </form>
</div>