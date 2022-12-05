<template>
  <div class="text-[20px] h-screen">
    <div class="grid lg:grid-cols-2 min-[320px]:grid-cols-1 ">
      <Icon
        icon="iconoir:profile-circled"
        class="lg:text-[124px] min-[320px]:text-[85px] text-[#455A64] lg:place-self-start min-[320px]:place-self-center"
      />

      <img
        src="images/medkollate-logo.png"
        alt="pix"
        class="h-[119px] w-[321px] lg:place-self-start min-[320px]:place-self-center lg:block min-[320px]:hidden"
      />
    </div>

    <div class="text-white leading-10 grid lg:grid-cols-2 min-[320px]:grid-cols-1 lg:place-self-start min-[320px]:place-self-center text-[17.71px]">
      <p>Name &nbsp; &nbsp;Bello &nbsp; Ajadi-Bawa</p>
 
      <p>Phone Number &nbsp; &nbsp; 0801232122</p>

      <p>Email: BelloAjadiBawa@mail.com</p>

      <p>Date of Birth: 19/05/1982</p>

      <div>
        <p>About</p>
        <p class="text-[#707070] bg-white rounded-[8px] p-[2px]">
          Senior Doctor with 5 years experience in Human anatomy and Surgery...
        </p>
      </div>

      <div>
        <p>Height: 5Ft 5 in</p>
        <p>Weight: 65kg</p>
      </div>

      <p>Emergency Contact &nbsp; 082223494</p>
      <p></p>

      <p>
        MBBS University of Lagos <br />
        Fellow Lagos State University <br />
        National Postgraduate College of Medicine <br />
        West African College of Medicine
      </p>

      <p>
        Junior Lecturer,<br />
        Austin Nasir College of Medicine, Lakowe, Lagos State
      </p>
    </div>

    <div class="flex lg:justify-evenly min-[320px]:justify-between gap-2 my-10">
      <router-link to="/EditProfile">
        <button
          class="
            bg-transparent
            text-[#0D5072] text-[24px]
            px-[30px]
            py-[5px]
            border border-[#0D5072]
            rounded-[8px]
            lg:w-[170px]
            h-[50px]
            min-[320px]:w-[147px]
          "
        >
          Edit
        </button>
      </router-link>

      <button
        class="
          bg-[#092C4C]
          text-white text-[24px]
          px-[30px]
          py-[5px]
          rounded-[8px]
          lg:w-[170px]
          h-[50px]
          min-[320px]:w-[147px]
        "
      >
        Save
      </button>
    </div>
  </div>
</template>

<script>
import { Icon } from "@iconify/vue";
export default {
  name: "Profilepage1col",
  components: {
    Icon,
  },
};
</script>

<style>
</style>