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
        label: {
            type: Array,
        },
        color: {
            type: Array,
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
                    // {
                    //     label: "",
                    //     backgroundColor: "#1E40AF",
                    //     data: [],
                    //     fill: {
                    //         target: "origin",
                    //         above: "rgb(255, 0, 0)", // Area will be red above the origin
                    //         below: "rgb(0, 0, 255)", // And blue below the origin
                    //     },
                    //     backgroundColor: "#1E40AF",
                    //     hoverBackgroundColor: "#1E40AF",
                    //     fill: true,
                    //     tension: 0.3,
                    // },
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
        filterData(data, month) {
            return data.filter((i) => i.month == month);
        },

        getDataTotal(data) {
            let months = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

            let monthlyValue = [];

            for (let i = 0; i < months.length; i++) {
                let monthlyData = this.filterData(data, months[i]);
                let monthlyCount =
                    monthlyData.length > 0 ? monthlyData[0].count : "";
                monthlyValue.push(monthlyCount);
            }
            return monthlyValue;
        },

        getMonthlyTotal() {
            for (let i = 0; i < this.data.length; i++) {
                this.chartData.datasets.push({
                    label: this.label[i],
                    backgroundColor: this.color[i],
                    data: this.getDataTotal(this.data[i]),
                    fill: {
                        target: "origin",
                        above: "rgb(255, 0, 0)", // Area will be red above the origin
                        below: "rgb(0, 0, 255)", // And blue below the origin
                    },
                    backgroundColor: this.color[i],
                    hoverBackgroundColor: this.color[i],
                    fill: true,
                    tension: 0.3,
                });
            }
        },
    },
    mounted() {
        this.getMonthlyTotal();
    },
};
</script>
