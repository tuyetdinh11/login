function searchKeyword(keyword, data) {
    const fuse = new Fuse(data, {
      keys: ["title", "url"],
      includeScore: true,
      threshold: 0.3,
    });
  
    const result = fuse.search(keyword);
    return result.map((item) => ({
      score: item.score,
      item: item.item,
    }));
  }
  
  const data = [
    { title: "Điều Khoản & Điều Kiện", url: "dieukhoandieukien.html" },
    { title: "Liên Hệ", url: "lienhe.html" },
    {title: "About Us", url: "aboutus.htmml"},
    {title: "Chính Sách Bảo Đảm", url: "baodam.html"},
    {title: "Chính Sách Bảo Mật", url: "csbm.html"},
    {title: "Cửa Hàng", url: "shop.html"},
    {title: "Trang Chủ", url: "index.html"},
    {title: "Đăng Nhập", url: "login.html"},
    {title: "Đăng Ký", url: "register.html"},
    {title: "Sản Phẩm Giảm Giá", url: "Sale off.html"},
    {title: "Ưu Đãi Tài Chính", url: "taichinh.html"},
    {title: "Phương Thức Thanh Toán", url: "thanhtoan.html"},
    // Các mục dữ liệu khác
  ];
  
  document.addEventListener('DOMContentLoaded', function() {
    let isSearchInputOpen = false;
    const searchInput = document.getElementById('searchInput');
  
    function toggleSearchInput() {
      isSearchInputOpen = !isSearchInputOpen;
  
      if (isSearchInputOpen) {
        searchInput.classList.add('active');
        searchInput.focus();
      } else {
        searchInput.classList.remove('active');
        searchInput.value = ''; // Xóa nội dung của ô tìm kiếm
      }
    }
  
    function performSearch() {
      const searchTerm = searchInput.value.trim(); // Lấy giá trị từ ô tìm kiếm và loại bỏ khoảng trắng ở đầu và cuối
      const searchResult = searchKeyword(searchTerm, data);
      
      if (searchResult.length > 0) {
        // Lấy kết quả đầu tiên và chuyển hướng đến URL tương ứng
        window.location.href = searchResult[0].item.url;
      } else {
        alert('Không tìm thấy kết quả nào.');
      }
    }
  
    document.getElementById('searchButton').addEventListener('click', function() {
      if (!isSearchInputOpen) {
        toggleSearchInput();
      } else {
        performSearch();
      }
    });
  
    searchInput.addEventListener('keyup', function(event) {
      if (event.key === 'Enter') {
        performSearch();
      }
    });
  
    searchInput.addEventListener('focus', function() {
      isSearchInputOpen = true;
      searchInput.classList.add('active');
    });
  
    searchInput.addEventListener('blur', function() {
      isSearchInputOpen = false;
      if (searchInput.value === '') {
        searchInput.classList.remove('active');
      }
    });
  
    searchInput.addEventListener('click', function() {
      toggleSearchInput();
    });
  });
  