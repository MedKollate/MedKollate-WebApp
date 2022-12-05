<template>
  <div>
    <div class="grid lg:grid-cols-2 min-[320px]:grid-cols-1">
      <div class="w-[135px] ">
        <div class="bg-white min-[320px]:place-self-center">
          <Icon
            icon="iconoir:profile-circled"
            class="md:place-self-end min-[320px]:place-self-center text-[103px] text-[#455A64] mx-auto"
          />
        </div>
        <p class="text-white text-center">Upload picture</p>
      </div>
      <img
        src="images/medkollate-logo.png"
        alt="pix"
        class="md:place-self-end min-[320px]:place-self-center min-[320px]:hidden lg:block"
      />
    </div>

    <div>
      <form
        action=""
        method="get"
        class="
          grid
          lg:grid-cols-2
          min-[320px]:grid-cols-1 min-[320px]:place-self-center
          lg:gap-7
        "
      >
        <div>
          <label for="fullname">Full name</label><br />
          <input
            type="text"
            id="fullname"
            placeholder="Ademola Saraki Chukwu"
            class="h-[50px] w-[416px] outline-none px-5 min-[320px]:w-[294px]"
          />
        </div>

        <div>
          <label for="phonenumber">Phone number</label><br />
          <input
            type="text"
            id="phonenumber"
            placeholder="enter number here"
            class="h-[50px] w-[416px] outline-none px-5 min-[320px]:w-[294px]"
          />
        </div>

        <div>
          <label for="fullname">Email address</label><br />
          <input
            type="text"
            id="fullname"
            placeholder="example@gmail.com"
            class="h-[50px] w-[416px] outline-none px-5 min-[320px]:w-[294px]"
          />
        </div>
        <div>
          <label for="phonenumber">Date of Birth</label><br />
          <input
            type="text"
            id="phonenumber"
            placeholder="dd/mm/yyyy"
            class="h-[50px] w-[416px] outline-none px-5 min-[320px]:w-[294px]"
          />
        </div>

        <div>
          <label for="fullname">About</label><br />
          <input
            type="text"
            id="fullname"
            placeholder="example@gmail.com"
            class="h-[107px] w-[416px] outline-none px-5 min-[320px]:w-[294px]"
          />
        </div>
        <div>
          <div>
            <label for="phonenumber">Weight(kg)</label><br />
            <input
              type="text"
              id="phonenumber"
              placeholder="kg"
              class="h-[50px] w-[416px] outline-none px-5 min-[320px]:w-[294px]"
            />
          </div>

          <div>
            <label for="phonenumber">Height(M/ft)</label><br />
            <input
              type="text"
              id="phonenumber"
              placeholder="M/ft"
              class="h-[50px] w-[416px] outline-none px-5 min-[320px]:w-[294px]"
            />
          </div>
        </div>

        <div>
          <label for="fullname">Emergency Contact</label><br />
          <input
            type="text"
            id="fullname"
            placeholder="example@gmail.com"
            class="h-[50px] w-[416px] outline-none px-5 min-[320px]:w-[294px]"
          />
        </div>

        <div></div>

        <div>
          <label for="phonenumber">Affliations and others</label><br />
          <input
            type="text"
            id="phonenumber"
            placeholder="other things about you"
            class="h-[107px] w-[416px] outline-none px-5 min-[320px]:w-[294px]"
          />
        </div>
        <div class="md:place-self-end min-[320px]:mx-auto min-[320px]:pt-3">
          <button class="bg-[#092C4C] w-[208px] h-[55px] text-white">
            Save
          </button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import { Icon } from "@iconify/vue";
export default {
  name: "EditProfilecol",
  components: {
    Icon,
  },
};
</script>

<style>
</style>