<section class="wrapper main-wrapper" style=''>

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
</section>