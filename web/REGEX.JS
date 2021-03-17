
/* ==================Regex================== */


let product_name = document.querySelector("body > div > main > div > div > form > div.user-details > div.form-box > div:nth-child(1) > input[type=text]");
let product_category = document.querySelector("body > div > main > div > div > form > div.user-details > div.form-box > div:nth-child(2) > input[type=text]");
let product_quantity = document.querySelector("body > div > main > div > div > form > div.user-details > div.form-box > div:nth-child(3) > input[type=number]");
let product_price = document.querySelector("body > div > main > div > div > form > div.user-details > div.form-box > div:nth-child(4) > input[type=number]");
let product_description = document.querySelector("#description");
let addButton = document.querySelector("body > div > main > div > div > form > div.button > input.submit");




addButton.addEventListener('click', () => {
  event.preventDefault();
  if (!/^\w+$/.test(product_name.value)) {
    alert('produit invalid');
    return;
  }

  if (!/^[A-Za-z]+$/.test(product_category.value)) {
    alert('categor invalid');
    return;
  }

  if (!/^\d+$/.test(product_quantity.value)) {
    alert('quantity invalid');
    return;
  }

  if (!/^\d+(\.\d{2})?$/.test(product_price.value)) {
    alert('price invalid');
    return;
  }

  if (!/^\w+$/.test(product_description.value)) {
    alert('description invalid');
    return;
  }
});