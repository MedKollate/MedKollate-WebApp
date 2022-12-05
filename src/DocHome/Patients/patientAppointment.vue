<template>
  <div class="flex bg-[#99DDFF] mx-5 px-5 py-5 rounded-[8px] items-center max-[768px]:w-[212px] max-[768px]:h-[125px]">
    <div class="mx-2" >
        <Icon icon="fluent:people-community-16-regular" class="border-4 border-[#09364C] rounded-full text-[72px] p-1"/>
    </div>
 
    <div class="text-center mx-2">
        <p class="font-semibold text-[20px] max-[768px]:text-[6.21px]"> Today's Appointment </p>
        <p class="font-bold text-[24px] max-[768px]:text-[8.21px]"> 100+ </p>
    </div>
  </div>
</template>

<script>
import { Icon } from '@iconify/vue';
export default {
    name:'patientAppointment',
	components: {
		Icon,
	},
};
</script>

<style>

</style>