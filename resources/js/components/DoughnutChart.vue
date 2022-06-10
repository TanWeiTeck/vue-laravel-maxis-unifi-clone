<template>
    <Doughnut
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
import { Doughnut } from "vue-chartjs/legacy";

import {
    Chart as ChartJS,
    Title,
    Tooltip,
    Legend,
    ArcElement,
    CategoryScale,
} from "chart.js";

ChartJS.register(Title, Tooltip, Legend, ArcElement, CategoryScale);

export default {
    name: "DoughnutChart",
    components: {
        Doughnut,
    },
    props: {
        chartId: {
            type: String,
            default: "doughnut-chart",
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
        },
        labels: {
            type: Array,
        },
        packages: {
            type: Array,
        },
    },
    data() {
        return {
            dataArray: [],
            chartData: {
                labels: this.labels,
                datasets: [
                    {
                        backgroundColor: [
                            "#41B883",
                            "#23F300",
                            "#E46651",
                            "#00D8FF",
                            "#DD1B16",
                            "#808080",
                        ],
                        data: [],
                        hoverOffset: 10,
                        cutout: 80,
                        radius: 80,
                    },
                ],
            },
            chartOptions: {
                responsive: true,
                maintainAspectRatio: false,
            },
        };
    },
    methods: {
        filterData(labels) {
            return this.data.filter((i) => i.package_id == labels);
        },
        getTotal() {
            let labels = this.packages.map((i) => i.package_id);
            this.chartData.labels = labels;
            for (let i = 0; i < labels.length; i++) {
                let value = this.filterData(labels[i]).length;
                this.chartData.datasets[0].data.push(value);
            }
            // this.dataArray = newData;
            // console.log(typeof this.dataArray);
            // let maxis = this.filterData("MX-030089");
            // newData.push(maxis);
            // console.log(newData);
        },
    },
    mounted() {
        // console.log(this.data.filter((x) => x.package_id === "MX-030089"));
        // console.log(this.packages);
        // console.log(this.data);
        this.getTotal();
        // this.getTotal();
        // console.log(this.data.package_id);
    },
};
</script>
