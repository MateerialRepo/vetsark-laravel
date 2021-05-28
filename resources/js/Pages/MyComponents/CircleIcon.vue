<template>
  <svg
    class="fill-current"
    :class="[width, height]"
    viewBox="0 0 234 152"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
  >
    <circle opacity="0.4" cx="117" cy="35" r="117" fill="black" />
  </svg>
</template>

<script>
export default {
  props: {
    width: {
      type: String,
      default: "w-56",
    },
    height: {
      type: String,
      default: "h-56",
    },
  },
};
</script>

<style>
</style>