<template>
  <div class="bg-[#43A996] min-h-screen h-[1024px] flex justify-center p-10  max-[768px]:h-full">
    <div>
      <MenubarVue/>
    </div><br/>
    <div class="mr-10  max-[768px]:hidden">
      <SideMenuVue />
    </div>
    <div class="ml-10">
      <div class="flex justify-between max-[768px]:flex-col-reverse lg:flex-row">
        <div>
          <WelcomeVue />
        </div>
        <div class="grid grid-cols-1">
          <img
            src="images/medkollate-logo.png"
            alt="logo"
            class="
              lg:h-[111px] lg:w-[321px]
              max-[768px]:w-[
              176px]
              max-[768px]:h-[66px] max-[768px]:place-self-center
            "
          />
        </div>
      </div>

      <div>
        <PatientsRowVue />
      </div>

      <div class="my-8">
        <TodayAppointmentrowVue />
      </div>
    </div>
  </div>
</template>

<script>
import WelcomeVue from "./Welcome.vue";
import SideMenuVue from "@/Components/SideMenu.vue";
import PatientsRowVue from "./Patients/PatientsRow.vue";
import TodayAppointmentrowVue from "./TodayAppointment/TodayAppointmentrow.vue";
import MenubarVue from "@/Components/Menubar.vue";
export default {
  name: "DocHome",
  components: {
    SideMenuVue,
    WelcomeVue,
    PatientsRowVue,
    TodayAppointmentrowVue,
    MenubarVue
  },
};
</script>

<style>
</style>