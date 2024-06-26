<?php 
function pintaTwit(array $twit): string{
    $contenido= <<<TWIT
        <div class="post">
            <div class="post__avatar">
            <img
                src="https://i.pinimg.com/originals/a6/58/32/a65832155622ac173337874f02b218fb.png"
                alt=""
            />
            </div>

            <div class="post__body">
            <div class="post__header">
                <div class="post__headerText">
                <h3>
                    {$twit["autor"]}
                    <span class="post__headerSpecial"
                    ><span class="material-icons post__badge"> verified </span> {$twit["usuario"]}</span
                    >
                </h3>
                </div>
                <div class="post__headerDescription">
                <p> {$twit["texto"]} </p>
                </div>
            </div>
            <img
                src="https://www.focus2move.com/wp-content/uploads/2020/01/Tesla-Roadster-2020-1024-03.jpg"
                alt=""
            />
            <div class="post__footer">
                <span class="material-icons"> repeat </span>
                <span class="material-icons"> favorite_border </span>
                <span class="material-icons"> publish </span>
            </div>
            </div>
        </div>
      TWIT;

      return $contenido;
}