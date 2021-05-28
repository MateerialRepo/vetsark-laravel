<template>
  <svg
    class="fill-current"
    :class="[width, height]"
    viewBox="0 0 32 32"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
  >
    <circle cx="16" cy="16" r="16" fill="#4385F5" />
  </svg>
</template>

<script>
export default {
  props: {
    width: {
      type: String,
      default: "w-8",
    },
    height: {
      type: String,
      default: "h-8",
    },
  },
};
</script>

<style>
</style>