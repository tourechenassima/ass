<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink&family=Cairo&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Almarai&family=Amiri&family=Noto+Naskh+Arabic&family=Scheherazade+New&display=swap" rel="stylesheet">
<title>قائمة الجمعيات</title>  
@vite('resources/css/app.css')
  <style>
    
  </style>


</head>

<body  >
    <div class=" shadow-xl shadow-red-100 rounded-lg ">
    <h1  class=" text-4xl backdrop-blur-3xl bg-green/30 text-white bg-slate-400  font-bold text-center p-4" >   قائمة الجمعيات</h1>     
    </div>

    <div class=" flex flex-col justify-center items-center mt-20 border border-slate-100 font-bold  overflow-auto  rounded-lg shadow-2xl h-auto w-auto max-h-10/12  ">
    <table  dir="rtl" class=" table-auto text-sm " style="font-family: 'Noto Naskh Arabic', serif;">
   
    <thead>
      <tr class="bg-slate-100 shadow-xl shadow-red-50 text-xl">
        
        <th class="  text-right py-4 px-2  w-12"> الرقم</th>
        <th class=" text-right py-4 px-2  w-96 "> تسمية الجمعية</th>
        
        <th class=" text-right py-4 px-2  w-40"> رقم الإعتماد</th>
        <th class=" text-right py-4 px-2  w-60"> تاريخ التأسيس</th>
        <th class=" text-right py-4 px-2  w-44"> الطابع</th>
        <th class=" text-right py-4 px-2  w-44"> القطاع</th>
        <th class=" text-right py-4 px-2  w-60"> إسم الرئيس</th>
        <th class=" text-right py-4 px-2  w-60"> لقب الرئيس</th>
        <th class=" text-right py-4 px-2  w-44"> الوضعية</th>
        <th class=" text-right py-4 px-2  w-96"> العنوان</th>
        <th class=" text-right py-4 px-2  w-40"> الهاتف</th>
        <th class=" text-right py-4 px-2  w-60"> البلدية</th>
        <th class=" text-right py-4 px-2  w-76"> الإيميل</th>
        <th class=" text-right py-4 px-2  w-76"> </th>
      </tr>
    </thead>
    <tbody>
    @foreach($jamayats as $jamaya)
      <tr class="shadow-xl shadow-slate-50  ">
        
        <td class=" text-right py-4 px-2  w-12">{{$jamaya['id']}} 
        <td class=" text-right py-4 px-2  w-96"> {{$jamaya['tasmia']}}</td>
        <td class=" text-right py-4 px-2  w-40"> {{$jamaya['rakm-itimad']}}</td>
        <td class=" text-right py-4 px-2  w-60"> {{$jamaya['tarikh-tassiss']}}</td>
        <td class=" text-right py-4 px-2  w-44"> {{$jamaya['tabaa']}}</td>
        <td class=" text-right py-4 px-2  w-44"> {{$jamaya['kitaa']}}</td>
        <td class=" text-right py-4 px-2  w-60"> {{$jamaya['nom-president']}}</td>
        <td class=" text-right py-4 px-2  w-60"> {{$jamaya['prenom-president']}}</td>
        <td class=" text-right py-4 px-2  w-44"> {{$jamaya['nachta']}}</td>
        <td class=" text-right py-4 px-2  w-96">{{$jamaya['adresse']}}</td>
        <td class=" text-right py-4 px-2  w-40"> {{$jamaya['phone']}}</td>
        <td class=" text-right py-4 px-2  w-60"> {{$jamaya['baladia']}}</td>
        <td class=" text-right py-4 px-2  w-76"> {{$jamaya['email']}}</td>
        <td class=" flex flex-row space-x-1"> 
        <a href="#" class="text-slate-50 rounded-lg decoration-0 font-bold text-xl px-2  bg-green-600">تجديد</a>
        <a href="#" class="text-slate-50 rounded-lg decoration-0 font-bold text-xl px-2  bg-slate-400">تحديث</a>
        <a href="#" class="text-slate-50 rounded-lg decoration-0 font-bold text-xl px-2  bg-red-600">حذف</a>
        </td>

      </tr>
      @endforeach
      <!-- More rows... -->
     </tbody>
  </table>

    
  </div>


</body>

</html>
