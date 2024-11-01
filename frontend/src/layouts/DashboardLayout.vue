<template lang="">
    <div class="flex dark:bg-gray-950 min-h-screen dark:text-white bg-gray-100 text-black p-5">
        <div class="w-[15%]"> <DashboardSidebar /> </div>
        <div class="px-5 w-full">
            <header class="flex justify-between dark:bg-gray-900 bg-gray-50 rounded-md py-5 px-5">
              <div><h2 class="text-3xl font-bold">Event Ticket</h2></div>  
              <div class="w-full max-w-sm min-w-[200px]">
                <div class="relative">
                    <input
                    class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md pl-3 pr-28 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                    placeholder="UI Kits, Dashboards..." 
                    />
                    <button
                    class="absolute top-1 right-1 flex items-center rounded bg-slate-800 dark:bg-slate-100 dark:text-gray-900 font-medium hover:dark:bg-slate-200 py-1 px-2.5 border border-transparent text-center text-sm text-white transition-all shadow-sm hover:shadow focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                        <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
                    </svg>
                
                    Search
                    </button> 
                </div>
            </div>
            </header>

            <div> <RouterView /> </div>
        </div>
    </div>
</template>
<script setup>
import { defineComponent } from 'vue';
import DashboardSidebar from '@/components/dashboard/DashboardSidebar.vue';

defineComponent({
    components: {
        DashboardSidebar
    }
});
</script>
<style lang="">

</style>
