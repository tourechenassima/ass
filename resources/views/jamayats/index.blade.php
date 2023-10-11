  <x-app-layout>
      <div class="  rounded-lg mt-20 pl-50 flex flex-row justify-around  ">
        <div>
          <a href="{{route('jamayats.create')}}" class="m-10 text-slate-50 rounded-lg decoration-0 font-bold text-xl p-2 mt-6  bg-red-400  hover:bg-rose-700 "> إدخال جمعية جديدة</a>
          <a href="{{route('jamayyats-pdf')}}" class="m-10 text-slate-50 rounded-lg decoration-0 font-bold text-xl p-2 mt-6  bg-red-400 hover:bg-rose-700 ">  طباعة قائمة الجمعيات</a>
        </div>
        <div>

          <form action="{{route('filtreapcs')}}" method="POST" class="flex flex-row justify-between  ">
             {{ csrf_field() }}
              @method('get') 
              
            <select  name="apcs" id="apcs" class="rounded-lg m-2 " style="direction: rtl" >
              {{-- onchange = "this.form.submit()" --}}
              {{-- <option value="" > اختر البلدية</option> --}}
              <option value="allapcs" > كل البلديات</option>
              <option value="شير">شير</option>              
              <option value="ثنية العابد">ثنية العابد</option>
              <option value="وادي الطاقة">وادي الطاقة</option>
            </select>
            
            <select  name="tabe3" id="tabe3" class="rounded-lg m-2 " style="direction: rtl" >
              {{-- onchange = "this.form.submit()" --}}
              {{-- <option value="" > اختر الطابع</option> --}}
              <option value="alltabe3" >  كل الطبوع </option>
              @foreach ($tabe3s as $tabe3 )
              <option value={{$tabe3->name}}> {{$tabe3->name}}</option> 
               
              @endforeach
                           
              
            </select>
            
            <select  name="wad3ia" id="wad3ia" class="rounded-lg m-2 " style="direction: rtl" >
              {{-- onchange = "this.form.submit()" --}}
              {{-- <option value="" > اختر البلدية</option> --}}
              <option value="all0and1" > نشطة وغير نشطة </option>
              <option value="1">نشطة فقط</option>              
              <option value="0"> غير نشطة فقط</option>
            </select>
            <br><br>
            
            <button class="border border-blue-600 bg-gray-100 rounded-lg m-2 p-2 " type="submit">تخصيص</button> 
            
          </form>
        </div> 
          

      </div>
      <div>
      </div>
      <div class=" flex flex-col justify-center items-center mt-10 pt-0  border border-slate-100 font-bold  overflow-auto  rounded-lg shadow-sm h-auto w-auto max-h-10/12  ">
      <table  dir="rtl" class=" table-auto text-sm " style="font-family: 'Scheherazade New', serif;">
    
      <thead >
        <tr class=" shadow-gray-50 shadow-sm bg-gray-50   text-lg        ">
          
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
      <tbody class="relative " >
      @foreach($jamayats as $jamaya)
        <tr class="shadow-sm " >
          
          <td class=" text-right py-4 px-2  w-12">{{$jamaya['id']}} 
          <td class=" text-right py-4 px-2  w-96 cursor-pointer"><a href="{{route('jamayats.show',$jamaya['id'])}}">{{$jamaya['tasmia']}}</a> </td>
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
            </td>

        </tr>
        @endforeach
        <!-- More rows... -->
      </tbody>
    </table>

      
    </div>



  <br><br>


  {{-- <div class="p-5 bg-red-200 flex justify-between rounded-lg">
    
    {{ $jamayats->links() }}
  </div> --}}

  
    

  </x-app-layout>