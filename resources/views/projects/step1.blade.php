 <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="row">
        <div class="col-12">
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
        </div>
    </div>
     <div class="row mt-4">
         <h3>SOLICITUD DE COTIZACIÓN</h3>
        <div class="col-3">
            <b>No. de Cotización:</b> Prodemex 001 swj
        </div>
        
     </div>
     <form action="{{ route('projects') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-5 offset-1">
                <div class="form-group">
                    <label>Cliente</label>
                    <input class="form-control" type="text" name="cliente" placeholder="Nombre del cliente">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" placeholder="Email">
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label>Pago Anticipo:</label>
                    <input class="form-control" type="text" name="anticipo" placeholder="Anticipo">
                </div>
                <div class="form-group">
                    <label>Teléfono:</label>
                    <input class="form-control" type="text" name="telefono" placeholder="Teléfono">
                </div>
            </div>
            <div class="col-10 offset-1">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Enviado por:</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="encargado">
                        <option selected>Selecciona Encargado...</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->nombre }}">{{ $user->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-5 offset-1">
                <div class="form-group">
                    <label>Nombre del archivo:</label>
                    <input class="form-control" type="text" name="nombreArchivo" placeholder="Archivo">
                </div>
            </div>
            <div class="col-5">
                <label>Archivo:</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="archivo" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Elegir archivo</label>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-block btn-outline-primary mt-4">
                    Guardar y avanzar
                </button>
            </div>
        </div>
     </form>
</div>