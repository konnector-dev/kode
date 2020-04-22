<template>
    <div class="flex h-screen">
        <Sidebar></Sidebar>
        <MainSection></MainSection>
    </div>
</template>

<script>
    import Sidebar from "./Sidebar";
    import MainSection from "./MainSection";
    export default {
        components: {
            Sidebar,
            MainSection
        }
    };
</script>
