<script setup>
import { onMounted } from "vue";
import { useProductStore } from "../stores/ProductStore.js";

const productStore = useProductStore();
const props = defineProps({
  id : {
    required : true,
    type : String
  }
})


onMounted( async ()=>{
  await productStore.getProduct(props.id)
});



</script>
<template>
  <section class="bg-white">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <div
          class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            Edit Product
          </h1>
          <form @submit.prevent="productStore.updateProduct(props.id)" class="space-y-4 md:space-y-6">
            <div>
              <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                Name</label>
              <input v-model="productStore.product.name" type="text" name="name" id="name"
                     class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                     placeholder="Fruit" required>
              <p v-if="productStore.errors.name" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                  class="font-medium">{{ productStore.errors.name[0] }}</span></p>
            </div>
            <div>

              <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                Description</label>
              <textarea v-model="productStore.product.description" id="description" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Mango" required></textarea>
              <p v-if="productStore.errors.description" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                  class="font-medium">{{ productStore.errors.description[0] }}</span></p>
            </div>
            <button type="submit"
                    class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
              Edit Product
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
</template>
