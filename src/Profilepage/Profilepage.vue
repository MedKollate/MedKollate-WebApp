<template>
  <div class="bg-[#43A996] min-h-screen h-[1024px] flex justify-center p-10  max-[768px]:h-full">
    <div class="mr-10 lg:block min-[320px]:hidden">
      <SideMenuVue />
    </div>
    <div class="ml-10">
      <Profilepage1colVue />
    </div>
  </div>
</template>

<script>
import SideMenuVue from "@/Components/SideMenu.vue";
import Profilepage1colVue from "./Profilepage1col/Profilepage1col.vue";

export default {
  name: "Profilepage",
  components: {
    SideMenuVue,
    Profilepage1colVue,
  },
};
</script>

<style>
</style>