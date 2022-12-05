<template>
  <div
    class="
      bg-[#17191C]
      w-[302px]
      h-[747px]
      py-5
      text-[#407BFF]
      grid
      justify-items-center
    "
    id="sidemenu"
  >
    <div class="text-center">
      <Icon icon="mdi:user-circle-outline" class="m-auto text-[124px]" />
      <p class="text-[20px]">Dr. Bello Ajadi Bawa</p>
      <p>Chief Registrar</p>
    </div>

    <div class="">
      <router-link to="/">
        <div class="flex py-2 items-center">
          <Icon icon="iwwa:dashboard" class="text-[20px]" />
          <p class="px-3 text-[20px]">Dashboard</p>
        </div>
      </router-link>

      <router-link to="/Profilepage">
        <div class="flex py-2 items-center">
          <Icon icon="gg:profile" class="text-[20px]" />
          <p class="px-3 text-[20px]">Profile</p>
        </div>
      </router-link>

      <router-link to="/Settings">
        <div class="flex py-2 items-center">
          <Icon icon="material-symbols:settings-outline" class="text-[20px]" />
          <p class="px-3 text-[20px]">Settings</p>
        </div>
      </router-link>

      <div class="flex py-2 items-center">
        <Icon icon="carbon:data-vis-4" class="text-[20px]" />
        <p class="px-3 text-[20px]">Patients Data</p>
      </div>

      <router-link to="/Logout">
        <div class="flex py-2 items-center">
          <Icon
            icon="ri:logout-circle-line"
            class="text-[20px] text-[#8C2821FA]"
          />
          <p class="px-3 text-[20px] text-[#8C2821FA]">Logout</p>
        </div>
      </router-link>
    </div>
  </div>
</template>

<script>
import { Icon } from "@iconify/vue";
export default {
  name: "SideMenu",
  components: {
    Icon,
  },
};
</script>

<style scoped>
#sidemenu {
  border-radius: 12px;
}
</style>