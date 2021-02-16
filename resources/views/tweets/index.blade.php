<x-app>
    <div>
        @include('_publish-tweet-panel')

        @include('_timeline')
    </div>

    @section('page-scripts')
        <script>
            const publishPanel = document.querySelector('#publish-panel');
            const symbolsCounter = document.querySelector('#publish-symbols-count');

            function publishPanelManipulation() {
                symbolsCounter.innerHTML = this.value.length;
                if (this.value.length > 255) {
                    symbolsCounter.classList.add('text-red-500');
                } else {
                    symbolsCounter.classList.remove('text-red-500');
                }
            };

            publishPanel.addEventListener('input', publishPanelManipulation);

            document.addEventListener('DOMContentLoaded', function () {
                symbolsCounter.innerHTML = publishPanel.value.length;
            });
        </script>
    @endsection

</x-app>


