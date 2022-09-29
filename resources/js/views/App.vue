<template>
 <section>
     <Header/>
    <h1>
      ciao
    </h1>
    <MainComponent/>
    <router-view></router-view>
 </section>
</template>

<script>
import MainComponent from '../components/Main.vue';
import Header from '../components/Header.vue';

export default {
     components:{
        MainComponent,
        Header,
     }
};
</script>

<style>

</style>