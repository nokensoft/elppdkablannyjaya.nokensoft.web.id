@extends('admin.layouts.app')
@section('content')

@push('style')
<style>
    #container {
        height: 600px;
        min-width: 310px;
        max-width: 800px;
        margin: 0 auto;
    }
</style>
@endpush
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Beranda</a></li>
                            <li class="breadcrumb-item active">Starter</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1 class="fw-bold display-1">Selamat Datang!</h1>
                        @foreach ($pdata as $text )

                        <p class="">
                            {!! $text->tentang_aplikasi !!}
                        </p>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div id="container"></div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        @if(Auth::user()->hasRole('administrator'))
        <div class="row">

            <div class="col-md-6 col-xl-3">
                <div class="card" id="tooltip-container2">
                    <div class="card-body">
                        <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                        <h4 class="mt-0 font-16">Jumlah DPRD</h4>
                        <h2 class="text-dark my-3 text-center display-1 fw-bold"><span data-plugin="counterup">{{ $totalDprd }}</span></h2>
                        <a href="#" class="btn btn-lg w-100">
                            <i class="fas fa-arrow-right mr-2"></i> Tampilkan Detail
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card" id="tooltip-container2">
                    <div class="card-body">
                        <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                        <h4 class="mt-0 font-16">Jumlah Distrik/Kecamatan</h4>
                        <h2 class="text-dark my-3 text-center display-1 fw-bold"><span data-plugin="counterup">{{ $totalDistrik }}</span></h2>
                        <a href="#" class="btn btn-lg w-100">
                            <i class="fas fa-arrow-right mr-2"></i> Tampilkan Detail
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card" id="tooltip-container2">
                    <div class="card-body">
                        <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                        <h4 class="mt-0 font-16">Jumlah Desa/Kelurahan</h4>
                        <h2 class="text-dark my-3 text-center display-1 fw-bold"><span data-plugin="counterup">{{ $totalDesa }}</span></h2>
                        <a href="#" class="btn btn-lg w-100">
                            <i class="fas fa-arrow-right mr-2"></i> Tampilkan Detail
                        </a>
                    </div>
                </div>
            </div>

            {{-- <div class="col-md-6 col-xl-3">
                <div class="card" id="tooltip-container2">
                    <div class="card-body">
                        <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                        <h4 class="mt-0 font-16">Jumlah Penduduk</h4>
                        <h2 class="text-dark my-3 text-center display-1 fw-bold"><span data-plugin="counterup">{{ $totalPenduduk }}</span></h2>
                        <a href="#" class="btn btn-lg w-100">
                            <i class="fas fa-arrow-right mr-2"></i> Tampilkan Detail
                        </a>
                    </div>
                </div>
            </div> --}}

        </div>

        @elseif(Auth::user()->hasRole('supervisor'))
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card" id="tooltip-container2">
                    <div class="card-body">
                        <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                        <h4 class="mt-0 font-16">Jumlah Data Pendidikan</h4>
                        <h2 class="text-dark my-3 text-center display-1 fw-bold"><span data-plugin="counterup">{{ $totalDprd }}</span></h2>
                        <a href="#" class="btn btn-lg w-100">
                            <i class="fas fa-arrow-right mr-2"></i> Tampilkan Detail
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card" id="tooltip-container2">
                    <div class="card-body">
                        <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                        <h4 class="mt-0 font-16">Jumlah Data Kesehatan</h4>
                        <h2 class="text-dark my-3 text-center display-1 fw-bold"><span data-plugin="counterup">{{ $totalDprd }}</span></h2>
                        <a href="#" class="btn btn-lg w-100">
                            <i class="fas fa-arrow-right mr-2"></i> Tampilkan Detail
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card" id="tooltip-container2">
                    <div class="card-body">
                        <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                        <h4 class="mt-0 font-16">Jumlah Data PU</h4>
                        <h2 class="text-dark my-3 text-center display-1 fw-bold"><span data-plugin="counterup">{{ $totalDprd }}</span></h2>
                        <a href="#" class="btn btn-lg w-100">
                            <i class="fas fa-arrow-right mr-2"></i> Tampilkan Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @elseif(Auth::user()->hasRole('opd'))

        @endif
        <!-- end row -->


  <!--end wrapper-->

  @stop

  @push('script-footer')
   <!-- Chart JS -->
   {{-- <script src="{{ asset('assets/admin/assets/libs/chart.js/Chart.bundle.min.js')}}"></script> --}}

    <script src="{{ asset('assets/admin/assets/libs/moment/min/moment.min.js')}}"></script>
    <script src="{{ asset('assets/admin/assets/libs/jquery.scrollto/jquery.scrollTo.min.js')}}"></script>

    <!-- Chat app -->
    {{-- <script src="{{ asset('assets/admin/assets/js/pages/jquery.chat.js')}}"></script> --}}

    <!-- Todo app -->
    <script src="{{ asset('assets/admin/assets/js/pages/jquery.todo.js')}}"></script>

    <!-- Dashboard init JS -->
    {{-- <script src="{{ asset('assets/admin/assets/js/pages/dashboard-3.init.js')}}"></script> --}}

    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/maps/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/maps/modules/offline-exporting.js"></script>
    <script src="https://code.highcharts.com/maps/modules/accessibility.js"></script>

    <script>

        let districts = {};
        let villages = {};

        async function loadAllMapData() {
            try {
                // Memuat data distrik dari API
                const distrikResponse = await fetch('https://api.silanny.lannyjayakab.id/api/geospatial/distrik');
                districts = await distrikResponse.json();
                console.info(districts)

                // Membuat permintaan data kampung untuk setiap distrik
                const villagePromises = districts.features.map(geometry => {
                    const districtId = geometry.properties.id;
                    return fetch(`https://api.silanny.lannyjayakab.id/api/geospatial/desa?districtId=${districtId}`);
                });

                // Jalankan semua fetch request secara paralel
                const responses = await Promise.all(villagePromises);

                // Konversi response ke json dan simpan dalam objek kampung
                const jsonPromises = responses.map(async (response, index) => {
                    const districtId = districts.features[index].properties.id;
                    villages[districtId] = await response.json();
                });

                // Tunggu semua json conversion selesai
                await Promise.all(jsonPromises);

                // Inisialisasi peta dengan data yang dimuat
                initializeChart();
            } catch (error) {
                console.error("Error loading map data: ", error);
            }
        }


        function initializeChart() {
            Highcharts.mapChart('container', {
                // Pengaturan navigasi dan data peta
                title: {
                    text: 'Peta Kabupaten Lanny Jaya'
                },
                chart: {
                    events: {
                        drilldown: function (e) {
                            // Cek apakah event memiliki nama seri yang valid
                            if (e.seriesOptions) {
                                var distrikName = e.seriesOptions.name;
                                // Mengubah judul menjadi "Peta Distrik [Nama Distrik]"
                                this.setTitle({ text: 'Peta Distrik ' + distrikName });
                            }
                        },
                        drillup: function (e) {
                            // Mengembalikan judul saat drillup
                            this.setTitle({ text: 'Peta Kabupaten Lanny Jaya' });
                        }
                    }
                },
                mapNavigation: {
                    enabled: true,
                    buttonOptions: {
                        verticalAlign: 'bottom'
                    }
                },
                colorAxis: {
                    min: 0
                },
                plotOptions: {
                    map: {
                        dataLabels: {
                            enabled: true,
                            format: '{point.properties.name}'
                        }
                    }
                },
                series: [{
                    data: districts.features.map(feature => {
                        return {
                            id: feature.properties.id,
                            value: feature.properties.jumlah_penduduk,
                            drilldown: feature.properties.id // Menambahkan referensi drilldown
                        };
                    }),
                    joinBy: 'id',
                    mapData: districts,
                    name: 'Kabupaten',
                    states: {
                        hover: {
                            color: '#a4edba'
                        }
                    },
                }],
                tooltip: {
                    formatter: function () {
                        return '<span style="color: ' + this.point.color + '">&#9679;</span> ' +
                            '<span style="font-size: 87%;">' + this.point.properties.name + '</span>' + // Nama distrik dengan ukuran font lebih kecil
                            '<br>Jumlah Penduduk: ' + this.point.value; // Format tooltip
                    }
                },

                drilldown: {
                    activeDataLabelStyle: {
                        color: '#FFFFFF',
                        textDecoration: 'none',
                        textOutline: '1px #000000'
                    },
                    breadcrumbs: {
                        floating: true,
                        showFullPath: false
                    },
                    mapZooming: true,
                    series: districts.features.map(feature => {
                        const districtId = feature.properties.id;
                        return {
                            id: districtId,
                            name: feature.properties.name,
                            mapData: villages[districtId],
                            data: villages[districtId].features.map(feature => {
                                return {
                                    id: feature.properties.id,
                                    name: feature.properties.name,
                                    value: feature.properties.jumlah_penduduk,
                                };
                            }),
                            joinBy: 'id',
                        };
                    }),
                },
            });
        }
        loadAllMapData();

    </script>
  @endpush
