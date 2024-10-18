<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <table class="min-w-full bg-white">
        <thead class="bg-gray-800 text-white">
        <tr>
            @foreach ($headers as $header)
                <th class="w-1/3 py-3 px-4 uppercase font-semibold text-sm">{{ $header }}</th>
            @endforeach
        </tr>
        </thead>
        <tbody class="text-gray-700">
        @foreach ($rows as $row)
            <tr>
                @foreach ($row as $cell)
                    <td class="w-1/3 py-3 px-4">{{ $cell }}</td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
