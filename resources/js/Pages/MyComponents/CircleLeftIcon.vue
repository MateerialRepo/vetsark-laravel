<template>
  <svg
    class="fill-current"
    :class="[width, height]"
    viewBox="0 0 169 234"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
  >
    <circle opacity="0.4" cx="52" cy="117" r="117" fill="black" />
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