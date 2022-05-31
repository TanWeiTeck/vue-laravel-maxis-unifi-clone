<template>
    <div>
        <svg
            v-if="!menu"
            @click="toggleMenu"
            xmlns="http://www.w3.org/2000/svg"
            class=""
            x="0px"
            y="0px"
            width="30"
            height="30"
            viewBox="0 0 30 30"
            style="fill: #26e07f"
        >
            <path
                d="M 3 7 A 1.0001 1.0001 0 1 0 3 9 L 27 9 A 1.0001 1.0001 0 1 0 27 7 L 3 7 z M 3 14 A 1.0001 1.0001 0 1 0 3 16 L 27 16 A 1.0001 1.0001 0 1 0 27 14 L 3 14 z M 3 21 A 1.0001 1.0001 0 1 0 3 23 L 27 23 A 1.0001 1.0001 0 1 0 27 21 L 3 21 z"
            ></path>
        </svg>

        <div
            v-if="menu"
            @click="toggleMenu"
            class="w-screen h-screen bg-black bg-opacity-70 z-10 fixed left-0 top-0"
        >
            <div
                class="flex flex-col h-screen bg-black bg-opacity-70 text-gray-300 w-96 font-extrabold"
            >
                <a
                    class="border-t border-gray-800 px-3 py-3 hover:text-white"
                    href="/"
                    >HOME</a
                >
                <a
                    class="border-t border-gray-800 px-3 py-3 hover:text-white"
                    href="/apply"
                    >APPLY NOW</a
                >
                <a
                    class="border-t border-gray-800 px-3 py-3 hover:text-white"
                    href="/#fibreplan"
                    >MAXIS FIBRE PLANS</a
                >
                <a
                    class="border-t border-gray-800 px-3 py-3 hover:text-white"
                    href="/#coverage"
                    >COVERAGE CHECK</a
                >
                <a
                    class="border-t border-gray-800 px-3 py-3 text-white"
                    href="tel:0123367xxxx"
                >
                    <btn>012-3367xxxx</btn>
                </a>

                <a
                    class="border-t border-gray-800 px-3 py-3 text-white"
                    href="tel:0123367xxxx"
                >
                    <btn>TECHNICAL: 123</btn>
                </a>
            </div>
            <div class="fixed top-2 right-2">
                <img
                    class="p-2"
                    src="https://img.icons8.com/material-outlined/48/ffffff/cancel--v1.png"
                    width="50px"
                />
            </div>
        </div>
    </div>
</template>

<script>
export default {
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
        console.log("mounted");
    },
};
</script>

<style></style>
