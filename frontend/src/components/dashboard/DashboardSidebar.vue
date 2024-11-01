<template>
  <div class="px-3 py-8 dark:bg-gray-900 bg-gray-50 rounded-lg min-h-screen">
    <div class="flex flex-col gap-4">
      <router-link
        v-for="item in menuItems"
        :key="item.name"
        :to="item.route"
        class="px-4 py-2 rounded-lg font-medium text-gray-700 dark:text-gray-200 duration-300 hover:bg-blue-500 hover:text-white transition-colors"
        :class="{ 'bg-blue-500 text-white': activeRoute === item.route }"
        @click="setActive(item.route)"
      >
        {{ item.name }}
      </router-link>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';


    const activeRoute = ref('');
    const menuItems = ref([
      { name: 'Dashboard', route: '/dashboard' },
      { name: 'User', route: '/user' },
      { name: 'Events', route: '/events' },
      { name: 'Role', route: '/role' },
      { name: 'Setting', route: '/setting' },
    ]);

    const setActive = (route) => {
      activeRoute.value = route;
    };

</script>

<style scoped>
</style>
