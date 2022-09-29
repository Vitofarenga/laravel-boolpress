<template>
  <div class="card">
     <h4 class="card-title">
        {{ post.title }}
     </h4>
     <h6 class="card-subtitle">
        {{ post.user.name }} | {{ post.post_date }}
     </h6>
     <p class="card-text">
        {{ post.post_content.substring(0, 150) }}
     </p>
     <span>
      ciao
     </span>
  </div>
</template>

<script>
export default {
     props:['post'],

}
</script>

<style>

</style>