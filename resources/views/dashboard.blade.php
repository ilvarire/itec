<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">


            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-zinc-800">

                <a href="{{ route('settings.profile')}}">
                    <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                        Hi {{ Auth::user()->name}},
                    </h5>
                </a>
                <?php 
                    $projects = [];
                ?>
                @if(count($projects) > 1)
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                        You have have {{ count($projects)}} active projects.
                    </p>
                    <a href="" class="inline-flex font-medium items-center text-blue-300 hover:underline">
                        See project documents
                        <svg class="w-3 h-3 ms-2.5 ml-3 rtl:rotate-[270deg]" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                        </svg>
                    </a>
                @else
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                        No active projects.
                    </p>
                @endif

            </div>

            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern
                    class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern
                    class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        <div
            class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div>
</x-layouts.app>