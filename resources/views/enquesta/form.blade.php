<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- Use 'Edit' for edit mode and create for non-edit/create mode --}}
            {{ isset($enquesta) ? 'Edit' : 'Create' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- don't forget to add multipart/form-data so we can accept file in our form --}}
                    <form method="post" action="{{ isset($enquesta) ? route('enquesta.update', $enquesta->id) : route('enquesta.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data">class="mt-6 space-y-6">
                        @csrf
                        {{-- add @method('put') for edit mode --}}
                        @isset($enquesta)
                            @method('put')
                        @endisset
                
                        <div>
                            <x-input-label for="title" value="Title" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="$enquesta->nom ?? old('nom')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('nom')" />
                        </div>

                        <div>
                            <x-input-label for="content" value="Content" />
                            {{-- use textarea-input component that we will create after this --}}
                            <x-textarea-input id="content" name="content" class="mt-1 block w-full" required autofocus>{{ $enquesta->descripcio ?? old('descripcio') }}</x-textarea-input>
                            <x-input-error class="mt-2" :messages="$errors->get('descripcio')" />
                        </div>

                        <div>
                            <x-input-label for="data" value="data" />
                            <x-text-input id="data" name="data" class="mt-1 block w-full" :value="$enquesta->data ?? old('data')" required autofocus>{{ $enquesta->data ?? old('data') }}</x-text-input>
                            <x-input-error class="mt-2" :messages="$errors->get('data')" />
                        </div>
                
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <script>
        // create onchange event listener for featured_image input
        document.getElementById('featured_image').onchange = function(evt) {
            const [file] = this.files
            if (file) {
                // if there is an image, create a preview in featured_image_preview
                document.getElementById('featured_image_preview').src = URL.createObjectURL(file)
            }
        }
    </script> -->
</x-app-layout>