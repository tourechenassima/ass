<x-app-layout>
  <div>
    <h1  class=" text-3xl backdrop-blur-3xl text-gray-700  font-bold text-center p-4 my-10   " >    جمعية جديدة </h1>     
  </div>
  <div class="container m-auto text-center  pt-15 pb-10 ">
    <form action="{{route('jamayats.store')}}" method="POST" >
      
      @csrf
      <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-3/4" type="text" name="tasmia" placeholder=" تسمية الجمعية"> <br>
      
       <div >
            
            <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="rakm-itimad" >
            <label >تاريخ التأسيس</label>
            <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="date" name="tarikh-tassiss" >
            <label > رقم الإعتماد</label>
       </div>
     
       <br>
       <div>
            <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="tabaa" > 
            <label >الطابع </label>
            <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="kitaa" > 
            <label >القطاع </label>
        </div>
    
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="text" name="prenom-president" placeholder="  إسم الرئيس  "> <br>
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="text" name="nom-president" placeholder="  لقب الرئيس  "> <br>
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="text" name="nachta" placeholder=" الوضعية  "> <br>
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="text" name="adresse" placeholder=" العنوان  "> <br>
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="tel" name="phone" placeholder=" الهاتف  "> <br>
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="text" name="baladia" placeholder=" البلدية  "> <br>
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="email" name="email" placeholder=" الإيميل  "> <br>
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="text" name="halat-elmilef" placeholder=" حالة الملف  "> <br>
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="text" name="description" placeholder=" الوصف  "> <br>
      
      <div>
      <h1  class="  backdrop-blur-3xl text-sky-400  font-bold text-center p-4 mt-3   " >    تواريخ التجديد  </h1>     

      </div>
      <div>
            <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="date" name="tarikh-tajdid1" placeholder=" تاريخ التجديد1  "> 
            <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="date" name="tarikh-tajdid2" placeholder=" تاريخ التجديد2  "> 
      </div>
      
      <div>
            <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="date" name="tarikh-tajdid3" placeholder=" تاريخ التجديد3  "> 
            <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="date" name="tarikh-tajdid4" placeholder=" تاريخ التجديد4  "> 
            <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="date" name="tarikh-tajdid5" placeholder=" تاريخ التجديد5  ">

      </div>
      
      
    <button type="submit">حفظ</button>
    </form>
  </div>

</x-app-layout>

        
       
