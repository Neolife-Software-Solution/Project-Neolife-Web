function Dropdown() {

    const dropdown = document.querySelector('#dropdownButton #dropdown');

    dropdown.classList.toggle("hidden");

}


// imageslider

document.addEventListener('DOMContentLoaded', () => {

    const items = [

        { position: 0, el: document.getElementById('carousel-item-1') },

        { position: 1, el: document.getElementById('carousel-item-2') },

        { position: 2, el: document.getElementById('carousel-item-3') },

        { position: 3, el: document.getElementById('carousel-item-4') },

    ];

    const options = {

        defaultPosition: 0,

        interval: 2000,

        indicators: {

            activeClasses: 'bg-white dark:bg-gray-800',

            inactiveClasses: 'bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800',

            items: [

                { position: 0, el: document.getElementById('carousel-indicator-1') },

                { position: 1, el: document.getElementById('carousel-indicator-2') },

                { position: 2, el: document.getElementById('carousel-indicator-3') },

                { position: 3, el: document.getElementById('carousel-indicator-4') },

            ],

        },

        onNext: () => console.log('Next slider item is shown'),

        onPrev: () => console.log('Previous slider item is shown'),

        onChange: () => console.log('New slider item has been shown'),

    };

    // Initialize the carousel
    const carousel = new Carousel(document.getElementById('carousel-example'), items, options);

    // Ensure only the default position item is visible initially

    items.forEach(item => item.el.classList.add('hidden'));

    items[options.defaultPosition].el.classList.remove('hidden');
    
});


// imageslider

window.requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame

onload = function (){
  setTimeout(init,0)
}

init = function(){
  canvas = document.querySelector('canvas')
  ctx = canvas.getContext('2d')

  onresize = function(){
    canvas.width = canvas.clientWidth
    canvas.height = canvas.clientHeight
  }
  onresize()

  mouse = {x:canvas.width/2,y:canvas.height/2,out:false}

  canvas.onmouseout = function(){
    mouse.out = true
  }

  canvas.onmousemove = function(e){
    var rect = canvas.getBoundingClientRect()
    mouse = {
      x: e.clientX - rect.left,
      y: e.clientY - rect.top,
      out: false
    }
  }

  gravityStrength = 10
  particles = []
  spawnTimer = 0
  spawnInterval = 10
  type = 0
  requestAnimationFrame(startLoop)
}

newParticle = function(){
  type = type?0:1
  particles.push({
    x:mouse.x,
    y:mouse.y,
    xv:type?18*Math.random()-9:24*Math.random()-12,
    yv:type?18*Math.random()-9:24*Math.random()-12,
    c:type?'rgb(255,'+((200*Math.random())|0)+','+((80*Math.random())|0)+')':'rgb(255,255,255)',
    s:type?5+10*Math.random():1,
    a:1
  })
}

startLoop = function(newTime){
  time = newTime
  requestAnimationFrame(loop)
}

loop = function(newTime){
  draw()
  calculate(newTime)
  requestAnimationFrame(loop)
}

draw = function(){
  ctx.clearRect(0,0,canvas.width,canvas.height)
  for(var i=0;i<particles.length;i++){
    var p = particles[i]
    ctx.globalAlpha = p.a
    ctx.fillStyle = p.c
    ctx.beginPath()
    ctx.arc(p.x,p.y,p.s,0,2*Math.PI)
    ctx.fill()
  }
}

calculate = function(newTime){
  var dt = newTime-time
  time = newTime

  if(!mouse.out){
    spawnTimer += (dt<100)?dt:100
    for(;spawnTimer>0;spawnTimer-=spawnInterval){
      newParticle()
    }
  }

  particleOverflow = particles.length-700
  if(particleOverflow>0){
    particles.splice(0,particleOverflow)
  }

  for(var i=0;i<particles.length;i++){
    var p = particles[i]
    if(!mouse.out){
      x = mouse.x-p.x
      y = mouse.y-p.y
      a = x*x+y*y
      a = a>100?gravityStrength/a:gravityStrength/100
      p.xv = (p.xv+a*x)*0.99
      p.yv = (p.yv+a*y)*0.99
    }
    p.x += p.xv
    p.y += p.yv
    p.a *= 0.99
  }
}

