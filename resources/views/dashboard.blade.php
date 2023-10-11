<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" dir="rtl">
            {{ __(' ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8  flex flex-row justify-around items-center">
            <div class="bg-white border border-gray-400 overflow-hidden shadow-sm sm:rounded-lg w-1/3   flex flex-row justify-around items-center ">
                <div class="p-6 text-gray-900 flex flex-row justify-around items-center  " dir="rtl">
                
                   <div class="p-6 text-gray-900   " dir="rtl">
                    <table>
                        @foreach ($tabe3s as $tabe3 )
                        <tr >
                            
                            <td class="py-4">{{$tabe3->name}}</td>
                            
                            
                            <td class="py-4">
                            <a href="{{route('tabe3s.destroy',$tabe3->id)}}" class="m-2 text-slate-50 rounded-full decoration-0 font-bold text-lg p-0   bg-red-400  hover:bg-rose-700 "> حذف </a>
                        </td>
                            
                        </tr>
                        @endforeach
                    </table>
                   </div>
                    <div>
                                            <a href="{{route('tabe3s.create')}}" class="m-auto text-slate-50 rounded-lg decoration-0 font-bold text-lg px-2 mt-6  bg-green-400  hover:bg-green-700 "> إضافة طابع</a>

                    </div>

                </div>
            </div>


            <div class="bg-white border border-gray-400 overflow-hidden shadow-sm sm:rounded-lg w-1/3   flex flex-row justify-around items-center ">
                <div class="p-6 text-gray-900 flex flex-row justify-around items-center  " dir="rtl">
                
                   <div class="p-6 text-gray-900   " dir="rtl">
                    <table>
                        @foreach ($tabe3s as $tabe3 )
                        <tr >
                            
                            <td class="py-4">{{$tabe3->name}}</td>
                            
                            
                            <td class="py-4">
                            <a href="{{route('tabe3s.destroy',$tabe3->id)}}" class="m-2 text-slate-50 rounded-full decoration-0 font-bold text-lg p-0   bg-red-400  hover:bg-rose-700 "> حذف </a>
                        </td>
                            
                        </tr>
                        @endforeach
                    </table>
                   </div>
                    <div>
                                            <a href="{{route('tabe3s.create')}}" class="m-auto text-slate-50 rounded-lg decoration-0 font-bold text-lg px-2 mt-6  bg-green-400  hover:bg-green-700 "> إضافة طابع</a>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
