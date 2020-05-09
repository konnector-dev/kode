<template>
    <div class="flex-shrink-0 flex items-center px-4 md:h-16"
        >
        <img class="h-8 w-auto"
             src="/img/kode.png"
             alt="Logo" />
        <span class="mx-4 text-kored font-bold">
            Kode
        </span>
    </div>
</template>

<script>
    export default {
        computed: {
            baseUrl: {
                 get: function() {
                     return this.$store.getters.KODE.data.baseUrl
                 },
                set: function () {
                    this.baseUrl = '';
                }
            },
            appName: {
                get: function() {
                    return this.$store.getters.KODE.data.appName
                },
                set: function () {
                    this.appName = '';
                }
            },
        }
    }
</script>
