<template>
  <div
    class="bg-bg-1 to-black from-bg-1 bg-gradient-to-b relative w-1/2"
    :style="{ height: height + 'px' }"
  >
    <div class="absolute right-0 -mt-9 mr-8">
      <circle-icon></circle-icon>
    </div>
    <div class="absolute mt-9 -ml-4">
      <circle-light-icon></circle-light-icon>
    </div>
    <div class="pt-16 pl-16 text-6xl text-gray-500 font-semibold">Next</div>
    <div class="pt-6 pl-16 text-6xl text-white font-semibold leading-16">
      Revolution <br />
      in Sales
    </div>
    <div class="pt-10 px-16">
      <div class="font-semibold text-vet-blue">
        <div class="inline-block pr-12">INVENTORY</div>
        <div class="inline-block pr-12">ORDER TRACKING</div>
        <div class="inline-block pr-12">DEBT MANAGEMENT</div>
      </div>
    </div>
    <div class="absolute mt-12 left-1/3">
      <circle-small-icon></circle-small-icon>
    </div>
    <div class="absolute -ml-10 mt-32">
      <circle-left-icon></circle-left-icon>
    </div>
    <div class="absolute right-1/4 top-3/4 -mt-10 -mr-6">
      <circle-small-icon :width="'w-5'" :height="'h-5'"></circle-small-icon>
    </div>
    <div class="absolute right-1/4 top-3/4 -mt-36 -mr-8">
      <circle-ash-icon :width="'w-4'" :height="'h-4'"></circle-ash-icon>
    </div>
    <div class="absolute right-1/4 top-3/4 -mt-24 -mr-16">
      <circle-green-icon></circle-green-icon>
    </div>
    <div class="absolute right-1/4 top-3/4 -mt-28 -mr-28">
      <circle-white-icon></circle-white-icon>
    </div>
    <div class="absolute right-1/4 top-3/4">
      <circle-ash-icon></circle-ash-icon>
    </div>
    <div class="absolute bottom-16 left-16">
      <logo></logo>
    </div>
  </div>
</template>

<script>
import CircleAshIcon from "../MyComponents/CircleAshIcon.vue";
import CircleGreenIcon from "../MyComponents/CircleGreenIcon.vue";
import CircleIcon from "../MyComponents/CircleIcon.vue";
import CircleLeftIcon from "../MyComponents/CircleLeftIcon.vue";
import CircleLightIcon from "../MyComponents/CircleLightIcon.vue";
import CircleSmallIcon from "../MyComponents/CircleSmallIcon.vue";
import CircleWhiteIcon from "../MyComponents/CircleWhiteIcon.vue";
import Logo from "../MyComponents/Logo.vue";

export default {
  components: {
    CircleIcon,
    CircleLightIcon,
    CircleLeftIcon,
    CircleSmallIcon,
    Logo,
    CircleAshIcon,
    CircleGreenIcon,
    CircleWhiteIcon,
  },
  props: {
    height: Number,
  },
};
</script>

<style>
</style>