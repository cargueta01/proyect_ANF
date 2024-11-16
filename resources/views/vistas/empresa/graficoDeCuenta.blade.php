@extends('layouts.app')

@section('title')
Gráficos de cuentas
@endsection

@section('content')

    <section class="section">
        <div class="section-header" style="display:grid;grid-template-columns: repeat(3, 1fr);text-align:center;padding:5px 10px;">
        <div style="padding: 0px 0px 10px 10px">
                <a href="{{ route('catalogo.index') }}" class="ag-courses-item_link"style=" border-radius: 28px;">
                    <div class="ag-courses-item_bg"></div>
                    <div class="ag-courses-item_title">Catalogo de cuentas</div>
                </a>
            </div>
            <div style="padding: 0px 0px 10px 10px">                
                <a href="{{route('vinculacion.index')}}" class="ag-courses-item_link"style=" border-radius: 28px;">
                    <div class="ag-courses-item_bg"></div>
                    <div class="ag-courses-item_title">Relacionar cuentas</div>
                </a>
            </div>
            <div style="padding: 0px 0px 10px 10px">                
                <a href="{{ route('graficos.index') }}" class="ag-courses-item_link"style=" background-color:#212e37;border-radius: 28px;">
                    <div class="ag-courses-item_bg"></div>
                    <div class="ag-courses-item_title">Gráficas</div>
                </a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @if($sinRegistros==True)
                            <label style="font-size: 1.4em">No hay datos para gráficar de la cuenta {{$cuenta->nombre}}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                            @else
                            <div id="container"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
    Highcharts.chart('container', {

title: {
    text: 'Gráfico de cuenta <?= $cuenta->nombre ?>'
},

subtitle: {
    text: ''
},

yAxis: {
    title: {
        text: 'Monto'
    }
},

xAxis: {
    accessibility: {
        rangeDescription: ''
    }
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        },
        pointStart: <?= $periodoInicial->anio ?>
    }
},

series: [{
    name: '<?= $cuenta->nombre ?>',
    data: <?= $puntos ?>
}
],

responsive: {
    rules: [{
        condition: {
            maxWidth: 500
        },
        chartOptions: {
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            }
        }
    }]
}
});
</script>
                            @endif
@endsection