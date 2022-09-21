@extends('layouts.dashboard')
@section('dashboardIndex')
active
@endsection
@section('content')
  <section class="main-section py-5" id="main">
    <div class="row">
      <div class="col-12">
        <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard |</h2>
      </div>
    </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6 col-12">
            <div class="card shadow">
                <div class="card-header d-flex py-4">
                    <div>
                        <h2 class="font-weight-bolder m-0">{{ count(totalMessages()) }}</h2>
                        <p class="card-text">Total Messages</p>
                    </div>
                    <div class="avatar bg-light-primary">
                        <div class="avatar-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers font-medium-5" cursorshover="true"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="card shadow">
                <div class="card-header d-flex py-4">
                    <div>
                        <h2 class="font-weight-bolder m-0">{{ count(totalServices()) }}</h2>
                        <p class="card-text">Total Services</p>
                    </div>
                    <div class="avatar bg-light-primary">
                        <div class="avatar-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers font-medium-5" cursorshover="true"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="card shadow">
                <div class="card-header d-flex py-4">
                    <div>
                        <h2 class="font-weight-bolder m-0">{{ count(totalClients()) }}</h2>
                        <p class="card-text">Total Clients</p>
                    </div>
                    <div class="avatar bg-light-primary">
                        <div class="avatar-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers font-medium-5" cursorshover="true"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="card shadow">
                <div class="card-header d-flex py-4">
                    <div>
                        <h2 class="font-weight-bolder m-0">{{ count(totalTestimonials()) }}</h2>
                        <p class="card-text">Total Testimonials</p>
                    </div>
                    <div class="avatar bg-light-primary">
                        <div class="avatar-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers font-medium-5" cursorshover="true"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

    
    <div class="container">
      <div class="row">
        <div id="client" class="col-12">
    
        </div>
        <div class="col-12 mt-4">
          <div id="service">

          </div>
        </div>
        <div class="col-6" >

        </div>
      </div>
    </div>
  </section>
    
@endsection
@section('js')
<script>
          
          var options = {
          series: [{
            name: "Total Clint",
            data: @json($clientCount)
        }],
          chart: {
          height: 350,
          type: 'line',
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'straight'
        },
        title: {
          text: 'Clint count by days',
          align: 'left'
        },
        grid: {
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        xaxis: {
          categories: @json($days),
        }
        };

        var chart = new ApexCharts(document.querySelector("#client"), options);
        chart.render();


    // bar chart 
    var options = {
          series: [{
          name: 'Servings',
          data: @json($messageCount)
        }],
          annotations: {
          points: [{
            x: 'Bananas',
            seriesIndex: 0,
            label: {
              borderColor: '#775DD0',
              offsetY: 0,
              style: {
                color: '#fff',
                background: '#775DD0',
              },
              text: 'Bananas are good',
            }
          }]
        },
        chart: {
          height: 350,
          type: 'bar',
        },
        plotOptions: {
          bar: {
            borderRadius: 10,
            columnWidth: '50%',
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: 2
        },
        
        grid: {
          row: {
            colors: ['#fff', '#f2f2f2']
          }
        },
        xaxis: {
          labels: {
            rotate: -45
          },
          categories: @json($days),
          tickPlacement: 'on'
        },
        yaxis: {
          title: {
            text: 'Servings',
          },
        },
        fill: {
          type: 'gradient',
          gradient: {
            shade: 'light',
            type: "horizontal",
            shadeIntensity: 0.25,
            gradientToColors: undefined,
            inverseColors: true,
            opacityFrom: 0.85,
            opacityTo: 0.85,
            stops: [50, 0, 100]
          },
        }
        };

        var chart = new ApexCharts(document.querySelector("#service"), options);
        chart.render();



    </script>
        
@endsection
@push('css')

<style>
  .apexcharts-zoomin-icon, .apexcharts-zoomout-icon, .apexcharts-zoom-icon, .apexcharts-pan-icon, .apexcharts-reset-icon{
      display: none;
  }
</style>
    
@endpush