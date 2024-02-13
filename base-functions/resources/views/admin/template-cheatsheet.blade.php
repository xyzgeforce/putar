@extends($scaffold['layout'])
@section('content')

<!-- Start Content -->
    <!-- Chart cards (Four columns grid) -->
    <div class="grid grid-cols-1 gap-6 mt-6 md:grid-cols-2 lg:grid-cols-4">
    <!-- Users chart card -->
    <a href="#" class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
        <div class="flex items-start">
        <div class="flex flex-col flex-shrink-0 space-y-2">
            <span class="text-gray-400">Total Users</span>
            <span class="text-lg font-semibold">100,221</span>
        </div>
        <div class="relative min-w-0 ml-auto h-14">
            <canvas id="usersChart"></canvas>
        </div>
        </div>
        <div>
        <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
        <span>from 2019</span>
        </div>
    </a>

    <!-- Sessions chart card -->
    <a href="#" class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
        <div class="flex items-start">
        <div class="flex flex-col flex-shrink-0 space-y-2">
            <span class="text-gray-400">Sessions</span>
            <span class="text-lg font-semibold">40%</span>
        </div>
        <div class="relative min-w-0 ml-auto h-14">
            <canvas id="sessionsChart"></canvas>
        </div>
        </div>
        <div>
        <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">1.2%</span>
        <span>from 2019</span>
        </div>
    </a>

    <!-- Vists chart card -->
    <a href="#" class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
        <div class="flex items-start">
        <div class="flex flex-col flex-shrink-0 space-y-2">
            <span class="text-gray-400">Vists</span>
            <span class="text-lg font-semibold">300,527</span>
        </div>
        <div class="relative min-w-0 ml-auto h-14">
            <canvas id="vistsChart"></canvas>
        </div>
        </div>
        <div>
        <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">10%</span>
        <span>from 2019</span>
        </div>
    </a>

    <!-- Articles chart card -->
    <a href="#" class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
        <div class="flex items-start">
        <div class="flex flex-col flex-shrink-0 space-y-2">
            <span class="text-gray-400">Articles</span>
            <span class="text-lg font-semibold">600,429</span>
        </div>
        <div class="relative min-w-0 ml-auto h-14">
            <canvas id="articlesChart"></canvas>
        </div>
        </div>
        <div>
        <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">30%</span>
        <span>from 2019</span>
        </div>
    </a>
    </div>

    <!-- Two columns grid -->
    <div class="grid grid-cols-1 gap-6 mt-6 lg:grid-cols-2 xl:grid-cols-4">
    <!-- Import data card -->
    <div class="border rounded-lg shadow-sm">
        <!-- Card header -->
        <div class="flex items-center justify-between px-4 py-2 border-b">
        <h5 class="font-semibold">Import Data</h5>
        <!-- Dots button -->
        <button class="p-2 rounded-full">
            <svg
            class="w-6 h-6 text-gray-600"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"
            />
            </svg>
        </button>
        </div>
        <p class="px-4 py-6 text-gray-600">See and talk to your users and import them into your platform.</p>
        <ul class="px-4 pb-4 space-y-4 divide-y">
        <h5 class="font-semibold">Import Users from:</h5>
        <li class="flex items-start justify-between pt-4">
            <div class="flex items-start space-x-3">
            <!-- Twitter icon -->
            <span class="flex items-center pt-1">
                <svg fill="currentColor" class="w-5 h-5 text-blue-500">
                <path
                    d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"
                ></path>
                </svg>
            </span>
            <div>
                <h5 class="font-semibold">Twitter</h5>
                <span class="text-sm font-medium text-gray-400">Users</span>
            </div>
            </div>
            <a href="#" class="flex items-center px-2 py-1 space-x-2 text-sm text-white bg-blue-600 rounded-md">
            <span>Launch</span>
            <span class="">
                <svg
                class="w-4 h-4"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                />
                </svg>
            </span>
            </a>
        </li>
        <li class="flex items-start justify-between pt-4">
            <div class="flex items-start space-x-3">
            <!-- Github icon -->
            <span class="flex items-center pt-1">
                <svg width="24" height="24" fill="currentColor" class="text-black">
                <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M12 2C6.477 2 2 6.463 2 11.97c0 4.404 2.865 8.14 6.839 9.458.5.092.682-.216.682-.48 0-.236-.008-.864-.013-1.695-2.782.602-3.369-1.337-3.369-1.337-.454-1.151-1.11-1.458-1.11-1.458-.908-.618.069-.606.069-.606 1.003.07 1.531 1.027 1.531 1.027.892 1.524 2.341 1.084 2.91.828.092-.643.35-1.083.636-1.332-2.22-.251-4.555-1.107-4.555-4.927 0-1.088.39-1.979 1.029-2.675-.103-.252-.446-1.266.098-2.638 0 0 .84-.268 2.75 1.022A9.606 9.606 0 0112 6.82c.85.004 1.705.114 2.504.336 1.909-1.29 2.747-1.022 2.747-1.022.546 1.372.202 2.386.1 2.638.64.696 1.028 1.587 1.028 2.675 0 3.83-2.339 4.673-4.566 4.92.359.307.678.915.678 1.846 0 1.332-.012 2.407-.012 2.734 0 .267.18.577.688.48C19.137 20.107 22 16.373 22 11.969 22 6.463 17.522 2 12 2z"
                ></path>
                </svg>
            </span>
            <div>
                <h5 class="font-semibold">Github</h5>
                <span class="text-sm font-medium text-gray-400">Users</span>
            </div>
            </div>
            <a href="#" class="flex items-center px-2 py-1 space-x-2 text-sm text-white bg-blue-600 rounded-md">
            <span>Launch</span>
            <span class="">
                <svg
                class="w-4 h-4"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                />
                </svg>
            </span>
            </a>
        </li>
        <li class="pt-4 text-sm font-medium text-gray-400">
            <p>
            Or you can
            <a href="#" class="font-normal text-blue-500 hover:underline whitespace-nowrap"
                >sync data to your dashboard</a
            >
            to ensure data is always up to date.
            </p>
        </li>
        </ul>
    </div>

    <!-- Monthly chart card -->
    <div class="border rounded-lg shadow-sm xl:col-span-3">
        <!-- Card header -->
        <div class="flex items-center justify-between px-4 py-2 border-b">
        <h5 class="font-semibold">Monthly Expenses</h5>
        <!-- Dots button -->
        <button class="p-2 rounded-full">
            <svg
            class="w-6 h-6 text-gray-600"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"
            />
            </svg>
        </button>
        </div>
        <!-- Card content -->
        <div class="flex items-center p-4 space-x-4">
        <span class="text-3xl font-medium">45%</span>
        <span class="flex items-center px-2 space-x-2 text-sm text-green-800 bg-green-100 rounded">
            <span>
            <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                <path
                fill-rule="evenodd"
                d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                clip-rule="evenodd"
                ></path>
            </svg>
            </span>
            <span>39.2%</span>
        </span>
        </div>
        <!-- Chart -->
        <div class="relative min-w-0 p-4 h-80">
        <canvas id="updatingMonthlyChart"></canvas>
        </div>
    </div>
    </div>

    <!-- Table see (https://tailwindui.com/components/application-ui/lists/tables) -->
    <h3 class="mt-6 text-xl">Users</h3>
    <div class="flex flex-col mt-6">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
            <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                <th
                    scope="col"
                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                >
                    Name
                </th>
                <th
                    scope="col"
                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                >
                    Title
                </th>
                <th
                    scope="col"
                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                >
                    Status
                </th>
                <th
                    scope="col"
                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                >
                    Role
                </th>
                <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <template x-for="i in 10" :key="i">
                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                    <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 w-10 h-10">
                        <img
                            class="w-10 h-10 rounded-full"
                            src="https://avatars0.githubusercontent.com/u/57622665?s=460&u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&v=4"
                            alt=""
                        />
                        </div>
                        <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900">Ahmed Kamel</div>
                        <div class="text-sm text-gray-500">ahmed.kamel@example.com</div>
                        </div>
                    </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                    <div class="text-sm text-gray-500">Optimization</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                    <span
                        class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full"
                    >
                        Active
                    </span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin</td>
                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    </td>
                </tr>
                </template>
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
@endsection