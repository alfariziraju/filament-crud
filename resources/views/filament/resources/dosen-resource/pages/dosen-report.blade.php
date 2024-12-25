<x-filament::page>
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="px-4 py-2 text-left border">NIP</th>
                <th class="px-4 py-2 text-left border">Nama</th>
                <th class="px-4 py-2 text-left border">Email</th>
                <th class="px-4 py-2 text-left border">Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosens as $dosen)
                <tr class="hover:bg-gray-200">
                    <td class="px-4 py-2 border">{{ $dosen->nip }}</td>
                    <td class="px-4 py-2 border">{{ $dosen->nama }}</td>
                    <td class="px-4 py-2 border">{{ $dosen->email }}</td>
                    <td class="px-4 py-2 border">{{ $dosen->jurusan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-filament::page>

