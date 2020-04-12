<template>
    <div class="flex flex-col w-0 flex-1 overflow-hidden"
         :class="{'bg-gray-900': isDark, 'bg-gray-400': !isDark}">
        <Top></Top>
        <Dashboard></Dashboard>
    </div>
</template>

<script>
    import Top from "./Main/Top";
    import Dashboard from "./Main/Dashboard";
    export default {
        components: {
            Top,
            Dashboard
        }
    };
</script>
