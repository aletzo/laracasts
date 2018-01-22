<template>
<div class="box is-info">
    <p>
        <slot></slot>
    </p>
</div>
</template>

<script>
export default {
  name: 'message',
  data () {
    return {
    }
  }
}
</script>

<style>
.box {
    background: #ddd;
    color: #555;
    margin: 1em;
    padding: 1em;
}
</style>
