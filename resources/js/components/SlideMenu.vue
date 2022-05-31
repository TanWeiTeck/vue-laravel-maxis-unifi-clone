<template>
    <div class="flex flex-col items-end">
        <div
            class="flex items-center justify-end w-8 md:w-10"
            @click="toggleMenu"
        >
            <img
                v-if="!menu"
                class="h-8 md:h-10 p-2"
                src="https://img.icons8.com/ios/50/000000/circled-chevron-right.png"
            />
            <img
                v-if="menu"
                class="h-8 md:h-10 p-2"
                src="https://img.icons8.com/ios/50/000000/circled-chevron-left.png"
            />
        </div>

        <slot v-if="menu" />
    </div>
</template>

<script>
export default {
    props: {},
    data() {
        return {
            menu: false,
        };
    },

    methods: {
        toggleMenu() {
            return (this.menu = !this.menu);
        },
    },

    mounted() {
        console.log(this.show);
    },
};
</script>

<style></style>
