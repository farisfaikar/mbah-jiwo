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
            </div>
        </div>

    </section>
@endsection
