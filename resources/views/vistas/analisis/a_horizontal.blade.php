@extends('layouts.app')

@section('title')
Análisis horizontal
@endsection

@section('content')
    <section class="section">
        <div class="section-header" style="display:grid;grid-template-columns: repeat(2, 1fr);text-align:center;padding:5px 10px;">
            <div style="padding: 0px 0px 10px 10px">            
                    <a href="{{ route('horizontal.index') }}" class="ag-courses-item_link"style=" background-color:#212e37;border-radius: 28px;">
                        <div class="ag-courses-item_bg"></div>
                        <div class="ag-courses-item_title">Análisis horizontal</div>
                    </a>
                </div>
                <div style="padding: 0px 0px 10px 10px">                
                    <a href="{{route('vertical.index')}}" class="ag-courses-item_link"style="border-radius: 28px;">
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
                                    <thead >
                                        <th>Cuentas</th>
                                        <th>{{$periodo1_nombre}}</th>
                                        <th>{{$periodo2_nombre}}</th>
                                        <th>Variacion Absoluta</th>
                                        <th>Variacion Relativa</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($cuenta_supreme as $cuenta)
                                            <tr>
                                                <td>{{$cuenta['cuenta']}}</td>
                                                <td>{{$cuenta['cuenta1']}}</td>
                                                <td>{{$cuenta['cuenta2']}}</td>
                                                <td>{{$cuenta['absoluta']}}</td>
                                                <td>{{$cuenta['relativa']}}%</td>
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
    </section>
@endsection