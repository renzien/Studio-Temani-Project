 <div class="font-quicksand text-lg {{ request()->is('check') ? 'active' : 'text-zinc-500'}}">
     <a href="/check">
         <h1 class="font-bold">Check Order</h1>
     </a>
 </div>
 <i class="text-3xl px-2 ri-arrow-drop-right-line"></i>
 <div class="font-quicksand text-lg {{ request()->is('payment') ? 'active' : 'text-zinc-500'}}">
     <h1 class="font-bold">Payment</h1>
 </div>
 <i class="text-3xl px-2 ri-arrow-drop-right-line"></i>
 <div class="font-quicksand text-lg text-zinc-500">
     <h1 class="font-bold">Finalization</h1>
 </div>