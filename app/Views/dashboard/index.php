<!-- Navbar -->

<!-- Main content -->
<main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
  <!-- Main content header -->
  <div class="flex flex-col items-start justify-between pb-6 space-y-4  lg:items-center lg:space-y-0 lg:flex-row">
    <h1 class="text-2xl font-semibold whitespace-nowrap">Dashboard</h1>
  </div>

  <!-- Start Content -->
  <div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4">
    <template x-for="i in 2" :key="i">
      <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
        <div class="flex items-start justify-between">
          <div class="flex flex-col space-y-2">
            <span class="text-gray-400">Total Users</span>
            <span class="text-lg font-semibold">100,221</span>
          </div>
          <div class="p-10 bg-gray-200 rounded-md"></div>
        </div>
        <div>
          <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
          <span>from 2019</span>
        </div>
      </div>
    </template>
  </div>


</main>
<!-- Main footer -->
</div>