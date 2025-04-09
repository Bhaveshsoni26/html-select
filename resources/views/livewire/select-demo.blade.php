<div>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="border-4 border-dashed border-gray-200 rounded-lg p-4">
                <h2 class="text-lg font-medium text-gray-900 mb-4">Select Component Demo</h2>

                @if (session()->has('message'))
                    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-md">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="space-y-4">
                    <div>
                        <label for="industry" class="block text-sm font-medium text-gray-700">Industry</label>
                        <select
                            id="industry"
                            wire:model.live="industry"
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md"
                        >
                            <option value="">Choose industry...</option>
                            @foreach($industries as $value => $label)
                                <option value="{{ $value }}">{{ $label }}</option>
                            @endforeach
                        </select>
                    </div>

                    @if($industry)
                        <div class="mt-4">
                            <p class="text-sm text-gray-600">Selected industry: <span class="font-medium">{{ $industries[$industry] ?? $industry }}</span></p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
