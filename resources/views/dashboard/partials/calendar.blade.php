 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

 <div class="p-4 w-full">
     <div id="calendar">

     </div>
 </div>

 <div class="flex flex-col rounded-lg shadow-lg">
     <div class="w-full pt-6 flex items-center flex-col rounded-t-lg bg-green-300">
         <div class="text-2xl font-bold mb-4">{{ $currentDay }}</div>
         <div id="real-time" class="text-gray-500 text-lg mb-4">
             {{ $currentTime }}
         </div>
     </div>
     <div class="text-gray-500 text-lg py-6">
         <h1 class="text-center font-semibold text-2xl">{{ $currentDate }}</h1>
     </div>
 </div>

 <div class="mt-6 flex flex-col rounded-lg shadow-lg">
     <div class="w-full pt-6 flex items-center flex-col rounded-t-lg bg-red-500 text-white">
         <div class="text-2xl font-bold mb-4">Low Quantity Items</div>
     </div>
     <div class="text-gray-500 text-lg py-6">
         <div class="overflow-x-auto border-b border-gray-200 shadow">
             <table class="divide-y divide-gray-300">
                 <thead class="bg-gray-50">
                     <tr>
                         <th class="px-6 py-2 text-xs text-gray-500">Item Name</th>
                         <th class="px-6 py-2 text-xs text-gray-500">Quantity</th>
                     </tr>
                 </thead>
                 <tbody class="bg-white divide-y divide-gray-300">
                     @foreach ($lowQuantityItems as $item)
                         <tr class="whitespace-nowrap">
                             <td class="px-6 py-4">
                                 <div class="text-sm text-gray-900">
                                     {{ $item->item_name }}
                                 </div>
                             </td>
                             <td class="px-6 py-4">
                                 <div class="text-sm text-gray-500">
                                     {{ $item->quantity }}
                                 </div>
                             </td>
                         </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
     </div>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
     integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
 </script>
 <script>
     $(document).ready(function() {

         $('#calendar').fullCalendar({

         });

     });
 </script>
