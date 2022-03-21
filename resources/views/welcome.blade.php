<x-app-layout>

    <form method="POST" enctype="multipart/form-data" action="{{route('pass.upload')}}" class="py-5 px-8">
        <div
            class="p-4 w-full text-center bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Load any PKPass to your wallet</h5>
            <p class="text-base text-gray-500 sm:text-lg dark:text-gray-400">You have downloaded a PKPass on your
                desktop and don't know how to load it on your phone? Can't be easier!.</p>
            <ol class="mb-5 list-decimal text-base max-w-sm md:max-w-xl mx-auto text-left text-gray-500 sm:text-lg dark:text-gray-400">
                <li>Copy the PKPass file to your iPhone (eg. with AirDrop)</li>
                <li>Open this website on your phone</li>
                <li>Upload the PKPass in here</li>
                <li>Press: <code>Add to Wallet</code></li>
            </ol>

            <div
                  class="mb-4 justify-center items-center space-y-4 flex-col flex sm:space-y-0 sm:space-x-4 gap-2">
                @csrf
                <x-file-upload required onchange="setPass()" id="pass" label="Upload your pass"></x-file-upload>
            </div>

            <div class="justify-center items-center flex flex-col gap-2">

                <button type="submit" style="display: none" class="cursor-pointer" name="downloadButton">
                    <x-add-to-wallet class="h-14"/>
                </button>

            </div>
        </div>
    </form>
    @push('scripts')
        <script>
            window.setPass = () => {
                const fileInput = document.getElementById('pass_input')
                const btns = document.getElementsByName('downloadButton')

                const [file] = fileInput.files
                if (file) {
                    btns.forEach(btn => btn.style.display = 'flex')
                } else {
                    btns.forEach(btn => btn.style.display = 'none')
                }

            }
        </script>
    @endpush
</x-app-layout>
