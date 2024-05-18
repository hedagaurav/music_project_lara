<x-app-layout>
    <x-slot name="header">
        <div class="song-search-wrapper">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Songs List') }}
            </h2>
            <div class="flex">
                <button type="button" class="btn btn-sm btn-outline-dark" data-bs-toggle="modal"
                    data-bs-target="#search-modal">
                    <i class="fa fa-search"></i>Search
                </button>
                <form action="{{ route('songs.export') }}" method="post">
                    @csrf
                    <input type="hidden" name="label_name" value="{{ request('label_name') }}">
                    <input type="hidden" name="song_name" value="{{ request('song_name') }}">
                    <input type="hidden" name="from_song_date" value="{{ request('from_song_date') }}">
                    <input type="hidden" name="to_song_date" value="{{ request('to_song_date') }}">
                    <input type="hidden" name="song_status" value="{{ request('song_status') }}">
                    <button class="btn btn-sm btn-outline-dark" type="submit">Download</button>
                </form>
            </div>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table table-bordered">
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
                                <td>{{ $song->status->status_name }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- search modal -->
    <div class="modal fade" id="search-modal" tabindex="-1" aria-labelledby="search-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="search-modalLabel">Search</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('songs.filter') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="label_name">Label Name</label>
                                    <input type="text" name="label_name" id="label_name" value="">
                                </div>
                                <div class="col-sm-6">

                                    <label for="song_name">Song Name</label>
                                    <input type="text" name="song_name" id="song_name" value="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">

                                    <label for="song_date">By Date</label>
                                    <div id="song_date"></div>
                                    <input type="text" class="date-picker" name="from_song_date" value="01-05-2024">
                                    <input type="text" class="date-picker" name="to_song_date" value="15-05-2024">
                                </div>
                                <div class="col-sm-6">

                                    <label for="song_status">Status</label>
                                    <select name="song_status" id="song_status">
                                        <option value="">Select status</option>
                                        @foreach ($status_list as $status)
                                            <option value="{{ $status->status_id }}">{{ $status->status_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script>
        $('#song_name').datepicker({
            inputs: $('.date-picker'),
            clearBtn: true,
            format: 'dd-mm-yyyy'

        });
    </script>
</x-app-layout>
