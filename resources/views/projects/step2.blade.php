<div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="row">
        <div class="col-12">
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
            </div>
        </div>
    </div>
    <form action="{{ route('projects') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row mt-3">
    </div>
    <div class="row">
        <div class="col-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">No. de Cotización:</span>
                </div>
                <input type="text" class="form-control inp_folio" name="folio" aria-label="Sizing example input" readonly>
            </div>
        </div>
    </div>
    
    <div class="row">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Alta Pedimentos</button>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                        <div class="modal-header">
                                <h4 class="modal-title">Agregar Pendiente</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                    <div class="col-6">
                                            <div class="form-group {{ $errors->has('part') ? 'has-danger' : '' }}">
                                                <label>No. de Parte:</label>
                                                <input class="form-control" type="text" name="anticipo" placeholder="Numero de parte">
                                                {!! $errors->first('part', '<span class="help-block">:message</span>') !!}
                                            </div>
                                    </div>
                                    <div class="col-6">
                                            <div class="form-group {{ $errors->has('descripcion') ? 'has-danger' : '' }}">
                                                <label>Descripcion: </label>
                                                <input class="form-control" type="text" name="descripcion" placeholder="descripcion">
                                                {!! $errors->first('descripcion', '<span class="help-block">:message</span>') !!}
                                            </div>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-6">
                                            <div class="form-group {{ $errors->has('cantidad') ? 'has-danger' : '' }}">
                                                <label>Cantidad:</label>
                                                <input class="form-control" type="text" name="cantidad" placeholder="Cantidad">
                                                {!! $errors->first('cantidad', '<span class="help-block">:message</span>') !!}
                                            </div>
                                    </div>
                                   
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                  </div>
                  
                </div>
              </div>
              
    <div class="row">
            <div class="table-responsive">
                    <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>No. Parte</th>
                                        <th>Descripcion</th>
                                        <th>Cantidad</th>
                                        <th>Solicitado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>
                        </div>
                  </div>

    </div>
    
</div>

