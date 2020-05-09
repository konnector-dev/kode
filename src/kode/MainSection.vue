<template>
    <div class="flex flex-col w-0 flex-1 overflow-hidden"
         :class="{'bg-gray-900': dark, 'bg-gray-400': !dark}">
        <Top></Top>
        <Dashboard></Dashboard>
    </div>
</template>

<script>
    import Top from "./Main/Top";
    import Dashboard from "./Main/Dashboard";
    export default {
        computed: {
            dark() {
                return this.$store.getters.DARK
            },
            kode() {
                return this.$store.getters.KODE
            }
        },
        components: {
            Top,
            Dashboard
        }
    };
</script>
