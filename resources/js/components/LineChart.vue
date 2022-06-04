<template>
    <LineChartGenerator
        :chart-options="chartOptions"
        :chart-data="chartData"
        :chart-id="chartId"
        :dataset-id-key="datasetIdKey"
        :plugins="plugins"
        :css-classes="cssClasses"
        :styles="styles"
        :width="width"
        :height="height"
    />
</template>

<script>
import { Line as LineChartGenerator } from "vue-chartjs/legacy";

import {
    Chart as ChartJS,
    Title,
    Tooltip,
    Legend,
    LineElement,
    LinearScale,
    CategoryScale,
    PointElement,
} from "chart.js";

ChartJS.register(
    Title,
    Tooltip,
    Legend,
    LineElement,
    LinearScale,
    CategoryScale,
    PointElement
);

export default {
    name: "LineChart",
    components: {
        LineChartGenerator,
    },
    props: {
        chartId: {
            type: String,
            default: "line-chart",
        },
        datasetIdKey: {
            type: String,
            default: "label",
        },
        width: {
            type: Number,
            default: 400,
        },
        height: {
            type: Number,
            default: 400,
        },
        cssClasses: {
            default: "",
            type: String,
        },
        styles: {
            type: Object,
            default: () => {},
        },
        plugins: {
            type: Array,
            default: () => [],
        },
        data: {
            type: Array,
            // default: [],
        },
    },
    data() {
        return {
            chartData: {
                labels: [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July",
                    "August",
                    "September",
                    "October",
                    "November",
                    "December",
                ],
                datasets: [
                    {
                        label: "Maxis",
                        backgroundColor: "#40c706",
                        data: [],
                        fill: {
                            target: "origin",
                            above: "rgb(255, 0, 0)", // Area will be red above the origin
                            below: "rgb(0, 0, 255)", // And blue below the origin
                        },
                        backgroundColor: "#40c706",
                        hoverBackgroundColor: "#40c706",
                        fill: true,
                        tension: 0.3,
                    },
                    // {
                    //     label: "Unifi",
                    //     backgroundColor: "#f87979",
                    //     data: [10, 2, 7, 4, 5, 9, 7, 8, 5, 10, 11, 12],
                    //     fill: {
                    //         target: "origin",
                    //         above: "rgb(255, 0, 0)", // Area will be red above the origin
                    //         below: "rgb(0, 0, 255)", // And blue below the origin
                    //     },
                    //     backgroundColor: "#fd7e14",
                    //     hoverBackgroundColor: "#fd7e14",
                    //     fill: true,
                    //     tension: 0.3,
                    // },
                ],
            },
            chartOptions: {
                responsive: true,
                maintainAspectRatio: false,
            },
        };
    },

    methods: {
        filterData(month) {
            return this.data.filter((i) => i.month == month);
        },

        getMonthlyTotal() {
            let months = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

            for (let i = 0; i < months.length; i++) {
                let monthlyData = this.filterData(months[i]);
                let monthlyCount =
                    monthlyData.length > 0 ? monthlyData[0].count : "";
                this.chartData.datasets[0].data.push(monthlyCount);
            }
        },
    },
    mounted() {
        this.getMonthlyTotal();
        console.log(this.chartData.datasets[0].data);
    },
};
</script>
