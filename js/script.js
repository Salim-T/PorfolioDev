    const textAnime = document.querySelector('#welcome h2');

    let typewriter = new Typewriter(textAnime)
    // ,{
    //     loop:true,
    //     deleteSpeed:100
    // })
    
    typewriter
    .pauseFor(180)
    .changeDelay(100)
    .typeString('Bienvenue sur mon portfolio')
    .start()
