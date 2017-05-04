@extends('layouts.app')

@section('content')

    <section class="content-header">
        <h1>
            Oportunidades
            <small>detalhes</small>
			
        </h1>
		 <p> Cadastre uma oportunidade de emprego ou estágio </p>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Oportunidades</h3>

                                <a href="{{ route('app.area.create') }}" class="btn btn-success pull-right" style="margin: 5px;">Nova oportunidade</a>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @if(count($perfomances) > 0)
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Empresa</th>
                                    <th>Função</th>
									<th>Email</th>
								
									<th> Ações <th>	
									
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($perfomances as $perfomance)
                                    <tr>
                                        <td>{{ $perfomance->id }}</td>
                                        <td>{{ $perfomance->area }}</td>
										<td> </td>
										<td> </td>
										<td>
										<button class="btn btn-info btn-sm">Editar</button>
										<button class="btn btn-danger btn-sm">Excluir</button>
										<a href="{{route('app.area.show') }}"><button class="btn btn-warning btn-sm">Visualizar</button> </a>
										</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $perfomances->render() }}
                        @else
                            <h2 class="text-center"> Não há oportunidades cadastradas</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection