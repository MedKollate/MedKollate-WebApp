<template>
  <div class="flex lg:flex-row max-[768px]:flex-col">
    <patientSeenVue class="max-[768px]:mb-3"/>
    <patientAppointmentVue class="max-[768px]:mb-3"/>
    <patientTotalAppointmentVue/>
  </div>
</template>

<script>
import patientAppointmentVue from './patientAppointment.vue';
import patientSeenVue from './patientSeen.vue';
import patientTotalAppointmentVue from './patientTotalAppointment.vue';

export default {
name:'PatientsRow',
components:{
    patientAppointmentVue,
    patientSeenVue,
    patientTotalAppointmentVue
}
}
</script>

<style>

</style>