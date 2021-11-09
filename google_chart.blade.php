@extends('layouts.main')

@include('partials.navbar')

@section('script-google-graph')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}
    <script type="text/javascript">
        var book = <?php echo $book; ?>
        // console.log(book);
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.load('current', {
            'packages': ['table']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.arrayToDataTable(book);
            console.log(data);

            // Table Visualization
            var table = new google.visualization.Table(document.getElementById('table_div'));
            table.draw(data, {
                showRowNumber: true,
                width: '90%',
                height: '90%'
            });

            // Pie Chart
            var options_pieChart = {
                title: 'Pie Chart per Kategori Buku:',
                is3D: true,
            };
            var chart = new google.visualization.PieChart(document.getElementById('PieChart'));
            chart.draw(data, options_pieChart);
        }
    </script>
@endsection

@section('container-graph')
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-sm-6">
              <p style="font-size: 40px"><b>Table Visualization</b></p>
              <div id="table_div" style="width: 100%; height: 32rem"></div>
            </div>
            <div class="col-sm-6">
              <p style="font-size: 40px"><b>Pie Chart Visualization</b></p>
              <div id="PieChart" style="width: 100%; height: 32rem"></div>
            </div>
        </div>
    </div>
@endsection