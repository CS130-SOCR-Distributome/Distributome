//Exponential-Logarithmic Distribution Calculator
var dist, distGraph, bParam, qParam;
var xParam, pParam, graphSelect;
var b = 1, q = 0.5;
var x, p;

function initialize(){
	distCanvas = document.getElementById("distCanvas");
	graphSelect = document.getElementById("graphSelect");
	distSelect = document.getElementById("distSelect");
	bParam = new Parameter(document.getElementById("bInput"), document.getElementById("bLabel"));
	bParam.setProperties(1, 10, 0.1, b, "<var>b</var>");
	qParam = new Parameter(document.getElementById("qInput"), document.getElementById("qLabel"));
	qParam.setProperties(0.1, 0.9, 0.01, q, "<var>q</var>");
	xParam = new Parameter(document.getElementById("xInput"), document.getElementById("xLabel"));
	pParam = new Parameter(document.getElementById("pInput"), document.getElementById("pLabel"));
	pParam.setProperties(0.001, 0.999, 0.001, 0.5, "<var>p</var>");
	setDist();
}

function setDist(){
	q = qParam.getValue();
	b = bParam.getValue();
	dist = new ExponentialLogarithmicDistribution(q, b);
	xParam.setProperties(dist.quantile(0.001), dist.quantile(0.999), 0.001, dist.quantile(0.5), "<var>x</var>");
	distGraph = new QuantileGraph(distCanvas, dist, "X");
	distGraph.xFormat = 2;
	distGraph.setGraphType(graphSelect.value);
	setProb();	
}

function setValue(){
	x = xParam.getValue();
	p = dist.CDF(x);
	pParam.setValue(p);
	distGraph.setValue(x);
}

function setProb(){
	p = pParam.getValue();
	x = dist.quantile(p);
	xParam.setValue(x);
	distGraph.setProb(p);
}
