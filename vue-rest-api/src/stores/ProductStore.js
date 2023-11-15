import {defineStore} from "pinia";
import axios from "axios";
import router from "../router";


export const useProductStore = defineStore("product", {
    state: () => ({
        errors: {},
        product: '',
        products: [],
    }),
    getters: {},
    actions: {
        async getProduct(id) {
            const response = await axios.get(`/products/${id}`);
            this.product = response.data;
        },
        async getProducts() {
            const response = await axios.get(`/products`);
            this.products = response.data;
        },
        async addProduct(data) {
            try {
                await axios.post('/products', data).then((res) => {
                    router.push({name: "home"});
                });
            } catch (error) {
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors
                    console.log(this.error);
                }
            }

        },
        async updateProduct(id) {
            try {
                await axios.put(`/products/${id}`, this.product).then((res) => {
                    router.push({name: "home"})
                });
            } catch (error) {
                console.log(this.error);
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors
                }
            }
        },
        async deleteProduct(id) {
            if (!window.confirm("Are you Sure ?")) {
                return;
            }
            await axios.delete(`/products/${id}`);
            await this.getProducts();
        },
    },
});