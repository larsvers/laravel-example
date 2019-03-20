<template>
  <div>
    <div>Here are all the {{ this.films.length }} film names</div>
    <ul>
      <li v-for="(film, index) in films" :key="index">{{ film.title }}</li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'ExampleComponent',
  props: ['films'],
  mounted() {
    console.log('hello');
  },
};
</script>

<style>
</style>
