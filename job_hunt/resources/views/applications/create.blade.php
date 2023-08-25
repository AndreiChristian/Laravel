<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Application') }}
        </h2>
    </x-slot>
    <form class="p-5 grid grid-cols-1 md:grid-cols-2 gap-4" action="/applications" method="post">
        @csrf

        <!-- Position -->
        <div class="flex flex-col space-y-1">
            <label for="position">Position:</label>
            <input class="p-2 border rounded" type="text" name="position" id="position" required>
        </div>

        <!-- Company Name -->
        <div class="flex flex-col space-y-1">
            <label for="company_name">Company Name:</label>
            <input class="p-2 border rounded" type="text" name="company_name" id="company_name" required>
        </div>

        <!-- City -->
        <div class="flex flex-col space-y-1">
            <label for="city">City:</label>
            <input class="p-2 border rounded" type="text" name="city" id="city" required>
        </div>

        <!-- Country -->
        <div class="flex flex-col space-y-1">
            <label for="country">Country:</label>
            <input class="p-2 border rounded" type="text" name="country" id="country" required>
        </div>

        <!-- Channel -->
        <div class="flex flex-col space-y-1">
            <label for="channel">Channel:</label>
            <select class="p-2 border rounded" name="channel" id="channel">
                <option value="linkedin">LinkedIn</option>
                <option value="bestjobs">BestJobs</option>
                <option value="ebjobs">EBJobs</option>
                <option value="company_website">Company Website</option>
                <option value="other">Other</option>
            </select>
        </div>

        <!-- Applied On -->
        <div class="flex flex-col space-y-1">
            <label for="applied_on">Applied On:</label>
            <input class="p-2 border rounded" type="date" name="applied_on" id="applied_on" required>
        </div>

        <!-- Status -->
        <div class="flex flex-col space-y-1">
            <label for="status">Status:</label>
            <select class="p-2 border rounded" name="status" id="status">
                <option value="applied">Applied</option>
                <option value="interviewed">Interviewed</option>
                <option value="rejected">Rejected</option>
                <option value="hired">Hired</option>
            </select>
        </div>

        <!-- Notes -->
        <div class="flex flex-col space-y-1 col-span-2">
            <label for="notes">Notes:</label>
            <textarea class="p-2 border rounded" name="notes" id="notes"></textarea>
        </div>

        <!-- Recruiter Name -->
        <div class="flex flex-col space-y-1">
            <label for="recruiter_name">Recruiter Name:</label>
            <input class="p-2 border rounded" type="text" name="recruiter_name" id="recruiter_name">
        </div>

        <!-- Experience Level -->
        <div class="flex flex-col space-y-1">
            <label for="experience_level">Experience Level:</label>
            <select class="p-2 border rounded" name="experience_level" id="experience_level">
                <option value="interview">Interview</option>
                <option value="junior">Junior</option>
                <option value="mid">Mid</option>
                <option value="senior">Senior</option>
            </select>
        </div>

        <!-- Contact Email -->
        <div class="flex flex-col space-y-1">
            <label for="contact_email">Contact Email:</label>
            <input class="p-2 border rounded" type="email" name="contact_email" id="contact_email">
        </div>

        <div >

            <label for="UserEmail"
                class="relative block overflow-hidden border-b border-gray-200 bg-transparent pt-3 focus-within:border-blue-600">
                <input type="email" id="UserEmail" placeholder="Email"
                    class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" />

                <span
                    class="absolute start-0 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                    Email
                </span>
            </label>

        </div>


        <!-- Submit Button -->
        <div class="col-span-2">
            <button type="submit"
                class="group relative inline-block text-sm font-medium text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
                href="/download">
                <span
                    class="absolute inset-0 translate-x-0.5 translate-y-0.5 bg-indigo-600 transition-transform group-hover:translate-y-0 group-hover:translate-x-0"></span>

                <span class="relative block border border-current bg-white px-8 py-3">
                    Create
                </span>
            </button>
        </div>
    </form>



</x-app-layout>
