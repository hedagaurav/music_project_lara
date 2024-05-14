<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Songs List') }}
        </h2>
            <button type="button">Search</button>  
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table>
                        <tr>
                            <th>Song</th>
                            <th>ISRC</th>
                            <th>Artist</th>
                            <th>Music Label</th>
                            <th>Status</th>
                        </tr>
                        @foreach ($songs_list as $index => $song)
                            <tr>
                                <td>{{ $song->songName }} <br> {{ $song->albumName }} <br> {{ $song->created_at }}</td>
                                <td>{{ $song->isrc }}</td>
                                <td>{{ $song->artist }}</td>
                                <td>{{ $song->client->parentLabelCompany }}</td>
                                <td>{{ $song->status->statusName }}</td>
                            </tr>
                        
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
