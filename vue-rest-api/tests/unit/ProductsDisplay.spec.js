import { shallowMount } from '@vue/test-utils'
import DisplayTable from '../../src/components/DisplayTable.vue'

describe('DisplayTable.vue', () => {
    it('renders a table for products', () => {
        const wrapper = shallowMount(DisplayTable);
        expect(wrapper.text()).toContain('Product Description')
    })
})