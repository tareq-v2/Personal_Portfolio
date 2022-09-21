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
                        <h2 class="font-weight-bolder m-0">{{ count($message) }}</h2>
                        <p class="card-text">Total Messages</p>
                    </div>
                    <div class="avatar bg-light-primary">
                        <div class="avatar-content">
                          <i class="fas fa-sms sidenav-main__icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="card shadow">
                <div class="card-header d-flex py-4">
                    <div>
                        <h2 class="font-weight-bolder m-0">{{ count($service) }}</h2>
                        <p class="card-text">Total Services</p>
                    </div>
                    <div class="avatar bg-light-primary">
                        <div class="avatar-content">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag sidenav-main__icon"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="card shadow">
                <div class="card-header d-flex py-4">
                    <div>
                        <h2 class="font-weight-bolder m-0">{{ count($skill) }}</h2>
                        <p class="card-text">Total Skills</p>
                    </div>
                    <div class="avatar bg-light-primary">
                        <div class="avatar-content">
                          <i class="fas fa-fill-drip sidenav-main__icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="card shadow">
                <div class="card-header d-flex py-4">
                    <div>
                        <h2 class="font-weight-bolder m-0">{{ count($testimonial) }}</h2>
                        <p class="card-text">Total Testimonials</p>
                    </div>
                    <div class="avatar bg-light-primary">
                        <div class="avatar-content">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-film sidenav-main__icon"><rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect><line x1="7" y1="2" x2="7" y2="22"></line><line x1="17" y1="2" x2="17" y2="22"></line><line x1="2" y1="12" x2="22" y2="12"></line><line x1="2" y1="7" x2="7" y2="7"></line><line x1="2" y1="17" x2="7" y2="17"></line><line x1="17" y1="17" x2="22" y2="17"></line><line x1="17" y1="7" x2="22" y2="7"></line></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

    
    <div class="container">
      <div class="row">
        <div class="col-12 mt-4" id="skills">  </div>
        <div id="message" class="col-12 mt-4"> </div>
        
      </div>
    </div>
  </section>
    
@endsection
@section('js')
<script>

  // chart 
  var options = {
    series: [{
      name: "Total Skills",
      data: @json($skillCount)
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
      text: 'Skill count per day',
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
  var chart = new ApexCharts(document.querySelector("#skills"), options);
  chart.render();


// bar chart 
  var options = {
    series: [{
    name: 'Messages',
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
        text: 'Messages Count per Day',
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

  var chart = new ApexCharts(document.querySelector("#message"), options);
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