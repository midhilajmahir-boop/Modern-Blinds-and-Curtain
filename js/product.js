const productData = {

    curtains: [
        "Luxury Fabric Curtains",
        "Blackout Curtains",
        "Sheer Curtains",
        "Modern Eyelet Curtains",
        "Printed Curtains",
        "Velvet Curtains",
        "Cotton Curtains",
        "Designer Curtains",
        "Living Room Curtains",
        "Bedroom Curtains",
        "Elegant Panel Curtains",
        "Linen Curtains",
        "Luxury Wave Curtains",
        "Modern Window Curtains",
        "Custom Design Curtains"
    ],

    blinds: [
        "Roller Blinds",
        "Roman Blinds",
        "Vertical Blinds",
        "Venetian Blinds",
        "Zebra Blinds",
        "Wooden Blinds",
        "Bamboo Blinds",
        "Blackout Blinds",
        "Motorized Blinds",
        "Office Blinds",
        "Day and Night Blinds",
        "Pleated Blinds",
        "Panel Blinds",
        "Modern Window Blinds",
        "Custom Design Blinds"
    ]

};

const category = document.body.dataset.category;
const productGrid = document.getElementById("productGrid");

if (productGrid && productData[category]) {

    productData[category].forEach((product, index) => {

        const message = encodeURIComponent(
            `Hello, I am interested in ${product}. Please share more details.`
        );

        const card = document.createElement("div");

        card.className = "product-card";

        card.innerHTML = `
            <div class="product-placeholder">
                <span>${String(index + 1).padStart(2, "0")}</span>
                <p>Product Image Coming Soon</p>
            </div>

            <div class="product-info">
                <h3>${product}</h3>

                <a href="https://wa.me/919495290093?text=${message}"
                   target="_blank"
                   class="text-link">
                    Enquire Now <span>→</span>
                </a>
            </div>
        `;

        productGrid.appendChild(card);

    });

}