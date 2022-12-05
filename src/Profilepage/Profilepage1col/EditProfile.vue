<template>
  <div class="bg-[#43A996] min-h-screen h-[1024px] flex justify-center pt-10">
    <div class="mr-10 lg:block min-[320px]:hidden">
      <SideMenuVue/>  
    </div>
    <div class="ml-10">
        <EditProfilecol/>
    </div>
  </div>
</template>

<script>
import SideMenuVue from '@/Components/SideMenu.vue';
import EditProfilecol from './EditProfilecol.vue'
export default {
name:'EditProfile',
components:{
SideMenuVue,
EditProfilecol
}
}
</script>

<style>

</style>