<template>
   <div class="bg-[#D9D9D9] w-[350px] rounded-[8px] px-[10px] max-[768px]:h-[263px] max-[768px]:w-[213px]">
    <p class="text-[#407BFF] max-[768px]:text-[10.64px]">Next Patient's details</p>

    <div class="flex items-center">
      <div class="border-2 border-[#1AA1E5] rounded-full">
        <img src="images/female.png" alt="images" class="max-[768px]:h-[49px] max-[768px]:w-[31px] p-1"/>
      </div>
      <p class="max-[768px]:text-[10.64px]">A Z Adele</p>
    </div>

    <div class="flex justify-between text-center">
      <div>
        <p class="max-[768px]:text-[10.64px]">D.0.B</p>
        <p class="max-[768px]:text-[8.27px]">5th Aug 2003</p>
      </div>

      <div>
        <p class="max-[768px]:text-[10.64px]">Sex</p>
        <p class="max-[768px]:text-[8.27px]">Female</p>
      </div>

      <div>
        <p class="max-[768px]:text-[10.64px]">Weight</p>
        <p class="max-[768px]:text-[8.27px]">55kg</p>
      </div>

    </div><br/>

    <div class="flex justify-between text-center">
      <div class="text-center">
        <p class="max-[768px]:text-[10.64px]">
          Last <br />
          Appointment
        </p>
        <p class="max-[768px]:text-[8.27px]">4th June 2022</p>
      </div>
      <div class="text-center">
        <p class="max-[768px]:text-[10.64px]">Height</p>
        <p class="max-[768px]:text-[8.27px]">1.38m</p>
      </div>

      <div class="text-center">
        <p class="max-[768px]:text-[10.64px]">Genotype</p>
        <p class="max-[768px]:text-[8.27px]">AA</p>
      </div>
    </div><br/>
    <p class="max-[768px]:text-[10.64px] text-[#407BFF]">Patient's History</p>
  </div>
</template>

<script>
export default {
    name:'Nextpatient'
};
</script>

<style>
</style>