@extends('layouts.app')

@section('title')
Análisis vertical
@endsection

@section('content')
    <section class="section">
        <div class="section-header" style="display:grid;grid-template-columns: repeat(2, 1fr);text-align:center;padding:5px 10px;">
            <div style="padding: 0px 0px 10px 10px">            
                    <a href="{{ route('horizontal.index') }}" class="ag-courses-item_link"style=" border-radius: 28px;">
                        <div class="ag-courses-item_bg"></div>
                        <div class="ag-courses-item_title">Análisis horizontal</div>
                    </a>
                </div>
                <div style="padding: 0px 0px 10px 10px">                
                    <a href="{{route('vertical.index')}}" class="ag-courses-item_link"style="background-color:#212e37;border-radius: 28px;">
                        <div class="ag-courses-item_bg"></div>
                        <div class="ag-courses-item_title">Análisis vertical</div>
                    </a>
                </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            <div class="table-responsive">
                                <table class="table table-striped-columns">
                                    <thead>
                                        <th>Cuentas</th>
                                        <th>{{$periodo1}}</th>
                                        <th>{{$periodo2}}</th>
                                        <th>Variacion {{$periodo1}}</th>
                                        <th>Variacion {{$periodo2}}</th>
                                    </thead>
                                    <tbody>
                                        <tr class="table-secondary" style="color: black;font-weight: bold;">
                                            <td>Activos</td><td></td><td></td><td></td><td></td>
                                        </tr>
                                        @foreach ($cuenta_supreme as $cuenta)
                                            @if ($cuenta['tipo'] == 1)
                                                <tr>
                                                    <td>{{$cuenta['cuenta']}}</td>
                                                    <td>{{$cuenta['cuenta1']}}</td>
                                                    <td>{{$cuenta['cuenta2']}}</td>
                                                    <td>{{$cuenta['variacion1']}}%</td>
                                                    <td>{{$cuenta['variacion2']}}%</td>
                                                </tr>
                                            @endif
                                        @endforeach
    
                                        <tr class="table-info" style="color: black;font-weight: bold;">
                                            <td>Total Activo</td>
                                            <td>{{$totales['activo1']}}</td>
                                            <td>{{$totales['activo2']}}</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
    
                                        <tr><td></td></tr>
                                        <tr class="table-secondary" style="color: black;font-weight: bold;">
                                            <td>Pasivos</td><td></td><td></td><td></td><td></td>
                                        </tr>
                                        @foreach ($cuenta_supreme as $cuenta)
                                        @if ($cuenta['tipo'] == 0)
                                        <tr>
                                            <td>{{$cuenta['cuenta']}}</td>
                                            <td>{{$cuenta['cuenta1']}}</td>
                                            <td>{{$cuenta['cuenta2']}}</td>
                                            <td>{{$cuenta['variacion1']}}%</td>
                                            <td>{{$cuenta['variacion2']}}%</td>
                                        </tr>
                                        @endif
                                        @endforeach
                                        
                                        <tr class="table-info" style="color: black;font-weight: bold;">
                                            <td>Total Pasivo</td>
                                            <td>{{$totales['pasivo1']}}</td>
                                            <td>{{$totales['pasivo2']}}</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
    
    
                                        <tr><td></td></tr>
                                        <tr class="table-secondary" style="color: black;font-weight: bold;">
                                            <td>Patrimonio</td><td></td><td></td><td></td><td></td>
                                        </tr>
                                        @foreach ($cuenta_supreme as $cuenta)
                                            @if ($cuenta['tipo'] == 2)
                                                <tr>
                                                    <td>{{$cuenta['cuenta']}}</td>
                                                    <td>{{$cuenta['cuenta1']}}</td>
                                                    <td>{{$cuenta['cuenta2']}}</td>
                                                    <td>{{$cuenta['variacion1']}}%</td>
                                                    <td>{{$cuenta['variacion2']}}%</td>
                                                </tr>
                                            @endif
                                        @endforeach
    
                                        <tr class="table-info" style="color: black;font-weight: bold;">
                                            <td>Total Patrimonio</td>
                                            <td>{{$totales['patrimonio1']}}</td>
                                            <td>{{$totales['patrimonio2']}}</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection