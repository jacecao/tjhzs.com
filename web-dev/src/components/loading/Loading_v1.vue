<template>
  <div class="loading_v1"></div>
</template>

<script>
export default {}
</script>

<style scoped>
  .loading_v1 {
    width: 100%;
    height: 100%;
    background: #a1b042 linear-gradient(to right, transparent, rgba(255, 199, 0, 0.8) 0%, rgba(39, 226, 233, 0.85) 100%, transparent);
    background-size: 200% 100%;
    background-position: 100% 0;
    animation: bgflash 2s linear infinite alternate;
  }
  @keyframes bgflash {
    0% {
      background-position:100% 0;
    }
    100% {
      background-position: 0 0;
    }
  }
</style>
