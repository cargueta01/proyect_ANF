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
                                            <td>Arias Alfaro</td>
                                            <td>Kevin Alejandro</td>
                                            <td scope="row">AA20085</td>
                                        </tr>
                                        <tr>
                                            <td>Argueta Alvarado</td>
                                            <td>Carlos Josué</td>
                                            <td scope="row">AA20099</td>
                                        </tr>   
                                        <tr>
                                            <td>Méndez Menjívar</td>
                                            <td>Fernando José</td>
                                            <td scope="row">MM21085</td>
                                        </tr>
                                        <tr>
                                            <td>Ramirez Flores</td>
                                            <td>Daniel Esaú</td>
                                            <td scope="row">RR20102</td>
                                        </tr>
                                        <tr>
                                            <td>Rivera López</td>
                                            <td>Christian Adonay</td>
                                            <td scope="row">RL18051</td>
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