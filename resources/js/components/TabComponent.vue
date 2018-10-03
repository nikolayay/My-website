<template>
    <div class="container" v-show="isActive">
        <slot></slot>
    </div>
</template>

<script>
export default {

  name: 'TabComponent',

  props: {

    name: {required: true },
    selected: {default: false}

  },

  data() {
    return {

        isActive: false

    }
  },

  mounted() {
    
        this.isActive = this.selected;
    
  }
}
</script>

<style lang="css" scoped>
</style>