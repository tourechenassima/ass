<x-app-layout>
  <div>
    <h1  class="text-3xl backdrop-blur-3xl text-gray-700  font-bold text-center p-4 my-10" >  تغيير المعلومات </h1>     
  </div>
  <div class="container m-auto text-center  pt-15 pb-10">
    <form action="{{route('jamayats.update',$jamaya->id)}}" method="POST">
      
      @csrf
      @method('PUT')
      <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-3/4" type="text" name="tasmia" value="{{$jamaya->tasmia}}"> <br>
      

<div>

  <select  name="hala" id="hala" class="rounded-lg m-2 " style="direction: rtl" >
    <option value="" >  حالة الملف</option> 
    <option value="في انتظار رأي ديوان مندوبية الأمن" >  في انتظار رأي ديوان مندوبية الأمن</option> 
    <option value="في انتظار رأي قائد كتيبة الدرك الوطني" > في انتظار رأي قائد كتيبة الدرك الوطني</option> 
    <option value="في انتظار رد مديرية الشؤون الدينية" > في انتظار رد مديرية الشؤون الدينية</option> 
    <option value="مديرية النشاطات الثقافية والفنون" >في انتظار رد مديرية النشاطات الثقافية والفنون</option> 
    <option value="في انتظار رد مديرية التربية" > في انتظار رد مديرية التربية  </option> 
    <option value="في انتظار رأي قائد كتيبة الدرك الوطني" >  في انتظار رد مديرية الفلاحة </option> 
    <option value="في انتظار رأي قائد كتيبة الدرك الوطني" >  في انتظار رد مديرية الشباب والرياضة </option> 
    <option value="مرفوض بسبب التحقيقات السلبية" >  مرفوض بسبب التحقيقات السلبية</option> 
    <option value="مرفوض  بسبب أن الأهداف غير مطابقة لطابع الجمعية وفقا للمادة 4 من القانون الأساسي للجمعيات 12-06" >مرفوض  بسبب أن الأهداف غير مطابقة لطابع الجمعية وفقا للمادة 4 من القانون الأساسي للجمعيات 12-06</option> 
    <option value="لم يرفق بمحضر معاينة أو محضر الجمعية العامة محرر من طرف محضر قضائي" >لم يرفق بمحضر معاينة أو محضر الجمعية العامة محرر من طرف محضر قضائي</option> 
    <option value="نقص البيانات في الملف"  >نقص البيانات في الملف</option> 
  </select>


  <select  name="nachta" id="nachta" class="rounded-lg m-2 " style="direction: rtl" >
    <option value="">الوضعية</option> 
    <option value="نشطة">نشطة</option> 
    <option value="غيرنشطة"> غير نشطة </option> 
    <option value="ملف_قيدالمعالجة">  ملف قيد المعالجة </option> 

  </select>
</div>


       <div >
            
            <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="rakm-itimad" value="{{$jamaya['rakm-itimad']}}" >
            <label >تاريخ التأسيس</label>
            <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-1/4" type="date" name="tarikh-tassiss" value="{{$jamaya['tarikh-tassiss']}}" >
            <label > رقم الإعتماد</label>

       </div>

       <div >
        <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="rakm-itimad1" >
        <label >تاريخ التجديد</label>
        <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-1/4" type="date" name="tarikh-tajdid1" >
        <label > رقم الإعتماد</label>
   </div>

   <div >
        <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="rakm-itimad2" >
        <label >تاريخ التجديد</label>
        <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-1/4" type="date" name="tarikh-tajdid2" >
        <label > رقم الإعتماد</label>
   </div>

   <div >
        <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="rakm-itimad3" >
        <label >تاريخ التجديد</label>
        <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-1/4" type="date" name="tarikh-tajdid3" >
        <label > رقم الإعتماد</label>
   </div>

   <div >
        <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="rakm-itimad4" >
        <label >تاريخ التجديد</label>
        <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-1/4" type="date" name="tarikh-tajdid4" >
        <label > رقم الإعتماد</label>
   </div>

   <div >
        <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="rakm-itimad5" >
        <label >تاريخ التجديد</label>
        <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-1/4" type="date" name="tarikh-tajdid5" >
        <label > رقم الإعتماد</label>
   </div>

   <div >
        <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="rakm-itimad6" >
        <label >تاريخ التجديد</label>
        <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-1/4" type="date" name="tarikh-tajdid6" >
        <label > رقم الإعتماد</label>
   </div>




       <div>
        <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="kitaa" value="{{$jamaya['kitaa']}}"" placeholder="القطاع"> 
       </div>
       <br>
       <div>
        
           
         <select  name="apc" id="apc" class="rounded-lg m-2 " style="direction: rtl" >
           {{-- onchange = "this.form.submit()" --}}
            <option value="" > {{$jamaya['baladia']}} </option> 
           
           @foreach ($apcs as $apc )
            <option value={{$apc->id}}> {{$apc->name}}</option> 
           @endforeach
           {{-- <option value="شير">شير</option>              
           <option value="ثنية العابد">ثنية العابد</option>
           <option value="وادي الطاقة">وادي الطاقة</option> --}}
         </select>
         <select  name="tabe3" id="tabe3" class="rounded-lg m-2 " style="direction: rtl">
          {{-- onchange = "this.form.submit()" --}}
           <option value="" > {{$jamaya['tabaa']}}</option> 
          @foreach ($tabe3s as $tabe3 )
          <option value={{$tabe3->name}}> {{$tabe3->name}}</option> 
           
          @endforeach
        </select>
        </div>
    
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="text" name="prenom-president" value="{{$jamaya['prenom-president']}}"> <br>
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="text" name="nom-president" value="{{$jamaya['nom-president']}}"> <br>

      {{-- <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="text" name="nachta" placeholder=" الوضعية  "> <br> --}}
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="text" name="adresse" value="{{$jamaya['adresse']}}"> <br>
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="tel" name="phone" value="{{$jamaya['phone']}}"> <br>
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="email" name="email" value="{{$jamaya['email']}}"> <br>
      {{-- <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="text" name="halat-elmilef" placeholder=" حالة الملف  "> <br> --}}
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="text" name="description" value="{{$jamaya['description']}}"> <br>
      
     
  
    <button class="m-10 text-slate-50 rounded-lg decoration-0 font-bold text-3xl py-2 px-6 mt-6  bg-green-700  hover:bg-green-600 " type="submit">حفظ</button>
    </form>
  </div>

</x-app-layout>

        
       
