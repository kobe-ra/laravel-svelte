<script>
    import { Button } from "@/components/ui/button";
    import { Link } from "@westacks/inertia-svelte";
    // import { Link } from "@inertiajs/svelte";
    let hello = "if this is green tailwind is loaded properly";
</script>

<div class="py-8" />
<div class="container">
    <h1 class="text-green-500">{hello}</h1>
    <Button>button</Button>

    <div class="py-8" />
    <Link href="/data-refresh">Data Refresh</Link>
</div>
