@extends('layouts.welcome.master')

@section('title', 'Struktur Organisasi')

@section('link')
      <link href="https://unpkg.com/orgchart@2.1.9/dist/css/jquery.orgchart.min.css" rel="stylesheet" />
    <style>
        #chart-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .orgchart {
            background: #fff;
        }

        .orgchart .node .title {
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            background-color: #006699;
            padding: 4px;
            border-radius: 4px 4px 0 0;
        }

        .orgchart .node .content {
            padding: 6px;
            background-color: #e5e5e5;
            border-radius: 0 0 4px 4px;
        }
    </style>
@endsection

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-1 mb-0 animated slideInLeft">Struktur Organisasi</h1>
                </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary" href="#">Welcome</a></li>
                            <li class="breadcrumb-item text-secondary active" aria-current="page">Struktur Organisasi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Struktur Organisasi Start -->
    <div class="container py-5">
        <div class="text-center wow fadeIn" data-wow-delay="0.1s">
            <h1 class="mb-4">Struktur <span class="text-primary">Organisasi</span> Desa Sindangpano</h1>
        </div>
        <div id="chart-container"></div>
    </div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/orgchart@2.1.9/dist/js/jquery.orgchart.min.js"></script>
    <script>
        $(function () {
            const data = {
                'title': 'KEPALA DESA',
                'name': 'NANA KARNA',
                'children': [
                    {
                        'title': 'SEKRETARIS DESA',
                        'name': 'RICKY ISKANDAR',
                        'children': [
                            { 'title': 'KAUR PERENCANAAN', 'name': 'BUDIMAN' },
                            { 'title': 'KAUR UMUM/TU', 'name': 'ASMA' },
                            { 'title': 'KAUR KEUANGAN', 'name': 'LILIS SITI S.' }
                        ]
                    },
                    { 'title': 'KASI PEMERINTAHAN', 'name': 'RAHMAWATI' },
                    { 'title': 'KASI PELAYANAN', 'name': 'ABDUL ROHMAN' },
                    { 'title': 'KASI KESEJAHTERAAN', 'name': 'IWAN MULYAWAN' },
                    { 'title': 'KADUS ADIPATI', 'name': 'TATI KUSMAWATI' },
                    { 'title': 'KADUS CANDRANALA', 'name': 'EDI JUNAEDI' }
                ]
            };

            $('#chart-container').orgchart({
                'data': data,
                'nodeTemplate': function (data) {
                    return `
                        <div class="title">${data.title}</div>
                        <div class="content">${data.name}</div>
                    `;
                },
                'pan': true,
                'zoom': true
            });
        });
    </script>
@endsection
