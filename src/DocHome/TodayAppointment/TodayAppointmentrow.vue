<template>
  <div class="flex lg:flex-row max-[768px]:flex-col mx-auto justify-between px-5">
    <TodayAppointmentVue class="max-[768px]:mb-3"/>
    <NextpatientVue/>
  </div>
</template>

<script>
import TodayAppointmentVue from './TodayAppointment.vue';
import NextpatientVue from './Nextpatient.vue';
export default {
name:'TodayAppointmentrow',
components:{
    TodayAppointmentVue,
    NextpatientVue
}
}
</script>

<style>

</style>