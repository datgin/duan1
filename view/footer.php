<footer>
  <div class="footer">
    <div class="box-footer">
      <h6>GIỚI THIỆU</h6>
      <p>Về Chúng Tôi</p>
      <p>Thoả Thuận Sử Dụng</p>
      <p>Quy Chế Hoạt Động</p>
      <p>Chính Sách Bảo Mật</p>
    </div>
    <div class="box-footer">
      <h6>GIỚI THIỆU</h6>
      <p>Thể Loại Phim</p>
      <p>Bình Luận Phim</p>
      <p>Phim Hay Tháng</p>
    </div>
    <div class="box-footer">
      <h6>GIỚI THIỆU</h6>
      <p>Góp Ý</p>
      <p>Sale & Services</p>
      <p>Rạp / Giá Vé</p>
      <p>Tuyển Dụng</p>
      <p>FAQ</p>
    </div>
    <div class="box-footer">
      <p><img width="100" src="image/logo02.png" alt=""></p>
      <p><a href=""><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a><a href=""><i class="fa-brands fa-youtube" aria-hidden="true"></i></a> <a href=""><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></p>
      <p><img width="150" src="image/glx_trade.webp" alt=""></p>
    </div>
  </div>
  <hr class="hr-footer">
  <h5 style="color:white">© Dự án được thực hiện bởi (Nguyễn Tiến Đạt, Trần Duy Khánh, Trần Đức Đại)</h5>
</footer>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  $(document).ready(function() {
    $(".carousel").carousel();
  });

  function toggleVideo() {
    const trailer = document.querySelector(".trailer");
    const video = trailer.querySelector("video");
    video.pause();
    trailer.classList.toggle("active");
  }

  function changeBg(bg, title, trailer) {
    const banner = document.querySelector(".banner");
    const contents = banner.querySelectorAll(".content");
    banner.style.background = `url("image/${bg}")`;
    banner.style.backgroundSize = "cover";
    banner.style.backgroundPosition = "center";

    contents.forEach((content) => {
      content.classList.remove("active");
      if (content.classList.contains(title)) {
        content.classList.add("active");
      }
    });

    const video = document.querySelector(".trailer video");
    video.src = `image/${trailer}`;
    video.play();

    const trailerContainer = document.querySelector(".trailer");
    trailerContainer.classList.remove("active");
    // Xóa dòng dưới để ngăn trailer đóng khi thay đổi hình ảnh
    // trailerContainer.classList.add("active");
  }
  const watchTrailerButton = document.querySelector(".play");
  watchTrailerButton.addEventListener("click", toggleVideo);


  function hiden() {
    var hidden = document.querySelector(".khoi1");
    var present = document.querySelector(".khoi2");
    var presenty = document.querySelector(".presently");
    var hiden = document.querySelector(".hidden");
    if (hidden.style.display === "none") {
      hidden.style.display = "grid";
      present.style.display = "none";
      hiden.style.color = "#ff3700";
      presenty.style.color = "black";
    } else {
      hidden.style.display = "none";
      present.style.display = "grid";
      hiden.style.color = "black";
      presenty.style.color = "#ff3700";
    }
  }
</script>

</body>

</html>