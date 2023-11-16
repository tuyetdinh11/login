function locVaSapXepSanPham() {
    let sortOrder = document.getElementById("sort-order").value;
    let categoryFilter = document.getElementById("category-filter").value;
    let items = document.querySelectorAll(".item-sale-off");

    items.forEach((item) => {
        let itemCategory = item.getAttribute("data-category");
        let itemPrice = parseFloat(item.getAttribute("data-price"));

        let isVisible = true;

        if (categoryFilter !== "tat-ca" && itemCategory !== categoryFilter) {
            isVisible = false;
        }

        if (isVisible) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    });

    if (sortOrder === "cao-den-thap") {
        let sortedItems = Array.from(items).sort((a, b) => {
            return parseFloat(b.getAttribute("data-price")) - parseFloat(a.getAttribute("data-price"));
        });
        let productContainer = document.getElementById("productContainer");
        productContainer.innerHTML = "";
        sortedItems.forEach((item) => {
            productContainer.appendChild(item);
        });
    } else if (sortOrder === "thap-den-cao") {
        let sortedItems = Array.from(items).sort((a, b) => {
            return parseFloat(a.getAttribute("data-price")) - parseFloat(b.getAttribute("data-price"));
        });
        let productContainer = document.getElementById("productContainer");
        productContainer.innerHTML = "";
        sortedItems.forEach((item) => {
            productContainer.appendChild(item);
        });
    }
}
