$('video').click(function(){
    this[this.paused ? 'play' : 'pause']();
});
