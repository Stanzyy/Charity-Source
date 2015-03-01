window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer",
    {
        title:{
            text: "Financial Percentages"
        },
                animationEnabled: true,
        legend:{
            verticalAlign: "center",
            horizontalAlign: "left",
            fontSize: 15,
            fontFamily: "Helvetica"        
        },
        theme: "theme2",
        data: [
        {        
            type: "pie",       
            indexLabelFontFamily: "Garamond",       
            indexLabelFontSize: 15,
            indexLabel: "{label} {y}%",
            startAngle:-20,      
            showInLegend: true,
            toolTipContent:"{legendText} {y}%",
            dataPoints: [
                {  y: 83.24, legendText:"Charity 1", label: "Charity 1" },
                {  y: 8.16, legendText:"Charity 2", label: "Charity 2" },
                {  y: 4.67, legendText:"Charity 3", label: "Charity 3" },
                {  y: 1.67, legendText:"Charity 4" , label: "Charity 4"},       
                {  y: 0.98, legendText:"Charity 5" , label: "Charity 5"}
            ]
        }
        ]
    });
    chart.render();
}
