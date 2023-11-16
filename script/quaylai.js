
    document.addEventListener("DOMContentLoaded", function () {
        window.onscroll = function () {
            scrollFunction();
        };
    });

    function scrollFunction() {
        var btn = document.getElementById("back-to-top-btn");
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            btn.classList.add("show");
        } else {
            btn.classList.remove("show");
        }
    }

    function scrollToTop() {
        // Sử dụng `scroll-behavior` để điều chỉnh tốc độ cuộn
        document.body.style.scrollBehavior = "smooth";
        document.documentElement.style.scrollBehavior = "smooth";

        // Cuộn lên đầu trang
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;

        // Đặt lại `scroll-behavior` sau khi cuộn xong
        setTimeout(function () {
            document.body.style.scrollBehavior = "auto";
            document.documentElement.style.scrollBehavior = "auto";
        }, 8000); // Đặt thời gian chờ là 1000ms (1 giây), bạn có thể điều chỉnh nếu cần
    }