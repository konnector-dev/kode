<template>
    <div class="flex">
        <Mobile></Mobile>
        <Desktop></Desktop>
    </div>
</template>

<script>
    import Mobile from "./Sidebar/Mobile";
    import Desktop from "./Sidebar/Desktop";

    export default {
        components: {
            Mobile,
            Desktop
        }
    };
</script>
