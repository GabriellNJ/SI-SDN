arfx.am4chart = {
    XYChart: (config = {}) => {
        am4core.useTheme(am4themes_animated)
        let chart = am4core.create(config.container, 'XYChart')
        chart.scrollbarX = new am4core.Scrollbar()
        chart.data = config.data
        // Create axes
        let categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = config.category;
        categoryAxis.renderer.grid.template.location = 0;
        categoryAxis.renderer.minGridDistance = 30;
        categoryAxis.renderer.labels.template.horizontalCenter = "right";
        categoryAxis.renderer.labels.template.verticalCenter = "middle";
        categoryAxis.renderer.labels.template.rotation = 320;
        // categoryAxis.tooltip.disabled = true;
        categoryAxis.renderer.minHeight = 110;

        let valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
        valueAxis.renderer.minWidth = 50;

        let label = categoryAxis.renderer.labels.template;
        //wrap
        // label.wrap = true;
        // label.maxWidth = 120;
        //truncate
        label.truncate = true;
        label.maxWidth = 200;
        //tooltip
        label.tooltipText = "{category}";
        console.log(label.tooltipText)

        // Create series
        let series = chart.series.push(new am4charts.ColumnSeries());
        series.sequencedInterpolation = true;
        series.dataFields.valueY = config.valueY;
        series.dataFields.categoryX = config.categoryX;
        series.tooltipText = "[{categoryX}: bold]{valueY}[/]";
        series.columns.template.strokeWidth = 0;

        series.tooltip.pointerOrientation = "vertical";

        series.columns.template.column.cornerRadiusTopLeft = 10;
        series.columns.template.column.cornerRadiusTopRight = 10;
        series.columns.template.column.fillOpacity = 0.8;

        // on hover, make corner radiuses bigger
        let hoverState = series.columns.template.column.states.create("hover");
        hoverState.properties.cornerRadiusTopLeft = 0;
        hoverState.properties.cornerRadiusTopRight = 0;
        hoverState.properties.fillOpacity = 1;

        series.columns.template.adapter.add("fill", function (fill, target) {
            return chart.colors.getIndex(target.dataItem.index);
        });

        // Cursor
        chart.cursor = new am4charts.XYCursor();
    },
    PieChart: (config = {}) => {
        console.log(config)
        // am4core.useTheme(am4themes_material);
        am4core.useTheme(am4themes_animated);
        let chart_container = am4core.create(config.container, am4core.Container);
        let legend_container = am4core.create(config.legend_container, am4core.Container);
        chart_container.width = am4core.percent(100);
        chart_container.height = am4core.percent(100);
        chart_container.layout = 'vertical';
        legend_container.width = am4core.percent(100);
        legend_container.height = am4core.percent(100);
        legend_container.layout = 'vertical';
        // var chart = am4core.create('data_per_opd', am4charts.PieChart);

        var chart = new am4charts.PieChart;

        chart.parent = chart_container;

        var pie_series = chart.series.push(new am4charts.PieSeries());
        pie_series.dataFields.value = config.value;
        pie_series.dataFields.category = config.category;

        chart.innerRadius = am4core.percent(0);

        pie_series.slices.template.stroke = am4core.color("#fff");
        pie_series.slices.template.strokeWidth = 2;
        pie_series.slices.template.strokeOpacity = 1;
        pie_series.slices.template
            .cursorOverStyle = [{
                "property": "cursor",
                "value": "pointer"
            }];

        pie_series.labels.template.disabled = true;

        var shadow = pie_series.slices.template.filters.push(new am4core.DropShadowFilter);
        shadow.opacity = 0;

        var hover_state = pie_series.slices.template.states.getKey("hover");

        var hover_shadow = hover_state.filters.push(new am4core.DropShadowFilter);
        hover_shadow.opacity = 0.7;
        hover_shadow.blur = 5;

        chart.legend = new am4charts.Legend();

        chart.data = config.data;

        chart.legend.parent = legend_container;

        chart.events.on("datavalidated", resizeLegend);
        chart.events.on("maxsizechanged", resizeLegend);

        chart.legend.events.on("datavalidated", resizeLegend);
        chart.legend.events.on("maxsizechanged", resizeLegend);

        function resizeLegend(ev) {
            document.getElementById(config.legend_container).style.height = chart.legend.contentHeight + "px";
        }
    }
}
