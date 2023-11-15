<script setup>
const props = defineProps(['products']);

</script>
<template>
  <table class="outline-0 focus:ring-0  focus:outline-none border-transparent focus:border-transparent focus:ring-0 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="outline-0 focus:ring-0  focus:outline-none  border-transparent focus:border-transparent focus:ring-0 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
    <tr>
      <th scope="col" class="px-6 py-3">
        Product name
      </th>
      <th scope="col" class="px-6 py-3">
        Product Description
      </th>
      <th scope="col" class="px-6 py-3">
        Action
      </th>
    </tr>
    </thead>
    <tbody>
    <tr v-for="product in props.products" :key="product.id"
        class="outline-0 focus:ring-0  focus:outline-none border-transparent focus:border-transparent focus:ring-0 odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
      <th scope="row" class="outline-0 px-6 py-4 border-transparent focus:border-transparent focus:ring-0 font-medium text-gray-900 whitespace-nowrap dark:text-white">
        {{ product.name }}
      </th>
      <td class="px-6 py-4 focus:ring-0  focus:outline-none">
        {{ product.description }}
      </td>
      <td class="px-6 py-4 outline-0 focus:ring-0  focus:outline-none">
        <RouterLink :to="`/products/edit/${product.id}`" type="button"
                    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-1 me-2 mb-2 dark:focus:ring-yellow-900">
          Edit
        </RouterLink>
        <button @click="$emit('delete',product.id)" type="button"
                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-1 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
          Delete
        </button>
      </td>
    </tr>
    </tbody>
  </table>

</template>