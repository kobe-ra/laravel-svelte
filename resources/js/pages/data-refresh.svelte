<script>
    import { onMount } from "svelte";
    // import { useForm } from "@inertiajs/svelte";
    import { useForm } from "@westacks/inertia-svelte";
    import { Button } from "@/components/ui/button";

    export let randomNumber;
    export let randomNumbers;

    let form = useForm({});

    const submit = () => {
        $form.post(route("data_refresh"));
    };
</script>

<div class="py-8" />
<div class="container">
    <p>{randomNumber}</p>
    <p>{randomNumbers}</p>
    <div class="py-4" />
    <form on:submit|preventDefault={submit}>
        <Button type="submit">Post form data</Button>
    </form>
</div>
