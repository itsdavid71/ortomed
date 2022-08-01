let cart = [];
let cartTotal = 0;
const cartDom = document.querySelector(".cart");
const cartCount = document.querySelector(".header-cart-count");
const descriptionInput = document.querySelector(".description_form");
function cartCountFunc(cart) {
  let count = cart.length;
  if (count > 0) {
    cartCount.innerText = count;
    cartCount.style.display = "flex";
  } else {
    cartCount.style.display = "none";
  }
}
function goToOrder() {
  let descriptionStr = "";
  cart.forEach((cartItem) => {
    console.log(cartItem);
    descriptionStr = `${descriptionStr} ${cartItem.name} (кол-во: ${cartItem.quantity}) | `;
  });
  descriptionInput.value = descriptionStr.replace(/(\r\n|\n|\r)/gm, "");
}
let cartCountNum = 0;
// let getCart = Cookies.get("cart");
// console.log(getCart);
// if (getCart !== "" && getCart !== "[]") {
//   cart = JSON.parse(getCart);
//   console.log(cart);

//   cart.forEach((cartItem) => {
//     cartDom.insertAdjacentHTML(
//       "beforeend",
//       `
//             <div class="d-flex flex-row shadow-sm card cart-items mt-2 mb-3 animated flipInX">
//                 <div class="p-2">
//                     <img src="${cartItem.img}" alt="${cartItem.name}" style="max-width: 50px;"/>
//                 </div>
//                 <div class="p-2">
//                     <p class="text-info cart_item_name">${cartItem.name}</p>
//                 </div>
//                 <div class="p-2">
//                     <p class="text-success cart_item_price">${cartItem.price}</p>
//                 </div>
//                 <div class="p-2 ml-auto">
//                     <button class="btn badge badge-secondary" type="button" data-action="increase-item">&plus;
//                 </div>
//                 <div class="p-2">
//                 <p class="text-success cart_item_quantity">${cartItem.quantity}</p>
//                 </div>
//                 <div class="p-2">
//                 <button class="btn badge badge-info" type="button" data-action="decrease-item">&minus;
//                 </div>
//                 <div class="p-2">
//                 <button class="btn badge badge-danger" type="button" data-action="remove-item">Удалить
//                 </div>
//             </div> `
//     );
//   });
// } else {
//   Cookies.set("cart", JSON.stringify(cart));
// }

const addtocartbtnDom = document.querySelectorAll(
  '[data-action="add-to-cart"]'
);

addtocartbtnDom.forEach((addtocartbtnDom) => {
  addtocartbtnDom.addEventListener("click", () => {
    const productDom = addtocartbtnDom.parentNode.parentNode;
    const product = {
      img: productDom.querySelector(".product-img").getAttribute("src"),
      name: productDom.querySelector(".product-name").innerText,
      price: productDom.querySelector(".product-price").innerText,
      quantity: 1,
    };

    const IsinCart =
      cart.filter((cartItem) => cartItem.name === product.name).length > 0;
    if (IsinCart === false) {
      cartDom.insertAdjacentHTML(
        "beforeend",
        `
        <div class="d-flex flex-row shadow-sm card cart-items mt-2 mb-3 animated flipInX">
            <div class="p-2">
                <img src="${product.img}" alt="${product.name}" style="max-width: 100px;"/>
            </div>
            <div class="p-2">
                <p class="text-info cart_item_name">${product.name}</p>
            </div>
            <div class="p-2">
                <p class="text-success cart_item_price">${product.price}</p>
            </div>
            <div class="p-2 ml-auto">
                <button class="badge badge-secondary" type="button" data-action="increase-item"><i class="bi bi-plus-circle"></i>
            </div>
            <div class="p-2">
            <p class="text-success cart_item_quantity">${product.quantity}</p>
            </div>
            <div class="p-2">
            <button class="badge badge-info" type="button" data-action="decrease-item"><i class="bi bi-dash-circle"></i>
            </div>
            <div class="p-2">
                <button class="badge badge-danger" type="button" data-action="remove-item"><i class="bi bi-x-circle"></i>
            </div>
        </div> `
      );

      if (document.querySelector(".cart-footer") === null) {
        cartDom.insertAdjacentHTML(
          "afterend",
          `
      <div class="d-flex flex-row shadow-sm card cart-footer mt-2 mb-3 animated flipInX">
        <div class="p-2">
          <button class="btn badge-danger clear-cart" type="button" data-action="clear-cart"><i class="bi bi-trash"></i> Очистить корзину
        </div>
        <div class="p-2 ml-auto">
          <p class="badge-dark">Общая сумма: <b class="pay"></b> 
        </div>
      </div>`
        );
      }

      addtocartbtnDom.innerText = "В корзине";
      addtocartbtnDom.dataset.bsToggle = "modal";
      addtocartbtnDom.dataset.bsTarget = "#cartModal";
      addtocartbtnDom.classList.add("go_to_cart");
      cart.push(product);
      Cookies.set("cart", JSON.stringify(cart));

      cartCountFunc(cart);

      const cartItemsDom = cartDom.querySelectorAll(".cart-items");
      cartItemsDom.forEach((cartItemDom) => {
        if (
          cartItemDom.querySelector(".cart_item_name").innerText ===
          product.name
        ) {
          cartTotal +=
            parseInt(
              cartItemDom.querySelector(".cart_item_quantity").innerText
            ) *
            parseInt(cartItemDom.querySelector(".cart_item_price").innerText);
          document.querySelector(".pay").innerText = cartTotal + " руб.";

          // increase item in cart
          cartItemDom
            .querySelector('[data-action="increase-item"]')
            .addEventListener("click", () => {
              cart.forEach((cartItem) => {
                Cookies.set("cart", JSON.stringify(cart));
                if (cartItem.name === product.name) {
                  cartItemDom.querySelector(".cart_item_quantity").innerText =
                    ++cartItem.quantity;
                  cartItemDom.querySelector(".cart_item_price").innerText =
                    parseInt(cartItem.quantity) * parseInt(cartItem.price) +
                    " руб.";
                  cartTotal += parseInt(cartItem.price);
                  document.querySelector(".pay").innerText =
                    cartTotal + " руб.";
                }
              });
              cartCountFunc(cart);
            });

          // decrease item in cart
          cartItemDom
            .querySelector('[data-action="decrease-item"]')
            .addEventListener("click", () => {
              cart.forEach((cartItem) => {
                Cookies.set("cart", JSON.stringify(cart));

                if (cartItem.name === product.name) {
                  if (cartItem.quantity > 1) {
                    cartItemDom.querySelector(".cart_item_quantity").innerText =
                      --cartItem.quantity;
                    cartItemDom.querySelector(".cart_item_price").innerText =
                      parseInt(cartItem.quantity) * parseInt(cartItem.price) +
                      " руб.";
                    cartTotal -= parseInt(cartItem.price);
                    document.querySelector(".pay").innerText =
                      cartTotal + " руб.";
                  }
                }
              });
              cartCountFunc(cart);
            });

          //remove item from cart
          cartItemDom
            .querySelector('[data-action="remove-item"]')
            .addEventListener("click", () => {
              cart.forEach((cartItem) => {
                Cookies.set("cart", JSON.stringify(cart));

                if (cartItem.name === product.name) {
                  cartTotal -= parseInt(
                    cartItemDom.querySelector(".cart_item_price").innerText
                  );
                  document.querySelector(".pay").innerText =
                    cartTotal + " руб.";
                  cartItemDom.remove();
                  cart = cart.filter(
                    (cartItem) => cartItem.name !== product.name
                  );
                  addtocartbtnDom.innerText = "Добавить в корзину";
                  addtocartbtnDom.disabled = false;
                  addtocartbtnDom.dataset.bsToggle = "";
                  addtocartbtnDom.dataset.bsTarget = "";
                  addtocartbtnDom.classList.remove("go_to_cart");
                }
                if (cart.length < 1) {
                  document.querySelector(".cart-footer").remove();
                }
              });
              cartCountFunc(cart);
            });

          //clear cart
          document
            .querySelector('[data-action="clear-cart"]')
            .addEventListener("click", () => {
              cartItemDom.remove();
              cart = [];
              cartTotal = 0;
              Cookies.set("cart", JSON.stringify(cart));

              if (document.querySelector(".cart-footer") !== null) {
                document.querySelector(".cart-footer").remove();
              }
              addtocartbtnDom.innerText = "Добавить в корзину";
              addtocartbtnDom.disabled = false;
              addtocartbtnDom.dataset.bsToggle = "";
              addtocartbtnDom.dataset.bsTarget = "";
              addtocartbtnDom.classList.remove("go_to_cart");
              cartCountFunc(cart);
            });

          document
            .querySelector('[data-action="check-out"]')
            .addEventListener("click", () => {
              if (document.getElementById("paypal-form") === null) {
                checkOut();
              }
            });
        }
      });
    }
  });
});

function animateImg(img) {
  img.classList.add("animated", "shake");
}

function normalImg(img) {
  img.classList.remove("animated", "shake");
}
