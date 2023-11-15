<script setup>
import {onMounted} from "vue";
import {useProductStore} from "../stores/ProductStore.js";
import DisplayTable from "../components/DisplayTable.vue";

const productStore = useProductStore();

onMounted(async () => {
  await productStore.getProducts();
});

</script>


<template>
  <div class="container md:max-w-2xl  md:mx-auto">
    <div class="relative overflow-x-auto mt-5 shadow-md sm:rounded-lg">
      <DisplayTable :products="productStore.products" @delete="(id) => productStore.deleteProduct(id)"/>
    </div>
  </div>

</template>