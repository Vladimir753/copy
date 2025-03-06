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
            <!-- Trigger/Open The Modal -->
            <button id="myBtn">Open Modal</button>

            <!-- The Modal -->
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>Some text in the Modal..</p>
                </div>

            </div>
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
