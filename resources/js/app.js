import "./bootstrap";
import { createInertiaApp } from "@westacks/inertia-svelte";
// import { createInertiaApp } from "@inertiajs/svelte";
import Layout from './layout.svelte';

createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./pages/**/*.svelte", { eager: true });
        let page = pages[`./pages/${name}.svelte`];
        return {
            default: page.default,
            layout: Layout,
        }
    },
    setup({ el, App, props }) {
        new App({ target: el, props });
    },
});
