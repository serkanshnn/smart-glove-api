<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1">
                        <div class="p-12">
                            <div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <p class="text-4xl">
                                        Health Companion
                                    </p>

                                    <p class="text-md">
                                        Please set your next activity and hour
                                    </p>

                                    @if(session()->has('message'))
                                        <div class="p-2 rounded-md text-white bg-green-800">
                                        {{ session()->get('message') }}
                                        </div>
                                    @endif

                                    <form class="mt-3" method="POST" action="{{ route('form') }}">
                                        @csrf
                                        <div class="flex md:flex-row flex-col md:space-x-4 space-x-0 md:items-end items-center">
                                            <div class="mt-3 md:w-auto w-full">
                                                <label for="first-name" class="block text-sm font-medium text-gray-400 sm:mt-px sm:pt-2"> Name </label>
                                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                    <input type="text" name="name" id="first-name" autocomplete="given-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                            </div>

                                            <div class="mt-3 md:w-auto w-full">
                                                <label for="location" class="block text-sm font-medium text-gray-400">Activity</label>
                                                <select id="location" name="activity" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                                    <option selected>Sport</option>
                                                    <option>Food</option>
                                                    <option>School</option>
                                                    <option>Job</option>
                                                    <option>Reminder</option>
                                                </select>
                                            </div>

                                            <div class="mt-3 md:w-auto w-full">
                                                <label for="location" class="block text-sm font-medium text-gray-400">Hour</label>
                                                <select id="location" name="hour" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                                    <option selected>00.00</option>
                                                    <option>00.30</option>
                                                    <option>01.00</option>
                                                    <option>01.30</option>
                                                    <option>02.00</option>
                                                    <option>02.30</option>
                                                    <option>03.00</option>
                                                    <option>03.30</option>
                                                    <option>04.00</option>
                                                    <option>04.30</option>
                                                    <option>05.00</option>
                                                    <option>05.30</option>
                                                    <option>06.00</option>
                                                    <option>06.30</option>
                                                    <option>07.00</option>
                                                    <option>07.30</option>
                                                    <option>08.00</option>
                                                    <option>08.30</option>
                                                    <option>09.00</option>
                                                    <option>09.30</option>
                                                    <option>10.00</option>
                                                    <option>10.30</option>
                                                    <option>11.00</option>
                                                    <option>11.30</option>
                                                    <option>12.00</option>
                                                    <option>12.30</option>
                                                    <option>13.00</option>
                                                    <option>13.30</option>
                                                    <option>14.00</option>
                                                    <option>14.30</option>
                                                    <option>15.00</option>
                                                    <option>15.30</option>
                                                    <option>16.00</option>
                                                    <option>16.30</option>
                                                    <option>17.00</option>
                                                    <option>17.30</option>
                                                    <option>18.00</option>
                                                    <option>18.30</option>
                                                    <option>19.00</option>
                                                    <option>19.30</option>
                                                    <option>20.00</option>
                                                    <option>20.30</option>
                                                    <option>21.00</option>
                                                    <option>21.30</option>
                                                    <option>22.00</option>
                                                    <option>22.30</option>
                                                    <option>23.00</option>
                                                    <option>23.30</option>
                                                </select>
                                            </div>
                                            <div class="mt-5 md:w-auto w-full">
                                                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Health Companion v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
