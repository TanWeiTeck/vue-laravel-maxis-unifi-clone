<side-menu2>

    <div>

        <div class="w-28 text-sm text-gray-500 shadow-xl">
            <div
                class="{{ request()->is('dashboard') ? 'text-blue-600, bg-gray-200' : '' }} border px-2 py-4 duration-300 ease-linear hover:bg-blue-100">
                <a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') ? 'text-blue-600' : '' }}">
                    <img class="m-auto h-8" src="https://img.icons8.com/fluency/48/000000/dashboard-layout.png" />
                    <p class="pt-2 text-center">Dashboard</p>
                </a>
            </div>
            <div
                class="{{ request()->is('applications/list') ? 'text-blue-600, bg-gray-200' : '' }} group relative border px-2 py-4 duration-300 ease-linear hover:bg-blue-100">
                <a href="{{ route('applications.list') }}">
                    <img class="m-auto h-8"
                        src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/000000/external-applicants-recruitment-agency-flaticons-lineal-color-flat-icons-3.png" />
                    <p class="pt-2 text-center">Application</p>
                </a>
                <div
                    class="top-0 left-[112px] hidden min-h-fit min-w-max flex-col space-y-4 rounded-r-md bg-blue-100 py-2 px-4 shadow-md group-hover:absolute group-hover:flex">
                    <a class="text-sm hover:text-blue-700" href="{{ route('applications.create') }}">+ Add New
                        Application</a>
                </div>

            </div>
            <div
                class="{{ request()->is('packages/list') ? 'text-blue-600, bg-gray-200' : '' }} group relative border px-2 py-4 duration-300 ease-linear hover:bg-blue-100">
                <a href="{{ route('packages.list') }}">
                    <img class="m-auto h-8"
                        src="https://img.icons8.com/external-itim2101-blue-itim2101/64/000000/external-packages-logistics-and-delivery-itim2101-blue-itim2101.png" />
                    <p class="pt-2 text-center">Package</p>
                </a>
                <div
                    class="top-0 left-[112px] hidden min-h-fit min-w-max flex-col space-y-4 rounded-r-md bg-blue-100 py-2 px-4 shadow-md group-hover:absolute group-hover:flex">
                    <a class="text-sm hover:text-blue-700" href="{{ route('packages.create') }}">+ Add New Package</a>
                </div>
            </div>
            <div class="group relative border px-2 py-4 duration-300 ease-linear hover:bg-blue-100">
                <div>
                    <img class="m-auto h-7" src="https://img.icons8.com/office/40/undefined/link.png" />
                    <p class="pt-2 text-center">GO TO</p>
                </div>
                <div
                    class="top-0 left-[112px] hidden min-h-fit min-w-max flex-col space-y-4 rounded-r-md bg-blue-100 py-2 px-4 shadow-md group-hover:absolute group-hover:flex">
                    <a class="flex items-center space-x-2 text-sm hover:text-blue-700"
                        href="{{ route('maxishome') }}">
                        <p>Maxis Home Page</p>
                        <img class='h-3 object-contain'
                            src="https://iconape.com/wp-content/files/cd/76540/svg/maxis-communications-logo.svg"
                            alt="maxis_logo">
                    </a>
                    <a class="flex items-center space-x-2 text-sm hover:text-blue-700"
                        href="{{ route('unifihome') }}">
                        <p>Unifi Home Page</p>
                        <img class='h-3 object-contain'
                            src="https://home.unifi.com.my/themes/custom/unifi/assets/svg/unifi-logo.svg"
                            alt="unifi_logo">
                    </a>
                </div>
            </div>

        </div>
    </div>

</side-menu2>
