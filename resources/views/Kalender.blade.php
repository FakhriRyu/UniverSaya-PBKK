@extends('layouts.main')

@section('container')
<h1 class="mb-4">Kalender Tugas</h1>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #calendar {
            max-width: 800px;
            margin: 0 auto;
        }
        h1{
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div id='calendar'></div>
    
    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                // Konfigurasi kalender
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                events: [
                    {
                        title: 'Acara 1',
                        start: '2023-09-15'
                    },
                    {
                        title: 'Acara 2',
                        start: '2023-09-20',
                        end: '2023-09-22'
                    },
                    // Tambahkan lebih banyak acara di sini
                ]
            });
        });
    </script>
@endsection