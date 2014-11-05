define(['jquery', 
        'underscore', 
        'backbone'
      ], function($, _, Backbone) {
	var AppRouter = Backbone.Router.extend({
			routes: {
				// Default
			     '': 'index',
			     'game' : 'game',
			},
			'index' : function() {
				console.log("index hit!");
			},
			'game' : function() {
				console.log("game hit");
			}
			
    
		});
	 var initialize = function() {
		app = new AppRouter;
		Backbone.history.start({ pushState: true, root: "/mond/web/" });
		Backbone.View.prototype.close = function () {
			  this.$el.empty();
			  this.unbind();
			};
		$(".start").click(function(e) {
			e.preventDefault();
			app.navigate('game', {trigger:true});
		});
	};
    return {
    	initialize: initialize
    };
});