@extends('admin.body.main')
@section('admin')
<!-- DASHBOARD PAGE -->
{{-- <main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> -->
        <li class="breadcrumb-item active">Data guru, siswa, dan kelas</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- GURU -->
          <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">

              <!-- Data Guru -->
              <div class="card-body">
                <h5 class="card-title">Guru <span>/orang</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>15</h6>
                    <span class="text-muted small pt-2 ps-1">Wali Kelas  : 3</span> 
                    <br>
                    <span class="text-muted small pt-2 ps-1">Guru Mapel  : 10</span>
                    <br>
                    <span class="text-muted small pt-2 ps-1">Petugas TU  : 2</span>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End GURU -->

          <!-- SISWA -->
          <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
              
              <!-- Data Siswa -->
              <div class="card-body">
                <h5 class="card-title">Siswa <span>/orang</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>80</h6>
                    <span class="text-muted small pt-2 ps-1">Kelas 7   : 25</span> 
                    <br>
                    <span class="text-muted small pt-2 ps-1">Kelas 8   : 25</span>
                    <br>
                    <span class="text-muted small pt-2 ps-1">Kelas 9   : 29</span>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End SISWA -->

           <!-- KELAS -->
           <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
              
              <!-- Data Kelas -->
              <div class="card-body">
                <h5 class="card-title">Kelas <span>/ruangan</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-book"></i>     
                  </div>
                  <div class="ps-3">
                    <h6>3</h6>
                    <span class="text-muted small pt-2 ps-1">Kelas 7   : 1</span> 
                    <br>
                    <span class="text-muted small pt-2 ps-1">Kelas 8   : 1</span>
                    <br>
                    <span class="text-muted small pt-2 ps-1">Kelas 9  : 1</span>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End KELAS -->

          <!-- Reports Siswa -->
          <div class="col-12">
            <div class="card">

              <div class="card-body">
                <h5 class="card-title">Reports <span>/siswa</span></h5>

                <!-- Line Chart -->
                <div id="reportsChart"></div>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    new ApexCharts(document.querySelector("#reportsChart"), {
                      series: [{
                        name: 'Kelas 7',
                        data: [29,25,25],
                      }, {
                        name: 'Kelas 8',
                        data: [28,25,25]
                      }, {
                        name: 'Kelas 9',
                        data: [30,30,29]
                      }],
                      chart: {
                        height: 350,
                        type: 'area',
                        toolbar: {
                          show: false
                        },
                      },
                      markers: {
                        size: 4
                      },
                      colors: ['#4154f1', '#2eca6a', '#ff771d'],
                      fill: {
                        type: "gradient",
                        gradient: {
                          shadeIntensity: 1,
                          opacityFrom: 0.3,
                          opacityTo: 0.4,
                          stops: [0, 90, 100]
                        }
                      },
                      dataLabels: {
                        enabled: false
                      },
                      stroke: {
                        curve: 'smooth',
                        width: 2
                      },
                      xaxis: {
                        type: 'years',
                        categories: ["2020", "2021", "2022"]
                      },
                      tooltip: {
                        x: {
                          format: 'dd/MM/yy HH:mm'
                        },
                      }
                    }).render();
                  });
                </script>
                <!-- End Line Chart -->

              </div>

            </div>
          </div><!-- End Reports -->


        </div>
      </div><!-- End Left side columns -->

    </div>
  </section>

</main> --}}
<!-- End #main -->
@endsection