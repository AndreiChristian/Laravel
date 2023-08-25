<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Applications') }}
        </h2>
    </x-slot>

    <div x-data="{ showModal: false, deleteId: null }" class="box-border py-4 px-6 m-6 ">
        <!-- Header -->
        <div class="box-border  p-4 flex justify-between w-full mb-4 rounded-lg bg-primary ">
            <div class="w-1/6 text-left">Position</div>
            <div class="w-1/6 text-left">Company</div>
            <div class="w-1/6 text-left">City</div>
            <div class="w-1/6 text-left">Country</div>
            <div class="w-1/10 text-left">Channel</div>
            <div class="w-1/10 text-left">Applied On</div>
            <div class="w-1/10 text-right ">Status</div>
            <div class="w-1/10 text-right ">View</div>
            <div class="w-1/10 text-right ">Delete</div>
        </div>

        <!-- Entries -->
        @foreach ($applications as $application)
            <div class="box-border px-4 py-2 flex w-full justify-between items-center bg-base  rounded-lg mb-2">
                <div class="w-1/6 p-2">{{ $application->position }}</div>
                <div class="w-1/6 p-2">{{ $application->company_name }}</div>
                <div class="w-1/6 p-2">{{ $application->city }}</div>
                <div class="w-1/6 p-2">{{ $application->country }}</div>
                <div class="w-1/10 p-2">{{ $application->channel }}</div>
                <div class="w-1/10 p-2">{{ $application->applied_on->diffForHumans() }}</div>
                <div class="w-1/10 p-2">{{ $application->status }}</div>
                <a href="{{ route('applications.show', $application->id) }}" class="block">
                    <x-arrow-top-right></x-arrow-top-right>
                </a>
                <button @click="showModal = true; deleteId = {{ $application->id }}">Delete</button>
            </div>
        @endforeach


        <!-- Modal -->
        <div x-show="showModal" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 flex items-center justify-center z-10">
            <!-- Backdrop -->
            <div class="absolute inset-0 bg-black opacity-50"></div>

            <div class="bg-white p-8 rounded shadow-lg z-20">
                <h2 class="text-xl mb-4">Confirm Deletion</h2>
                <p>Are you sure you want to delete this application?</p>

                <div class="mt-6 w-full flex items-center justify-between">
                    <!-- Delete Confirmation -->
                    <form method="POST" :action="'/applications/' + deleteId" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Yes, Delete</button>
                    </form>


                    <!-- Close the modal -->
                    <button @click="showModal = false" class="ml-4">Cancel</button>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
