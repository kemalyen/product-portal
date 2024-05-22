<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">

                <x-form-section-large class="" submit="save" method="post">
                    <x-slot name="form">
                        <x-validation-errors />

                        <div class="col-span- sm:col-span-4">
                            <x-label class="" for="name" value="{{ __('Name') }}" />
                            <x-input name="name" placeholder="Product Name" required="true" autocomplete="off"
                                wire:model="form.name" />
                        </div>

                        <div class="col-span- sm:col-span-4">
                            <x-label class="" for="category_id" value="{{ __('Category') }}" />
                            <select id="category_id" name="category_id" class="form-input w-full"
                                wire:model="form.category_id">
                                <option> - - - - - </option>

                                @foreach ($categories as $category)
                                    <option {{ (($this->form->category_id === $category->id) ? 'selected' : '') }}
                                        value="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>


                        <div class="col-span- sm:col-span-4">

                            <x-submit-button class="mt-2 me-2" type="submit">
                                {{ __('Save') }}
                            </x-submit-button>
                        </div>
                    </x-slot>
                    </x-form-section>
            </div>
        </div>
    </div>
</div>