<template>
  <div class="bg-[#43A996] min-h-screen justify-evenly flex pt-10  max-[768px]:h-full">
    <div class="mr-10 lg:block min-[320px]:hidden">
      <SideMenuVue />
    </div>

    <div>
      <div class="grid grid-rows-1">
        <div
          class="lg:place-self-end min-[320px]:place-self-center grid-cols-1"
        >
          <img
            src="images/medkollate-logo.png"
            alt="medkollate-logo"
            class="min-[320px]:w-[254px] min-[320px]:h-[94.16px]"
          />
        </div>
      </div>
      <br /><br /><br /><br />

      <div class="grid grid-rows-1 grid-cols-1">
        <p
          class="
            lg:text-[32px]
            text-white text-center
            min-[320px]:text-[18.81px]
          "
        >
          Are you sure you want to log out
        </p>
        <br />
        <div class="flex justify-between gap-2">
          <button
            class="
              bg-[#DD3E27]
              lg:w-[200px] lg:h-[44px]
              rounded-[8px]
              lg:text-[24px]
              text-white
              min-[320px]:w-[147.09px] min-[320px]:text-[17.65px]
            "
          >
            Log Out
          </button>
          <button
            class="
              bg-[#276B58]
              lg:w-[200px] lg:h-[44px]
              rounded-[8px]
              lg:text-[24px]
              text-white
              min-[320px]:w-[147.09px] min-[320px]:text-[17.65px]
            "
          >
            Continue
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import SideMenuVue from "@/Components/SideMenu.vue";
export default {
  name: "Logout",
  components: {
    SideMenuVue,
  },
};
</script>

<style>
</style>