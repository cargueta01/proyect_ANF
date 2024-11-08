@extends('layouts.app')

@section('title')
Bienvenido
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Bienvenido</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <center><b><h4>EconoScope</h4></b></center>
                            <center><b><h5>Un vistazo a tu economia</h5></b></center>
                            <br>
                            <center><img src="{{ asset('img/logo.png') }}" alt="logo" width="100" class="shadow-light"></center>
                            <br>
                            <center><h6>Integrantes</h6></center>
                            <br>
                            <center>                            
                                <div class="container">
                                    <table class="table">
                                        <tr class="table-success">
                                            <th scope="col">Apellidos</th>
                                            <th scope="col">Nombres</th>
                                            <th scope="col">Carnet</th>
                                        </tr>
                                        <tr>
                                            <td>Alvarado Escobar</td>
                                            <td>Gerson Israel</td>
                                            <td scope="row">AE17004</td>
                                        </tr>
                                        <tr>
                                            <td>García Guevara</td>
                                            <td>Álvaro Daniel</td>
                                            <td scope="row">GG20013</td>
                                        </tr>   
                                        <tr>
                                            <td>Rafaelano Santos</td>
                                            <td>Carlos Eduardo</td>
                                            <td scope="row">RS20002</td>
                                        </tr>
                                        <tr>
                                            <td>Rogel Hernández</td>
                                            <td>Kevin Anthony</td>
                                            <td scope="row">RH20049</td>
                                        </tr>
                                        <tr>
                                            <td>Vásquez Rodríguez</td>
                                            <td>Carlos Alonso</td>
                                            <td scope="row">VR16021</td>
                                        </tr>
                                    </table>
                                </div>
                            </center>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection