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
                        label: "Data One",
                        backgroundColor: "#f87979",
                        data: [40, 39, 10, 40, 39, 70, 40, 60, 55, 70, 65, 80],
                        fill: {
                            target: "origin",
                            above: "rgb(255, 0, 0)", // Area will be red above the origin
                            below: "rgb(0, 0, 255)", // And blue below the origin
                        },
                        backgroundColor: "rgba(0, 180, 255, 1)",
                        hoverBackgroundColor: "rgba(180, 0, 255, 1)",
                        fill: true,
                        tension: 0.3,
                    },
                ],
            },
            chartOptions: {
                responsive: true,
                maintainAspectRatio: false,
            },
        };
    },
};
</script>