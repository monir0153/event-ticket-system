<template lang="">
    <div>
        <header> this header </header>
    </div>
    <div class="flex">
        <div class="w-[30%]"> <DashboardSidebar /> </div>
        <div> <RouterView /> </div>
    </div>
</template>
<script setup>
import { defineComponent } from 'vue';
import DashboardSidebar from '@/components/DashboardSidebar.vue';

defineComponent({
    components: {
        DashboardSidebar
    }
});
</script>
<style lang="">

</style>
