<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink&family=Cairo&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')

</head>

<body style="font-family: 'Cairo', sans-serif;">
   

<div class=" w-full h-screen bg-no-repeat bg-center bg-cover " style=" background-image: url('https://images.unsplash.com/photo-1684421784872-8552e4abcfdf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDQ3fENEd3V3WEpBYkV3fHxlbnwwfHx8fHw%3D&auto=format&fit=crop&w=500&q=60');">
    <h1 class="rounded-full text-5xl backdrop-blur-3xl bg-green/30 text-green-700  font-bold text-center p-6" >الجمهورية الجزائرية الديمقراطية الشعبية</h1>     
    <h1 class="text-3xl  text-white font-bold text-center p-6">دائرة ثنية العابد     </h1>  
    <div class="rounded-full backdrop-blur-3xl bg-green/30	  w-1/2 flex  justify-around mx-auto mt-40 p-6 space-x-10  ">
               
                
      <a class=" text-red-800 text-center w-1/2 border border-red-400 shadow-red-200 shadow-lg rounded-full  font-bold hover:bg-gradient-to-r from-red-200 md:from-red-500 hover:text-white text-3xl px-3 py-6 " href="#">نصوص قانونية  </a>
      <a class="  text-red-800 text-center w-1/2 border border-red-400 shadow-red-200 shadow-lg rounded-full  font-bold hover:bg-gradient-to-r from-red-200 md:from-red-500 hover:text-white text-3xl px-3 py-6 " href="{{route('jamayats.index')}}">قائمة الجمعيات</a>

                    
    </div>     
        
</div>
</body>        
</html>