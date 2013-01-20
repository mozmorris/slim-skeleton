var app = window.app||{};

app.loaded = function() {
  console.log("Window loaded.");
};

window.onload = app.loaded;
