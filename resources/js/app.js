import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';

// require('./bootstrap');

createInertiaApp({
  resolve: (name) => import(`./Pages/${name}`),
  setup({
    el, app, props, plugin,
  }) {
    createApp({ render: () => h(app, props) })
      // eslint-disable-next-line no-undef
      .mixin({ methods: { route } })
      .use(plugin)
      .mount(el);
  },
});

InertiaProgress.init({ color: '#4B5563' });
