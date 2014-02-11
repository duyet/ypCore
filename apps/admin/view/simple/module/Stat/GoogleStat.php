{$Header}

<main role="main" id="main">
  <div class="wrapper stat">
    <div class="stat-head">
      <a href="./stat?type=week&chart={$chart}">Week</a> | 
      <a href="./stat?type=month&chart={$chart}">Month</a> | 
      <a href="./stat?type=year&chart={$chart}">Year</a>
    </div>
	 <div id="ypstat-main" style="width: 900px; height: 500px; margin: 4px auto"></div>
 </div>
</main>

   <script type="text/javascript" src="//www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', { packages: ['corechart'] });
    </script>
    <script type="text/javascript">
      function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
          ['x', 'View'],
          {foreach $data as $x => $value}
          ['{$type} {$x}',   {$value}],
          {/foreach}

        ]);

        var options = {
          title: 'Couter analytic of {$type}]',
         // curveType: "function",
          width: 900, height: 400,
          vAxis: {  }
        };
      
        // Create and draw the visualization.
        new google.visualization.LineChart(document.getElementById('ypstat-main')).
            draw(data, options);
      }

      google.setOnLoadCallback(drawVisualization);
    </script>
 