<x-app-layout>
    
/*
Aufar Hadni Azzakky 46-03 6706223109
*/

 <x-slot name="header">
 <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Daftar Pengguna') }}
 </h2>
 </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <table class="min-w-full table-auto">
                <thead>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2">#</th>
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">Username</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Alamat</th>
                    <th class="border px-4 py-2">Nomor Telepon</th>
                    <th class="border px-4 py-2">Agama</th>
                    <th class="border px-4 py-2">Tanggal Lahir</th>
                    <th class="border px-4 py-2">Jenis Kelamin</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $key => $user)
                    <tr>
                    <td class="border px-4 py-2">{{ $key + 1 }}</td>
                    <td class="border px-4 py-2">{{ $user->fullname }}</td>
                    <td class="border px-4 py-2">{{ $user->username }}</td>
                    <td class="border px-4 py-2">{{ $user->email }}</td>
                    <td class="border px-4 py-2">{{ $user->address }}</td>
                    <td class="border px-4 py-2">{{ $user->phoneNumber }}</td>
                    <td class="border px-4 py-2">{{ $user->religion }}</td>
                    <td class="border px-4 py-2">{{ $user->birthdate }}</td>
                    <td class="border px-4 py-2">{{ $user->gender == 0 ? 'Perempuan' : 'Laki-laki' }}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
             </div>
             </div>
            </div>
            </div>
        </x-app-layout>