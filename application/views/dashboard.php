<section class="wrapper main-wrapper" style=''>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script type="text/javascript">
$(function () { 
  
    var nama = <?php echo $nama; ?>;
    var beli = <?php echo $beli; ?>;
    var jual = <?php echo $jual; ?>;
  
    var chart = new Highcharts.Chart({
        chart: {
            type: 'column',
                    renderTo: 'container'
        },
        title: {
            text: 'Laporan Penjualan dan Pembelian'
        },
        xAxis: {
            categories: nama
        },
        yAxis: {
            title: {
                text: 'Rate'
            }
        },
        series: [{
            name: 'Beli',
            data: beli
        }, {
            name: 'Jual',
            data: jual
        }]
    });
});
var nama = <?php echo $nama; ?>;
var beli = <?php echo $beli; ?>;
var jual = <?php echo $jual; ?>;
var laba =jual;
var rugi =beli;

for(let i in jual)
{
    if(jual[i] - beli[i] < 0){
        rugi[i] = beli[i] - jual[i];
        laba[i] =0;
    }else{
        laba[i] = jual[i] - beli[i];
        rugi[i]= 0;
    }
}
$(function () { 
    
    
    
    var chart = new Highcharts.Chart({
        chart: {
            type: 'column',
                    renderTo: 'laba'
        },
        title: {
            text: 'Laporan Laba Rugi'
        },
        xAxis: {
            categories: nama
        },
        yAxis: {
            title: {
                text: 'Rate'
            }
        },
        series: [{
            name: 'Laba',
            data: laba
        }, {
            name: 'Rugi',
            data: rugi
        }]
    });
});
$(function () { 

    var x,y;
    500*x+ 400*y <= 10000;
    var max = 100*x+50*y;
    var garisX=[];
    var garisY=[];
    for (let i = 0; i <= 20; i++) {
        y = (10000 - i*500)/400;
        garisX[i] = 100*i+50*y;
        // garisY[i] = (10000 - i*400)/500;
    }

    var chart = Highcharts.chart({
        chart: {
            type: 'line',
             renderTo: 'Maksimum'
        },
        title: {
            text: 'Keuntungan Maksimum'
        },
        // xAxis: {
        //     categories: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10']
        // },
        yAxis: {
            title: {
                text: 'Keuntungan'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
            name: 'Keuntungan',
            data: garisX
        }]
    });
});
  
</script>

<div class="container">
	<br/>
	<!-- <h2 class="text-center">Laporan Laba Rugi</h2> -->
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Bagan Laba Rugi</div> -->
                <div class="panel-body">
                    <div id="container"></div>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Bagan Laba Rugi</div> -->
                <div class="panel-body">
                    <div id="laba"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="Maksimum"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>