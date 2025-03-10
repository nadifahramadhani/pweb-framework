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
        <h2>Perulangan For</h2>
        <div class="col-md-6">
            @for ($i = 0; $i < 5; $i++)
                looping ke- {{$i}} <br/>
                
            @endfor
        </div>
        

    </div>

    <div class="container">
        <h2>Perulangan While</h2>
        <div class="col-md-6">
            <?php $i=1; ?>
            @while ($i < 5)
                looping ke- {{$i}} <br/>
                <?php $i ++ ?>

                
            @endwhile

        </div>
        

    </div>

    <div class="container">
        <h2>Perulangan Foreach</h2>
        <div class="col-md-6">
           <h4>Nama ={{$nama}}, Nim = {{$nim}}</h4>
           Nilai =
           @foreach ($total_nilai as $nilai)
           <div class="alert alert-info d-inline-block"> {{$nilai}} </div>
               
           @endforeach
        </div>
        

    </div>

    <div class="container">
        <h2>Perulangan Foreelse</h2>
        <div class="col-md-6">
           <h4>Nama ={{$nama}}, Nim = {{$nim}}</h4>
           Nilai =
           @forelse ( $total_nilai as $val )
               @if (($val >= 0) and ($val <50))
                    <div class="alert alert-warning d-inline-block"> {{$val}} </div>
               @elseif (($val >=50 ) and ($val <100))  
                    <div class="alert alert-succes d-inline-block"> {{$val}} </div>
               @endif
           @empty
           <div class="alert alert-danger d-inline-block"> Data tidak Valid </div>
 
           @endforelse
        </div>
        

    </div>
</body>
</html>