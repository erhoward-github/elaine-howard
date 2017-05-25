/* 
 * Copyright 2016 Elaine Howard
 * Last edited by: Elaine Howard
 *             On: 30-Aug-2016
 *       Filename: scripts.js
 *       Revision: 1.0
 */
 
/*global d3, $ */

/*
$(document).ready(function(){
    console.log("ready. . .");
});
*/
function pulseFontWeight(sId, nInterval)
{
  var obj;

  if(document.getElementById)
  {
    if(document.getElementById(sId))
    {
      obj = document.getElementById(sId).style;

      if(obj.fontWeight === "normal")
      {
        obj.fontWeight = "bold";
      }
      else
      {
        obj.fontWeight = "normal";
      }
      window.setTimeout("pulseFontWeight('" + sId + "', " + nInterval + ");", nInterval);
    }
  }
}

function setupToolTips()
{
    $("circle").each(function(){
        $(this).qtip({
            content:{
                text:"<ul class='dataList'>" +
                    "<li>Name: <a target='frameName' href='" + 
                      this.__data__.url + "'>" + this.__data__.name + "</a></li>" +
                    "<li>Duration: " + 
                      (this.__data__.duration || "Missing") + "</li>" +
                    "<li>Depth: " + 
                      ((typeof this.__data__.depth !== "undefined") ? this.__data__.depth : "Missing") + "</li>" +
                    "</ul>",
                title:"Music"
            },
            show:{
                solo: true
            },
            hide: {
                event: 'unfocus',
                inactive: 10000
            },
            events: {hide: function(event, api){
                // restore node when tooltip disappears
                var dataQtipId = $(this).attr("data-qtip-id");
                var pathId = $("path[data-hasqtip='" + dataQtipId + "']").attr("id");
                $("path#" + pathId).css({"stroke":"white","stroke-width":"1px"});
            }},
            style:{
                classes: 'qtip-light qtip-shadow qtip-rounded'
                //,tip: { offset: 127 }
            }});
    });
} // end function setupToolTips()

/*
var width = $("section.svgSection").width();
//var height = 484;
var height = 320;
*/

d3.select(window).on('resize', update); 

var width = $("#svgSection").width();
var height = $("#svgSection").height();

var bounded = true;
var root;


var force = d3.layout.force()
    .size([width, height])
    //.charge(-300)
    .charge(-1200)
    .linkDistance(104)
    .on("tick", tick);
/*
var svg = d3.select("body section.svgSection")
    .append("svg")
    .attr("width",width)
    .attr("height",height)
    .style("background-color","#fefefe")
    .style("border","1px solid #ddd")
    ;
*/
var svg = d3.select("#svgSection");    
    /*
    svg.append("defs")
        .append("filter")
            .attr("id","nodeFilter")
            .attr("x","0")
            .attr("y","0")
            .attr("width","200%")
            .attr("height","200%")
            .append("feOffset")
                .attr("result","offOut")
                .attr("in","SourceGraphic")
                .attr("dx","20")
                .attr("dy","20")
            .append("feGaussianBlur")
                .attr("result","blurOut")
                .attr("in","offOut")
                .attr("stdDeviation","10")
            .append("feBlend")
                .attr("in","SourceGraphic")
                .attr("in2","blurOut")
                .attr("mode","normal")
    ;
    */
var group = svg
    .append("g")
    .classed("group",true)
    ;

var link  = group.selectAll(".link");
var node  = group.selectAll(".node");
var label = group.selectAll(".label");
var LEVEL_1_COLOR = "#f2b600";
var LEVEL_2_COLOR = "#428bca";
var LEVEL_3_COLOR = "#0a5a9c";


// Color leaf nodes orange, and packages white or blue.
function color(d) 
{
    return d.name === "Home" ? LEVEL_1_COLOR : d.children ? LEVEL_2_COLOR : LEVEL_3_COLOR;
}

function tick() {
    //console.log("tick. . .");
    
  if(bounded)
  {
    link.attr("x1", function(d) { 
          var gap = 8;
          return ((d.source.x < gap) ? gap : ((d.source.x > width) ? (width - gap) : d.source.x));
          //return d.source.x; 
        })
        .attr("y1", function(d) { 
          var gap = 8;
          return ((d.source.y < gap) ? gap : ((d.source.y > height) ? (height - gap) : d.source.y));
          //return d.source.y; 
        })
        .attr("x2", function(d) { 
          var gap = 8;
          return ((d.target.x < gap) ? gap : ((d.target.x > width) ? (width - gap) : d.target.x));
          //return d.target.x; 
        })
        .attr("y2", function(d) { 
          var gap = 8;
          return ((d.target.y < gap) ? gap : ((d.target.y > height) ? (height - gap) : d.target.y));
          //return d.target.y; 
        });

    node.attr("cx", function(d) { 
          var gap = 8;
          return ((d.x < gap) ? gap : ((d.x > width) ? (width - gap) : d.x));
          //return d.x; 
        })
        .attr("cy", function(d) { 
          var gap = 8;
          return ((d.y < gap) ? gap : ((d.y > height) ? (height - gap) : d.y));
          //return d.y; 
        });

    label.attr("x", function(d) { 
          return d.x; 
        })
        .attr("y", function(d) { 
          return d.y; 
        });
  }
  else
  {
    link.attr("x1", function(d) { return d.source.x; })
        .attr("y1", function(d) { return d.source.y; })
        .attr("x2", function(d) { return d.target.x; })
        .attr("y2", function(d) { return d.target.y; });

    node.attr("cx", function(d) { return d.x; })
        .attr("cy", function(d) { return d.y; });

    label.attr("x", function(d) { return d.x; })
        .attr("y", function(d) { return d.y; });
  }
}

function click(d) 
{
  if (!d3.event.defaultPrevented) 
  {
    if (d.children) 
    {
      d._children = d.children;
      d.children = null;
    } 
    else 
    {
      d.children = d._children;
      d._children = null;
    }
    update();
    window.location.href = d.url;
  }
} // end function click(d)

// Returns a list of all nodes under the root.
function flatten(root) 
{
  var nodes = [];
  var i = 0;
  var depth = 0;


  function recurse(node) 
  {
    if(typeof node.depth === "undefined")
    {
        node.depth = depth;
    }

    if((typeof node.children !== "undefined") && (node.children.length > 0)) 
    {
      depth++;
      node.children.forEach(recurse);
      depth--;
    }
    if(typeof node.id === "undefined") 
    {
      node.id = ++i;
    }
    nodes.push(node);
  }

  recurse(root);
  return nodes;
}

function flattenOld(root) 
{
  var nodes = [], i = 0, depth = 0, name = "", lookupTable = [];

  function recurse(node) 
  {
    if(typeof node.id === "undefined") 
    {
      node.id = ++i;
    }
    if(typeof node.depth === "undefined")
    {
        node.depth = depth;
        lookupTable.push(depth);
    }
    nodes.push(node);

    if(node.children && node.children.length > 0) 
    {
      depth++;
      if($.inArray(depth, lookupTable) < 0)
      {
        depth++;
        lookupTable.push(depth);
      }
      node.children.forEach(recurse);
    }
  }

  recurse(root);
  return nodes;
}


function update()
{
    width = $("#svgSection").width();
    height = $("#svgSection").height();
    //console.log("update. . .(" + width + "," + height + ")");
    
    var nodes = flatten(root);
    var links = d3.layout.tree().links(nodes);
    var labels = d3.layout.tree().nodes(nodes);

    // Restart the force layout.
    force
        .nodes(nodes)
        .links(links)
        .size([width, height])
        //.charge(-448)
        .charge(-1200)
        .start()
        ;

    // Update the links…
    link = link.data(links, function(d) { return d.target.id; });

    // Exit any old links.
    link.exit().remove();

    // Enter any new links.
    link.enter().insert("line", ".node")
        .attr("class", "link")
        .style("stroke","#1916a9")
        .attr("x1", function(d) { return d.source.x; })
        .attr("y1", function(d) { return d.source.y; })
        .attr("x2", function(d) { return d.target.x; })
        .attr("y2", function(d) { return d.target.y; });

    // Update the nodes…
    node = node.data(nodes, function(d) { return d.id; });

    // Exit any old nodes.
    node.exit().remove();

  // Enter any new nodes
  /*
  node.enter()
      .append("circle")
      .attr("class", "node")
      .attr("cx", function(d) { return d.x; })
      .attr("cy", function(d) { return d.y; })
      .attr("r", function(d) { 
          //var r = (d.name === "root" ? 48 : d.children ? 24 : 12);
          var r = (d.name === "Home" ? 48 : d.children ? 24 : 12);
          return r; 
      })
      .style("fill", color)
      .on("click", click)
      .call(force.drag)
      ;
    */
      
//filter="url(#f3)"
      
  node.enter()
      .append("ellipse")
      .attr("class", "node")
      .attr("cx", function(d) { return d.x; })
      .attr("cy", function(d) { return d.y; })
      .attr("rx", function(d) { 
          var rx = (d.name === "Home" ? 40 : d.children ? 64 : 20);
          return rx; 
      })
      .attr("ry", function(d) { 
          var ry = (d.name === "Home" ? 40 : d.children ? 20 : 16);
          return ry; 
      })
      //.attr("focusable",true)
      .attr("tabindex",function(d,i){
          return i;
      })
      .style("fill",function(d,i){ 
          var gradient = (d.name === "Home" ? "url(#homeGradient)" : d.children ? "url(#childGradient)" : "url(#subChildGradient)");
          return gradient;
      })
      .style("filter","url(#blurFilter2)")
      .style("stroke", "#1916a9")
      .style("stroke-width", 2)
      .on("click", click)
      .call(force.drag)
      ;
      
  node.append("title").text(function(d){return d.name;});
  
  label = label.data(nodes, function(d) { 
      return d.id; 
  });
  
  /*
  label
     .enter()
     .append("text")
     .attr("x", function(d) { return d.x; })
     .attr("y", function(d) { return d.y; })
     .attr("dy","0.25em")
     .text(function(d,i){
      return d.name;
     })
     .style("text-anchor","middle")
     .classed("label",true)
     .on("click", click)
     .call(force.drag)
     ;
  */
  label
     .enter()
     //.append("a")
     //.attr("href",function(d){return d.url})
     .append("text")
     .attr("x", function(d) { return d.x; })
     .attr("y", function(d) { return d.y; })
     .attr("dy","0.30em")
     .text(function(d,i){
         return d.name;
     })
     
     
     
     //.attr("tabindex",function(d,i){
     //    return i;
     //})
     
     
     
     .style("text-anchor","middle")
     //.style("text-decoration","underline")
     .style("font-size","1.5em")
     .classed("label",true)
     //.on("click", click)
     .on("click", function(d,i){window.location.href = d.url;})
     .call(force.drag)
     ;
/*
  label
     .enter()
     .append("a")
     .attr("href",function(d){return d.url})
     ;
*/
     
  label.exit().remove();
  

  //setupToolTips();    
}
/*
d3.json("nav.json", function(error, json) 
{
  if(error) 
  {
      //debugger;
      window.alert("Did not get data. . ." + error.statusText);
      return;
  }
  //window.alert("did get data. . .");

  root = json;
  update();
});
*/

var json = {
    "name": "Home",
    "url":"index.php",
    "children": [
        {
            "name": "Music",
            "url":"music.php",
            "children": [
            ]
        },
        {
            "name": "Work",
            "url":"work.php",
            "children": [
            ]
        },
        {
            "name": "Resume",
            "url":"resume.php",
            "children": [
            ]
        },
        {
            "name": "Thoughts",
            "url":"thoughts.php",
            "children": [
            ]
        },
        {
            "name": "Contact",
            "url":"contact.php",
            "children": [
            ]
        },
        {
            "name": "About",
            "url":"about.php",
            "children": [
            ]
        }
        
    ]
};
root = json;
update();


function ForceNavigator(svgIdIn, jsonFileNameIn)
{
    var that = this;
    
    var svgId = "";
    var jsonFileName = "";
    var width = "";
    var height = "";
    var bounded = true;
    var root;
    var force = null;
    var svg;
    var group;
    var link;
    var node;
    var label;
    var LEVEL_1_COLOR = "#f2b600";
    var LEVEL_2_COLOR = "#428bca";
    var LEVEL_3_COLOR = "#0a5a9c";
    
    function color(d) 
    {
        return d.name === "Home" ? LEVEL_1_COLOR : d.children ? LEVEL_2_COLOR : LEVEL_3_COLOR;
    } // end function color(d) 
    
    function tick() 
    {
        if(bounded)
        {
            link.attr("x1", function(d) { 
                  var gap = 8;
                  return ((d.source.x < gap) ? gap : ((d.source.x > width) ? (width - gap) : d.source.x));
                  //return d.source.x; 
                })
                .attr("y1", function(d) { 
                  var gap = 8;
                  return ((d.source.y < gap) ? gap : ((d.source.y > height) ? (height - gap) : d.source.y));
                  //return d.source.y; 
                })
                .attr("x2", function(d) { 
                  var gap = 8;
                  return ((d.target.x < gap) ? gap : ((d.target.x > width) ? (width - gap) : d.target.x));
                  //return d.target.x; 
                })
                .attr("y2", function(d) { 
                  var gap = 8;
                  return ((d.target.y < gap) ? gap : ((d.target.y > height) ? (height - gap) : d.target.y));
                  //return d.target.y; 
                });

            node.attr("cx", function(d) { 
                  var gap = 8;
                  return ((d.x < gap) ? gap : ((d.x > width) ? (width - gap) : d.x));
                  //return d.x; 
                })
                .attr("cy", function(d) { 
                  var gap = 8;
                  return ((d.y < gap) ? gap : ((d.y > height) ? (height - gap) : d.y));
                  //return d.y; 
                });

            label.attr("x", function(d) { 
                  return d.x; 
                })
                .attr("y", function(d) { 
                  return d.y; 
                });
        }
        else
        {
            link.attr("x1", function(d) { return d.source.x; })
                .attr("y1", function(d) { return d.source.y; })
                .attr("x2", function(d) { return d.target.x; })
                .attr("y2", function(d) { return d.target.y; });

            node.attr("cx", function(d) { return d.x; })
                .attr("cy", function(d) { return d.y; });

            label.attr("x", function(d) { return d.x; })
                .attr("y", function(d) { return d.y; });
        }
    } // end function tick() 
    
    function click(d) 
    {
        if (!d3.event.defaultPrevented) 
        {
            if (d.children) 
            {
                d._children = d.children;
                d.children = null;
            } 
            else 
            {
                d.children = d._children;
                d._children = null;
            }
            update();
            window.location.href = d.url;
        }
    } // end function click(d)
    
    function flatten(root) 
    {
        var nodes = [];
        var i = 0;
        var depth = 0;

        function recurse(node) 
        {
            if(typeof node.depth === "undefined")
            {
                node.depth = depth;
            }

            if((typeof node.children !== "undefined") && (node.children.length > 0)) 
            {
                depth++;
                node.children.forEach(recurse);
                depth--;
            }
            if(typeof node.id === "undefined") 
            {
                node.id = ++i;
            }
            nodes.push(node);
        } // end function recurse(node) 

        recurse(root);
        return nodes;
    } // end function flatten(root) 
    
    function pulse()
    {
        window.setInterval(function(){
            update();
        }, 3000);
    } // end function pulse()
    
    this.init = function()
    {
        svgId = svgIdIn;
        jsonFileName = jsonFileNameIn;
        width = $("#" + svgId).width();
        height = $("#" + svgId).height();
        force = d3.layout.force()
            .size([width, height])
            //.charge(-300)
            .charge(-1200)
            .linkDistance(80)
            .on("tick", tick);
        svg = d3.select("#" + svgId);    
        group = svg
            .append("g")
            .classed("group",true)
            ;

        link  = group.selectAll(".link");
        node  = group.selectAll(".node");
        label = group.selectAll(".label");
    };
    this.init();
} // end function ForceNavigator(svgIdIn, jsonFileNameIn)
//var fn = new ForceNavigator(svgId, jsonFile);


window.setInterval(function(){
   update();
}, 3000);
/*
function ForceLayout(svgId)
{
  window.alert("svg id: " + svgId);
  var dataUrl = d3.select("#" + svgId).property("data-url");
  window.alert("svg id: " + svgId + "||" + dataUrl);
}
ForceLayout.forceLayoutArray = [];
function forceLayoutFactory()
{
  d3.select("body")
    .selectAll("div.forceLayoutGadget")
    .append("svg")
    .attr("class","forceLayoutSvg")
    .attr("id",function(d,i){
        return "forceLayoutSvg" + i;})
    .each(function(d,i){
        ForceLayout.forceLayoutArray.push(new ForceLayout("forceLayoutSvg" + i));
    });
} // end function ForceLayoutFactory()
//forceLayoutFactory();
*/

/* ******************************************************************************* */


