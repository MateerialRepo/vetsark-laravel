<template>
  <svg
    class="fill-current"
    :class="[width, height]"
    viewBox="0 0 32 59"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
  >
    <circle opacity="0.1" cx="2.5" cy="29.5" r="29.5" fill="white" />
  </svg>
</template>

<script>
export default {
  props: {
    width: {
      type: String,
      default: "w-14",
    },
    height: {
      type: String,
      default: "h-14",
    },
  },
};
</script>

<style>
</style>