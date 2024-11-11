<x-main>
    <div class=" p-1 mt-0 bg-white shadow-md rounded-lg overflow-hidden">
        <h2 class="text-lg font-bold mb-4">Liste des chauffeurs</h2>
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
            <tr>
                @foreach ($headers as $header)
                    <th class="w-1/3 py-3 px-6 uppercase font-semibold text-sm text-left px-4 py-2">{{ $header }}</th>
                @endforeach
            </tr>
            </thead>
            <tbody class="text-gray-700 ">
            @foreach ($clients as $row)

                    <tr class="border">
                        <a href="{{ route('vehicule.edit', ['vehiculeId' => $row->id]) }}" class="ml-6">
                        <td class="px-6 py-2"> {{ $row->name }}</td>
                        <td class="px-6 py-2"> {{ $row->email }}</td>
                        <td class="px-6 py-2"> {{ $row->phone }}</td>
                        <td class="px-4 py-2"> {{ $row->adresse }}</td>
                        <td class="px-7 py-2"> {{ $row->numero_permit }} -- {{ $row->pays_permit }}</td>
                        <td class="px-4 py-2"> {{ $row->validite_permit }}</td>
                        <td class="px-4 py-2 text-[13px]"> {{ $row->created_at }}</td>
                        <td class="px-9 py-1"><a href="{{ route('client.commandes', ['clientId' => $row->id]) }}" class="ml-6"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                                    <linearGradient id="Z3eIuf5QY2EetuA~FfDd6a_VQOfeAx5KWTK_gr1" x1="9.899" x2="38.183" y1="9.98" y2="38.264" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#33bef0"></stop><stop offset="1" stop-color="#0a85d9"></stop></linearGradient><path fill="url(#Z3eIuf5QY2EetuA~FfDd6a_VQOfeAx5KWTK_gr1)" d="M44.041,24.122c0,11.045-8.955,20-20,20s-20-8.955-20-20s8.955-20,20-20	S44.041,13.077,44.041,24.122z"></path><path d="M22,36h4c0.552,0,1-0.448,1-1V20c0-0.552-0.448-1-1-1h-4c-0.552,0-1,0.448-1,1v15	C21,35.552,21.448,36,22,36z" opacity=".05"></path><path d="M22.227,35.5h3.547c0.401,0,0.727-0.325,0.727-0.727V20.227c0-0.401-0.325-0.727-0.727-0.727h-3.547	c-0.401,0-0.727,0.325-0.727,0.727v14.547C21.5,35.175,21.825,35.5,22.227,35.5z" opacity=".07"></path><radialGradient id="Z3eIuf5QY2EetuA~FfDd6b_VQOfeAx5KWTK_gr2" cx="24" cy="16" r="5.108" gradientTransform="matrix(.7808 0 0 .7066 5.26 4.096)" gradientUnits="userSpaceOnUse"><stop offset=".516"></stop><stop offset="1" stop-opacity="0"></stop></radialGradient><ellipse cx="24" cy="15.402" fill="url(#Z3eIuf5QY2EetuA~FfDd6b_VQOfeAx5KWTK_gr2)" opacity=".15" rx="3.988" ry="3.609"></ellipse><path fill="#fff" d="M24,17.732c1.7,0,2.65-1.068,2.65-2.388C26.65,14.024,25.647,13,24,13s-2.65,1.024-2.65,2.344	C21.35,16.664,22.3,17.732,24,17.732z"></path><rect width="4" height="15" x="22" y="20" fill="#fff"></rect>
                                </svg></a></td>

                        </a>
                    </tr>

            @endforeach
            </tbody>
        </table>
    </div>
</x-main>

