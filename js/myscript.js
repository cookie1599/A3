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
        },
        {
            values : [2],
            text: 'n'
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
        labels: ['n', 'Programming', 'Memasak', 'Sepak Bola'],
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
        values:[1,30,5,18],
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
    id : 'gb1sifat_utama', 
    data : radarConfig, 
    height: '100%', 
    width: '100%' 
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
            values : [20, 20, 54, 41],
            lineColor : '#53a534',
            backgroundColor : '#689F38'
        }
    ]
};

zingchart.render({ 
    id : 'gb2sifat_utama', 
    data : radarConfig, 
    height: '100%', 
    width: '100%' 
});

var myConfig = {
	type: 'line',
	title:{
		text:'Sifat Utama',
		adjustLayout: true,
		marginTop: 7
	},
	legend:{
		align: 'center',
		verticalAlign: 'top',
		backgroundColor:'none',
		borderWidth: 0,
		item:{
			cursor: 'hand'
		},
		marker:{
			type:'circle',
			borderWidth: 0,
			cursor: 'hand'
		}
	},
	plotarea:{
		margin:'dynamic 70'
	},
	plot:{
		aspect: 'spline',
		lineWidth: 2,
		marker:{
			borderWidth: 0,
			size: 5
		}
	},
	scaleX:{
		lineColor: '#E3E3E5',
		zooming: true,
		zoomTo:[0,15],
		minValue: 1459468800000,
		step: 'day',
		transform:{
			type: 'date',
			all: '%M %d'
		}
	},
	scaleY:{
		minorTicks: 1,
		lineColor: '#E3E3E5',
		tick:{
			lineColor: '#E3E3E5'
		},
		minorTick:{
			lineColor: '#E3E3E5'
		},
		minorGuide:{
			visible: true,
			lineWidth: 1,
			lineColor: '#E3E3E5',
			alpha: 0.7,
			lineStyle: 'dashed'
		},
		guide:{
			lineStyle: 'dashed'
		}
	},
	tooltip:{
		borderWidth: 0,
		borderRadius: 3
	},
	preview:{
		adjustLayout: true,
		borderColor:'#E3E3E5',
		mask:{
			backgroundColor:'#E3E3E5'
		}
	},
	crosshairX:{
		plotLabel:{
			multiple: true,
			borderRadius: 3
		},
		scaleLabel:{
			backgroundColor:'#53535e',
			borderRadius: 3
		},
		marker:{
			size: 7,
			alpha: 0.5
		}
	},
	crosshairY:{
		lineColor:'#E3E3E5',
		type:'multiple',
		scaleLabel:{
			decimals: 2,
			borderRadius: 3,
			offsetX: -5,
			bold: true
		}
	},
 series: [
	 {
		 text: 'Shiddiq',
		 values: [2,5,10,15,17,4,6,8,10,12,19,10,15,12,18,2,5,10,15,17],
		 lineColor:'red',
		 marker:{
			 backgroundColor:'red'
		 },
	 },
	 {
		 text: 'Amanah',
		 values:[19,10,15,12,18,2,5,10,15,17,10,5,7,13,15,19,10,15,12,18],
		 lineColor: 'blue',
		 marker:{
			 backgroundColor:'blue'
		 }
	 },
	 {
		 text: 'Tabligh',
		 values: [10,5,7,13,15,19,10,15,12,18,4,6,8,10,12,10,5,7,13,15],
		 lineColor:'green',
		 marker:{
			 backgroundColor:'green'
		 }
	 },
	 {
		 text: 'Fathanah',
		 values:[4,6,8,10,12,10,5,7,13,15,2,5,10,15,17,4,6,8,10,12],
		 lineColor: 'orange',
		 marker:{
			 backgroundColor:'orange'
		 }
	 }
 ]
};

zingchart.bind('myChart', 'shape_click', function(p){
 if(p.shapeid == "view_all"){
	 zingchart.exec(p.id,'viewall');
 }
})

zingchart.render({ 
 id: 'ghsifat_utama', 
 data: myConfig, 
});