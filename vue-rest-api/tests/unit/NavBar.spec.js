import { mount } from '@vue/test-utils'
import NavBar from '../../src/components/NavBar.vue'

describe('NavBar.vue', () => {
  it('renders a nav for navigation', () => {
    const wrapper = mount(NavBar);
    expect(wrapper.text()).toContain('Create Product')
  })
})
