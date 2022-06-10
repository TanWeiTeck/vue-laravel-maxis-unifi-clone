<template>
    <div class="relative w-full bg-white">
        <div v-if="showNav">
            <transition name="fade">
                <div
                    v-if="backwardButton"
                    class="ease-linear duration-300 z-10 p-1 right-white-shadow absolute h-full flex items-center w-8 bg-white/90"
                >
                    <div
                        @click="scrollBackward"
                        class="w-10 hover:shadow-xl rounded-full hover:scale-105 duration-300"
                    >
                        <img
                            class="rounded-full shadow-2xl"
                            src="https://img.icons8.com/ios/50/undefined/circled-chevron-left.png"
                        />
                    </div>
                </div>
            </transition>
            <transition name="fade">
                <div
                    v-if="forwardButton"
                    class="z-10 p-1 left-white-shadow absolute right-0 h-full flex items-center w-8 bg-white/90"
                >
                    <div
                        @click="scrollForward"
                        class="w-10 hover:shadow-xl rounded-full hover:scale-105 duration-300"
                    >
                        <img
                            class="rounded-full shadow-2xl"
                            src="https://img.icons8.com/ios/50/undefined/circled-chevron-right.png"
                        />
                    </div>
                </div>
            </transition>
        </div>
        <div
            id="scrollable-container"
            @scroll="configureNav()"
            class="hide-scroll-bar flex overflow-x-auto shadow-md scroll-smooth"
        >
            <div id="scrollable" class="flex">
                <slot />
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            backwardButton: false,
            forwardButton: false,
            scrollWidth: null,
            elementFullWidth: null,
            showNav: true,
            screenWidth: null,
        };
    },

    methods: {
        scrollForward() {
            document
                .getElementById("scrollable-container")
                .scrollBy({ left: this.scrollWidth, behavior: "smooth" });
        },
        scrollBackward() {
            document
                .getElementById("scrollable-container")
                .scrollBy({ left: -this.scrollWidth, behavior: "smooth" });
        },

        setScrollWidth() {
            this.scrollWidth =
                document.getElementById("scrollable-container").clientWidth / 2;
        },

        getElementFullWidth() {
            this.elementFullWidth =
                document.getElementById("scrollable").clientWidth;
        },

        getWindowWidth() {
            this.screenWidth = screen.width;
        },

        configureNav() {
            this.getWindowWidth();
            if (this.screenWidth > 640) {
                const containerWidth = document.getElementById(
                    "scrollable-container"
                ).clientWidth;
                const expectedValue = this.elementFullWidth - containerWidth;
                const scrollValue = document.getElementById(
                    "scrollable-container"
                ).scrollLeft;
                this.showNav = true;
                if (scrollValue == 0) {
                    this.backwardButton = false;
                } else if (scrollValue > 0) {
                    this.backwardButton = true;
                }
                if (
                    scrollValue != expectedValue &&
                    this.elementFullWidth > containerWidth
                ) {
                    this.forwardButton = true;
                } else if (scrollValue == expectedValue) {
                    this.forwardButton = false;
                }
            } else {
                this.showNav = false;
            }
        },
    },

    mounted() {
        this.getElementFullWidth();
        this.configureNav();
        this.setScrollWidth();
    },

    created() {
        window.addEventListener("resize", this.configureNav);
        window.addEventListener("resize", this.setScrollWidth);
    },
};
</script>

<style>
.hide-scroll-bar::-webkit-scrollbar {
    display: none;
}

.right-white-shadow {
    box-shadow: 0px 0px 50px 30px white;
    clip-path: inset(0px -100px 0px 0px);
}

.left-white-shadow {
    box-shadow: 0px 0px 50px 30px white;
    clip-path: inset(0px 0px 0px -100px);
}

.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.5s ease;
}

.fade-enter,
.fade-leave-to {
    opacity: 0;
}
</style>
