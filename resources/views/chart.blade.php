@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Charts')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Charts') }}</h3>
                            </div>
    
                        </div>
                    </div>
                    <div class="card-body">
						<script src="js/canvasjs.min.js"></script>
						<script type="text/javascript">
						
						window.onload = function () {
						
						var chart = new CanvasJS.Chart("chartContainer", {
							animationEnabled: true,
							theme: "light2", // "light1", "light2", "dark1", "dark2"
							title:{
								text: "Funds"
							},
							axisY: {
								title: "Amount"
							},
							data: [{        
								type: "column",  
								showInLegend: true, 
								legendMarkerColor: "grey",
								legendText: "MMbbl = one million barrels",
								dataPoints: [      
									{ y: <?php echo "$first" ?>, label: "First Quarter" },
									{ y: <?php echo "$second" ?>,  label: "Second Quarter" },
									{ y: <?php echo "$third" ?>,  label: "Third Quarter" },
									{ y: <?php echo "$forth" ?>,  label: "Fourth Quarter" },
								]
							}]
						});
						chart.render();
						
						
						}
						</script>
						<div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
						<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

						<?php
						$first = 0;
						$second = 0;
						$third = 0;
						$fourth = 0;

						foreach($funds as $fund){
							if($fund->month==1 || $fund->month==2 || $fund->month==3){
								$first = $first+$fund->mounthPaid;
							}elseif($fund->month==4 || $fund->month==5 || $fund->month==6){
								$second = $second+$fund->monthPaid;
							}elseif($fund->month==7 || $fund->month==8 || $fund->month==9){
								$third = $third+$fund->monthPaid;
							}elseif($fund->month==10 || $fund->month==11 || $fund->month==12){
								$fourth = $fourth+$fund->monthPaid;
							}
						}
						?>
                       
                    </div>
                </div>
            </div>
        </div>
	</div>
@endsection