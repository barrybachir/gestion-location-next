<x-app-layout>

   <x-main>

       <div class="flex">
           <div class=" w-2/3 p-4 mt-6 ">
               <section class="bg-gradient-to-r from-blue-500 to-purple-500 text-white p-2 rounded-lg shadow-lg ml-[130px]">
                   <div class="flex items-center justify-between">
                       <!-- Texte de bienvenue -->
                       <div>
                           <h1 class="text-3xl font-bold mb-2">Bienvenue, {{ Auth::user()->name }} !</h1>
                           <p class="text-lg">Nous sommes heureux de vous revoir. Consultez vos dernières statistiques ci-dessous ou commencez une nouvelle tâche.</p>
                       </div>

                   </div>
               </section>
           </div>
           <div class=" w-1/3 p-4">
               @livewire('vehicule.available-vehicule-count')
           </div>
       </div>

          <div class="grid grid-cols-2">
              <div class="ml-[140px] mt-10">
                  @livewire('taux-occupation')
              </div>
              @livewire('graphe-order')
          </div>
       <div class="ml-[140px]  ">
           @livewire('commande-jour')
       </div>

   </x-main>
</x-app-layout>
