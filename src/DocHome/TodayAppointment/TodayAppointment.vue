<template>
  <div class="bg-[#D9D9D9] w-[350px] rounded-[8px] px-[10px] max-[768px]:h-[263px] max-[768px]:w-[213px]">
    <p class="text-[#407BFF] max-[768px]:text-[10.68px]">Today's Appointment</p>
    <div class="flex justify-between">
      <p class="max-[768px]:text-[10.68px]">Patient</p>
      <p class="max-[768px]:text-[10.68px]">Time</p>
    </div>
    <div class="flex justify-between items-center py-3">
      <div class="border-2 border-[#1AA1E5] rounded-full px-2 w-[60px] max-[768px]:w-[50px] max-[768px]:h-[50px]">
        <img src="images/female.png" alt="image" class="p-1"/>
      </div>
      <p class="text-[#407BFF] max-[768px]:text-[10.68px]">AZ Adele</p>
      <p>15:30</p>
    </div>
    <div class="flex justify-between items-center py-3">
      <div class="border-2 border-[#1AA1E5] rounded-full px-2 w-[60px] max-[768px]:w-[50px] max-[768px]:h-[50px]">
        <img src="images/male.png" alt="image" class="p-1"/>
      </div>
      <p class="text-[#407BFF] max-[768px]:text-[10.68px]">Fabian Mike</p>
      <p class="max-[768px]:text-[10.68px]">14:15</p>
    </div>
    <div class="flex justify-between items-center py-3">
      <div class="border-2 border-[#1AA1E5] rounded-full px-2 w-[60px] max-[768px]:w-[50px] max-[768px]:h-[50px]">
        <img src="images/africanfemale.png" alt="image" class="p-1"/>
      </div>
      <p class="text-[#407BFF] max-[768px]:text-[10.68px]">Mary Toheeb</p>
      <p>11:14</p>
    </div>
  </div>
</template>

<script>
export default {
    name:'TodayAppointment'
};
</script>

<style>
</style>