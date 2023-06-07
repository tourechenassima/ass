<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink&family=Cairo&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <style>
   
  </style>
</head>

<body class="flex flex-col">
    <div class=" h-44 w-3/4 m-auto border border-green-900 bg-green-100 font-bold text-xl overflow-x-auto mix-blend-overlay">
    <table class="w-4/4 bg-red-400 m-auto h-40   ">
    
    <thead>
      <tr>
        
        <th class="p-4"> الرقم</th>
        <th class=" p-4"> تسمية الجمعية</th>
        <th class="p-4"> الإيميل</th>
        <th class="p-4"> رقم الإعتماد</th>
        <th class="p-4"> تاريخ التأسيس</th>
        <th class="p-4"> الطابع</th>
        <th class="p-4"> القطاع</th>
        <th class="p-4"> إسم الرئيس</th>
        <th class="p-4"> لقب الرئيس</th>
        <th class="p-4"> الوضعية</th>
        <th class="p-4"> العنوان</th>
        <th class="p-4"> الهاتف</th>
        <th class="p-4"> البلدية</th>
      </tr>
    </thead>
    <tbody>
    @foreach($jamayats as $jamaya)
      <tr>
        
        <td class="p-4">{{$jamaya['id']}}</td>
        <td class="p-4"> {{$jamaya['tasmia']}}</td>
        <td class="p-4"> {{$jamaya['email']}}</td>
        <td class="p-4"> {{$jamaya['rakm-itimad']}}</td>
        <td class="p-4"> {{$jamaya['tarikh-tassiss']}}</td>
        <td class="p-4"> {{$jamaya['tabaa']}}</td>
        <td class="p-4"> {{$jamaya['kitaa']}}</td>
        <td class="p-4"> {{$jamaya['nom-president']}}</td>
        <td class="p-4"> {{$jamaya['prenom-president']}}</td>
        <td class="p-4"> {{$jamaya['nachta']}}</td>
        <td class="p-4">{{$jamaya['adresse']}}</td>
        <td class="p-4"> {{$jamaya['phone']}}</td>
        <td class="p-4"> {{$jamaya['baladia']}}</td>
      </tr>
      @endforeach
      <!-- More rows... -->
     </tbody>
  </table>

    
  </div>
</body>

</html>
