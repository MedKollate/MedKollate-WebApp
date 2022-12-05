<template>
  <div class="bg-[#43A996] min-h-screen h-[1024px] flex justify-center pt-10  max-[768px]:h-full">
    <div class="mr-10 lg:block min-[320px]:hidden">
      <SideMenuVue />
    </div>

    <div class="ml-10">
      <div>
        <div>
          <img
            src="images/plant.png"
            alt="plant"
            class="
              z-0
              absolute
              h-[575px]
              w-[375px]
              opacity-60
              min-[320px]:h-[
              565.15px]
              min-[320px]:w-[353.75px]
            "
          />
        </div>
        <div class="flex lg:justify-end min-[320px]:justify-center">
          <div class="grid grid-cols-1 place-items-center">
            <img
              src="images/medkollate-logo.png"
              alt="medkollate"
              class="
                min[320px]:place-self-center
                min-[320px]:w-[254px] min-[320px]:h-[94.16px]
              "
            />

            <img
              src="images/ioader.png"
              alt="ioader"
              class="lg:block min-[320px]:hidden"
            />
          </div>
        </div>
      </div>
      <br /><br />

      <div class="text-[28px] text-white my-auto font-bold text-center">
        <p>Hey Dr Bello</p>
        <p>we are currently working on this to serve you better</p>
      </div>
      <br /><br /><br /><br /><br />
      <router-link to="/">
        <div class="grid grid-cols-1 lg:justify-items-end min-[320px]-justify-items-center">
          <p class="text-[28px] text-[#092C4C] font-bold ">
            Go back to Dashboard
          </p>
        </div>
      </router-link>
    </div>
  </div>
</template>

<script>
import SideMenuVue from "@/Components/SideMenu.vue";
export default {
  name: "Settings",
  components: {
    SideMenuVue,
  },
};
</script>

<style>
</style>