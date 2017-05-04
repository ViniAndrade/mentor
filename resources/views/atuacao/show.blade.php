@extends('layouts.app')

@section('content')

    <section class="content-header">
        <h1>
            Visualizar 
            <small>detalhes</small>
        </h1>
		<p> Mais informações sobre a oportunidade </p>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Visualizar Oportunidade</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" name="form" action="{{ route('app.demand.store') }}">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmpresa" class="col-sm-2 control-label">Empresa</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputEmpresa" placeholder="Empresa" name="empresa" value="" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Função</label>

                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputFuncao" placeholder="Função" name="email" value="" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Local</label>
                                
								 <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputLocal" placeholder="Local" name="local" value="" disabled>
                                </div>
                                 </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Descrição do trabalho</label>

                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputPassword3" placeholder="Descrição do trabalho" name="Descricao" value="" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Remuneração</label>

                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputPassword3" placeholder="Remuneração" name="remuneracao" value="" disabled>
                                </div>
                            </div>

                                <div class="col-md-2">
                                  <a href="{{route('app.area.index') }}""><button type="submit" class="btn btn-block btn-success btn-flat" style="margin-left: 110%;">Voltar</button> </a>  
                                </div>


                        </div>
                        <!-- /.box-body -->
                        <!-- /.box-footer -->
                    </form>
                </div>

            </div>

        </div>
    </section>

@endsection
