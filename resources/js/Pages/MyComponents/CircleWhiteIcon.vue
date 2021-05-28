<template>
  <svg
    class="fill-current"
    :class="[width, height]"
    viewBox="0 0 19 19"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
  >
    <circle r="9.5" transform="matrix(-1 0 0 1 9.5 9.5)" fill="white" />
  </svg>
</template>

<script>
export default {
  props: {
    width: {
      type: String,
      default: "w-5",
    },
    height: {
      type: String,
      default: "h-5",
    },
  },
};
</script>

<style>
</style>