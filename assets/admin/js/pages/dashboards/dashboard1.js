/*
Template Name: Admin Pro Admin
Author: Wrappixel
Email: niravjoshi87@gmail.com
File: js
*/
$(function () {
    "use strict";
    // ============================================================== 
    // Newsletter
    // ============================================================== 

    var offset = 0;
    plot();

    function plot() {
        var recette = [],
            produits = [];
        for (var i = 0; i < 12; i += 1) {
            recette.push([i]);
            produits.push([i]);
        }
        var options = {
            series: {
                lines: {
                    show: false
                },
                points: {
                    show: false
                }
            },
            grid: {
                hoverable: true //IMPORTANT! this is needed for tooltip to work
            },
            yaxis: {
                min: 0,
                max: 20
            },
            colors: ["#009efb", "#55ce63"],
            grid: {
                color: "#AFAFAF",
                hoverable: true,
                borderWidth: 0,
                backgroundColor: '#FFF'
            },
            tooltip: true,
            tooltipOpts: {
                content: "'%s' of %x.1 is %y.4",
                shifts: {
                    x: -60,
                    y: 25
                }
            }
        };
        var plotObj = $.plot($("#flot-line-chart"), [{
            data: recette,
            label: "Recette",
        }, {
            data: produits,
            label: "produits"
        }], options);
    }
});