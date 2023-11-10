<div class="banner">
    <div class="content bg-01 active">
        <!-- <img src="image/logo01.png" alt="" class="movie_title" />
      <h4>
        <span>2023</span><span><i>19+</i></span><span>12h 43min</span><span>Romance</span>
      </h4>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum
        necessitatibus placeat libero similique molestiae repellendus alias
        eum facere natus impedit soluta quae quibusdam, iste et beatae,
        commodi animi assumenda. Ipsum.
      </p> -->
    </div>
    <?php
    foreach ($kq as $key => $value) {
        extract($value); ?>
        <div class="content <?= $tilte ?>">
        </div>
    <?php }
    ?>
    <div class="carousel_box">
        <div class="carousel">
            <!-- <div class="carousel-item" onclick="changeBg('bg-04.webp', 'bg-01', 'trailer01.mp4')">
          <img src="image/avata_04.webp" alt="" />
        </div> -->
            <?php
            foreach ($kq as $k) {
                extract($k); ?>
                <div class="carousel-item" onclick="changeBg('<?= $bg ?>', '<?= $tilte ?>', '<?= $trailer ?>')">
                    <img src="image/<?= $image ?>" alt="" />
                </div>
            <?php }
            ?>

        </div>
    </div>
    <a href="#" class="play"><i class="fa fa-play-circle"></i>Watch Trailer</a>
    <ul class="sci">
        <li>
            <a href=""><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
        </li>
        <li>
            <a href=""><i class="fa-brands fa-youtube" aria-hidden="true"></i></a>
        </li>
        <li>
            <a href=""><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
        </li>
    </ul>
</div>
<div class="trailer">
    <video controls autoplay muted>
        <source src="image/trailer-04.mp4">
    </video>
    <img class="close" src="image/close.png" alt="" onClick="toggleVideo()" />
</div>
<div class="main">
    <div class="box-mat">
        <h6>PHIM</h6>
        <ul>
            <li class="hidden" onclick="hiden()">Đang chiếu</li>
            <li class="presently" onclick="hiden()">Sắp chiếu</li>
        </ul>
    </div>
    <div class="khoi">
        <div class="khoi1">
            <?php
            foreach ($kq2 as $k2) { ?>
                <a href="?act=ctMovie&idmovie=<?= $k2['id'] ?>">
                    <div class="item">
                        <div class="image"><img src="image/<?= $k2['image'] ?>" alt="" /></div>
                        <div class="name"><?= $k2['name'] ?></div>
                    </div>
                </a>
            <?php }
            ?>
        </div>
        <div class="khoi2">
            <?php
            foreach ($kq1 as $k1) { ?>
                <a href="?act=ctMovie&idmovie=<?= $k1['id'] ?>">
                    <div class="item">
                        <div class="image"><img src="image/<?= $k1['image'] ?>" alt="" /></div>
                        <div class="name"><?= $k1['name'] ?></div>
                    </div>
                </a>
            <?php }
            ?>
        </div>
        
    </div>
    <div class="button">
        <button>Xem thêm <i class="fa-solid fa-angle-right"></i></button>
    </div>
    <hr class="hr-main">
    <div class="box-review">
        <h6 class="mb">GÓC REVIEW</h6>
        <div class="review">
            <iframe width="850" height="415" src="https://www.youtube.com/embed/BbNFAWhKwSA?si=2YpMnKSxqaIQHebj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="top-movie">
                <h5>TOP 8 MOVIE</h5>
                <?php
                foreach ($kq3 as $k3) {
                    extract($k3); ?>
                    <p> <img src="image/<?= $image ?>" alt=""> <span><small><?= $name ?></small><small><i style="color: orange" class="fa fa-star"></i> 4.5 <i><?= $max_old ?>+</i></small><small><?= $year . ' | ' . $show_time . ' | ' .  $category ?></small></span></p>
                <?php }
                ?>
                <p></p>
            </div>
        </div>
    </div>
</div>