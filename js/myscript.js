var radarConfig = {
    type : 'radar',
    plot : {
        aspect : 'area',
        animation: {
            effect:3,
            sequence:1,
            speed:700
        }
    },
    title: {
        fontColor: "#8e99a9",
        text: 'Sifat Utama',
        align: "center",
        offsetX: 10,
        fontFamily: "Open Sans",
        fontSize: 25,
        padding : -5
    },
scaleV : {
    visible : false
},
scaleK : {
    values : '0:3:1',
    labels : ['Shiddiq','Amanah','Tabligh','Fathanah'],
    item : {
        fontColor : '#607D8B',
        backgroundColor : "white",
        borderColor : "#aeaeae",
        borderWidth : 1,
        padding : '5 10',
        borderRadius : 10
    },
    refLine : {
        lineColor : '#c10000'
    },
    tick : {
        lineColor : '#59869c',
        lineWidth : 2,
        lineStyle : 'dotted',
        size : 15
    },
    guide : {
        lineColor : "#607D8B",
        lineStyle : 'solid',
        alpha : 0.3,
        backgroundColor : "#c5c5c5 #718eb4"
    }
},
series : [
        {
            values : [59, 39, 38, 19]            
        }
    ]
};

zingchart.render({ 
    id : 'gsifat_utama', 
    data : radarConfig, 
    height: '100%', 
    width: '100%' 
});

var pieConfig = {
    type:"pie",
    title: {
        fontColor: "#8e99a9",
        text: 'Sifat Pendukung',
        align: "center",
        offsetX: 10,
        fontFamily: "Open Sans",
        fontSize: 25,
        padding : -5
    },
    plot: {
        cursor: 'hover',
        valueBox: {
          text: '%t',          
        }
      },
    series:[        
        {
            values: [5],
            text: 'Hemat'
        },
        {
            values : [10],
            text: 'Rajin'
        },
        {
            values: [20],
            text: 'Bijaksana'
        }
    ]
};

zingchart.render({ 
    id : 'gsifat_pendukung', 
    data : pieConfig, 
    height: 300, 
    width: "100%" 
});

var barConfig = {
    type: "hbar",
    title: {
        fontColor: "#8e99a9",
        text: 'Kemampuan',
        align: "center",
        offsetX: 10,
        fontFamily: "Open Sans",
        fontSize: 25,
        padding : -5
    },
    plotarea:{
        margin: "100 130 70 100"
    },
    scaleX: {
        labels: ['Programming', 'Memasak', 'Sepak Bola'],
        item: {
            fontFamily: "Roboto",
            fontSize: 12
            },
            lineColor: "#DDD",
            tick:{
            visible: false
            }        
    },
    scaleY: {
        label:{
        offsetY: 5,
        text: "Jumlah Reviewer",
        fontColor: "#777",
        fontSize: 14,
        fontFamily: "Roboto",
        },
        item: {
        // fontColor: "#fff",
        fontFamily: "Roboto",
        fontSize: 14
        },
        lineWidth: 0,
        tick: {
        visible: false
        },
        guide:{
        lineStyle: "solid",
        lineColor: "#DDD"
        },
    },
    series: [
        {
        values:[30,5,18],
        backgroundColor : "red blue"
        }
    ]
};
    
zingchart.render({ 
    id : 'gkemampuan', 
    data : barConfig, 
    height: "100%", 
    width: "100%" 
});

var radarConfig = {
    type : 'radar',
    plot : {
        aspect : 'area',
        animation: {
            effect:3,
            sequence:1,
            speed:700
        }
    },
    title: {
        fontColor: "#8e99a9",
        text: 'Sifat Utama',
        align: "center",
        offsetX: 10,
        fontFamily: "Open Sans",
        fontSize: 25,
        padding : -5
    },
scaleV : {
    visible : false
},
scaleK : {
    values : '0:3:1',
    labels : ['Shiddiq','Amanah','Tabligh','Fathanah'],
    item : {
        fontColor : '#607D8B',
        backgroundColor : "white",
        borderColor : "#aeaeae",
        borderWidth : 1,
        padding : '5 10',
        borderRadius : 10
    },
    refLine : {
        lineColor : '#c10000'
    },
    tick : {
        lineColor : '#59869c',
        lineWidth : 2,
        lineStyle : 'dotted',
        size : 15
    },
    guide : {
        lineColor : "#607D8B",
        lineStyle : 'solid',
        alpha : 0.3,
        backgroundColor : "#c5c5c5 #718eb4"
    }
},
series : [
        {
            values : [59, 39, 38, 19]            
        }
    ]
};

zingchart.render({ 
    id : 'ghsifat_utama', 
    data : radarConfig, 
    height: '100%', 
    width: '100%' 
});

var pieConfig = {
    type:"pie",
    title: {
        fontColor: "#8e99a9",
        text: 'Sifat Pendukung',
        align: "center",
        offsetX: 10,
        fontFamily: "Open Sans",
        fontSize: 25,
        padding : -5
    },
    plot: {
        cursor: 'hover',
        valueBox: {
          text: '%t',          
        }
      },
    series:[        
        {
            values: [5],
            text: 'Hemat'
        },
        {
            values : [10],
            text: 'Rajin'
        },
        {
            values: [20],
            text: 'Bijaksana'
        }
    ]
};

zingchart.render({ 
    id : 'ghsifat_pendukung', 
    data : pieConfig, 
    height: 300, 
    width: "100%" 
});

var barConfig = {
    type: "hbar",
    title: {
        fontColor: "#8e99a9",
        text: 'Kemampuan',
        align: "center",
        offsetX: 10,
        fontFamily: "Open Sans",
        fontSize: 25,
        padding : -5
    },
    plotarea:{
        margin: "100 130 70 100"
    },
    scaleX: {
        labels: ['Programming', 'Memasak', 'Sepak Bola'],
        item: {
            fontFamily: "Roboto",
            fontSize: 12
            },
            lineColor: "#DDD",
            tick:{
            visible: false
            }        
    },
    scaleY: {
        label:{
        offsetY: 5,
        text: "Jumlah Reviewer",
        fontColor: "#777",
        fontSize: 14,
        fontFamily: "Roboto",
        },
        item: {
        // fontColor: "#fff",
        fontFamily: "Roboto",
        fontSize: 14
        },
        lineWidth: 0,
        tick: {
        visible: false
        },
        guide:{
        lineStyle: "solid",
        lineColor: "#DDD"
        },
    },
    series: [
        {
        values:[30,5,18],
        backgroundColor : "red blue"
        }
    ]
};
    
zingchart.render({ 
    id : 'ghkemampuan', 
    data : barConfig, 
    height: "100%", 
    width: "100%" 
});

var radarConfig = {
    type : 'radar',
    plot : {
        aspect : 'area',
        animation: {
            effect:3,
            sequence:1,
            speed:700
        }
    },
    title: {
        fontColor: "#8e99a9",
        text: 'Sifat Utama',
        align: "center",
        offsetX: 10,
        fontFamily: "Open Sans",
        fontSize: 25,
        padding : -5
    },
scaleV : {
    visible : false
},
scaleK : {
    values : '0:3:1',
    labels : ['Shiddiq','Amanah','Tabligh','Fathanah'],
    item : {
        fontColor : '#607D8B',
        backgroundColor : "white",
        borderColor : "#aeaeae",
        borderWidth : 1,
        padding : '5 10',
        borderRadius : 10
    },
    refLine : {
        lineColor : '#c10000'
    },
    tick : {
        lineColor : '#59869c',
        lineWidth : 2,
        lineStyle : 'dotted',
        size : 15
    },
    guide : {
        lineColor : "#607D8B",
        lineStyle : 'solid',
        alpha : 0.3,
        backgroundColor : "#c5c5c5 #718eb4"
    }
},
series : [
        {
            values : [59, 39, 38, 19]            
        },
        {
            values : [20, 20, 54, 41],
            lineColor : '#53a534',
            backgroundColor : '#689F38'
        }
    ]
};

zingchart.render({ 
    id : 'gpsifat_utama', 
    data : radarConfig, 
    height: '100%', 
    width: '100%' 
});