<template>
<div>
    <h1>I count: {{count}}</h1>

    <button @click="count +=20">Incrementa</button>
</div>
</template>

<script>
export default {
  name: 'counter',
  data () {
    return {
        count: 0
    }
  }
}
</script>

<style>
</style>
