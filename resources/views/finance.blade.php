@extends('layouts.main')

@section('container')
    <section id="finance" class="finance">
        <div class="container">
            <div class="section-title mt-5">
                <h1>Finance</h1>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="card mb-3 pengeluaran">
                        <div class="card-body">
                            <div class="card-header">Total Pengeluaran</div>
                            <div class="card-body">
                                <h4 class="card-title">Rp{{ number_format($totalPengeluaran, 0, ',', '.') }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-3 pemasukan">
                        <div class="card-body">
                            <div class="card-header">Total Pemasukan</div>
                            <div class="card-body">
                                <h4 class="card-title">Rp{{ number_format($totalPemasukan, 0, ',', '.') }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-3 keuntungan">
                        <div class="card-body">
                            <div class="card-header">Total Keuntungan</div>
                            <div class="card-body">
                                @if ($totalKeuntungan >= 0)
                                    <h4 class="card-title">Rp{{ number_format($totalKeuntungan, 0, ',', '.') }}</h4>
                                @else
                                    <h4 class="card-title">-Rp{{ number_format(-$totalKeuntungan, 0, ',', '.') }}</h4>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="page-content page-container" id="page-content">
                        <div class="padding">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="card keuntungan mt-5">
                                        <div class="card-header">Pie Chart</div>
                                        <div class="card-body" style="height: 300px">
                                            <canvas id="chart-pie"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var kategoriCanvas = document.getElementById('chart-pie');
            var kategoriData = [];
            var backgroundColors = [];

            @foreach ($kategori as $kategori)
                var jumlahTerjual = 0;
                @foreach ($inventory as $item)
                    @if ($item->kategori == $kategori)
                        jumlahTerjual += parseInt({{ $item->jumlah_terjual }});
                    @endif
                @endforeach
                kategoriData.push(jumlahTerjual);
                backgroundColors.push(getRandomColor());
            @endforeach

            new Chart(kategoriCanvas, {
                type: 'doughnut',
                data: {
                    labels: {!! json_encode($kategori) !!},
                    datasets: [{
                        data: kategoriData,
                        backgroundColor: backgroundColors
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: 'Jumlah Barang Terjual per Kategori'
                    }
                }
            });

            function getRandomColor() {
                var letters = '0123456789ABCDEF';
                var color = '#';
                for (var i = 0; i < 6; i++) {
                    color += letters[Math.floor(Math.random() * 16)];
                }
                return color + '80'; // Adding alpha value (transparency)
            }
        });
    </script>
@endsection
