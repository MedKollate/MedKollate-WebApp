<template>
  <div>
    <div class="nav-menu">
      <Icon
        class="icon-menu"
        icon="material-symbols:menu"
        @click="showMenu()"
      />
      <div
        class="nav-content"
        :class="this.showMobileMenu ? 'open-menu' : 'closed-menu'"
      >
        <ul class="nav-items">
          <router-link to="/"> Dashboard </router-link><br/>
          <router-link to="/Profilepage">Profile</router-link><br/>
          <router-link to="/Settings"> Settings </router-link><br/>
          <li>Patients Data</li><br/>
          <router-link to="/Logout">Logout</router-link>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
import { Icon } from "@iconify/vue";
export default {
  name: "Menubar",
  components: {
    Icon,
  },
  data() {
    return {
      showMobileMenu: false,
    };
  },
  methods: {
    showMenu() {
      this.showMobileMenu = !this.showMobileMenu;
    },
  },
};
</script>


<style scoped>
.nav-menu {
  display: none;
}
.nav-content {
  display: flex;
  justify-content: space-between;
  padding: 10px 30px;
  align-items: center;
}
.nav-items {
  display: flex;
  justify-content: center;
  align-items: center;
  list-style: none;
  margin: 0;
  padding: 0;
  background-color: white;
  width: 100%;
  height: 1020px;
  padding: 20px;
}
li {
  padding: 0 30px;
}
.icon-menu {
  display: none;
}

@media screen and (max-width: 768px) {
  .nav-menu {
    padding-top: 10px;
    position: absolute;
    left: 0;
    width: 100%;
    display: block;
  }
  .open-menu {
    opacity: 1;
    height: 200px;
  }
  .closed-menu {
    opacity: 0;
    height: 0;
    padding: 0;
  }
  .nav-content {
    flex-direction: column;
    z-index: 100;
    position: relative;
    transition: all 0.2s ease-out;
  }
  .nav-items {
    flex-direction: column;
  }
  .icon-menu {
    display: block;
    text-align: right;
    padding: 0 10px 10px 0;
    font-size: 24px;
  }
}
</style>