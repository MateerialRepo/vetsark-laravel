<template>
  <svg
    class="fill-current"
    :class="[width, height]"
    viewBox="0 0 69 69"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
  >
    <circle cx="34.5" cy="34.5" r="34.5" fill="#58677E" />
  </svg>
</template>

<script>
export default {
  props: {
    width: {
      type: String,
      default: "w-16",
    },
    height: {
      type: String,
      default: "h-16",
    },
  },
};
</script>

<style>
</style>