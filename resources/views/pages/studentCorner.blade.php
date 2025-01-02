@extends('layouts.base')

@section('title')
    Student Corner - Digi4shastri
@endsection


@section('contents')


    @if (!empty($sections[0]))
        @php
            $sec = $sections[0];
        @endphp

        @if ($sec->status == 1)
            <section class="lg:px-28 md:p-20 p-7 relative">
                <img src="{{ asset('storage', $sec->image) }}" class="h-full  absolute left-0 top-0" alt="">
                <h2 class="text-red-600 text-center font-bold md:text-6xl text-4xl">{{ $sec->heading }}
                </h2>
            </section>
            <section class="md:p-20 p-7 lg:px-28">
                <div class="flex flex-wrap gap-y-8  justify-between items-stretch">
                    <div class="sm:w-[48%] md:w-[39%] w-full relative">
                        <img src="images/home/img1.png" class="w-full h-full object-cover" alt="">
                        <div class="border-2 border-red-600 absolute top-6 left-6 h-full w-full -z-10"></div>
                    </div>
                    <div class="sm:w-[48%] w-full py-11 sm:px-7">

                        <p class="text-xl md:text-2xl  mb-7 font-medium">{{ $sec->sub_heading1 }}
                        </p>
                        <p class="text-lg md:text-xl">{{ $sec->sub_heading2 }}
                        </p>
                    </div>
                </div>
            </section>
        @endif
    @endif


    <!-- section3 -->
    <section class="bg-grid md:p-20 p-7 lg:px-28 flex flex-wrap justify-between relative gap-y-5">
        <div class="sm:hidden flex gap-3 w-full cursor-pointer" onclick="showFilter();"><i
                class="fa-solid fa-bars text-3xl font-bold"></i>
            <h4 class="text-red-600 text-3xl sm:hidden font-semibold ">Filter By</h4>
        </div>

        <div class="sm:w-[29%] transition-all duration-300 sm:!sticky w-full overflow-hidden max-sm:absolute sm:h-full h-auto top-4 max-sm:top-16 max-sm:bg-white left-0"
            id="filter">
            <h4 class="text-red-600 max-sm:hidden font-semibold text-4xl">Filter By</h4>

            <!-- Filter by Price -->
            <div class="p-3">
                <h3 class="text-xl sm:text-2xl font-medium mb-2">Filter by Price</h3>
                <div class="space-y-2">
                    <div>
                        <input type="radio" id="price1" name="price" value="0-1000" class="mr-2">
                        <label for="price1" class="text-gray-700">Under 1000</label>
                    </div>
                    <div>
                        <input type="radio" id="price2" name="price" value="1000-5000" class="mr-2">
                        <label for="price2" class="text-gray-700">1000 - 5000</label>
                    </div>
                    <div>
                        <input type="radio" id="price3" name="price" value="5000-10000" class="mr-2">
                        <label for="price3" class="text-gray-700">5000 - 10000</label>
                    </div>
                    <div>
                        <input type="radio" id="price4" name="price" value="10000-50000" class="mr-2">
                        <label for="price4" class="text-gray-700">10000 - 50000</label>
                    </div>
                </div>
            </div>

            <!-- Filter by Total Users -->
            <div class="p-3">
                <h3 class="text-xl sm:text-2xl font-medium mb-2">Filter by Total Users</h3>
                <div class="space-y-2">
                    <div>
                        <input type="radio" id="users1" name="total_users" value="1" class="mr-2">
                        <label for="users1" class="text-gray-700">1 or more users</label>
                    </div>
                    <div>
                        <input type="radio" id="users2" name="total_users" value="5" class="mr-2">
                        <label for="users2" class="text-gray-700">5 or more users</label>
                    </div>
                    <div>
                        <input type="radio" id="users3" name="total_users" value="10" class="mr-2">
                        <label for="users3" class="text-gray-700">10 or more users</label>
                    </div>
                    <div>
                        <input type="radio" id="users4" name="total_users" value="50" class="mr-2">
                        <label for="users4" class="text-gray-700">50 or more users</label>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <button onclick="applyFilters()"
                class="text-white bg-[#1ABC9C] hover:bg-black text-lg font-semibold rounded-lg duration-300 px-5 py-2 w-full my-5">
                Refine Search
            </button>
            <button onclick="window.location.href='{{ route('page.studentCorner') }}';"
                class="text-white bg-yellow-600 hover:bg-black text-lg font-semibold duration-300 rounded-lg px-5 py-2 w-full">
                Reset Filter
            </button>
        </div>



        <div class="sm:w-[68%] w-full space-y-7">
            <h3 class="text-red-600 text-2xl">Explore the Courses Catalog</h3>
            <div class="flex flex-wrap justify-between gap-y-6">

                @foreach ($courses as $course)
                    <div class="border-2 md:w-[48%] sm:w-[48%] w-full border-black bg-[#eef582] p-4 text-center rounded-xl">
                        <div class="bg-[#1ABC9C] text-center px-3 py-4 rounded-lg">
                            <h3 class="text-xl font-medium ">{{ $course->name }}</h3>
                            <p>{{ $course->short_description }}</p>
                        </div>
                        <h3 class="text-xl font-medium p-2">Rs {{ $course->price_inr }}</h3>
                        <p class=" text-lg">Per Month</p>
                        <p class="mb-4">{{ $course->course_total_user }} users <br>Additional Users @ Rs
                            {{ $course->additional_user_inr }}? Month/ User</p>
                        <a href="{{ route('page.course', $course->id) }}"
                            class="text-white bg-[#1ABC9C] hover:bg-black text-lg font-semibold rounded-md duration-300 px-5 py-2 !w-full ">Select
                            Plan</a>
                    </div>
                @endforeach

            </div>
        </div>

    </section>

    <!-- section4 -->
    <img src="images/icons/Wave.png" class="w-full h-auto" alt="">

    <!-- section5 -->
    <section class="max-w-7xl lg:px-28 md:p-20 p-7 mx-auto flex flex-wrap items-stretch">
        <div class="md:w-[35%] bg-[#19B697] sm:w-[25%] w-full flex flex-col justify-center items-center py-20 px-6">
            <img src="images/home/form.png" class="w-full h-auto  max-w-80 mb-7" alt="">
            <p class="text-xl font-bold text-center">You are just a click away from shaping your future</p>
        </div>
        <div class="md:w-[65%] border-2 border-[#19B697] sm:w-[75%] w-full">
            @include('pages.inc.careerCounsellingForm')
        </div>
    </section>

    <script>
        function applyFilters() {
            const price = document.querySelector('input[name="price"]:checked')?.value;
            const totalUsers = document.querySelector('input[name="total_users"]:checked')?.value;

            const urlParams = new URLSearchParams();
            if (price) urlParams.append('price', price);
            if (totalUsers) urlParams.append('total_users', totalUsers);

            // Redirect to the current page with query parameters
            window.location.href = `?${urlParams.toString()}`;
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Get query parameters
            const urlParams = new URLSearchParams(window.location.search);
            const selectedPrice = urlParams.get('price');
            const selectedUsers = urlParams.get('total_users');

            // Preselect the price filter if it exists
            if (selectedPrice) {
                const priceRadio = document.querySelector(`input[name="price"][value="${selectedPrice}"]`);
                if (priceRadio) {
                    priceRadio.checked = true;
                }
            }

            // Preselect the total users filter if it exists
            if (selectedUsers) {
                const usersRadio = document.querySelector(`input[name="total_users"][value="${selectedUsers}"]`);
                if (usersRadio) {
                    usersRadio.checked = true;
                }
            }
        });
    </script>

@endsection
