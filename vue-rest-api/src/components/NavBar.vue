<script setup></script>
<template>
  <nav class="bg-gray-50 h-15 py-1  dark:bg-gray-700">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
      <div class="flex  items-center">
        <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-md">
          <li>
            <router-link to="/" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Products</router-link>
          </li>
          <li>
            <router-link to="/products/create" class="text-gray-900 dark:text-white hover:underline">Create Product</router-link>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>