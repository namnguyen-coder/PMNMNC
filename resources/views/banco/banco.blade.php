<!DOCTYPE html>
<html lang="en">
<head>
   <style type="text/css">
       .banco {
           border: 2px solid black;
           width: fit-content;
       }
       .row {
           height: 40px;
       }
       .cell {
           width: 40px;
           height: 40px;
       }
       .white {
           background-color: white;
       }
       .black {
           background-color: black;
       }
   </style>
</head>
<body>

<h1>Bàn cờ {{ $n }}x{{ $n }}</h1>
<br>

<div class="banco">
@for ($i = 0; $i < $n; $i++)
    <div class="row" style="display: flex;">
        @for ($j = 0; $j < $n; $j++)
            <div class="cell"
                 style="background-color: {{ ($i + $j) % 2 == 0 ? 'black' : 'white' }};">
            </div>
        @endfor
    </div>
@endfor
</div>

</body>
</html>
