<?php
$i=0;
foreach($tahun as $mak){
  $i++;
  $data_tahun[$i]=$mak->tahun;
}
$tahun_max=max($data_tahun);?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="<?php site_url(); ?>/asset/webroot/css/cake.generic.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                //default
                getAjaxData('<?php echo$tahun_max ?>');

                $('#dynamic_data').change(function() {
                    var id = $('#dynamic_data').val();
                    getAjaxData(id);
                });

                var options = {
                    chart: {
                        renderTo: 'container',
                        type: 'column'
                    },
                    title: {
                        text: 'Statistika Pasien ',
                        x: -20 //center
                    },
                    subtitle: {
                        text: '',
                        x: -20
                    },
                    xAxis: {
                        categories: []
                    },
                    yAxis: {
                        title: {
                            text: 'Jumlah Pasien'
                        },
                        plotLines: [{
                                value: 0,
                                width: 1,
                                color: '#808080'
                            }]
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<b>{point.y}</b> of total<br/>'
                    },
                    plotOptions: {
                        series: {
                            borderWidth: 0,
                            dataLabels: {
                                enabled: true,
                                format: '{point.y}'
                            }
                        }
                    },
                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'top',
                        x: -40,
                        y: 100,
                        floating: true,
                        borderWidth: 1,
                        shadow: true
                    },
                    series: []
                };
                function getAjaxData(id) {
                    $.getJSON("<?php echo site_url(); ?>admin/data_grafik_pasien", {id: id}, function(json) {
                        options.xAxis.categories = json[0]['data']; //xAxis: {categories: []}
                        options.series[0] = json[1];
                        chart = new Highcharts.Chart(options);
                    });
                }

            });
        </script>
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>

    </head>
    <body>

        <div class="menu_top" >
            <select id="dynamic_data">
              <?php
              foreach($tahun as $tahun){
              ?>
        			<option value="<?php echo $tahun->tahun?>"><?php echo $tahun->tahun?></option>
            <?php }?>

            </select>
        </div>
        <div id="container" style="min-width: 100%; height: 400px; margin: 0 auto;"></div>
    </body>
</html>
