define([
	'jquery',
	'underscore',
	'backbone',
	], function($, _, Backbone) {
	var model = Backbone.Model.extend({
		
	   initialize: function() {
		   console.log("initialize");
	   }
	});
	return model;
});