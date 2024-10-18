
<div class="bg-white shadow rounded-lg p-4 flex justify-between max-w-96  ">
    <!-- Colonne 1 -->
    <div class=" inline-block text-center">
        <h2 class="text-2xl font-semibold">{{ $jour }}</h2>
        <p class="  text-gray-600 text-[15px]">Commande du jour</p>
    </div>

    <!-- Séparateur vertical -->
    <div class="border-l border-gray-300"></div>

    <!-- Colonne 2 -->
    <div class="text-center">
        <h2 class="text-2xl font-semibold">{{$confirme}}</h2>
        <p class="text-gray-600">commande traitée du jour</p>
    </div>

    <!-- Séparateur vertical -->
    <div class="border-l border-gray-300"></div>

    <!-- Colonne 3 -->
    <div class="text-center">
        <h2 class="text-2xl font-semibold">{{$semaine}}</h2>
        <p class="text-gray-600">commande pour la semaine</p>
    </div>
</div>
