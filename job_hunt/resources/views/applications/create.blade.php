<x-app-layout>
    <h1>Create</h1>
    <form class="flex p-5 box-border flex-col" action="/applications" method="post">
        @csrf

        <!-- Position -->
        <label for="position">Position:</label>
        <input type="text" name="position" id="position" required>

        <!-- Company Name -->
        <label for="company_name">Company Name:</label>
        <input type="text" name="company_name" id="company_name" required>

        <!-- City -->
        <label for="city">City:</label>
        <input type="text" name="city" id="city" required>

        <!-- Country -->
        <label for="country">Country:</label>
        <input type="text" name="country" id="country" required>

        <!-- Channel -->
        <label for="channel">Channel:</label>
        <select name="channel" id="channel">
            <option value="linkedin">LinkedIn</option>
            <option value="bestjobs">BestJobs</option>
            <option value="ebjobs">EBJobs</option>
            <option value="company_website">Company Website</option>
            <option value="other">Other</option>
        </select>

        <!-- Applied On -->
        <label for="applied_on">Applied On:</label>
        <input type="date" name="applied_on" id="applied_on" required>

        <!-- Status -->
        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="applied">Applied</option>
            <option value="interviewed">Interviewed</option>
            <option value="rejected">Rejected</option>
            <option value="hired">Hired</option>
        </select>

        <!-- Notes -->
        <label for="notes">Notes:</label>
        <textarea name="notes" id="notes"></textarea>

        <!-- Recruiter Name -->
        <label for="recruiter_name">Recruiter Name:</label>
        <input type="text" name="recruiter_name" id="recruiter_name">

        <!-- Experience Level -->
        <label for="experience_level">Experience Level:</label>
        <select name="experience_level" id="experience_level">
            <option value="interview">Interview</option>
            <option value="junior">Junior</option>
            <option value="mid">Mid</option>
            <option value="senior">Senior</option>
        </select>

        <!-- Contact Email -->
        <label for="contact_email">Contact Email:</label>
        <input type="email" name="contact_email" id="contact_email">

        <!-- Submit Button -->
        <button type="submit">Submit</button>
    </form>

</x-app-layout>
