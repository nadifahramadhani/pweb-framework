<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Nilai Mahasiswa</h2>
        <div class="col-md-6">
            @switch($total_nilai)
                @case(0)
                <div class="alert alert-danger">Sangat Jelek</div>
                    @break
                @case(70)
                <div class="alert alert-primary">Memuaskan</div>
                    @break
                @case(100)
                <div class="alert alert-success">Sangat Memuaskan</div>
                    @break
                @default
                <div class="alert alert-warning">Nilai tidak Valid</div>
                    
            @endswitch
        
            <table class="table table-bordered table-striped">
                <tr class="text-md-center">
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>Total Nilai</th>
                </tr>

                <tr>
                    <td>{{$nama}}</td>
                    <td>{{$nim}}</td>
                    <td>{{$total_nilai}}</td>

                </tr>

            </table>

        </div>

    </div>
</body>
</html>