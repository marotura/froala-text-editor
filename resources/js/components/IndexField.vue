<template>
  <span><froalaView v-html:value="field.value"></froalaView></span>
</template>

<script>
export default {
  props: ['resourceName', 'field'],

  computed: {
    fieldValue() {
      return this.field.displayedAs || this.field.value
    },
  }
}
</script>
<style scoped>
.dark .fr-view {
    color: #94a1b4; /* slate-300, for dark mode */
    background-color: #1e293b;
}

.dark .fr-view p,
.dark .fr-view h1,
.dark .fr-view h2,
.dark .fr-view h3,
.dark .fr-view h4,
.dark .fr-view h5 {
    color: #94a1b4; /* slate-200, for dark mode */
}

.dark .fr-view a {
    color: #60a5fa;
    cursor: pointer;
    text-decoration: underline;
}

.dark .fr-view a:visited {
    color: #c084fc;
}

.dark .fr-view a:hover {
    color: #f87171;
}
</style>