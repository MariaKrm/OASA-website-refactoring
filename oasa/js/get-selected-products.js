/* 

JAVASCRIPT by: Maria Karamina (sdi1600059)

*/


function getProducts() {
	var selects = document.getElementsByClassName("buy-select");
	var quantities = document.getElementsByClassName("buy-quantity");
	var products = [];
	for(var i=0; i<selects.length; i++) {
		var option = selects[i].options[selects[i].selectedIndex];
		products[i] = [option.value, option.title, quantities[i].value, option.getAttribute("data-price") * quantities[i].value];
	}

	return products;
}

function getProductsAsString() {
  var selects = document.getElementsByClassName("buy-select");
  var quantities = document.getElementsByClassName("buy-quantity");
  var products = "{";
  for(var i=0; i<selects.length; i++) {
    var option = selects[i].options[selects[i].selectedIndex];
    products += "^" + option.value + "^:^" + quantities[i].value + "^";
    if(i != selects.length-1){
      products += ",";
    }
  }
  products += "}";

  return products;
}

function clearTable() {
	var rows = document.getElementsByClassName("inserted-table-row").length;
	var table = document.getElementById("products-table");
	for(var i=0; i<rows; i++) {
		table.deleteRow(1);
	}
}

function getProductsTable() {
	clearTable();
	var products = getProducts();
	var table = document.getElementById("products-table");
	for(var i=0; i<products.length; i++) {
		var row = table.insertRow(-1);
		row.classList.add("inserted-table-row");
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		cell1.innerHTML = products[i][1];
		cell2.innerHTML = products[i][2];
		cell3.innerHTML = Math.round(products[i][3] * 100) / 100;
	}
	getTotal(products);
}

function getTotal(products) {
	var total = 0;
	for(var i=0; i<products.length; i++) {
		total += products[i][3];
	}
	document.getElementById("total-price").innerHTML = Math.round(total * 100) / 100 + "€";
}
