<div id="sideBar"
    class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">


    <!-- sidebar content -->
    <div class="flex flex-col">

        <!-- sidebar toggle -->
        <div class="text-right hidden md:block mb-4">
            <button id="sideBarHideBtn">
                <i class="fad fa-times-circle"></i>
            </button>
        </div>
        <!-- end sidebar toggle -->

        <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">general</p>

        <!-- link -->
        <x-link-nav href="/admin/setting">
            Setting
        </x-link-nav>
        <!-- end link -->


        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">blog</p>

        <!-- link -->
        <x-link-nav href="/admin/blog">
            blog
        </x-link-nav>

    </div>
    <!-- end sidebar content -->

</div>
