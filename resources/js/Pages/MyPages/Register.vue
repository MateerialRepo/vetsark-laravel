<template>
  <div class="flex">
    <left-index :height="height"></left-index>
    <div class="bg-vet-ash w-1/2" :style="{ 'height': height + 'px' }">
      <div class="bg-white pl-20 pr-36">
        <div class="pt-28 text-4xl font-semibold text-gray-600">
          Welcome to <span class="text-vet-blue">Vetsark</span>
        </div>
        <div class="pt-8 text-lg text-gray-600">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore.
        </div>
        <div class="pt-10">
          <div class="w-36 h-2 bg-vet-blue inline-block mr-6"></div>
          <div class="w-36 h-2 bg-gray-400 inline-block"></div>
        </div>

        <div class="py-8">
          <form @submit.prevent="submit" class="text-lg text-gray-600">

              <div class="w-full">
              <input
                type="text"
                class="border-b border-0 border-vet-blue px-0 py-2 w-full"
                placeholder="Your Full Name"
                name="name"
                v-model="name"
              />
            </div>

            <div class="w-full pt-8 relative">
              <div class="text-sm text-vet-blue -mt-5" v-if="email != ''">
                Email
              </div>
              <input
                type="email"
                class="border-b border-0 border-vet-blue px-0 py-2 w-full"
                placeholder="Email"
                name="email"
                v-model="email"
              />
            </div>

            <div class="w-full pt-8 relative">
              <div class="text-sm text-vet-blue -mt-5" v-if="password != ''">
                Password
              </div>
              <input
                :type="show_password ? 'text' : 'password'"
                class="border-b border-0 border-vet-blue px-0 py-2 w-full"
                placeholder="Password"
                name="password"
                v-model="password"
              />
              <div
                class="absolute right-3 -mt-8 cursor-pointer"
                @click="show_password = !show_password"
              >
                <eye-icon></eye-icon>
              </div>
            </div>

            <div class="w-full pt-8 relative">
              <input
                :type="show_password ? 'text' : 'password'"
                class="border-b border-0 border-vet-blue px-0 py-2 w-full"
                placeholder="Confirm Password"
                name="password_confirmation"
                v-model="password_confirmation"
              />
            </div>

            <div class="pt-14 w-1/2 inline-block">
              <input
                type="submit"
                value="Register"
                class="bg-btn-blue hover:bg-blue-200 shadow-md text-vet-blue text-lg rounded-md cursor-pointer px-16 py-4"
              />
            </div>
            <div class="text-vet-blue text-right text-lg w-1/2 inline-block">
                <a href="/" class="underline text-sm text-gray-600 hover:text-gray-900">
                    Already registered?
                </a>
            </div>
          </form>
        </div>
      </div>
      <div class="pt-16 bg-vet-ash">
        <div class="w-1/3 mx-auto">
          <google-sign-in></google-sign-in>
        </div>
        <div class="text-lg text-center pt-4 text-gray-600">
          <!-- Don’t have an account? <a href="register"><span class="text-vet-blue">Create One</span></a> -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import EyeIcon from "../MyComponents/EyeIcon.vue";
import GoogleSignIn from "../MyComponents/GoogleSignIn.vue";
import LeftIndex from "./LeftIndex.vue";
export default {
  components: { LeftIndex, EyeIcon, GoogleSignIn },

  data() {
    return {
      name: "",
      email: "",
      password: "",
      password_confirmation: "",
      show_password: false,
      height: this.getScreenHeight(),
    };
  },

  methods: {
    submit() {
        this.form.post(this.route('registerUser'), {
            onFinish: () => this.form.reset('password', 'password_confirmation'),
        })
    },

    getScreenHeight() {
      return screen.height;
    },
  },
};
</script>

<style>
[type="text"]:focus,
[type="email"]:focus,
[type="url"]:focus,
[type="password"]:focus,
[type="number"]:focus,
[type="date"]:focus,
[type="datetime-local"]:focus,
[type="month"]:focus,
[type="search"]:focus,
[type="tel"]:focus,
[type="time"]:focus,
[type="week"]:focus,
[multiple]:focus,
textarea:focus,
select:focus {
  box-shadow: none;
}
</style>