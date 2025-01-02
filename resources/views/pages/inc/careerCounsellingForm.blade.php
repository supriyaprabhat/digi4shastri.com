<form class="p-7 md:p-11 w-full flex flex-wrap justify-between" method="post" action="{{ route('career.counselling.form.submit') }}">
    <h3 class="text-2xl w-full text-red-600 sm:text-3xl font-bold mb-8">Get Free Career Counseling.</h3>
    @csrf
    <div class="mb-4 sm:w-[48%] w-full space-y-2 flex flex-col">
        <label for="first_name" class="text-lg font-medium">FIRST NAME</label>
        <input type="text" name="first_name" id="first_name" class="p-3 border-2">
    </div>
    <div class="mb-4 sm:w-[48%] w-full space-y-2 flex flex-col">
        <label for="last_name" class="text-lg font-medium">LAST NAME</label>
        <input type="text" name="last_name" id="last_name" class="p-3 border-2">
    </div>

    <div class="mb-4 space-y-2 flex flex-col sm:w-[48%] w-full">
        <label for="email" class="text-lg font-medium">EMAIL</label>
        <input type="text" name="email" id="email" class="p-3 border-2">
    </div>
    <div class="mb-4 space-y-2 flex flex-col sm:w-[48%] w-full">
        <label for="mobile" class="text-lg font-medium">Mobile</label>
        <input type="text" name="mobile" id="mobile" class="p-3 border-2">
    </div>
    <div class="mb-4 space-y-2 flex flex-col sm:w-[48%] w-full">
        <label for="city" class="text-lg font-medium">City</label>
        <input type="text" name="city" id="city" class="p-3 border-2">
    </div>
    <div class="mb-4 space-y-2 flex flex-col sm:w-[48%] w-full">
        <label for="selected_time" class="text-lg font-medium">Select a time</label>
        <input type="datetime-local" name="selected_time" id="selected_time" class="p-3 border-2">
    </div>

    <div class="mb-8 w-full space-y-2 flex flex-col">
        <label for="name" class="text-lg font-medium">MESSAGE</label>
        <textarea name="message" id="message" class="p-3 border-2"></textarea>
    </div>

    <button class="btn-p w-full !border-2 !border-zinc-900" type="submit">Send Now</button>
</form>