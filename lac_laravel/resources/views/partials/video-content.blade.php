<div>
    <iframe
        loading="lazy" ;
        srcdoc="<style>
                          * {
                          padding: 0;
                          margin: 0;
                          overflow: hidden;
                          }

                          body, html {
                            width: 100%;
                          }

                          img{
                            position: absolute;
                            width: 100%;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            margin: 0;
                          }

                          button, span {
                            position:absolute;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            transition: all 250ms ease-in-out;
                          }

                        </style>
                        <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0' />
                        <a href='https://www.youtube.com/embed/{{$videopath}}?autoplay=1'>
                              <img src='https://img.youtube.com/vi/{{$videopath}}/hqdefault.jpg' alt='Coffee Recipe Javascript Project'>
                              <button style='width: 45px; height: 33.5px; color:black; background:white; border: 1px solid black;'>
                              <span style='font-size: 30px; display:block;overflow:hidden; margin: 0;' class='material-symbols-outlined'>
                            play_arrow
                            </span>
                              </button>
                        </a>
                        "
        src="https://www.youtube.com/embed/{{$videopath}}&autoplay=1"
        title="Coffee Recipe Javascript Project"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
    >
    </iframe>
</div>
