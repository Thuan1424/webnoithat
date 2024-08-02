<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê sản phẩm theo danh mục</title>
    
</head>
<body><section>
    <header>
        <h1>Thống kê sản phẩm theo danh mục</h1>
    </header>

    
        <div id="piechart" style="width: 800px; height: 600px;"></div>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Danh mục');
            data.addColumn('number', 'Số lượng sản phẩm');
            
            <?php
            foreach ($listthongke as $thongke) {
                echo "data.addRow(['{$thongke['tendm']}', {$thongke['countsp']}]);";
            }
            ?>
            var options = {
                title: 'Thống kê sản phẩm theo danh mục',
                width: 800,
                height: 600,
            };
            
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
</section>