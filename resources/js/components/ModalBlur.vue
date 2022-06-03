<template>
    <div class="">
        <button :class="styleclass" @click.prevent="toggleShow">
            {{ label }}
        </button>
        <div
            class="fixed top-0 right-0 z-10 h-screen w-screen bg-black/20 backdrop-blur-sm flex md:items-center"
            v-if="show"
        >
            <div class="bg-white m-auto md:w-min h-min p-10 rounded-lg relative w-screen">
                <div
                    class="absolute right-0 top-0 py-1 px-2 m-2 cursor-pointer hover:bg-gray-100 rounded-md"
                    @click="show = false"
                >
                    &#x2715
                </div>
                <slot />
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["label", "styleclass"],
    data() {
        return {
            show: false,
        };
    },
    methods: {
        toggleShow() {
            return (this.show = !this.show);
        },
    },
    mounted() {
        console.log(this.styleclass);
    },
};
</script>

<style></style>
