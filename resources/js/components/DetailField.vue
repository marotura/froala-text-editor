<template>
  <PanelItem :index="index" :field="field">
    <template #value>
      <froalaView v-html:value="field.value"></froalaView>
    </template>
  </PanelItem>
</template>

<script>
export default {
  props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],
}
</script>