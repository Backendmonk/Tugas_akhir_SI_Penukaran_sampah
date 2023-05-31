<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        Colum Chart  Akan menunjukkan jumlah Total Sampah Yang Terkumpul
    </p>
</figure>


<style>


.highcharts-figure,
.highcharts-data-table table {
    min-width: 310px;
    max-width: 800px;
    margin: 1em auto;
}

#container {
    height: 400px;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

</style>


<script>

Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah Sampah'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Sampah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} Sampah</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },               
                        
                           series: [
                            
                            
                            <?php
                            $select = mysqli_query($koneksi, "SELECT * FROM tb_sampah");

                          
                            while ($data = mysqli_fetch_array($select)) {
                            
                            $nama =  $data['nama'];

                            


                            ?>
                            {

                                name: '<?php echo $nama ?>',
                                data: [

                                    
                                        <?php

                                        for ($i=1; $i <=12; $i++) { 
                                            $countid = mysqli_query($koneksi,"SELECT count(id_sampah) as sampah FROM tb_rekap_sampah WHERE id_sampah = '$data[id_sampah]' AND month(tanggal_masuk)='$i'");
                                            $datasampah = mysqli_fetch_array($countid);

                                            echo $datasampah['sampah'];
                                            ?>
                                            ,

                                            <?php

                                        }
                                        
                                        

                                        ?>
                                        
                                        
                                    
                                ]
                            },

                            <?php
                            }

                            ?>
                            
                        
                        
                        
                        
                        ] 

                          

                        

        
   


});
</script>

