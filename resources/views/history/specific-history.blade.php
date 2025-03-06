<x-guest-layout>
    <link
        href="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.snow.css"
        rel="stylesheet"
    />
    @vite(['resources/js/main.js'])

    <div class="container-panel">

        @include('dashboard.nav')

        <main class="main-content">
            @include('dashboard.lang-menu')

            <div class="template-container">
                @foreach($histories as $name => $history)
                    <div class="history-panel">
                        <p>{{ $name }}</p>
                    </div>
                @endforeach
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.js"></script>

    <!-- Initialize Quill editor -->

</x-guest-layout>
