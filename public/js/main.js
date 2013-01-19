(function(w) {
  var app = w.app||{};

  app.loaded = function() {
    console.log("Window loaded.");
  };

  w.onload = app.loaded;
}(window));
